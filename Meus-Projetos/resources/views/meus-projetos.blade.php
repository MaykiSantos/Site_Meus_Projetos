@extends('modelo.principalModelo')

@section('titulo-pagina')
    Projetos
@endsection

@section('favicon')
    {{asset('img/meus-projetos/logo-fovicon-projetos.png')}}
@endsection
@section('imagem-fundo')
    {{asset('img/meus-projetos/fundoHome.jpg')}}
@endsection

@section('titulo')
    Projetos
@endsection

@section('links')
    <a href="/controle-de-gastos">CONTROLE DE GASTOS</a>
    <a href="/desenvolvimento-escolar">DESENVOLVIMENTO ESCOLAR</a>
    <a href="/preenchimento-automatico">PREENCHIMENTO AUTOMATICO</a>
    <a href="/livraria-traca-de-livros">LIVRARIA TRAÇA DE LIVROS<small>(em andamento)</small></a>
    <a href="https://github.com/MaykiSantos" target="_blank">GITHUB</a>

@endsection
