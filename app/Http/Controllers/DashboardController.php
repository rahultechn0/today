<?php
namespace App\Http\Controllers;

use App\Models\Currency;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Price;
use App\Models\Package;
use App\Models\Setting;
use App\Models\Transaction;
use App\Models\Metarequest;
use App\Models\Withdrawal;
use App\Models\Packages;
use App\Models\Matchingincome;
use App\Models\Rank;
use Response;
use Auth;
use FFI;
use GuzzleHttp\Promise\Create;
use PhpParser\Builder\Trait_;
use Session;
use Illuminate\Support\Carbon;
class DashboardController extends Controller
{

    public function logout(Request $request) {
      Auth::logout();
      $request->session()->invalidate();
      $request->session()->regenerateToken();
      return redirect('/');
    }
    public function checkUser(Request $request ) {
      $data      = $request->all();
      $findCheck = User::where("wallet_address",$data['wallet_address'])->count();
      if($findCheck==1){
          $userData       = Auth::user();
          if( $userData->wallet_address != $data['wallet_address'] ){
            Auth::logout();
            $request->session()->invalidate();
            $request->session()->regenerateToken();
            return Response::json(array('type' => "error", 'msg'   => "user error 2" ));
          }else{
            return Response::json(array('type' => "success", 'msg'   => "user error 3" ));
          }
      }else{
          return Response::json(array('type' => "error", 'msg'   => "user error 1" ));
      }
    }
    public function users() {
        if( (Auth::user()) && (Session::getId()==Auth::user()->session_id)  ){
          $user_id         = Auth::user()->id;
          $userData        = User::where("id",$user_id)->first();
          $farmingWithda   = Withdrawal::whereIN("status",["Pending","Success"])->where("trans",1)->where("user_id",$user_id)->sum("amount");
          $farmingIncome   = 0;
          $userInvest      = 0;
          $investData      = Transaction::where("user_id",$user_id)->where("trans",0)->get();
          foreach($investData as $key => $inv){
            $userInvest   += $inv['amount'];
            $today         = date("Y-m-d");
            $to            = \Carbon\Carbon::createFromFormat('Y-m-d', $inv['planExpiryDate']);
            $from          = \Carbon\Carbon::createFromFormat('Y-m-d', date("Y-m-d",strtotime($inv['created_at'])));
            $diff_in_month = $to->diffInMonths($from);
            ///echo $diff_in_month."</br>";
            $multiplier    = 1;
            if($diff_in_month==12){
              $multiplier  = 1.5;
            }else if($diff_in_month==18){
              $multiplier  = 2;
            }else if($diff_in_month ==24){
              $multiplier  = 3;
            }
            if( $today >= $inv['planExpiryDate'] ){
              $farmingIncome+= $inv['amount']*$multiplier;
              $investData[$key]['packageComplete'] =1;
            }else{
              $investData[$key]['packageComplete'] =0;
            }

          }
          $latestPackage =Transaction::where("user_id",$user_id)->where('trans', 0)->get();

          foreach ($latestPackage as $key=>$pack)
          {
            $totalRoi =Transaction::where('from_package',$pack->id)->where('trans',1)->sum('amount');
            $latestPackage[$key]['total_roi'] = $totalRoi;
          }
          $currencyList  = Currency::get();
          $level_str   = $userData['level_str'];
          //team size
          $teamSize = User::select("id")->where("id",">",$user_id)->where("level_str","LIKE", $level_str."%")->get();

          $levelIncomes = Transaction::where('user_id',$user_id)->where('trans',2)->get();

          $farmingIncome   = $farmingIncome-$farmingWithda;
          //stacking dividend
          $userRoi         = Transaction::where("user_id",$user_id)->where("trans",1)->sum("amount");
          //level income
        //   $userLevel       = Transaction::where("user_id",$user_id)->where("trans",2)->sum("amount");
          //DIrect income
          $userReferral    = Transaction::where("user_id",$user_id)->where("trans",3)->sum("amount");
          //incentive income
          $UnstackAmt       = Transaction::where("user_id",$user_id)->where("trans",4)->sum("amount");
          $matchingIncome  = Matchingincome::where("user_id",$user_id)->sum("amount");
          $totalWithdrawal = Withdrawal::whereIN("status",["Pending","Success"])->where("trans",0)->where("user_id",$user_id)->sum("amount");
          $totalIncome     = $userRoi+/* $userLevel +*/$userReferral+$matchingIncome+$UnstackAmt;

          $grnadTotal      = $totalIncome - $totalWithdrawal;
          $settings        = Setting::where("id",1)->first();
          $priceData       = Price::where("id",1)->first();
          $packages        = Package::where("status",1)->get();

          $levelTrans      = Transaction::select('type')->where("user_id",$user_id)->where("trans",2)->groupBy('type')->selectRaw('sum(amount) as amount, type')->get()
            ;

          //Level user count
          $level_str   = $userData->level_str;
          $levelArr    = [];
          $addStrin    = "+[0-9]+,";
          $addStrin1   = "";
          for($i=1;$i<11; $i++){
            $addStrin1  .= $addStrin;
            $levelCnt    = User::whereRaw(" level_str REGEXP '^".$level_str.$addStrin1."$'")->count();
            array_push( $levelArr,$levelCnt);
          }
          return view('users',compact('levelArr','levelTrans','settings','packages','farmingIncome','priceData','userData',/* 'userLevel', "incentiveIncome",*/'userInvest','userRoi','userReferral','totalIncome','grnadTotal','totalWithdrawal','matchingIncome','investData','latestPackage', 'levelIncomes' ,'teamSize','currencyList' ) );
        }else{
          return redirect('/');
        }
    }
    public function packageAct() {
        if( (Auth::user()) && (Session::getId()==Auth::user()->session_id)  ){
          $user_id         = Auth::user()->id;
          $userData        = User::where("id",$user_id)->first();
          $farmingWithda   = Withdrawal::whereIN("status",["Pending","Success"])->where("trans",1)->where("user_id",$user_id)->sum("amount");
          $farmingIncome   = 0;
          $userInvest      = 0;
          $investData      = Transaction::where("user_id",$user_id)->where("trans",0)->get();
          foreach($investData as $key => $inv){
            $userInvest   += $inv['amount'];
            $today         = date("Y-m-d");
            $to            = \Carbon\Carbon::createFromFormat('Y-m-d', $inv['planExpiryDate']);
            $from          = \Carbon\Carbon::createFromFormat('Y-m-d', date("Y-m-d",strtotime($inv['created_at'])));
            $diff_in_month = $to->diffInMonths($from);
            ///echo $diff_in_month."</br>";
            $multiplier    = 1;
            if($diff_in_month==12){
              $multiplier  = 1.5;
            }else if($diff_in_month==18){
              $multiplier  = 2;
            }else if($diff_in_month ==24){
              $multiplier  = 3;
            }
            if( $today >= $inv['planExpiryDate'] ){
              $farmingIncome+= $inv['amount']*$multiplier;
              $investData[$key]['packageComplete'] =1;
            }else{
              $investData[$key]['packageComplete'] =0;
            }

          }
          $latestPackage =Transaction::where("user_id",$user_id)->where('trans', 0)->get();

          foreach ($latestPackage as $key=>$pack)
          {
            $totalRoi =Transaction::where('from_package',$pack->id)->where('trans',1)->sum('amount');
            $latestPackage[$key]['total_roi'] = $totalRoi;
          }
          $currencyList  = Currency::get();
          $level_str   = $userData['level_str'];
          //team size
          $teamSize = User::select("id")->where("id",">",$user_id)->where("level_str","LIKE", $level_str."%")->get();

          $levelIncomes = Transaction::where('user_id',$user_id)->where('trans',2)->get();

          $farmingIncome   = $farmingIncome-$farmingWithda;
          //stacking dividend
          $userRoi         = Transaction::where("user_id",$user_id)->where("trans",1)->sum("amount");
          //level income
        //   $userLevel       = Transaction::where("user_id",$user_id)->where("trans",2)->sum("amount");
          //DIrect income
          $userReferral    = Transaction::where("user_id",$user_id)->where("trans",3)->sum("amount");
          //incentive income
          $UnstackAmt       = Transaction::where("user_id",$user_id)->where("trans",4)->sum("amount");
          $matchingIncome  = Matchingincome::where("user_id",$user_id)->sum("amount");
          $totalWithdrawal = Withdrawal::whereIN("status",["Pending","Success"])->where("trans",0)->where("user_id",$user_id)->sum("amount");
          $totalIncome     = $userRoi+/* $userLevel +*/$userReferral+$matchingIncome+$UnstackAmt;

          $grnadTotal      = $totalIncome - $totalWithdrawal;
          $settings        = Setting::where("id",1)->first();
          $priceData       = Price::where("id",1)->first();
          $packages        = Package::where("status",1)->get();

          $levelTrans      = Transaction::select('type')->where("user_id",$user_id)->where("trans",2)->groupBy('type')->selectRaw('sum(amount) as amount, type')->get()
            ;

          //Level user count
          $level_str   = $userData->level_str;
          $levelArr    = [];
          $addStrin    = "+[0-9]+,";
          $addStrin1   = "";
          for($i=1;$i<11; $i++){
            $addStrin1  .= $addStrin;
            $levelCnt    = User::whereRaw(" level_str REGEXP '^".$level_str.$addStrin1."$'")->count();
            array_push( $levelArr,$levelCnt);
          }
          return view('package',compact('levelArr','levelTrans','settings','packages','farmingIncome','priceData','userData',/* 'userLevel', "incentiveIncome",*/'userInvest','userRoi','userReferral','totalIncome','grnadTotal','totalWithdrawal','matchingIncome','investData','latestPackage', 'levelIncomes' ,'teamSize','currencyList' ) );
        }else{
          return redirect('/');
        }
    }

