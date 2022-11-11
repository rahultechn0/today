<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\App;
use Illuminate\Validation\Rule;
use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;

class Metarequest extends Authenticatable
{
    use Notifiable;

    const Active = 1;
    const Inactive = 2;
    const ADMIN = 1;

    public static $auth_id;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    // protected $fillable = [
    //     "trans_type","packageId","pLimit", "user_id","depositType","trxAmt","tokenAmt", "trans_id", "amount", "wallet_address", "tariffId", "dailyRoi", "days", "status", "curl_response","error_response","checkCount"
    // ];
    protected $guarded = [''];

}
