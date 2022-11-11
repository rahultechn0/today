<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Price;
use App\Models\Package;
use App\Models\Setting;
use App\Models\Transaction;
use App\Models\Metarequest;
use App\Models\Withdrawal;
use App\Models\Packages;
use App\Models\Rewards;
use App\Models\Matchingincome;
use Response;
use DB;
use PhpParser\Builder\Trait_;
use Session;
use Illuminate\Support\Carbon;

class CronController extends Controller
{
    //invest verification and given referral income
    public function investCron()
    {

        $settings      = Setting::where("id", 1)->first();
        $requestData   = Metarequest::select("amount", "pLimit", "tokenAmt", "id", "trans_id", "user_id", "curl_response", "checkCount", "error_response", "dailyRoi", "days", "tariffId")->where("trans_type", "Package invest")->where("status", "Pending")->where("checkCount", "<", 6)->get();

        foreach ($requestData as $key => $trans) {
            $id          = $trans->id;
            $pLimit      = $trans->pLimit;
            $user_id     = $trans->user_id;
            $trans_id    = $trans->trans_id;
            $tokenAmt    = $trans->tokenAmt;
            $amount      = $trans->amount;
            $curl_response = $trans->curl_response;
            $error_response = $trans->error_response;
            $checkCount  = $trans->checkCount;
            $roi_per     = $trans->dailyRoi;
            $roi_max     = ($trans->days);
            $packageId   = $trans->tariffId;
            $userData    = User::select("id", "wallet_address", "levelParent", "packageAmt")->where("status", 1)->where("id", $user_id)->first();
            
            if ($userData) {
                $transCount = Transaction::select("id")->where("trans_id", $trans_id)->count();
                if ($transCount == 0) {

                    $wallet_address = $userData->wallet_address;

                    // $curl           = curl_init();
                    // curl_setopt_array($curl, array(
                    //     CURLOPT_URL => $settings['DEPOSIT_API'] . "?tx_id=" . $trans_id,
                    //     CURLOPT_RETURNTRANSFER => true,
                    //     CURLOPT_ENCODING => '',
                    //     CURLOPT_MAXREDIRS => 10,
                    //     CURLOPT_TIMEOUT => 0,
                    //     CURLOPT_FOLLOWLOCATION => true,
                    //     CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                    //     CURLOPT_CUSTOMREQUEST => 'GET',
                    //     CURLOPT_HTTPHEADER => array(
                    //         'Content-Type: application/json'
                    //     ),
                    // ));
                    // $response       = curl_exec($curl);

                    // curl_close($curl);
                    // $responseDecode = json_decode($response, true);

                    // $curl_response  = $curl_response . "," . $response;

                    // $status       = "";
                    // $callAmt      = 0;
                    // $contractAddr = "";
                    // $fromAddr     = "";

                    // if (isset($responseDecode["data"]["status"]) && !empty($responseDecode["data"]["status"])) {
                    //     $status       = $responseDecode["data"]["status"];
                    // }

                    // if (isset($responseDecode['data']['logs'][0]['data'])) {
                    //     $callAmt      = hexdec($responseDecode['data']['logs'][0]['data']);
                    //     $callAmt      = $callAmt / 10 ** 18;
                    // }
                    // ///echo "amount::".$amount." tokenAmt::".$tokenAmt." callAmt::".$callAmt;die;
                    // if (isset($responseDecode['data']['from'])) {
                    //     $fromAddr     = $responseDecode['data']['from'];
                    // }
                    // if (isset($responseDecode['data']['to'])) {
                    //     $contractAddr = $responseDecode['data']['to'];
                    // }

                    // ////Request Update
                    // if (empty($responseDecode)) {
                    //     $error_response  = $error_response . ", Empty Response";
                    //     Metarequest::where("id", $id)->update(["status" => "Pending", "checkCount" => ($checkCount + 1), "curl_response" => $curl_response, "error_response" => $error_response]);
                    // } else if (isset($responseDecode["Error"]) && !empty($responseDecode["Error"])) {
                    //     $error_response  = $error_response . ", Error in response";
                    //     Metarequest::where("id", $id)->update(["status" => "Pending", "checkCount" => ($checkCount + 1), "curl_response" => $curl_response, "error_response" => $error_response]);
                    // } else if ($status != "SUCCESS") {
                    //     $error_response  = $error_response . ", failed response";
                    //     Metarequest::where("id", $id)->update(["status" => "Pending", "checkCount" => ($checkCount + 1), "curl_response" => $curl_response, "error_response" => $error_response]);
                    // } else if ($contractAddr != $settings['CONTRACT_ADDRESS']) {
                    //     $error_response  = $error_response . ", Contract match error";
                    //     Metarequest::where("id", $id)->update(["status" => "Pending", "checkCount" => ($checkCount + 1), "curl_response" => $curl_response, "error_response" => $error_response]);
                    // } else if ((string)$callAmt != (string)$tokenAmt) {
                    //     $error_response  = $error_response . ", Amount matche error";
                    //     Metarequest::where("id", $id)->update(["status" => "Pending", "checkCount" => ($checkCount + 1), "curl_response" => $curl_response, "error_response" => $error_response]);
                    // } else {
                    //     $planExpiryDate  = date("Y-m-d", strtotime($pLimit));
                    //     ///Invest Entry
                    //     $newTransArr     = array("planExpiryDate" => $planExpiryDate, "packageId" => $packageId, "trans_id" => $trans_id, "user_id" => $user_id, "refrall_id" => 0, "amount" => $amount, "from_package" => 0, "roi_per" => $roi_per, "roi_max" => $roi_max, "roi_cnt" => 0, "trans" => 0, "type" => "Package invest");
                    //     $newEntry        = Transaction::create($newTransArr);
                    //     User::select('packageAmt')->where('id', $user_id)->update(['packageAmt' => $amount]);

                    //     $transId         = $newEntry->id;
                    //     ///Referral Entry

                    //     $parent_arr   = array();
                    //     $parent_per   = array(0.05, 0.01, 0.01);

                    //     $userParent = User::select("levelParent")->where("id", $user_id)->first();
                    //     if (!empty($userParent)) {
                    //         $referAMount     = $amount * 0.5;
                    //         Transaction::create(["user_id" => $userParent->levelParent, "refrall_id" => $user_id, "trans" => 3, "amount" => $referAMount, "from_package" => $id, "type" => "Referal Bonus"]);
                    //     }
                    //     ///User data update
                    //     // User::where("id",$user_id)->increment("packageAmt",$amount);
                    //     Metarequest::where("id", $id)->update(["status" => "Success", "checkCount" => ($checkCount + 1), "curl_response" => $curl_response]);
                    // }
                    $planExpiryDate  = date("Y-m-d", strtotime($pLimit));
                    ///Invest Entry
                    $newTransArr     = array("planExpiryDate" => $planExpiryDate, "packageId" => $packageId, "trans_id" => $trans_id, "user_id" => $user_id, "refrall_id" => 0, "amount" => $amount, "from_package" => 0, "roi_per" => $roi_per, "roi_max" => $roi_max, "roi_cnt" => 0, "trans" => 0, "type" => "Package invest");

                    $newEntry        = Transaction::create($newTransArr);
                    User::select('packageAmt')->where('id', $user_id)->update(['packageAmt' => $amount]);

                    $transId         = $newEntry->id;
                    ///Referral Entry

                    // $parent_arr   = array();
                    // $parent_per   = array(0.05, 0.01, 0.01);

                    $userParent = User::select("levelParent")->where("id", $user_id)->first();
                    if (!empty($userParent)) {
                        $referAMount     = $amount * 0.05;
                        Transaction::create(["user_id" => $userParent->levelParent, "refrall_id" => $user_id, "trans" => 3, "amount" => $referAMount, "from_package" => $id, "type" => "Referal Bonus"]);
                    }
                    ///User data update
                    // User::where("id",$user_id)->increment("packageAmt",$amount);
                    Metarequest::where("id", $id)->update(["status" => "Success", "checkCount" => ($checkCount + 1), "curl_response" => $curl_response]);
                } else {
                    $error_response  = $error_response . ", Duplicate transId";
                    Metarequest::where("id", $id)->update(["status" => "Pending", "checkCount" => ($checkCount + 1), "curl_response" => $curl_response, "error_response" => $error_response]);
                }
            } else {
                $error_response  = $error_response . ", User error";
                Metarequest::where("id", $id)->update(["status" => "Pending", "checkCount" => ($checkCount + 1), "curl_response" => $curl_response, "error_response" => $error_response]);
            }
        }
        Metarequest::where("trans_type", "Package invest")->where("status", "Pending")->where("checkCount", 6)->update(["status" => "Failed"]);
    }

