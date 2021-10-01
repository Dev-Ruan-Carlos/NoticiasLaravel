<?php

namespace App\Http\Controllers;

use App\Models\Noticias;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index(Request $request){
        $user = Auth::user();
        if($request->get('buscar')){
            $busca = $request->get('buscar');
            $noticias = Noticias::where('titulo', 'LIKE', '%'.$busca.'%')
                                ->orWhere('noticia', 'LIKE', '%'.$busca.'%')
                                ->orderby('titulo')->get();
            return view('welcome', compact('noticias', 'busca', 'user'));
        }

        $noticias = Noticias::get(); 
        return view('welcome', compact('noticias', 'user'));
    }

    public function vermais($id){

        $noticiaPrincipal = Noticias::where('controle', $id)->first(); 
        $noticias = Noticias::where('controle', '<>', $id)->limit(3)->orderBy('controle', 'desc')->get();
        return view('vermais', compact('noticias', 'noticiaPrincipal'));
    }
}