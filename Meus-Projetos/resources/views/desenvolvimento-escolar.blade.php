@extends('modelo.principalModelo')


@section('favicon')
    {{asset('img/desenvolvimento-escolar/favicon.png')}}
@endsection

@section('imagem-fundo')
    {{asset('img/desenvolvimento-escolar/fundo.jpg')}}
@endsection

@section('tela-anterior')
    <a href="/" class="">
        <img src="{{asset('img/uso-comum/seta.svg')}}">
    </a>
@endsection

@section('titulo')
    Desenvolvimento Escolar
@endsection

@section('links')
    <a href="/desenvolvimento-escolar/doc">DOCUMENTAÇÃO</a>
    <a href="http://desenvolvimentoescolar.meus-projetos.com/" target="_blank">ENTRAR</a>

@endsection
