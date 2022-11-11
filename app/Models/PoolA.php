<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class PoolA extends Model
{
    use HasFactory;
    protected $table = 'pool_a';

    protected $fillable = [
        "user_id", "binaryParent", "binary_str", "position"
    ];
}
