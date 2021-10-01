@extends('layouts.app2')
@section('body')
    <div id="cadastro" class="flex-jc flex-ac fundoazul">
        <form method="post" action=""> 
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
                <h4 class="mb-1 ml-05 black">Escolha qual nível de acesso o usuário vai ter !</h4>
                <div class="form-group black flex-b">
                    <input class="radio ml-05" name="acesso" value="1" id="radio1" type='radio'/>
                    <label for="radio1" class="">Administrador</label>
                    <input class="radio ml-1" name="acesso" value="2" id="radio2" type='radio'/>
                    <label for="radio2" class="">Supervisor</label>
                    <input class="radio ml-1" name="acesso" value="3" id="radio3" type='radio' checked />
                    <label for="radio3" class="">Limitado</label>
                </div> 
                <h4 class="mb-1 ml-05 flex-jc black">Status do usuário</h4>
                <div class="form-group black flex-jc">
                    <input class="radio ml-05" name="status" value="Ativo" id="radioativo" type='radio' checked/>
                    <label for="radioativo" class="">Ativo</label>
                    <input class="radio ml-05" name="status" value="Inativo" id="radioinativo" type='radio'/>
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