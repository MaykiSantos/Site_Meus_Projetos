@extends('modelo.principalModelo')


@section('favicon')
    {{asset('img/preenchimento-automatico/favicon.png')}}
@endsection

@section('imagem-fundo')
    {{asset('img/preenchimento-automatico/fundo.jpg')}}
@endsection

@section('tela-anterior')
    <a href="/" class="">
        <img src="{{asset('img/uso-comum/seta.svg')}}">
    </a>
@endsection

@section('titulo')
    API Via CEP
@endsection

@section('links')
    <a href="/preenchimento-automatico/doc">DOCUMENTAÇÃO</a>
    <a href="http://autopreenchimentoendereco.meus-projetos.com/" target="_blank">ABRIR</a>

@endsection
