<?php

namespace App\Http\Controllers;

use App\c;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Torneo;
use App\TorneoUser;
use App\Mail\Masivo;
use Illuminate\Support\Facades\Mail;

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
        $torneosIn = DB::table('torneos')->get()->where('isActive', 0);
		return view('dashboard.torneos.torneos', compact(['torneos','torneosIn']));
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
        $torneo->fecha = $request->fecha;
        $torneo->hora = $request->hora;
		$torneo->save();
		return redirect()->route('crearTorneo')
		->with('info','El torneo ha sido agregado');
    }

    public function update(Request $request)
    {
        if($request->name !=''){
            DB::table('torneos')->where('torneo_id','=',$request->torneo_id)->update(['name' => $request->name]);
        }
        if($request->capacity !='') {
            DB::table('torneos')->where('torneo_id','=',$request->torneo_id)->update(['capacity' => $request->capacity]);
        }
        if($request->fecha !='') {
            DB::table('torneos')->where('torneo_id','=',$request->torneo_id)->update(['fecha' => $request->fecha]);
        }
        if($request->hora !='') {
            DB::table('torneos')->where('torneo_id','=',$request->torneo_id)->update(['hora' => $request->hora]);
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
    public function destroy($torneo_id)
    {
        DB::table('torneos')->where('torneo_id', '=', $torneo_id)->delete();
        return back()->with('info', 'El producto fue eliminado');  
    }

    public function change($torneo_id)
    {
        $torneo = DB::table('torneos')->where('torneo_id',$torneo_id)->first();
        if($torneo->isActive == 1){
            DB::table('torneos')->where('torneo_id','=',$torneo_id)->update(['isActive' => 0]);
        }else{
            DB::table('torneos')->where('torneo_id','=',$torneo_id)->update(['isActive' => 1]);
        }
		return redirect()->route('torneos')
		->with('info','El torneo ha sido modificado exitosamente');
    }

    public function edit($torneo_id)
    {
        $torneo=DB::table('torneos')->where('torneo_id','=',$torneo_id)->first();
        return view('dashboard.torneos.editarTorneo')->with('torneo',$torneo);
    }

    public function enviarCorreo(Request $request)
    {
        $users = DB::table('users')->whereIn('id',TorneoUser::select('user_id')->where('torneo_id','=', $request->torneo_id)->get())->pluck('email');
        Mail::to($users)->send(new Masivo($request));
        return back();
    }

    public function crearCorreo($torneo_id)
    {   
        return view('emails.correo')->with('torneo_id',$torneo_id);
    }
}
