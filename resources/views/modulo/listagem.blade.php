@extends('layout.principal')
@section('conteudo')
<div class="container">
  <h1>Listagem Módulos</h1>     
  <div class="row">
    <div class="col-sm-6 col-md-3">
      <div class="thumbnail">
        <h2 class="text-center">Retiradas</h2>
        <div class="caption">
          <li class="list-group-item"><a href="{{ route('Cadastrar Venda') }}">Cadastrar Retirada</a></li>
          <li class="list-group-item"><a href="{{ route('Listar Vendas') }}">Listar Retiradas</a></li>
        </div>
      </div>
    </div>    
    <div class="col-sm-6 col-md-3">
      <div class="thumbnail">
        <h2 class="text-center">Produto</h2>
        <div class="caption">
          <li class="list-group-item"><a href="{{ route('Listar Produtos') }}">Listar Produtos</a></li>
          <li class="list-group-item"><a href="{{ route('Cadastrar Produto') }}">Cadastrar Produto</a></li>
        </div>
      </div>
    </div>    
    <div class="col-sm-6 col-md-3">
      <div class="thumbnail">
        <h2 class="text-center">Destaque</h2>
        <div class="caption">
          <li class="list-group-item"><a href="{{ route('Listar Destaques') }}">Listar Destaques</a></li>
          <li class="list-group-item"><a href="{{ route('Listar GrupoProdutos') }}">Listar Grupo Produto</a></li>
        </div>
      </div>
    </div>   
    <div class="col-sm-6 col-md-3">
      <div class="thumbnail">
        <h2 class="text-center">Entrada</h2>
        <div class="caption">
          <li class="list-group-item"><a href="{{ route('Cadastrar Entrada') }}">Cadastrar Entrada</a></li>
          <li class="list-group-item"><a href="{{ route('Listar Entradas') }}">Listar Entradas</a></li>
        </div>
      </div>
    </div>    
    <div class="col-sm-6 col-md-3">
      <div class="thumbnail">
        <h2 class="text-center">Saída</h2>
        <div class="caption">
          <li class="list-group-item"><a href="{{ route('Listar Saidas') }}">Listar Saídas</a></li>
        </div>
      </div>
    </div>    
    <div class="col-sm-6 col-md-3">
      <div class="thumbnail">
        <h2 class="text-center">Cliente</h2>
        <div class="caption">
          <li class="list-group-item"><a href="{{ route('Cadastrar Cliente') }}">Cadastrar Cliente</a></li>
          <li class="list-group-item"><a href="{{ route('Listar Clientes') }}">Listar Clientes</a></li>
        </div>
      </div>
    </div>    
    <div class="col-sm-6 col-md-3">
      <div class="thumbnail">
        <h2 class="text-center">Relatório</h2>
        <div class="caption">
          <li class="list-group-item"><a href="{{ route('Listar Relatorios') }}">Listar Relatorios</a></li>
        </div>
      </div>
    </div>
  </div> 
</div>
@stop