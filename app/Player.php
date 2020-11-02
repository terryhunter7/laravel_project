<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
    protected $fillable = ['name'];

    public function playerProfile()
    {
        return $this->hasOne('App\PlayerProfile');
    }
}
