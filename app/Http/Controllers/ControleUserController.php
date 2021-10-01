<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class ControleUserController extends Controller
{

    public function usuarios(Request $request){
            if($request->get('buscar2')){
                $busca = $request->get('buscar2');
                $usuarios = User::where('nome', 'LIKE', '%'.$busca.'%')
                                    ->orWhere('nome_acesso', 'LIKE', '%'.$busca.'%')
                                    ->orWhere('ativo', 'LIKE', '%'.$busca.'%')
                                    ->orderby('nome')->get();
                return view('controleuser', compact('usuarios', 'busca'));
            }

        $usuarios = User::get();
        return view('controleuser', compact('usuarios'));
    }

    public function edicao($id){
            dd($id);
            $usuarios = User::where('controle', $id)->first();
            dd($usuarios);
            return view('edicaouser', compact('usuarios'));
    }
}
