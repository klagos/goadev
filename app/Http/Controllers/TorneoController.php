<?php

namespace App\Http\Controllers;

use App\c;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Torneo;

class TorneoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $torneos = DB::table('torneos')->get()->where('isActive', 1);
		return view('dashboard.torneos.torneos', compact('torneos'));
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
        $torneo->name = $request->Nombre;
        $torneo->capacity = $request->Capacidad;
        $torneo->actual = 0;
        $torneo->isActive = 1;
		$torneo->save();
		return redirect()->route('crearTorneo')
		->with('info','El torneo ha sido agregado');
    }

    public function update(Request $request)
    {
        if ($request->name != '' && $request->capacity != '')
        {
            DB::table('torneos')->where('torneo_id','=',$request->torneo_id)->update(['name' => $request->name, 'capacity' => $request->capacity]);            
        }else if($request->name !=''){
            DB::table('torneos')->where('torneo_id','=',$request->torneo_id)->update(['name' => $request->name]);
        }else {
            DB::table('torneos')->where('torneo_id','=',$request->torneo_id)->update(['capacity' => $request->capacity]);
        }
		return redirect()->route('torneos')
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
        return back()->with('info', 'El producto fue eliminado');  
    }

    public function change(Request $request, c $c)
    {
        $torneo = Torneo::find($torneo_id);

		$torneo->save();
		return redirect()->route('dashboard.torneos.index')
		->with('info','El torneo ha sido modificado exitosamente');
    }
}
