<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User; 
use App\Models\Setting;
use App\Models\Price;
use App\Models\Transaction;
use App\Models\Matchingincome;
use App\Models\Withdrawal;
use Response;
use Auth;
use PhpParser\Builder\Trait_;
use Session;
class AdminController extends Controller
{
    public function admin() {
      if(Auth::user()){
        Auth::logout();
      }
      return view('admin.login');
    }
     
    public function adminLogin(Request $request ) {
        $formData      = $request->all();
        $findCheck     = User::where("wallet_address",$formData['wallet_address'])->first();
        if($findCheck){
            if($findCheck->status !=1){
                Session::flash('message', 'Your are blocked'); 
                Session::flash('alert-class', 'alert-danger');
                return redirect()->route('admin');
            }
            Auth::loginUsingId($findCheck->id);
            
            if ( Auth::check() ) {
                $session_id = Session::getId();
                User::where("id",$findCheck->id)->update( ["session_id"=>$session_id] );
                Session::flash('message', 'Login successfully'); 
                Session::flash('alert-class', 'alert-success');
                return redirect()->route('adminDashboard');
            }else{
                Session::flash('message', 'Login details are mismatched'); 
                Session::flash('alert-class', 'alert-danger');
                return redirect()->route('admin');
            }

                            
        }else{
            Session::flash('message', 'Wallet address not matched'); 
            Session::flash('alert-class', 'alert-danger');
            return redirect()->route('admin');
        }
    } 

    public function adminDashboard() { 
        if(Auth::user() && Auth::user()->id==1){
            $totalUser       = User::select("id")->where("id",">",1)->count();            
            $usdDeposit      = Transaction::select("amount")->where("trans",0)->sum("amount");
            $withdrawalAmt   = Withdrawal::where("status","Success" )->sum("amount"); 
            return view('admin.dashboard', compact('usdDeposit','totalUser','withdrawalAmt') );
        }else{
            Session::flash('message', 'You are not a valid user.'); 
            Session::flash('alert-class', 'alert-danger');
            return redirect()->route('admin');
        }
        
    }   
    
    public function userlist() { 
        if(Auth::user() && Auth::user()->id==1){
            $query          = User::where("id",">",1);
            $position       = "";
            $status         = "";
            if(isset($_GET['position']) && !empty($_GET['position'])){
                $position      = $_GET['position'];
                $query->where("position",$position);
            }
            if(isset($_GET['status']) && !empty($_GET['status'])){
                $status        = $_GET['status'];
                if($status=="Active"){
                    $query->where("packageAmt",">",0);
                }else{
                    $query->where("packageAmt",0);
                }
            }
            $userlist       = $query->get();

            
            return view('admin.userlist', compact('userlist','position','status') );
        }else{
            Session::flash('message', 'You are not a valid user.'); 
            Session::flash('alert-class', 'alert-danger');
            return redirect()->route('admin');
        }
        
    }  
    public function depositlist() { 
        if(Auth::user() && Auth::user()->id==1){

            $depositlist      = Transaction::where("trans",0)->get();
            return view('admin.depositlist', compact('depositlist') );
        }else{
            Session::flash('message', 'You are not a valid user.'); 
            Session::flash('alert-class', 'alert-danger');
            return redirect()->route('admin');
        }
        
    } 
    public function referralIncome() { 
        if(Auth::user() && Auth::user()->id==1){

            $referralList      = Transaction::where("trans",3)->get();
            return view('admin.referralIncome', compact('referralList') );
        }else{
            Session::flash('message', 'You are not a valid user.'); 
            Session::flash('alert-class', 'alert-danger');
            return redirect()->route('admin');
        }
        
    } 
    public function roiIncome() { 
        if(Auth::user() && Auth::user()->id==1){

            $roiList      = Transaction::where("trans",1)->get();
            return view('admin.roiIncome', compact('roiList') );
        }else{
            Session::flash('message', 'You are not a valid user.'); 
            Session::flash('alert-class', 'alert-danger');
            return redirect()->route('admin');
        }
        
    }
    public function levelIncome() { 
        if(Auth::user() && Auth::user()->id==1){

            $roiList      = Transaction::where("trans",2)->get();
            return view('admin.levelIncome', compact('roiList') );
        }else{
            Session::flash('message', 'You are not a valid user.'); 
            Session::flash('alert-class', 'alert-danger');
            return redirect()->route('admin');
        }
        
    }
    
    public function incentiveIncome() { 
        if(Auth::user() && Auth::user()->id==1){

            $roiList      = Transaction::where("trans",4)->get();
            return view('admin.royalIncome', compact('roiList') );
        }else{
            Session::flash('message', 'You are not a valid user.'); 
            Session::flash('alert-class', 'alert-danger');
            return redirect()->route('admin');
        }
        
    }
    
    public function withdrawalIncome() { 
        if(Auth::user() && Auth::user()->id==1){

            $roiList      = Withdrawal::get();
            return view('admin.withdrawalIncome', compact('roiList') );
        }else{
            Session::flash('message', 'You are not a valid user.'); 
            Session::flash('alert-class', 'alert-danger');
            return redirect()->route('admin');
        }
        
    } 
    public function profile() { 
        if(Auth::user() && Auth::user()->id==1){
            $settings = Setting::where("id",1)->first();
            return view('admin.profile', compact('settings') );
        }else{
            Session::flash('message', 'You are not a valid user.'); 
            Session::flash('alert-class', 'alert-danger');
            return redirect()->route('admin');
        }        
    } 
    public function saveProfile(Request $request) { 
        $formData     = $request->all();
        if(Auth::user() && Auth::user()->id==1){
            Setting::where("id",1)->update([ 
                "TOTAL_INVEST"=>$formData['TOTAL_INVEST'],
                "REGISTER_MEMBER"=>$formData['REGISTER_MEMBER'],
                "TOTAL_WITH"=>$formData['TOTAL_WITH']
            ]);
            return redirect()->route('profile');
        }else{
            Session::flash('message', 'You are not a valid user.'); 
            Session::flash('alert-class', 'alert-danger');
            return redirect()->route('admin');
        }        
    }

    public function setPrice() { 
        if(Auth::user() && Auth::user()->id==1){
            $prices = Price::where("id",1)->first();
            return view('admin.setprice', compact('prices') );
        }else{
            Session::flash('message', 'You are not a valid user.'); 
            Session::flash('alert-class', 'alert-danger');
            return redirect()->route('admin');
        }        
    }
    public function updatePrice(Request $request) { 
        $formData     = $request->all();
        if(Auth::user() && Auth::user()->id==1){
            Price::where("id",1)->update([ 
                "tokenValue"=>$formData['tokenValue']
            ]);
            return redirect()->route('set-price');
        }else{
            Session::flash('message', 'You are not a valid user.'); 
            Session::flash('alert-class', 'alert-danger');
            return redirect()->route('admin');
        }        
    } 

    function userBusinesss($userId,$businessPosition){
        $bussiness   = 0;
        $findUser    = User::select("binary_str")->where("binaryParent",$userId)->where("position",$businessPosition)->first();
        if($findUser){
          $binary_str  = $findUser['binary_str'];
          $bussiness   = Transaction::select("amount")->where("trans",0)->whereIn('user_id', function($query) use ($binary_str)
                                  {
                                      $query->select("id")
                                            ->from('users')
                                            ->where("binary_str","like",$binary_str."%");
                                  })->sum("amount");
        }
        return $bussiness;
      }
    
     
}