<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bet extends Model
{
    protected $fillable = ["match_id", "user_id", "amount", "type"];
    public function games()
    {
        return $this->belongsToMany('App\Game');
    }
}
