<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class ControleUserController extends Controller
{

    public function usuarios(Request $request){
        $usuarios = User::get();
        return view('controleuser', compact('usuarios'));
    }
}
