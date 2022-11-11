<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;    

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        "wallet_address", "levelCount", "registerId", "levelParent", "level_str", "binaryParent", "binary_str", "position", "packageId", "packageAmt", "session_id", "status"
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    public function userRecord(){
        return $this->belongsTo(User::class,"levelParent","id");
    }

    public function totalIncome($userId){
        $totalIncome  = Transaction::where("user_id",$userId)->whereIn("trans",[1,2,3,4])->sum("amount");
        return $totalIncome;
    }
    public function WithdrawaableIncome($userId){
        $totalIncome  = Transaction::where("user_id",$userId)->whereIn("trans",[1,2,3,4,5,6])->sum("amount");
        return $totalIncome;
    }
}
