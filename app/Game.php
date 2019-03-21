<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    // a game belongs to a manufacturer
    public function manufacturer() {
        return $this->belongsTo(Manufacturer::class);
    }


    public function gameType(){
        return $this->hasOne(GameType::class);
    }

}
