@extends('layouts.app')
@section('body')
    <form method="get" id="formnoticias">
        @csrf
        @method('GET')
        <div class="toppo black">
            <div class="">
                <div class="head">
                    <a href="https://sgbr.com.br/"><img src="{{asset('img/logo.jpg')}}" alt="LOGO" class="logo"></a>
                    <a href="{{route('welcome')}}" class="exib-noticia font sublinha"><b>Voltar ao inicio</b></a>
                    <input type="text" class="busca-noticia" id="buscar" name="buscar" autofocus @isset($busca)
                        value="{{$busca}}"
                    @endisset>
                    <div class="input-button" data-tooltip="Consultar dados do CNPJ !" data-tooltip-location="top">
                        <i class="fas fa-search" id="pesquisar" onclick="document.getElementById('formnoticias').submit()"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="linha-horizontal"></div>
        <div class="middle">
            <div class="container"> 
                <div class="noticia-first m-1 flex-jc flex-w">
                    @foreach ($noticias as $noticia)
                        <article class="fundo m-1 flex-c hidden" style="position: relative;">
                            <a href="javascript:void(0)" onclick="excluirNoticia(this)" data-id="{{$noticia->controle}}">
                                <i class="fa fa-trash lixeira" style="justify-content: flex-end; display:flex;"></i>
                            </a>
                            <p class="font2"><b>
                                {{$noticia->titulo}}
                            </p></b>
                            <p class="pnoticia mt-3">
                                {{$noticia->noticia}}
                            </p>
                            <a href="{{route('noticias.detalhes', $noticia->controle)}}">
                                <button type="button" class="flex-jc vermais white">Editar</button>
                            </a>
                        </article>
                    @endforeach
                </div>
            </div>
        </div>
    </form>

    <script>
        function excluirNoticia(el){
            $.ajax({
                url: "{{route('noticias.excluir')}}",
                type: "DELETE",
                data: {
                    id: el.dataset.id
                },
                beforeSend: function(request){
                    request.setRequestHeader('X-CSRF-TOKEN', document.querySelector('meta[name="csrf-token"]').getAttribute('content'))
                }
            }).done(response => {
                window.location.reload();
            })
        }
    </script>
@endsection 