@extends('modelo.principalModelo')


@section('favicon')
    {{asset('img/livraria-traca-de-livros/favicon.png')}}
@endsection

@section('imagem-fundo')
    {{asset('img/livraria-traca-de-livros/fundo.jpg')}}
@endsection

@section('tela-anterior')
    <a href="/" class="">
        <img src="{{asset('img/uso-comum/seta.svg')}}">
    </a>
@endsection

@section('titulo')
    Livraria Traça de Livros
@endsection

@section('links')
    <a href="/livraria-traca-de-livros/doc">DOCUMENTAÇÃO</a>
    <a href="#">API<small>indisp.</small></a>
    <a href="#">ABRIR SITE<small>indisp.</small></a>

@endsection
