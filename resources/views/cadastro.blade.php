@extends('layouts.app')
@section('body')
<form action="{{route('cadastro.gravar')}}" class="" method="post">
    @csrf 
    @method('POST')
    @if(session()->has('cadastro'))
        <div class="alert alert-success">
            {{ session()->get('cadastro') }}
        </div>
    @endif
    <div class="fundoazul flex-jc flex-ac">
        <div class="tela-cadastro border flex-jb flex-c">
            <input type="text" name="id" @isset($noticia)
                value="{{$noticia->controle}}"
            @endisset hidden>
            @error('gravar')
                <span class="error">{{$message}}</span>
            @enderror  
            <div class="flex-c">
                <h2 class="flex-jc mt-1 mb-2 sublinha">Cadastro de notícias</h2>
                <div class="funcionario m-1">
                    <label for="">Funcionário: </label>
                    <input type="text" name="funcionario" class="border flex-jc borda inputo" style="margin-left: 58px; font-size: 18px; padding: 0px 5px 0px 5px; width: 451px;" required autofocus @isset($noticia)
                        value="{{$noticia->funcionario}}"
                    @endisset>
                </div>
                <div class="titulo m-1">
                    <label for="">Titulo da notícia: </label>
                    <input type="text" name="titulo" class="border flex-jc borda inputo" style="margin-left: 30px; font-size: 18px; padding: 0px 5px 0px 5px; width: 451px;" required @isset($noticia)
                        value="{{$noticia->titulo}}"
                    @endisset>
                </div>
                <div class="noticia m-1">
                    <label for="">Notícia: </label>
                    <textarea name="noticia" id="" class="border flex-jc noticiap p-05 borda inputo" style="margin-left: 90px; font-size: 15px;" required> @isset($noticia){!! $noticia->noticia !!}@endisset
                    </textarea> 
                </div>
            </div>
            <div class="flex-b mb-1 flex-jc">                   
                <a href="{{route('welcome2')}}" class="cadastrar borda2 white font flex-jc">Voltar</a>
                <button type="submit" class="cadastrar borda2 ml-4 white font flex-jc">@isset($noticia)
                    Gravar 
                    @else
                    Cadastrar
                @endisset</button>
            </div>    
        </div>
    </div>
</form>
@endsection 