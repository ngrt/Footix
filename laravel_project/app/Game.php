<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Game extends Model
{

    protected $fillable = ['team1_id', "team2_id", "score1", "score2", "odd1", "odd2", "odd_draw", "mdate", "stadium_id"];
    public function goals()
    {
        return $this->hasmany('App\Goal');
    }

    public function stadium()
    {
        return $this->belongsTo('App\Stadium');
    }

    public function team1()
    {
        return $this->belongsTo('App\Team','team1_id', 'id');
    }

    public function team2()
    {
        return $this->belongsTo('App\Team', 'team2_id', 'id');
    }
}
