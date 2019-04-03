<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Torneo;
use App\TorneoUser;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.dashboard');
    }

    public function dashboard()
    {
        $torneos = DB::table('torneos')->latest('fecha')->whereIn('torneo_id',TorneoUser::select('torneo_id')->where('user_id',auth()->user()->id)->get())->get();
        return view('dashboard.dashboard')->with('torneos',$torneos);
    }

    public function logout()
    {
        auth()->logout();
        return redirect()->route('/');
    }

    
}
