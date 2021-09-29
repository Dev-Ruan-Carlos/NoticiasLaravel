@extends('layouts.app2')
@section('body')
    <div id="cadastro" class="flex-jc flex-ac fundoazul">
        <form method="post" action="{{route('registre.gravar')}}"> 
            @csrf
            @method('POST')
            <h1>Cadastro</h1>
                @error('cadastro')
                    <span class="error">{{$message}}</span>
                @enderror  
                <div class="form-input"> 
                    <label for="login">Seu login:</label>
                    <input id="loginCadastro" name="loginCadastro" required="required" type="text" placeholder="Login" maxlength="30" autofocus/>
                </div>
                <div class="form-input"> 
                    <label for="email">Seu e-mail:</label>
                    <input id="emailCadastro" name="emailCadastro" required="required" type="email" placeholder="contato@contato.com" maxlength="30"/> 
                </div>
                <div class="form-input"> 
                    <label for="password">Sua senha:</label>
                    <input id="senhaCadastro" name="password" required="required" type="password" placeholder="ex: 1234" maxlength="42"/>
                </div> 
                <div class="blue">                   
                    Já tem conta?
                    <a href="{{route('inicio')}}"> Ir para o início </a>
                    <button type="submit" class="button" style="margin-left: 50px">Cadastrar</button>
                </div>
        </form>
    </div>
@endsection