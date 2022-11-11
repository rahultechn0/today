<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Matchingincome extends Model
{
    protected $guarded = [];
    /**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	*/
	protected $fillable = [
		"type", "amount", "user_id", "left_point", "right_point", "matching_point", "left_business", "right_business", "matching_business", "total_left", "total_right", "carry_left", "carry_right", "noncapping_income"
    ];
	public function user(){
		return $this->belongsTo(User::class);
   }
}
