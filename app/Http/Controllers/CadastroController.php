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
        $noticias = new Noticias();
        $noticias->funcionario = $request->post('funcionario');
        $noticias->titulo = $request->post('titulo');
        $noticias->noticia = $request->post('noticia'); 
        $noticias->save();
        return redirect()->back()->withInput()->withErrors(['cadastro' => 'Noticia cadastrada com sucesso !']);
        }
}
