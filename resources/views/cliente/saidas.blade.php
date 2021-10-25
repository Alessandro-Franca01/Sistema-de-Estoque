@extends('layout.principal')
@section('conteudo')
<div class="container">
  <h2>Saídas de {{ $cliente->nome }}</h2>     
   
  @if(session()->has('message.level'))
    <div class="alert alert-{{ session('message.level') }}"> 
      {!! session('message.content') !!}
    </div>
  @endif

  <table id="listagem" class="table table-bordered">
    <thead>
      <tr>
        <th>#</th>
        <th>Nome Cliente</th>
        <th>Produto</th>
        <th>Quantidade</th>
        <th>Data de compra</th>
        <th>Horário</th>
      </tr>
    </thead>
    <tbody>
        <!-- FUNCIONANDO: Falta somente fazer pegar os produtos-->
      @foreach($compras as $c)
        <tr>
          <td>{{ $c->id_saida }}</td>
          <td>{{ $c->nome }}</td>
          <td>{{ $c->descricao }}</td>
          <td>{{ $c->quantidade }}</td>
          <td>{{ date('d/m/Y', strtotime($c->created_at)) }}</td>
          <td>{{ date('H:i:s', strtotime($c->created_at)) }}</td>   
        </tr>     
      @endforeach
    </tbody>
  </table>
</div>
@stop