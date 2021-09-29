<?php

namespace App\Http\Controllers;

use App\Models\Noticias;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index(Request $request){
        if($request->get('buscar')){
            $busca = $request->get('buscar');
            $noticias = Noticias::where('titulo', 'LIKE', '%'.$busca.'%')
                                ->orWhere('noticia', 'LIKE', '%'.$busca.'%')
                                ->orderby('titulo')->get();
            return view('welcome', compact('noticias', 'busca'));
        }

        $noticias = Noticias::get(); 
        return view('welcome', compact('noticias'));
    }
}