@extends('modelo.docModelo')

@section('favicon')
    {{asset('img/desenvolvimento-escolar/favicon.png')}}
@endsection

@section('imagem-fundo')
    {{asset('.img/desenvolvimento-escolar/fundo.jpg')}}
@endsection

@section('tela-anterior')
    <a href="/desenvolvimento-escolar" class="">
        <img src="{{asset('img/uso-comum/seta.svg')}}">
    </a>
@endsection

@section('imagem-topo-doc')
    {{asset('img/desenvolvimento-escolar/Capturar.PNG')}}
@endsection

@section('titulo-doc')
    Desenvolvimento Escolar
@endsection

@section('conteudo-corpo-doc')
    <p>
        Projeto feito em javaScript para aplicar alguns conceitos de orientação a objeto e manipulação do Dom. A aplicação não utiliza banco de dados más
        um array de objetos para armazenar as informações de forma temporária. Com exceção das informações dos alunos mayki e monick que são fixadas dentro do sistema<br>
        O objetivo da aplicação é permitir que uma pessoa insira todas as suas notas escolares, baseadas no seu histórico escolar e possa visualizar um gráfico de desempenho de cada matéria ao longo
        dos anos e analisar o desenvolvimento geral de cada matéria. </p>
    <h5>Como usar</h5>
    <br>
    <p>
        O usuario deve clicar em "Cadastrar Aluno" e preencher as informações de "Nome do aluno" e os valores das nodas. Após o preenchimento dos campos deve-se clicar em "Cadastrar" para salvar as informações.
        Para retornar para página inicial basta clicar em "Alunos Cadastrados".<br>
        A visualização dos gráficos pode ser feita na tela inicial clicando em "Desempenho", onde terá uma tabela contendo todas as notas, um gráfico em barras com a média geral de cada matéria e
        caso o usuário clique sobre as linhas da tabela aparecerá um gráfico em linha que mostra o desempenho do aluno em determinada matéria ao longo dos anos.

    </p>

    <div class="row">
        <div class="col-6">
            <img src="{{asset('img/desenvolvimento-escolar/Capturar1.PNG')}}" class="img-fluid">
        </div>
        <div class="col-6">
            <img src="{{asset('img/desenvolvimento-escolar/Capturar2.PNG')}}" class="img-fluid">
        </div>
    </div>

@endsection