    public function checkPackageRequest(Request $request) {
        $data           = $request->all();
        $wallet_address = $data['wallet_address'];
        //$pId            = $data['pId'];
        $amount         = $data['amount'];

        $priceData      = Price::where("id",1)->first();

        $minAmt         = 30;

        if($amount < $minAmt){
            return Response::json(array('type' => "error", 'msg'   => "Minimum amount error" ));
        }
        $checkUser = User::select("id")->where("status",1)->where("wallet_address",$wallet_address)->first();


        if($checkUser){
            $user_id      = $checkUser->id;
            $checkDays    = Metarequest::select('id')->where('trans_type',"Package invest")->where("user_id",$user_id)->where("status","Pending")->first();
            if($checkDays){
                return Response::json(array('type' => "error", 'msg'   => "Check package error 4" ));
            }else{
                $oldPackage  = Transaction::select("id","amount")->where("trans",0)->where("user_id",$user_id)->orderBy("id","ASC")->first();
                if($oldPackage ){
                    /*if($oldPackage['amount'] >= $amount){
                        return Response::json(array('type' => "error", 'msg'   => "Check package error 5" ));
                    }*/
                }
                return Response::json(array('type' => "success", 'msg'   => "go","tokenAmt"=> (int)$amount/$priceData['tokenValue'], "amount"=> $amount) );

            }

      }else{
        return Response::json(array('type' => "error", 'msg'   => "Check package error 3" ));
      }
    }
    public function addPackageRequest(Request $request) {

      $data           = $request->all();
    // $trans_id       = $data['trans_id'];
      $trans_id       = rand(100000000,999999999);
      $amount         = $data['amount'];
      $wallet_address = $data['wallet_address'];
    // $usdAmt         = $data['usdAmt'];
      $usdAmt         = 3000;
      $currency_id         = $data['currency_id'];
    // $pId            = $data['pId'];
      $checkUser      = User::select("id")->where("status",1)->where("wallet_address",$wallet_address)->first();
      if($checkUser){
        $user_id      = $checkUser['id'];
        $transCheck    = Transaction::select("id")->where("trans_id",$trans_id)->count();
        if($transCheck==0){
          $MetaArr     = array('trans_type'=> "Package invest",'wallet_address'=>$wallet_address,'user_id'=>$user_id,'tokenAmt'=>$amount,'amount'=>$usdAmt,'trans_id'=>$trans_id,"status"=>"Pending",'currency_id'=>$currency_id );
          Metarequest::create($MetaArr);
          return Response::json(array('type' => "success", 'msg'   => "Success" ));
        }else{
            return Response::json(array('type' => "error", 'msg'   => "Package error 1" ));
        }

      }else{
        return Response::json(array('type' => "error", 'msg'   => "Package error 3" ));
      }
    }

