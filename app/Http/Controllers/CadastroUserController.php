<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class CadastroUserController extends Controller
{
    public function index(){
        return view('cadastrouser');
    }


    public function gravar(Request $request){
        if(User::where('email', $request->get('emailCadastro'))->orWhere('nome', $request->get('loginCadastro'))->count() > 0 ){
            return redirect()->back()->withInput()->withErrors(['cadastro' => 'Usuário/E-mail já cadastrado, tente novamente!']);
        }else{
        $user = new User();
        $user->nome = $request->get('loginCadastro');
        $user->email = $request->get('emailCadastro');
        $user->password = bcrypt($request->get('password')); 
        $user->save();
        return redirect()->back()->withInput()->withErrors(['cadastro' => 'Usuário cadastrado com sucesso!']);
        }
    }
}