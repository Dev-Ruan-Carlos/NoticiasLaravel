@extends('layouts.app')
@section('body')
    <form method="post" id="formnoticias">
        @csrf
        @method('POST')
        <fieldset class="toppo black">
            <div class="">
                <div class="head">
                    <a href="https://sgbr.com.br/"><img src="{{asset('img/logo.jpg')}}" alt="LOGO" class="logo"></a>
                    @if(isset($user) && ($user->nivel_acesso == 1 || $user->nivel_acesso == 2))
                        @if($user->nivel_acesso == 1)
                            <a href="{{route('controleuser.listagem')}}" class="controle-user font sublinha"><b>Controle Usuário</b></a>
                        @endif
                        <a href="{{route('cadastro')}}" class="cad-noticia font sublinha"><b>Cadastrar notícias</b></a>
                        <a href="{{route('noticias')}}" class="exib-noticia font sublinha"><b>Alterar notícias</b></a>
                    @endif
                    <a href="{{route('inicio')}}" class="volt-login font sublinha"><b>Voltar ao Login</b></a>
                    <input type="text" class="busca-noticia" id="buscar" name="buscar" autofocus @isset($busca)
                        value="{{$busca}}"
                    @endisset>
                    <i class="fas fa-search" id="pesquisar" onclick="document.getElementById('formnoticias').submit()"></i>
                </div>
            </div>
        </fieldset>
        <div class="linha-horizontal mb-2"></div>
        <fieldset class="middle">
            <div class="container"> 
                <div class="noticia-first m-1 flex-jc flex-w">
                    @foreach ($noticias as $noticia)
                        <article class="fundo m-1 flex-c hidden" style="position: relative;">
                            <p class="font2"><b>
                                {{$noticia->titulo}}
                            </p></b>
                            <p class="pnoticia mt-3">
                                {{$noticia->noticia}}
                            </p>
                            <a href="{{route('noticia.vermais', $noticia->controle)}}">
                                <button type="button" class="flex-jc vermais white">Ver mais</button>
                            </a>
                        </article>
                    @endforeach
                </div>
            </div>
        </fieldset>
    </form>
    <div class="linha-horizontal mt-2"></div>
    <footer class="end black font">
        <div class="blue">
            <a class="footer blue" href='https://github.com/Dev-Ruan-Carlos'><b>Desenvolvido por Dev-Ruan</b></a>
            <i class="far fa-copyright copyright blue"></i>
        </div>
    </footer>
@endsection 