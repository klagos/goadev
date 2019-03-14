<?php

namespace App\Http\Controllers;

use App\c;
use Illuminate\Http\Request;

class TorneoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $torneos = DB::table('torneos')->get()->orderBy('torneo_id', 'DESC')->paginate()->where('isActive', 1);
		return view('dashboard.torneos', compact('torneos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.torneos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $torneo = new Torneo;
        $torneo->name = $request->name;
        $torneo->capacity = $request->capacity;
		$torneo->save();
		return redirect()->route('dashboard.torneos.create')
		->with('info','El torneo ha sido agregado');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\c  $c
     * @return \Illuminate\Http\Response
     */
    public function edit(c $c)
    {
        $torneo = Torneo::find($id);
		return view('dashboard.torneos.edit', compact('torneo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\c  $c
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, c $c)
    {
        $torneo = Torneo::find($torneo_id);
		$torneo->name = $request->name;
		$torneo->capacity = $request->capacity;
		$torneo->save();
		return redirect()->route('dashboard.torneos')
		->with('info','El torneo ha sido modificado exitosamente');
    }

    public function show($torneo_id)
	{
		$torneo = Torneo::find($torneo_id);
        return view('dashboard.torneos', compact('torneo'));
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\c  $c
     * @return \Illuminate\Http\Response
     */
    public function destroy(c $c)
    {
        $torneo = Product::find($torneo_id);
		$torneo->delete();
        return back()->with('info', 'El producto fue eliminado')  
    }

    public function change(Request $request, c $c)
    {
        $torneo = Torneo::find($torneo_id);

		$torneo->save();
		return redirect()->route('dashboard.torneos.index')
		->with('info','El torneo ha sido modificado exitosamente');
    }
}
