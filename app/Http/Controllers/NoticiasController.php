<?php

namespace App\Http\Controllers;

use App\Models\Noticias;
use GrahamCampbell\ResultType\Success;
use Illuminate\Http\Request;

class NoticiasController extends Controller
{
    public function noticias(Request $request){
        if($request->get('buscar')){
            $busca = $request->get('buscar');
            $noticias = Noticias::where('titulo', 'LIKE', '%'.$busca.'%')
                                ->orWhere('noticia', 'LIKE', '%'.$busca.'%')
                                ->orderby('titulo')->get();
            return view('noticias', compact('noticias', 'busca'));
        }

        $noticias = Noticias::get(); 
        return view('noticias', compact('noticias'));
    }

    public function detalhes($id){
        $noticia = Noticias::where('controle', $id)->first();
        return view('cadastro', compact('noticia'));
    }

    public function excluir(Request $request){
        $noticia = Noticias::where('controle', $request->get('id'))->first();
        $noticia->delete();
        return response()->json([
            'status' => 'success'
        ]);
    }
}
