<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    public function players()
    {
        return $this->hasMany('App\Player');
    }
}
