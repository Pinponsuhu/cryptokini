<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Card extends Model
{
    use HasFactory;

    protected $table = 'cards';

    protected $primaryKey = 'id';

    protected $fillable = ['user_id','status','category','sub_category','trade_amount','comment','gift_file','rate'];

    public function User(){
        $this->belongsTo(User::class);
    }
}
