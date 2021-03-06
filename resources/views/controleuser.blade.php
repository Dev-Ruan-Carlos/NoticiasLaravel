@extends('layouts.app')
@section('body')
    <form method="post" id="formusuarios" class="white">
        @csrf
        @method('POST')
        <fieldset class="superior pai">         
                <span class="fa fa-bars hamburguer" id="hamburguer"> Gerenciador de usuários</span>
        </fieldset>
        <fieldset class="meio abaesquerda black">
            <div class="filho">
                <div class="cursor">
                    <span class="fa fa-male icon-user black"></span>
                    <button class="button-list" disabled>Usuários</button>
                </div>
                <div class="cursor">
                    <span class="fas fa-print icon-info black"></span>
                    <button class="button-list" disabled>Informações</button>
                </div>
                <div class="cursor">
                    <span class="fas fa-tasks casa black"></span>
                    <button class="button-list" disabled>Dados adicionais</button>
                </div>
                <div id="usuario">
                    <span class="fa fa-arrow-left casa2 black"></span>
                    <a href="{{route('welcome')}}">
                        <button type="button" class="button-list">Voltar à tela de notícias</button>
                    </a>
                </div>
                <div class="pl-4 pt-4" disable>
                    <b>Legenda nível de acesso</b>
                    <h3>1 = Administrador</h3>
                    <h3>2 = Supervisor</h3>
                    <h3>3 = Limitado</h3>
                </div>
            </div>
        </fieldset>
        <fieldset class="meiodireita borda5">
                <h2 class="pl-2 pt-2 black">Usuários</h2>
                <h4 class="pl-2 mb-2 black">Gerencie os usuários que terão acesso ao cadastro/edição de noticias</h4>
                <input type="text" class="busca-user" id="buscar2" name="buscar2" autofocus @isset($busca)
                    value="{{$busca}}"
                @endisset>
                <i class="fas fa-search black" id="pesquisar-user" onclick="document.getElementById('formusuarios').submit()"></i>
            </fieldset>
        <div class="lista-user">
            <ul class="black font flex-jc" style="display: flex; flex-direction: column;">
                @foreach ($usuarios as $usuario)
                <li class="flex mt-05 border-bottom">
                    <div style="flex: 1;">
                        <b><p>{{'Controle: ' . $usuario->id}}</p></b>
                    </div>
                    <div style="flex: 1;">
                        <b><p>{{'Usuário: ' . $usuario->nome}}</p></b>
                    </div>
                    <div style="flex: 1;">
                        <b><p>{{'Nivel acesso: ' . $usuario->nivel_acesso . ' = ' . $usuario->nome_acesso}}</p></b>
                    </div>
                    <div style="flex: 1;">
                        @if($usuario->ativo == 1)
                            <b><p>{{'Status = Ativo'}}</p></b>
                        @else
                            <b><p>{{'Status = Inativo'}}</p></b>
                        @endif
                    </div>
                    <div>
                        <a href="{{route('controleuser.listagem.edicao', $usuario->id)}}" class="black">
                            <i class="fas fa-pen cursor" style="margin-right: 15px;"></i>
                        </a>
                        {{-- <a href="" class="black">
                            <i class="fas fa-trash ml-1 cursor"></i>
                        </a> --}}
                    </div>
                </li>
                @endforeach
            </ul>
        </div>
    </form>
@endsection 