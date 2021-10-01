@extends('layouts.app2')
@section('body')
    <div id="cadastro" class="flex-jc flex-ac fundoazul">
        <form method="post" action="{{route('registre.gravar')}}"> 
            @csrf
            @method('POST')
            <input type="text" name="id" @isset($usuarios)
                value="{{$usuarios->id}}"
            @endisset hidden>
            <h1>Cadastro</h1>
                @error('cadastro')
                    <span class="error">{{$message}}</span>
                @enderror  
                <div class="form-input"> 
                    <label for="login">Seu login:</label>
                    <input id="loginCadastro" name="loginCadastro" required="required" type="text" placeholder="Login" maxlength="30" autofocus @isset($usuarios)
                        value="{{$usuarios->nome}}"
                    @endisset disabled/>
                </div>
                <div class="form-input"> 
                    <label for="email">Seu e-mail:</label>
                    <input id="emailCadastro" name="emailCadastro" required="required" type="email" placeholder="contato@contato.com" maxlength="30" @isset($usuarios)
                        value="{{$usuarios->email}}"
                    @endisset disabled/> 
                </div>
                <h4 class="mb-1 ml-05 black">Escolha qual nível de acesso o usuário vai ter !</h4>
                <div class="form-group black flex-b">
                    <input class="radio ml-05" name="acesso" value="1" id="radio1" type='radio' @isset($usuarios) @if($usuarios->nivel_acesso == 1) checked @endif @endisset/>
                    <label for="radio1" class="">Administrador</label>
                    <input class="radio ml-1" name="acesso" value="2" id="radio2" type='radio' @isset($usuarios) @if($usuarios->nivel_acesso == 2) checked @endif @endisset/>
                    <label for="radio2" class="">Supervisor</label>
                    <input class="radio ml-1" name="acesso" value="3" id="radio3" type='radio' @isset($usuarios) @if($usuarios->nivel_acesso == 3) checked @endif @else checked @endisset/>
                    <label for="radio3" class="">Limitado</label>
                </div> 
                <h4 class="mb-1 ml-05 flex-jc black">Status do usuário</h4>
                <div class="form-group black flex-jc">
                    <input class="radio ml-05" name="status" value="1" id="radioativo" type='radio' @isset($usuarios) @if($usuarios->ativo == 1) checked @endif @else checked @endisset/>
                    <label for="radioativo" class="">Ativo</label>
                    <input class="radio ml-05" name="status" value="0" id="radioinativo" type='radio' @isset($usuarios) @if($usuarios->ativo == 0) checked @endif @endisset/>
                    <label for="radioinativo" class="">Inativo</label>
                </div>
                <div class="flex-jc">                   
                    <a href="{{route('controleuser.listagem')}}">
                        <button type="button" class="button">Voltar</button>
                    </a>
                    <button type="submit" class="button ml-05">Salvar</button>
                </div>
        </form>
    </div>
@endsection