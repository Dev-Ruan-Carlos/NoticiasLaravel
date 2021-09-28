@extends('layouts.app')
@section('body')
    <form method="post" action="{{route('cadastro')}}">
        @csrf
        @method('POST')
        <fieldset class="toppo black">
            <div class="">
                <div class="head">
                    <img src="{{asset('img/logo.jpg')}}" alt="LOGO" class="logo">
                    <a href="{{route('cadastro')}}" class="cad-noticia font sublinha"><b>Cadastrar notícias</b></a>
                    <a href="" class="exib-noticia font sublinha"><b>Alterar notícias</b></a>
                    <input type="text" class="busca-noticia" autofocus>
                    <div class="input-button" data-tooltip="Consultar dados do CNPJ !" data-tooltip-location="top">
                        <i class="fas fa-search" id="pesquisar"></i>
                    </div>
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
                            <button class="flex-jc vermais white">Ver mais</button>
                        </article>
                    @endforeach
                </div>
            </div>
        </fieldset>
        <div class="linha-horizontal mt-2"></div>
        <footer class="end black font">
            <div>
                <p class="footer" href='https://github.com/Dev-Ruan-Carlos'><b>Desenvolvido por Dev-Ruan</b></p>
            </div>
    </form>
        </footer>
@endsection 