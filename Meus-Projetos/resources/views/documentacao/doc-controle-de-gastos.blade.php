@extends('modelo.docModelo')

@section('favicon')
    {{asset('img/controle-de-gastos/logo-fovicon.png')}}
@endsection

@section('imagem-fundo')
    {{asset('img/controle-de-gastos/fundoHomeControleGastos.jpg')}}
@endsection

@section('tela-anterior')
    <a href="/controle-de-gastos" class="">
        <img src="{{asset('img/uso-comum/seta.svg')}}">
    </a>
@endsection

@section('imagem-topo-doc')
    {{asset('img/controle-de-gastos/imagem-doc.jpg')}}
@endsection

@section('titulo-doc')
    Projeto Controle de Gastos 1.0
@endsection

@section('conteudo-corpo-doc')
    <p>O projeto foi baseado em uma tabela de controle de gastos de uso pessoal, embora simples o sistema é
        funcional e é possível a utilização de vários usuários. Este também é o primeiro projeto em Laravel e serviu
        para entender melhor o funcionamento do framework.</p>
    <h5>Inicio</h5>
    <p>Para fazer uso do sistema é preciso realizar o login. Caso ainda não possua um login basta se registrar clicando em "Register"
        no canto superior direito da tela.<br>
        Ao realizar o login o usuário será direcionado para a tela de Dashboar onde encontrará os campos de "Saldo Atual", "Receita",
        "Despesas" e "Reservas" zerados, além dos gráficos não estarem preenchidos. Estes campos trazem dados apenas do mês atual, sendo assim
        os mesmos só estarão disponíveis quando existirem registros no mês.</p>
    <h5>Adicionando Mês</h5>
    <p>Para realizar o cadastro de um mês basta clicar no botão "Novo mês", onde será solicitado o mês e o ano que será registrado. Apos
        preenchimento basta clicar em "Adicionar", que será redirecionado para a tela de preenchimento dos dados.</p>

    <h5>Registros Anteriores</h5>
    <p>Para visualizar os dados registrados de forma detalhada ou edita-los basta clicar em "Registros". As informações estarão separadas
        por ano e posteriormente por meses.</p>
    <br>
    <div class="row">
        <div class="col-6">
            <img src="{{asset('img/controle-de-gastos/Capturar1.PNG')}}" class="img-fluid">
        </div>
        <div class="col-6">
            <img src="{{asset('img/controle-de-gastos/Capturar2.PNG')}}" class="img-fluid">
        </div>
    </div>
    <br>
    Obs.: O projeto foi feito apenas para desktops, sendo assim o site não é adaptado para dispositivos móveis.
    <p class="card-text"><small class="text-muted">21/07/2020</small></p>

@endsection
