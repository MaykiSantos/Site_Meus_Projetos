@extends('modelo.docModelo')

@section('favicon')
    {{asset('img/preenchimento-automatico/favicon.png')}}
@endsection

@section('imagem-fundo')
    {{asset('img/preenchimento-automatico/fundo.jpg')}}
@endsection

@section('tela-anterior')
    <a href="/preenchimento-automatico" class="">
        <img src="{{asset('img/uso-comum/seta.svg')}}">
    </a>
@endsection

@section('imagem-topo-doc')
    {{asset('img/preenchimento-automatico/Capturar.PNG')}}
@endsection

@section('titulo-doc')
    Preenchimento Automatico
@endsection

@section('conteudo-corpo-doc')
    <p>
        Projeto simple feito apenas para entender como funciona requisições ajax. Basta digitar o CEP e os demais campos serão preenchidos</p>

@endsection
