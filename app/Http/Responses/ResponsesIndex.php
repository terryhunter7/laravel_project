<?php

namespace App\Http\Responses;

use Illuminate\Contracts\Support\Responsable;

class ResponsesIndex implements Responsable
{

    protected $players;


    public function __construct($players)
    {
        $this->players = $players;
    }

    public function toResponse($request){
        
        if ($request->ajax()){
            return response()->json($this->players);
        }

        return view('home')->with('players', $this->players);
    }
}