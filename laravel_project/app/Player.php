<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
    protected $fillable = ['id', 'name', 'role', 'goals', 'yellow_cards', 'red_cards', 'games', 'team_id'];

    public function team()
    {
        return $this->belongsTo("App\Team");
    }

    public function goals()
    {
        return $this->hasMany("App\Goal");
    }
}
