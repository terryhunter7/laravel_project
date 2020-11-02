<?php

namespace App\Http\Controllers;

use App\Player;
use Illuminate\Http\Request;

class PlayersController extends Controller
{
    public function index(Request $request)
    {
    
        $player = Player::with('playerProfile')->get();


        dd($player);

        return view('admin.player.index');
    }

    public function createPlayer(Request $request)
    {

    }

    public function updatePlayer(Request $request)
    {

    }

    public function removePlayer(Request $request)
    {

    }
}