    public function package()
    {
        $packages = Package::get();
        return view('users',compact('packages'));
    }

    public function matchingIncome() {

        $userRecords     = User::select()->where("id",">",1)->where("packageAmt",">",0)->get();
        foreach( $userRecords as $key=>$user){

        $id			  = $user['id'];
        $num_left       = 0;
        $num_right      = 0;
        $left_business  = 0;
        $right_business = 0;
        $matching = 0;
        $reward = 0;

        $leftCount     = User::where("levelParent",$id)->where("position",1)->count();
        $rightCount    = User::where("levelParent",$id)->where("position",2)->count();

        if( $leftCount >=1 && $rightCount>=1 ){
            //------------- left downline
            $ld       = User::where("levelParent",$id)->where("position",1)->first();

            if( $ld ) {
                $parent_left_str	=	$ld['level_str'];
                $num_left	        =	User::where("level_str","like",$parent_left_str."%")->count();


                $left_business    = Transaction::where("trans",0)->whereIn('user_id', function($query) use ($parent_left_str)
                                    {
                                        $query->select("id")
                                            ->from('users')
                                            ->where("level_str","like",$parent_left_str."%");
                                    })->sum("amount");
                                  dump("Left",$left_business);

            }
            //------------- Right downline
            $rd       = User::where("levelParent",$id)->where("position",2)->first();
            if( $rd ) {
                $parent_right_str	=	$rd['level_str'];
                $num_right        =	User::where("level_str","like",$parent_right_str."%")->count();
                $right_business   = Transaction::where("trans",0)->whereIn('user_id', function($query) use ($parent_right_str)
                                    {
                                        $query->select("id")
                                            ->from('users')
                                            ->where("level_str","like",$parent_right_str."%");
                                    })->sum("amount");
                                    dump("Right",$right_business);
            }

            //check Matching

            $count =0;
            $checkRank = Transaction::where('user_id',$id)->where('rank',10)->count();

                if(($left_business >=5000 && $left_business < 15000) && ($right_business >=5000 && $right_business < 15000)){
                $matching = 5000;
                $rewardAmt = 100;
                $rank = 10;
                $count =1;
            }
            elseif (($left_business >=15000 && $left_business < 65000) && ($right_business >=15000 && $right_business < 65000)) {
                if ($checkRank != 0) {
                $matching = 15000;
                $rewardAmt = 200;
                $rank = 9;
                $count =2;
                }else{
                $matching = 15000;
                $rewardAmt = 200;
                $rank = 9;
                // $count =1;
                }

            }elseif (($left_business >=650000 && $left_business < 165000) && ($right_business >=50000 && $right_business < 100000)) {

                if ($checkRank != 0) {
                    $matching = 50000;
                $rewardAmt = 800;
                $rank = 8;
                $count =3;
                    }else{
                    $matching = 50000;
                    $rewardAmt = 800;
                    $rank = 8;
                    // $count =1;
                    }

            }// elseif (($left_business >=100000 && $left_business < 200000) && ($right_business >=100000 && $right_business < 200000)) {
            //     $matching = 100000;
            //     $reward = 1000;
            // }


            }

            $matchAmt = Rank::orderBy('id','DESC')->get();

            if ($count >=1) {
                for ($i=0; $i < $count; $i++) {
                    $rankData = $matchAmt[$i];
                    $rank = $rankData['id'];
                    $reward = $rankData['reward'];
                 Transaction::create( ["rank"=>$rank ,"trans"=>5,"type"=>"Matching Rewards", "user_id"=>$id,"amount"=>$reward]);
                }
            }else{
                Transaction::create( ["rank"=>$rank ,"trans"=>5,"type"=>"Matching Rewards", "user_id"=>$id,"amount"=>$reward]);
            }
        }

    }

