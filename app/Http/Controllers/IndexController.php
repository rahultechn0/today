<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Price;
use App\Models\Setting;
use App\Models\Transaction;
use App\Models\Metarequest;
use App\Models\Withdrawal;
use App\Models\Olduser;
use Response;
use Auth;
use PhpParser\Builder\Trait_;
use Session;
class IndexController extends Controller
{
    public function index() {
      if(Auth::user()){
        Auth::logout();
      }
      $settings           = Setting::where("id",1)->first();
      $last_ten_records   = Withdrawal::where("status",["Success","Pending"])->orderBy("id","DESC")->skip(0)->take(10)->get();
      return view('frontend.index',compact('settings','last_ten_records'));
    }

    public function ido() {
      return view('ido');
    }
    public function idoAdmin() {
      return view('idoadmin');
    }

    function getBinaryPosition($position,$levelParent){
      ///echo $levelParent." position ".$position;die;
      $res    = User::where("binaryParent",$levelParent)->where("position",$position)->first();
      if($res){
          $id = $res['id'];
          return $this->getBinaryPosition($position,$id);
      }else{
          return $levelParent;
      }
    }

    function registerFrm(Request $request){
        ///return Response::json(array('type' => "danger", 'msg' => "Our team working on this. Please try after some time." ));
        $formData   = $request->all();
        $wallet_address = $formData['wallet_address'];
        $registerId     = $formData['registerId'];
        $position     = $formData['position'];
        $referralCheck  = User::select("id")->where("packageAmt",">",0)->where("registerId",$registerId)->count();
        if($referralCheck==0){
            return Response::json(array('type' => "danger", 'msg' => "Sponsor Id not activated." ));
        }
        $walletCheck    = User::select("id")->where("wallet_address",$wallet_address)->count();
        if($walletCheck==1){
            return Response::json(array('type' => "danger", 'msg' => "Wallet address already registered." ));
        }

        $referralData   = User::select("id","level_str","binary_str")->where("registerId",$registerId)->first();
        $levelParent    = $referralData->id;
        $level_str      = $referralData->level_str;
        //Genrate referral id
        $new_registerId     = rand(10000000,99999999);
        $new_referralCheck  = User::select("id")->where("registerId",$new_registerId)->count();
        if($new_referralCheck !=0){
            $new_registerId = rand(10000000,99999999);
        }
        ///$binaryParent     = $this->getBinaryPosition($position,$levelParent);

        $insert           = User::create( ["levelParent"=>$levelParent, "wallet_address"=>$wallet_address, "registerId"=>$new_registerId, "levelParent"=>$levelParent ,"position"=>$position  ] );
        $userId           = $insert->id;
        ////Level str
        $new_level_str    = $level_str.$userId.",";
        ////Binary Str

        //$binaryData       = User::select("id","binary_str")->where("id",$binaryParent)->first();
        ///$new_binary_str   = $binaryData['binary_str'].$userId.",";


        User::where("id",$userId)->update( ["level_str" =>$new_level_str/*,"binaryParent"=>$binaryParent, "binary_str"=>$new_binary_str*/ ] );

        return Response::json(array('type' => "success", 'msg' => "Successfully registered." ));

    }

    public function updateTree($position=null,$registerId =null) {
        die;
        $users   = User::where("id",">",1)->skip(0)->take(500)->orderBy("id","ASC")->get();
        foreach( $users as $key=>$user ){
            $userId             = $user['id'];
            $levelParent        = $user['levelParent'];
            $position           = $user['position'];
            $binaryParent       = $user['binaryParent'];
            $binary_str         = $user['binary_str'];
            echo " <span style='color:red' >userId ::".$userId." position ".$position." before binary parent ".$binaryParent." binaryStr".$binary_str."</span>";

            $binaryParent     = $this->getBinaryPosition($position,$levelParent,$userId);


            $binaryData       = Olduser::select("id","binary_str")->where("id",$binaryParent)->first();
            $new_binary_str   = $binaryData['binary_str'].$userId.",";

            Olduser::create( ["id"=>$userId,
                              "wallet_address"=>$user['wallet_address'],
                              "registerId"=>$user['registerId'],
                              "levelParent"=>$user['levelParent'],
                              "level_str"=>$user['level_str'],
                              "packageId"=>$user['packageId'],
                              "packageAmt"=>$user['packageAmt'],
                              "status"=>$user['status'],
                              "created_at"=>$user['created_at'],
                              "position"=>$position,
                              "binaryParent"=>$binaryParent,
                              "binary_str"=>$new_binary_str
                            ] );

            echo " <span style='color:green' >after binary parent".$binaryParent." new_binary_str".$new_binary_str."</span>";
            echo "</br>";

        }
        echo "hell";

        die;
    }

    public function register($registerId =null) {
      if(Auth::user()){
        Auth::logout();
      }
      $settings           = Setting::where("id",1)->first();
      $last_ten_records   = Withdrawal::where("status",["Success","Pending"])->orderBy("id","DESC")->skip(0)->take(10)->get();
      return view('index',compact('registerId','settings','last_ten_records'));
    }

    public function info() {
      $totalInvest     = Transaction::where("trans",0)->where("type","Package invest")->sum("amount");
      $totalLevel      = Transaction::where("trans",1)->sum("amount");
      $priceData       = Price::select("trx",'usdt')->where("id",1)->first();
      $totalInvest     = $totalInvest+61000;
      $totalLevel      = $totalLevel+9201;
      return view('front.info',compact('priceData','totalInvest','totalLevel'));
    }

    public function login(Request $request ) {
        $data      = $request->all();
        $findCheck = User::where("wallet_address",$data['wallet_address'])->first();
        if($findCheck){
            if($findCheck->status !=1){
                return Response::json(array('type' => "error", 'msg'   => "User restricted" ));
            }
            Auth::loginUsingId($findCheck->id);
            $user    = Auth::user();
            $session_id = Session::getId();
            User::where("id",$user->id)->update( ["session_id"=>$session_id] );
            if($user->status != '1'){
                Auth::logout();
                return Response::json(array('type' => "error", 'msg'   => "Your are restricted." ));
            }
            else
            {
                return Response::json(array('type' => "success", 'msg'   => "successfully login" ));
            }
        }else{
            return Response::json(array('type' => "error", 'msg'   => "Wallet address not registered." ));
        }
    }
}
