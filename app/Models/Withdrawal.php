<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Withdrawal extends Model
{
    protected $guarded = [];
    /**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	*/
	protected $fillable = [
		'user_id', 'amount','remark','trans_id','trans','status','curl_response','checkCount'];
		
   	public function user(){
         return $this->belongsTo(User::class);
    }
}
