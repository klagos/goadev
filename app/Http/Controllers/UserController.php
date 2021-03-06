<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        $title = "Listado de usuarios";
        return view('users.index', compact('title', 'users'));
    }

    public function show($id)
    {
        $user = User::findOrFail($id);
        return view('users.show', compact('user'));
    }

    public function create()
    {
        return 'Crear nuevo usuario';
    }

    public function prueba()
    {
        return view('layouts.prueba');
    }
}
