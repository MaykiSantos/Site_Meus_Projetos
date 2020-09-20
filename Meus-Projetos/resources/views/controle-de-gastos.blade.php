@extends('modelo.principalModelo')


@section('favicon')
    {{asset('img/controle-de-gastos/logo-fovicon.png')}}
@endsection

@section('imagem-fundo')
    {{asset('img/controle-de-gastos/fundoHomeControleGastos.jpg')}}
@endsection

@section('tela-anterior')
    <a href="/" class="">
        <img src="{{asset('img/uso-comum/seta.svg')}}">
    </a>
@endsection

@section('titulo')
    Controle de Gastos
@endsection

@section('links')
    <a href="/controle-de-gastos/doc">DOCUMENTAÇÃO</a>
    <a href="http://controlegastos.meus-projetos.com/register" target="_blank">REGISTRAR</a>
    <a href="http://controlegastos.meus-projetos.com/login" target="_blank">LOGIN</a>

@endsection