    //devide roi to self user (cron runs daily bases)

    public function roiCron()
    {
        /* $date = Carbon::now()->subDays(30); */
        $requestData = Transaction::select('id', 'amount', 'user_id', 'roi_per', 'roi_cnt')->where('type', 'Package invest')->where('trans', '0')/*->where('created_at', '>=', $date)*/->get();
        foreach ($requestData as $trans) {
            $id = $trans->id;
            $amount = $trans->amount;
            $user_id = $trans->user_id;
            $roiCount = $trans->roi_cnt;
            // $roi_per = 1;
            // $roiAmt = ($amount * $roi_per) / 100;

            if (($amount >= 30) && ($amount <= 400)) {
                $roiAmt = ($amount * 0.06);
            } elseif (($amount >= 500) && ($amount <= 2000)) {
                $roiAmt = ($amount * 0.1);
            } elseif (($amount >= 3000) && ($amount <= 8000)) {
                $roiAmt = ($amount * 0.13);
            } elseif (($amount >= 10000) && ($amount <= 15000)) {
                $roiAmt = ($amount * 0.16);
            }

            $checkRoi = Transaction::where("trans", 1)->where("from_package", $id)->where("user_id", $user_id)->whereDate('created_at', Carbon::today())->count();
            if ($checkRoi == 0 && $roiCount <= 1440) {
                //roi given
                Transaction::create(["user_id" => $user_id, "trans" => 1, "amount" => $roiAmt, "from_package" => $id, "type" => "ROI"]);
                ///Update package invest transaction
                Transaction::where("id", $id)->increment("roi_cnt", 1);
            }
            //Level Income
            // $userInfo = User::where('id', $user_id)->first();

            // $parent_arr = array();
            // $parent_per = array(0.2, 0.1, 0.07, 0.05, 0.03, 0.01, 0.01, 0.01, 0.01, 0.01, 0.01, 0.01, 0.01, 0.01, 0.01);
            // if ($userInfo->levelParent) {
            //     $parent_id = $userInfo['levelParent'];
            //     $user         = User::select("level_str")->where("id", $parent_id)->first();
            //     if ($user) {
            //         $level_str = $user['level_str'];
            //         $array = array_reverse(explode(",", rtrim($level_str, ",")));
            //         $array_count = count($array);
            //         if ($array_count >= 15) {
            //             $array_count = 15;
            //         }
            //         for ($i = 0; $i < $array_count; $i++) {
            //             if ($array[$i] > 0) {
            //                 array_push($parent_arr, $array[$i]);
            //             }
            //         }
            //     }
            // }
            // foreach ($parent_arr as $key => $user) {
            //     if ($user > 0) {
            //         $levelAmt = $roiAmt * $parent_per[$key];
            //         Transaction::create(["user_id" => $user, "trans" => 2, "amount" => $levelAmt, "from_package" => $id, "type" => "Level-" . ($key + 1)]);
            //     }
            // }
        }
    }

