<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PlayerProfile extends Model
{
    protected $table = 'player_profile';
    //
    public function player()
    {
        return $this->belongsTo('App\Player');
    }
}
