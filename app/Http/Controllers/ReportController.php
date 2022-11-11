<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Setting;
use App\Models\Transaction;
use App\Models\Withdrawal;
use App\Models\Matchingincome;
use Response;
use Auth;
use PhpParser\Builder\Trait_;
use Session;
use Illuminate\Support\Carbon;
class ReportController extends Controller
{

    public function roiReport() {
        if( (Auth::user()) && (Session::getId()==Auth::user()->session_id)  ){
        $user_id         = Auth::user()->id;
        $userData        = User::where("id",$user_id)->first();
        $transactions    = Transaction::where("user_id",$user_id)->where("trans",1)->orderBy("id","DESC")->get();
        $settings        = Setting::where("id",1)->first();
        return view('roiReport',compact('userData','transactions',"settings" ) );
        }else{
        return redirect('/');
        }
    }

    public function referralReport() {
        if( (Auth::user()) && (Session::getId()==Auth::user()->session_id)  ){
        $user_id         = Auth::user()->id;
        $userData        = User::where("id",$user_id)->first();
        $transactions    = Transaction::where("user_id",$user_id)->where("trans",3)->orderBy("id","DESC")->get();
        $settings        = Setting::where("id",1)->first();
        return view('referralReport',compact('userData','transactions',"settings" ) );
        }else{
        return redirect('/');
        }
    }

    public function incentiveReport() {
        if( (Auth::user()) && (Session::getId()==Auth::user()->session_id)  ){
        $user_id         = Auth::user()->id;
        $userData        = User::where("id",$user_id)->first();
        $transactions    = Transaction::where("user_id",$user_id)->where("trans",4)->orderBy("id","DESC")->get();
        $settings        = Setting::where("id",1)->first();
        return view('incentiveReport',compact('userData','transactions',"settings" ) );
        }else{
        return redirect('/');
        }
    }

    // public function levelReport() {
    //     if( (Auth::user()) && (Session::getId()==Auth::user()->session_id)  ){
    //     $user_id         = Auth::user()->id;
    //     $userData        = User::where("id",$user_id)->first();
    //     $transactions    = Transaction::where("user_id",$user_id)->where("trans",2)->orderBy("id","DESC")->get();
    //     $settings        = Setting::where("id",1)->first();
    //     return view('levelReport',compact('userData','transactions',"settings" ) );
    //     }else{
    //     return redirect('/');
    //     }
    // }

    public function withdrawalReport() {
        if( (Auth::user()) && (Session::getId()==Auth::user()->session_id)  ){
        $user_id         = Auth::user()->id;
        $userData        = User::where("id",$user_id)->first();
        $transactions    = Withdrawal::where("user_id",$user_id)->orderBy("id","DESC")->get();
        $settings        = Setting::where("id",1)->first();
        return view('withdrawalReport',compact('userData','transactions',"settings" ) );
        }else{
        return redirect('/');
        }
    }

    function network(){
		$userData     = Auth::user();
        $user_id      = $userData['id'];
        $level_str   = $userData['level_str'];

        $levelArr    = [];
        $userArr    = [];
        $addStrin    = "+[0-9]+,";
        $addStrin1   = "";
        $teamSize     = User::select("id")->where("id",">",$user_id)->where("level_str","LIKE", $level_str."%")->get();

        for($i=1;$i<=count($teamSize); $i++){
            $addStrin1  .= $addStrin;
            $levelCnt    = User::select("id")->whereRaw(" level_str REGEXP '^".$level_str.$addStrin1."$'")->count();
            $username    = User::select("registerId")->whereRaw(" level_str REGEXP '^".$level_str.$addStrin1."$'")->first();
            array_push( $levelArr,$levelCnt);
            array_push( $userArr,$username['registerId']);
        }

        $teamBusiness = Transaction::select("amount")->whereIn("user_id",$teamSize)->where("trans",0)->sum("amount");
        $totalUser    = [];///User::select("id","registerId","parent_id","created_at","parent_str","fname","lname")->where("id","!=",$user_id)->where("parent_str","LIKE",$userData['parent_str']."%")->get();
        return view('network', compact('userData',"teamSize","teamBusiness","levelArr","totalUser","userArr"));
    }

}
