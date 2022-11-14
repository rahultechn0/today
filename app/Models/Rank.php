<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class Rank extends Model
{
    use HasFactory;

    protected $fillable = [
        "name", "conditions", "reward", "status","child_rank"
    ];

    public function Matching_child_rank($rank,$parent_left_str,$parent_right_str) {
        if ($rank==11) {
            return 0;
        }
        $left_child_check  =  User::where("level_str", "like", $parent_left_str . "%")->where('ranks',$rank)->count();
        $right_child_check =  User::where("level_str", "like", $parent_right_str . "%")->where('ranks',$rank)->count();
        if ($left_child_check>=1 && $right_child_check>=1) {
            return $rank;
        }else{
            $rank= $rank+1;
            return self::Matching_child_rank($rank,$parent_left_str,$parent_right_str);
        }
    }
}