    public function withupdate()
    {
        $settings      = Setting::where("id", 1)->first();
        $requestData   = Withdrawal::select("amount", "id", "trans_id", "user_id", "error_response", "curl_response", "checkCount")->where("status", "Pending")->skip(0)->take(10)->where("checkCount", "<", 6)->get();
        foreach ($requestData as $key => $trans) {
            $id          = $trans->id;
            $user_id     = $trans->user_id;
            $trans_id    = $trans->trans_id;
            $amount      = $trans->amount;
            $curl_response = $trans->curl_response;
            $error_response = $trans->error_response;
            $checkCount  = $trans->checkCount;

            $curl           = curl_init();
            curl_setopt_array($curl, array(
                CURLOPT_URL => $settings['DEPOSIT_API'] . "?tx_id=" . $trans_id,
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_ENCODING => '',
                CURLOPT_MAXREDIRS => 10,
                CURLOPT_TIMEOUT => 0,
                CURLOPT_FOLLOWLOCATION => true,
                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                CURLOPT_CUSTOMREQUEST => 'GET',
                CURLOPT_HTTPHEADER => array(
                    'Content-Type: application/json'
                ),
            ));
            $response       = curl_exec($curl);
            curl_close($curl);
            $responseDecode = json_decode($response, true);
            $curl_response  = $curl_response . "," . $response;


            $status       = "";
            $callAmt      = 0;
            $contractAddr = "";
            $fromAddr     = "";


            if (isset($responseDecode["data"]["status"]) && !empty($responseDecode["data"]["status"])) {
                $status       = $responseDecode["data"]["status"];
            }

            if (isset($responseDecode['data']['logs'][0]['data'])) {
                $callAmt      = hexdec($responseDecode['data']['logs'][0]['data']);
                $callAmt      = $callAmt / 10 ** 18;
            }
            if (isset($responseDecode['data']['from'])) {
                $fromAddr     = $responseDecode['data']['from'];
            }
            if (isset($responseDecode['data']['to'])) {
                $contractAddr = $responseDecode['data']['to'];
            }
            //echo "status::".$status." contractAddr::".$contractAddr." fromAddr::".$fromAddr." callAmt::".$callAmt ;die;
            ////Request Update

            ////Request Update
            if (empty($responseDecode)) {
                $error_response  = $error_response . ", Empty Response";
                Withdrawal::where("id", $id)->update(["status" => "Pending", "checkCount" => ($checkCount + 1), "curl_response" => $curl_response, "error_response" => $error_response]);
            } else if (isset($responseDecode["Error"]) && !empty($responseDecode["Error"])) {
                $error_response  = $error_response . ", Error in response";
                Withdrawal::where("id", $id)->update(["status" => "Pending", "checkCount" => ($checkCount + 1), "curl_response" => $curl_response, "error_response" => $error_response]);
            } else if ($status != "SUCCESS") {
                $error_response  = $error_response . ", failed response";
                Withdrawal::where("id", $id)->update(["status" => "Pending", "checkCount" => ($checkCount + 1), "curl_response" => $curl_response, "error_response" => $error_response]);
            } else if ($contractAddr != $settings['CONTRACT_ADDRESS']) {
                $error_response  = $error_response . ", Contract match error";
                Withdrawal::where("id", $id)->update(["status" => "Pending", "checkCount" => ($checkCount + 1), "curl_response" => $curl_response, "error_response" => $error_response]);
            } /*
        else if(  $callAmt!=$tokenAmt){
          $error_response  = $error_response.", Amount matche error";
          Withdrawal::where("id",$id)->update( ["status"=>"Pending","checkCount"=>($checkCount+1), "curl_response"=>$curl_response,"error_response"=>$error_response] );
        }*/ else {
                Withdrawal::where("id", $id)->update(["status" => "Success", "checkCount" => ($checkCount + 1), "curl_response" => $curl_response, "error_response" => $error_response]);
            }
        }
        Withdrawal::where("status", "Pending",)->where("checkCount", 6)->update(["amount" => 0, "status" => "Failed"]);
    }
}
