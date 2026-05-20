<?php

namespace App\Http\Controllers;

use App\Models\Game;
use Illuminate\Http\Request;

class GameController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $games=Game::all();

        return view('games.index',compact('games'));
    }

    
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $game=New Game;

        $game->name=$request->nombre;
        $game->release_date=$request->fecha_lanzamiento;
        $game->is_online=$request->online;
        $game->save();

        return redirect()->route('games.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Game  $game
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
         $game=Game::find($id);

        return view('games.show',compact('game'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Game  $game
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $game=Game::find($id);

        return view('games.edit',compact('game'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Game  $game
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $game=Game::find($id);

        $game->name=$request->nombre;
        $game->release_date=$request->fecha_lanzamiento;
        $game->is_online=$request->online;
        $game->save();

        return redirect()->route('games.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Game  $game
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $game=Game::find($id);
        $game->delete();

        return redirect()->route('games.index');
    }
}
