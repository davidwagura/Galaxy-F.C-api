<?php

namespace App\Http\Controllers;

use App\Models\Player;
use Illuminate\Http\Request;

class PlayersController extends Controller
{
    public function index()
    {
        $players = Player::all();
        return response()->json($players);
    }

    public function create()
    {
        return response()->json();
    }

    public function store(Request $request)
    {   
        $player = new Player;
        $player->name = $request->name;
        $player->age = $request->age;
        $player->nationality = $request->nationality;
        $player->position = $request->position;
        $player->save();

        return response()->json($player);
    }

    public function show(string $id)
    {
        $player = Player:: findorfail($id);
        return response()->json($player);
    }

    public function edit(string $id)
    {
        $player = Player::findorfail($id);
        return response()->json($player);
    }

    public function update(Request $request, string $id)
    {
        $player = Player::findorfail($id);
        $player->name = $request->name;
        $player->age = $request->age;
        $player->nationality = $request->nationality;
        $player->position = $request->position;
        $player->save();

        return response()->json($player);
    }

    public function destroy(string $id)
    {
        $player = Player::findorfail($id);
        $player->delete();
        return response()->json($player);
    }
}
