<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    protected $fillable = ["id", "name", "coach", "flag", "group"];

    public function players()
    {
        return $this->hasMany("App\Player");
    }

    public function goals()
    {
        return $this->hasMany("App\Goal");
    }
}
