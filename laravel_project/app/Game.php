<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    public function goals()
    {
        return $this->hasmany('App\Goal');
    }
}
