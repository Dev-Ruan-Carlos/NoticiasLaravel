<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class InicioController extends Controller
{
    
    public function entrar (Request $request){
        $credentials = [
            'nome' => $request->post('login'),
            'password' => $request->post('senha'),
        ];
        if(Auth::attempt($credentials)){
            return redirect()->route('welcome');
        }else{
            return redirect()->back()->withInput()->withErrors(['inicio' => 'Login/Senha incorreto, peço que tente novamente !']);
        }
    }

    public function index(){
        return view('inicio');
    }
}