    public function unstack(Request $request)
    {
        $data      = $request->all();
        $amount   = $data['amt'];
        $trans   = $data['trans'];
        $user_id       = Auth::user()->id;
        $ustAmt = $amount * 0.3;
        $ustAmt = $amount - $ustAmt;

        $newTransArr     = array("user_id" => $user_id,"amount" => $ustAmt,"trans" => $trans, "type" => "unstack");
        Transaction::create($newTransArr);
        Transaction::select('trans')->where('user_id', $user_id)->where("trans",0)->update(["trans" => 10]);

        User::select('packageAmt')->where('id', $user_id)->update(['packageAmt' => 0]);
        return Response::json(array('type' => "success", 'msg'   => "Success" ));
    }

    public function withRe(Request $request){
      $today         = date("Y-m-d");
      $data          = $request->all();
      $amt           = $data['amt'];
      $wallet        = $data['wallet_address'];
      $trans         = $data['trans'];
      $userData      = Auth::user();
      $user_id       = Auth::user()->id;
      $settings      = Setting::where("id",1)->first();
      if( (Auth::user()) && (Session::getId()==Auth::user()->session_id)  ){
        $withRequest     = Withdrawal::where("user_id",$user_id)->where("status","Pending")->count();
        if($withRequest >0 ){
          return Response::json(array('type' => "error",'msg'   => "Withdrwal error 3" ));
        }
        if($trans ==1){
          $farmingWithda   = Withdrawal::whereIN("status",["Pending","Success"])->where("trans",1)->where("user_id",$user_id)->sum("amount");
          $farmingIncome   = 0;
          $investData      = Transaction::where("user_id",$user_id)->where("trans",0)->get();
          foreach($investData as $key => $inv){
            $to            = \Carbon\Carbon::createFromFormat('Y-m-d', $inv['planExpiryDate']);
            $from          = \Carbon\Carbon::createFromFormat('Y-m-d', date("Y-m-d",strtotime($inv['created_at'])));
            $diff_in_month = $to->diffInMonths($from);
            $multiplier    = 1;
            if($diff_in_month==12){
              $multiplier  = 1.5;
            }else if($diff_in_month==18){
              $multiplier  = 2;
            }else if($diff_in_month ==24){
              $multiplier  = 3;
            }
            if( $today >= $inv['planExpiryDate'] ){
              $farmingIncome+= $inv['amount']*$multiplier;
            }
          }
          $totalIncome     = $farmingIncome;
          $doneWithamt     = $farmingWithda;
        }else{
          $totalIncome     = User::WithdrawaableIncome($user_id);
          $doneWithamt     = Withdrawal::whereIN("status",["Pending","Success"])->where("user_id",$user_id)->where("trans",0)->sum("amount");
        }
        $withAmtDB       = (int)($totalIncome-$doneWithamt);

        if($wallet != $userData->wallet_address){
          return Response::json(array('type' => "error",'msg'   => "Withdrwal error 1" ));
        }
        if($withAmtDB < 1 ){
          return Response::json(array('type' => "error",'msg'   => "Withdrwal error 2" ));
        }
        $priceData    = Price::where("id",1)->first();
        $withAmt      = (int)$withAmtDB;
        //$tokenAmt     = (int)($withAmt*$priceData['tokenValue']);
        $tokenAmt     = $withAmt;
        $postFields   = array("wallet_address"=>$wallet,"amount"=>$tokenAmt,"tokenAddress"=>$settings['TOKEN_ADDRESS']);
        $passValue    = json_encode($postFields);
        $curl         = curl_init();
        curl_setopt_array($curl, array(
          CURLOPT_URL => $settings['WITHDRAWAL_API'],
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING => '',
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_TIMEOUT => 0,
          CURLOPT_FOLLOWLOCATION => true,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_CUSTOMREQUEST => 'POST',
          CURLOPT_POSTFIELDS => $passValue,
          CURLOPT_HTTPHEADER => array(
          'Content-Type: application/json'
          ),
        ));
        $response  = curl_exec($curl);
        $curl_response = $response;
        $response  = json_decode($response);
        if($response->success==true)
        {
            Withdrawal::create( [ "trans"=>$trans, "user_id"=>$user_id,"amount"=>$withAmt,"trans_id"=>$response->data,"status"=>"Pending"] );
            return Response::json(array('type' => "success",'msg'   => "withdrawal successfully."));
        }else{
            return Response::json(array('type' => "error",'msg'   => "Withdrwal amount not set." ));
        }

      }else{
        return Response::json(array('type' => "error",'msg'   => "Please login first.." ));
      }
    }
    public function withupdate() {
      $requestData     = Withdrawal::select("amount","id","trans_id","user_id","curl_response","checkCount")->where("status","Pending")->where("checkCount","<",6)->get();
      foreach( $requestData as $key=>$trans){
        $id          = $trans->id;
        $user_id     = $trans->user_id;
        $trans_id    = $trans->trans_id;
        $amount      = $trans->amount;
        $curl_response= $trans->curl_response;
        $checkCount  = $trans->checkCount;

        $curl           = curl_init();
        curl_setopt_array($curl, array(
          CURLOPT_URL => env('TRON_API_URL'),
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING => '',
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_TIMEOUT => 0,
          CURLOPT_FOLLOWLOCATION => true,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_CUSTOMREQUEST => 'POST',
          CURLOPT_POSTFIELDS =>'{"value": "'.$trans_id.'"}',
          CURLOPT_HTTPHEADER => array(
          'Content-Type: application/json'
          ),
        ));
        $response       = curl_exec($curl);
        curl_close($curl);
        $responseDecode = json_decode($response,true);
        $curl_response  = $curl_response.",".$response;

        $status       = "";
        if(isset($responseDecode["ret"][0]["contractRet"]) && !empty($responseDecode["ret"][0]["contractRet"]) ){
          $status       = $responseDecode["ret"][0]["contractRet"];
        }
        //Request Update
        if(empty($responseDecode)){
          Withdrawal::where("id",$id)->update( ["status"=>"Pending","checkCount"=>($checkCount+1), "curl_response"=>$curl_response] );
        }
        else if(isset($responseDecode["Error"]) && !empty($responseDecode["Error"])){
          Withdrawal::where("id",$id)->update( ["status"=>"Pending","checkCount"=>($checkCount+1), "curl_response"=>$curl_response] );
        }
        else if($status != "SUCCESS"){
          Withdrawal::where("id",$id)->update( ["status"=>"Pending","checkCount"=>($checkCount+1), "curl_response"=>$curl_response] );
        }else {
          Withdrawal::where("id",$id)->update( ["status"=>"Success","checkCount"=>($checkCount+1), "curl_response"=>$curl_response] );
        }
      }
      Withdrawal::where("status","Pending",)->where("checkCount",6)->update( ["amount"=>0,"status"=>"Failed"] );
    }
    function userBusinesss($userId,$businessPosition){
      $bussiness   = 0;
      $findUser    = User::where("binaryParent",$userId)->where("position",$businessPosition)->first();
      if($findUser){
        $binary_str  = $findUser['binary_str'];
        $bussiness   = Transaction::where("trans",0)->whereIn('user_id', function($query) use ($binary_str)
                                {
                                    $query->select("id")
                                          ->from('users')
                                          ->where("binary_str","like",$binary_str."%");
                                })->sum("amount");
      }
      return $bussiness;
    }
    public function userTree(Request $request ) {
      $formData       = $request->all();
      $user_id        = $formData['user_id'];
      $selfData_1     = User::select("id","packageAmt","wallet_address","registerId","created_at")->where("id",$user_id)->first();
      $leftuser       = User::where("binaryParent",$user_id)->where("position","Left")->first();
      $rightuser      = User::where("binaryParent",$user_id)->where("position","Right")->first();
      $leftCount      = 0 ;
      $rightCount     = 0 ;
      $self_left_bussiness   = 0;
      $self_right_bussiness  = 0;
      $left_left_bussiness   = 0;
      $left_right_bussiness  = 0;
      $left_total_bussiness  = 0;

      $right_left_bussiness   = 0;
      $right_right_bussiness  = 0;
      $right_total_bussiness  = 0;

      $left_1_left_bussiness   = 0;
      $left_1_right_bussiness  = 0;
      $left_1_total_bussiness  = 0;

      $leftData      = array();
      $left_left_Data      = array();
      $left_right_Data      = array();
      $rightData     = array();

      $right_left_Data  = array();
      $right_right_Data  = array();
      //Left Team
      if($leftuser){
        $self_left_binary_str  = $leftuser['binary_str'];
        $leftCount    = User::where("binary_str","like",$leftuser['binary_str']."%")->count();


        $self_left_bussiness   = Transaction::where("trans",0)->whereIn('user_id', function($query) use ($self_left_binary_str)
                                      {
                                          $query->select("id")
                                                ->from('users')
                                                ->where("binary_str","like",$self_left_binary_str."%");
                                      })->sum("amount");
        ///first left business calculation
        $left_left_bussiness  =  $this->userBusinesss($leftuser['id'],"Left");
        $left_right_bussiness =  $this->userBusinesss($leftuser['id'],"Right");
        $left_total_bussiness  = $left_left_bussiness+$left_right_bussiness;


        $leftData     = array("left_id"=>$leftuser['id'],
                      "left_amount"=>$leftuser['packageAmt'],
                      "left_created_at"=>date("Y-m-d",strtotime($leftuser['created_at'])),
                      "wallet_address"=>$leftuser['wallet_address'],
                      "registerId"=>$leftuser['registerId'],
                      "left_left_bussiness"=>$left_left_bussiness,
                      "left_right_bussiness"=>$left_right_bussiness,
                      "left_total_bussiness"=>$left_total_bussiness
                    );

        $left_left_user_found        = User::where("binaryParent",$leftuser['id'])->where("position","Left")->first();
        if($left_left_user_found){
            ///first left-1 business calculation
            $left_1_left_bussiness   =  $this->userBusinesss($left_left_user_found['id'],"Left");
            $left_1_right_bussiness  =  $this->userBusinesss($left_left_user_found['id'],"Right");
            $left_1_total_bussiness  = $left_1_left_bussiness+$left_1_right_bussiness;
            $left_left_Data          = array("left_id"=>$left_left_user_found['id'],
                                        "left_amount"=>$left_left_user_found['packageAmt'],
                                        "left_created_at"=>date("Y-m-d",strtotime($left_left_user_found['created_at'])),
                                        "wallet_address"=>$left_left_user_found['wallet_address'],
                                        "registerId"=>$left_left_user_found['registerId'],
                                        "left_left_bussiness"=>$left_1_left_bussiness,
                                        "left_right_bussiness"=>$left_1_right_bussiness,
                                        "left_total_bussiness"=>$left_1_total_bussiness
                                      );
        }
        $left_right_user_found       = User::where("binaryParent",$leftuser['id'])->where("position","Right")->first();
        if($left_right_user_found){
            ///first left-1 business calculation
            $left_2_left_bussiness   =  $this->userBusinesss($left_right_user_found['id'],"Left");
            $left_2_right_bussiness  =  $this->userBusinesss($left_right_user_found['id'],"Right");
            $left_2_total_bussiness  = $left_2_left_bussiness+$left_2_right_bussiness;
            $left_right_Data         = array("left_id"=>$left_right_user_found['id'],
                                        "left_amount"=>$left_right_user_found['packageAmt'],
                                        "left_created_at"=>date("Y-m-d",strtotime($left_right_user_found['created_at'])),
                                        "wallet_address"=>$left_right_user_found['wallet_address'],
                                        "registerId"=>$left_right_user_found['registerId'],
                                        "left_left_bussiness"=>$left_2_left_bussiness,
                                        "left_right_bussiness"=>$left_2_right_bussiness,
                                        "left_total_bussiness"=>$left_2_total_bussiness
                                      );
        }
      }
      //Right Team
      if($rightuser){
        $self_right_binary_str = $rightuser['binary_str'];
        $self_right_bussiness  = Transaction::where("trans",0)->whereIn('user_id', function($query) use ($self_right_binary_str)
                                    {
                                        $query->select("id")
                                              ->from('users')
                                              ->where("binary_str","like",$self_right_binary_str."%");
                                    })->sum("amount");
        $rightCount    = User::where("binary_str","like",$rightuser['binary_str']."%")->count();


        ///first Right business
        $right_left_bussiness  =  $this->userBusinesss($rightuser['id'],"Left");
        $right_right_bussiness =  $this->userBusinesss($rightuser['id'],"Right");
        $right_total_bussiness  = $right_left_bussiness+$right_right_bussiness;


        $rightData    = array("left_id"=>$rightuser['id'],
                      "right_amount"=>$rightuser['packageAmt'],
                      "right_created_at"=>date("Y-m-d",strtotime($rightuser['created_at'])),
                      "wallet_address"=>$rightuser['wallet_address'],
                      "registerId"=>$rightuser['registerId'],
                      "right_left_bussiness"=>$right_left_bussiness,
                      "right_right_bussiness"=>$right_right_bussiness,
                      "right_total_bussiness"=>$right_total_bussiness
                    );

        $right_left_user_found        = User::where("binaryParent",$rightuser['id'])->where("position","Left")->first();
        if($right_left_user_found){
            ///first left-1 business calculation
            $right_1_left_bussiness   =  $this->userBusinesss($right_left_user_found['id'],"Left");
            $right_1_right_bussiness  =  $this->userBusinesss($right_left_user_found['id'],"Right");
            $right_1_total_bussiness  = $right_1_left_bussiness+$right_1_right_bussiness;
            $right_left_Data          = array("left_id"=>$right_left_user_found['id'],
                                        "left_amount"=>$right_left_user_found['packageAmt'],
                                        "left_created_at"=>date("Y-m-d",strtotime($right_left_user_found['created_at'])),
                                        "wallet_address"=>$right_left_user_found['wallet_address'],
                                        "registerId"=>$right_left_user_found['registerId'],
                                        "left_left_bussiness"=>$right_1_left_bussiness,
                                        "left_right_bussiness"=>$right_1_right_bussiness,
                                        "left_total_bussiness"=>$right_1_total_bussiness
                                      );
        }
        $right_right_user_found       = User::where("binaryParent",$rightuser['id'])->where("position","Right")->first();
        if($right_right_user_found){
            ///first left-1 business calculation
            $right_2_left_bussiness   =  $this->userBusinesss($right_right_user_found['id'],"Left");
            $right_2_right_bussiness  =  $this->userBusinesss($right_right_user_found['id'],"Right");
            $right_2_total_bussiness  = $right_2_left_bussiness+$right_2_right_bussiness;
            $right_right_Data         = array("left_id"=>$right_right_user_found['id'],
                                        "left_amount"=>$right_right_user_found['packageAmt'],
                                        "left_created_at"=>date("Y-m-d",strtotime($right_right_user_found['created_at'])),
                                        "wallet_address"=>$right_right_user_found['wallet_address'],
                                        "registerId"=>$right_right_user_found['registerId'],
                                        "left_left_bussiness"=>$right_2_left_bussiness,
                                        "left_right_bussiness"=>$right_2_right_bussiness,
                                        "left_total_bussiness"=>$right_2_total_bussiness
                                      );
        }

      }
      $self_total_bussiness  = $self_left_bussiness+$self_right_bussiness;
      $selfData       = array("self_id"=>$selfData_1['id'], "self_amount"=>$selfData_1['packageAmt'], "self_created_at"=>date("Y-m-d",strtotime($selfData_1['created_at'])),"wallet_address"=>$selfData_1['wallet_address'],"registerId"=>$selfData_1['registerId'],"leftCount"=>$leftCount,"rightCount"=>$rightCount,"self_left_bussiness"=>$self_left_bussiness,"self_right_bussiness"=>$self_right_bussiness,"self_total_bussiness"=>$self_total_bussiness);

      $data           = array("selfData"=>$selfData,"leftCount"=>$leftCount,"rightCount"=>$rightCount,"leftData"=>$leftData,"rightData"=>$rightData,"left_left_Data"=>$left_left_Data,"left_right_Data"=>$left_right_Data,"right_left_Data"=>$right_left_Data,"right_right_Data"=>$right_right_Data);
      return Response::json(array('type' => "success", 'data' => $data ));
    }





