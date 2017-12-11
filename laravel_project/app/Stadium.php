<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Stadium extends Model
{
    public $table = "stadiums";
    public function games()
    {
        return $this->hasmany('App\Game');
    }
}
