<?php

namespace App\Http\Controllers;

use App\Models\Noticias;
use Illuminate\Http\Request;

class CadastroController extends Controller
{
    public function index(){
        return view('cadastro');
    }

    public function gravar(Request $request){
        if($request->get('id')){
            $noticias = Noticias::where('controle',$request->get('id'))->first();
            $noticias->funcionario = $request->post('funcionario');
            $noticias->titulo = $request->post('titulo');
            $noticias->noticia = $request->post('noticia'); 
            $noticias->save();
            return redirect()->back()->withInput()->with('cadastro', 'Noticia alterada com sucesso !');
        }else {
            $noticias = new Noticias();
            $noticias->funcionario = $request->post('funcionario');
            $noticias->titulo = $request->post('titulo');
            $noticias->noticia = $request->post('noticia'); 
            $noticias->save();
            return redirect()->back()->withInput()->with('cadastro', 'Noticia cadastrada com sucesso !');
        }
    }
}        
