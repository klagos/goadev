<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TorneoUser;
use DB;
class TorneoUserController extends Controller
{
    public function index()
    {
        //$torneos = DB::table('torneo_user')->get();
		//return view('torneos', compact('torneos'));
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
        if ($request->inscrito){
            DB::table('torneo_user')->where('torneo_id', '=', $request->torneo_id)->where('user_id', '=', $request->user_id)->delete();
            $actual=DB::table('torneos')->where('torneo_id','=', $request->torneo_id)->first();
        DB::table('torneos')->where('torneo_id','=', $request->torneo_id)->update(['actual'=> $actual->actual-1]);
            return redirect()->route('torneos')->with('info','El torneo ha sido modificado exitosamente');
        }
        DB::table('torneo_user')->insert(
            ['user_id' => $request->user_id, 'torneo_id' => $request->torneo_id]
        );
        $actual=DB::table('torneos')->where('torneo_id','=', $request->torneo_id)->first();
        DB::table('torneos')->where('torneo_id','=', $request->torneo_id)->update(['actual'=> $actual->actual+1]);
		return redirect()->route('torneos');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\c  $c
     * @return \Illuminate\Http\Response
     */
    public function edit(c $c)
    {
        $torneo = TorneoUser::find($id);
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
        $users = DB::table('users')->whereIn('id',TorneoUser::select('user_id')->where('torneo_id','=', $torneo_id)->get())->get();

        return view('dashboard.torneos.inscritos')->with('users', $users)->with('torneo_id',$torneo_id);
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\c  $c
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        DB::table('torneo_user')->where('torneo_id', '=', $request->torneo_id)->where('user_id', '=', $request->user_id)->delete();
        return back();  
    }

    public function correo()
    {
        return view('emails.envioCorreo');
    }
}
