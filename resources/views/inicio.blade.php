@extends('layouts.app2')
@section('body')
    <div id="login" class="fundoazul">
        <div class="box-login">
            <form action="{{route('welcome')}}" method="get">
                @csrf
                @method('GET')
                <fieldset class="clearfix">
                    @error('login')
                        <span class="error">{{$message}}</span>
                    @enderror    
                        <p>
                            <span class="fa fa-user"></span>
                            <input type="text"  Placeholder="Usuário" name="login" required autofocus>
                        </p>
                        <p>
                            <span class="fa fa-lock"></span>
                            <input type="password"  Placeholder="Senha" name="senha" required>
                        </p> 
                        <div id="entrar" class="entrar flex-jc mt-05">                 
                            <button type="submit" class="button">Entrar</button>
                        </div>
                        <div class="flex-jc white mt-1">
                            <a href="{{route('registre')}}" class="">Registre-se</a>
                        </div>
                </fieldset>
            </form>
            <div class="logo" id="logo">
                <img src="{{asset('img/logo.jpg')}}" alt="LOGO">
            </div>
        </div>
    </div> 
@endsection       