    public function binaryCron() {
        $userRecords     = User::select()->where("id",">",1)->where("packageAmt",">",0)->get();
        foreach( $userRecords as $key=>$user){

                  $id				      =	$user['id'];
                  $matching_point = 0;
                  $num_left       = 0;
                  $num_right      = 0;
                  $left_business  = 0;
                  $right_business = 0;
                  $matching       = 0;
                  $capping=0;
                  $business=0;
                  $newLeftCarrry=0;
                  $newRightCarry=0;
                  $binary_income=0;
                  $left_point=0;
                  $right_point=0;
                  $new_maching_point=0;
                  $income=0;

          $leftCount     = User::where("levelParent",$id)->where("position","Left")->count();
          $rightCount    = User::where("levelParent",$id)->where("position","Right")->count();
          ///echo "Left count:".$leftCount." right count ".$rightCount;
          if( $leftCount >=1 && $rightCount>=1 ){
              //------------- left downline
              $ld       = User::where("levelParent",$id)->where("position","Left")->first();
              if( $ld ) {
                  $parent_left_str	=	$ld['binary_str'];
                  $num_left	        =	User::where("binary_str","like",$parent_left_str."%")->count();
                  $left_business    = Transaction::where("trans",0)->whereIn('user_id', function($query) use ($parent_left_str)
                                      {
                                          $query->select("id")
                                                ->from('users')
                                                ->where("binary_str","like",$parent_left_str."%");
                                      })->sum("amount");
              }
              //------------- Right downline
              $rd       = User::where("levelParent",$id)->where("position","Right")->first();
              if( $rd ) {
                  $parent_right_str	=	$rd['binary_str'];
                  $num_right        =	User::where("binary_str","like",$parent_right_str."%")->count();
                  $right_business   = Transaction::where("trans",0)->whereIn('user_id', function($query) use ($parent_right_str)
                                      {
                                          $query->select("id")
                                                ->from('users')
                                                ->where("binary_str","like",$parent_right_str."%");
                                      })->sum("amount");
              }
              //echo " Left business ".$left_business." right business".$right_business;
            //   if($num_left<$num_right){
            //     $matching_point = $num_right;

            //   }else{
            //     $matching_point = $num_left;
            //   }
            //   echo $matching_point;
            //   if($left_business<$right_business){
            //     $matching = $left_business;
            //   }else{
            //     $matching = $right_business;
            //   }
              if(($left_business >=5000 && $left_business < 10000) && ($right_business >=5000 && $right_business < 10000)){
                    $matching = 5000;
               }elseif (($left_business >=10000 && $left_business < 50000) && ($right_business >=10000 && $right_business < 50000)) {
                  $matching = 10000;

                }elseif (($left_business >=50000 && $left_business < 100000) && ($right_business >=50000 && $right_business < 100000)) {
                  $matching = 50000;

                }elseif (($left_business >=100000 && $left_business < 200000) && ($right_business >=100000 && $right_business < 200000)) {
                  $matching = 100000;
                }

            //   echo $matching;
              if($matching>0){
                  $amount	   	  =	$user['packageAmt'];
                  $package_id	  = $user['packageId'];
                  $packageData  = Package::where("id",$package_id)->first();
                  //print_r($packageData);
                  if($packageData){
                    $binary_per	= 7;
                    $capping	  = $packageData['maxBinary'];
                    ///print_r($capping);die("hello");
                    $lastMatchingIncome  = Matchingincome::where("user_id",$id)->where("type","Matching Income")->orderBy("id","DESC")->first();
                    if( $lastMatchingIncome ){

                      $last_left_point	  	  = $lastMatchingIncome['left_point'];
                      $last_right_point		    = $lastMatchingIncome['right_point'];
                      /*
                      $last_matching_point	  = $lastMatchingIncome['matching_point'];
                      $last_left_business		  = $lastMatchingIncome['left_business'];
                      $last_right_business	  = $lastMatchingIncome['right_business'];
                      $last_matching_business	= $lastMatchingIncome['matching_business'];
                      */

                      $lftB	                  = $lastMatchingIncome['total_left'];
                      $rghtB	                = $lastMatchingIncome['total_right'];
                      $left_point		          =	$num_left-$last_left_point;
                      $right_point	          =	$num_right-$last_right_point;
                      $new_left_business	    =	$left_business-$lftB;
                      // "<br>";
                      $new_right_business    	=	$right_business-$rghtB;
                      //echo "<br>";
                      $carry_left		          = $lastMatchingIncome['carry_left'];
                      $carry_right	          = $lastMatchingIncome['carry_right'];
                      $LeftBusiness	          = $new_left_business+$carry_left;
                      //echo "<br>";
                      $RightBusiness         	= $new_right_business+$carry_right;

                      if($LeftBusiness<$RightBusiness){
                        $business = $LeftBusiness;
                      }else{
                        $business = $RightBusiness;
                      }
                      $newLeftCarrry          = $LeftBusiness-$business;
                      $newRightCarry          = $RightBusiness-$business;
                      $binary_income          = $business*$binary_per/100;

                      if($binary_income>$capping){
                        $income               = $capping;
                      }else{
                        $income               = $binary_income;
                      }
                      $noncapping_income      = $binary_income-$income;
                      if($left_point>$right_point){
                        $new_maching_point=$right_point;
                      }else{
                        $new_maching_point=$left_point;
                      }
                      ///echo $income;die;
                      if($income>0){
                        Matchingincome::create( [
                          "type"=>"Matching Income",
                          "amount"=>$income,
                          "user_id"=>$id,
                          "left_point"=>$left_point,
                          "right_point"=>$right_point,
                          "matching_point"=>$new_maching_point,
                          "left_business"=>$new_left_business,
                          "right_business"=>$new_right_business,
                          "matching_business"=>$business,
                          "total_left"=>$left_business,
                          "total_right"=>$right_business,
                          "carry_left"=>$newLeftCarrry,
                          "carry_right"=>$newRightCarry,
                          "noncapping_income"=>$noncapping_income
                        ] );

                      }

                    }else{
                      $binary_income       = $matching*$binary_per/100;
                      if($binary_income>$capping){
                        $income = $capping;
                      }else{
                        $income = $binary_income;
                      }
                      if($income>0){
                        $carry_left        = $left_business-$matching;
                        $carry_right       = $right_business-$matching;
                        $noncapping_income = $binary_income-$income;
                        ///echo " carry_left".$carry_left." carry_right".$carry_right;
                        Matchingincome::create( [
                          "type"=>"Matching Income",
                          "amount"=>$income,
                          "user_id"=>$id,
                          "left_point"=>$num_left,
                          "right_point"=>$num_right,
                          "matching_point"=>$matching_point,
                          "left_business"=>$left_business,
                          "right_business"=>$right_business,
                          "matching_business"=>$matching,
                          "total_left"=>$left_business,
                          "total_right"=>$right_business,
                          "carry_left"=>$carry_left,
                          "carry_right"=>$carry_right,
                          "noncapping_income"=>$noncapping_income
                        ] );
                      }
                    }
                  }
              }
          }
        }
      }

   }
