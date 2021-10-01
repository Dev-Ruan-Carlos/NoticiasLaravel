@extends('layouts.app')
@section('body')
    <header class="cabeça">
        <fieldset class="superior pai flex-jc">         
            <span class="fa fa-bars hamburguer" id="hamburguer"> Exibição das noticias</span>
        </fieldset>
    </header>
    <nav class="esquerda-aba">
    </nav>
    <section class="meio-aba">
        <fieldset>
            <div class="noticia-first m-1 flex-jc flex-w">
                <article class=" noticia-principal">
                    <header class="flex-jc mt-5">
                        <h2>
                            {{$noticiaPrincipal->titulo}}
                        </h2>
                    </header>
                    <p class="p-2" style="font-size: 17px;">
                        {{$noticiaPrincipal->noticia}}
                    </p>
                </article>
            </div>           
            <div class="noticias flex-jc mt-5">
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
            <div class="voltar white">
                <span class="fas fa-hand-point-left mao white"></span>
                <a href="{{route('welcome')}}">
                    <button class="button-list2 white">Voltar ás notícias</button>
                </a>
            </div>
        </fieldset>
    </section>
    <aside class="direita-aba">
    </aside>
    <footer class="baixo-aba">
    </footer>
@endsection 