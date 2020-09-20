@extends('modelo.docModelo')

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

@section('imagem-topo-doc')
    {{asset('img/livraria-traca-de-livros/Capturar.PNG')}}
@endsection

@section('titulo-doc')
    Taça de Livros
@endsection

@section('conteudo-corpo-doc')
    <p>
        O objetivo deste projeto é aplicar todo o conhecimento adquirido até o momento com o desenvolvimento de um site online de compras para uma empresa fictícia chamada “Traça de livros”. Esta aplicação será desenvolvida tanto o front-end quanto o back-end passando por algumas das etapas de desenvolvimento como:</p>

    <ul>
        <li>analise de requisitos</li>

            <li>modelagem de dados
                <ul>
                    <li>modelo ER</li>
                    <li>modelo logico</li>
                    <li>modelo Físico</li>
                </ul>

        <li>design das interfaces</li>
        <li>Desenvolvimento de uma API para integração das aplicações front-end e back-end</li>
    </ul>
    <p>
        Para o desenvolvimento deste projeto serão utilizadas as linguagens PHP e JavaSchipt junto com os frameworks Laravel e Lumen, visto que são os quais tenho mais conhecimento.
    </p>
    <h4>Requisitos do sistema</h4>
    <ul>
        <li>O cliente deve se cadastrar com seus dados pessoais como. CPF, RG, nome completo, telefone, data de nascimento, e-mail e endereço.</li>
        <li>O cliente pode cadastrar no máximo 4 endereços para entregas.</li>
        <li>A livraria vende vários produtos dentre livros e itens de papelaria, sendo que o seu principal produto são os livros.</li>
        <li>Os produtos ficam armazenados em vários galpões separados por áreas.</li>
        <li>Os livros devem ter as seguintes informações. Titulo, ano de publicação, número de páginas, tipo de acabamento, idioma, pais, altura, largura, profundidade, peso, autor, editora, descrição(resumo da história), condição do livro(usado ou novo), valor, porcentagem de desconto(quando tiver), quantidade em estoque, até três imagens para ilustrar o produto e local de armazenamento(nome do galpão e prateleira).</li>
        <li>Os demais produtos devem especificar altura, largura, peso, descrição (detalhes do produto) e local de armazenamento (nome do galpão e prateleira).</li>
        <li>Os produtos vendidos no site vêm de diferentes fornecedores. Preciso ter as informações de endereço, e-mail e no máximo 3 números de contato dos fornecedores.</li>
        <li>Nossos clientes podem comprar um ou mais produtos através de um pedido de compra. Más antes de confirmar o pedido é preciso verificar a disponibilidade no estoque.</li>
        <li>Quando os produtos chegam do fornecedor eles devem ser cadastrados no sistema por um funcionário.</li>
        <li>Devo ser informado quando um produto estiver sem estoque.</li>
        <li>Preciso gerar um relatório de vendas dentro de determinado mês e um relatório de vendas anuais.</li>
        <li>O cliente deve ser capaz de acompanhar o status do seu pedido.</li>
        <li>Ao ser realizado um pedido no site o almoxarifado deve ser notificado do pedido, para que os itens possam ser separados para envio. E o funcionário deve mudar o status do pedido para “preparado para envio”.</li>
        <li>Devo ser capaz de apontar 6 livros que ficaram em destaque na página inicial do site.</li>
        <li>Devo ser capaz de selecionar produtos específicos e aplicar desconto no valor do produto</li>
        <li>O cliente pode abrir chamados referente aos seus pedidos.</li>
        <li>Todos pedidos realizados aos fornecedores deve ser registrados no sistema como reposição de estoque.</li>
    </ul>
    <br>
    <h4>Modelo ER baseado nos requisitos</h4>
    <img src="{{asset('img/livraria-traca-de-livros/Modelo-ER.PNG')}}" class="img-fluid">
    <hr/>
    <br>
    <br>
    <br>
    <h4>Modelo Logico</h4>
    <img src="{{asset('img/livraria-traca-de-livros/Modelo-logico.PNG')}}" class="img-fluid">
    <hr/>
    <br>
    <br>
    <br>






    <h4>Design de algumas telas</h4>
    <br>
    <div class="row">
        <div class="col-4">
            <img src="{{asset('img/livraria-traca-de-livros/tela5.PNG')}}" class="img-fluid">
        </div>
        <div class="col-4">
            <img src="{{asset('img/livraria-traca-de-livros/tela6.PNG')}}" class="img-fluid">
        </div>
        <div class="col-4">
            <img src="{{asset('img/livraria-traca-de-livros/tela4.PNG')}}" class="img-fluid">
        </div>
    </div>
    <div class="row mt-4">
        <div class="col-4">
            <img src="{{asset('img/livraria-traca-de-livros/tela1.PNG')}}" class="img-fluid">
        </div>
        <div class="col-4">
            <img src="{{asset('img/livraria-traca-de-livros/tela2.PNG')}}" class="img-fluid">
        </div>
        <div class="col-4">
            <img src="{{asset('img/livraria-traca-de-livros/tela3.PNG')}}" class="img-fluid">
        </div>
    </div>
    <br>


@endsection
