<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Goal extends Model
{

    protected $fillable = ["game_id", "team_id", "player_id", "gtime"];
    public function game()
    {
        return $this->belongsTo('App\Game');
    }

    public function team()
    {
        return $this->belongsTo('App\Team');
    }

    public function player()
    {
        return $this->belongsTo('App\Player');
    }
}
