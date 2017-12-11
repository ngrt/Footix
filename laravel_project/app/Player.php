<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
    protected $fillable = ['id', 'name', 'role_id', 'goals', 'yellow_cards', 'red_cards', 'games', 'team_id', 'url_photo'];

    public function team()
    {
        return $this->belongsTo("App\Team");
    }

    public function goals()
    {
        return $this->hasMany("App\Goal");
    }

    public function role()
    {
        return $this->belongsTo('App\Role');
    }
}
