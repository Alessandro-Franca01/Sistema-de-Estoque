@extends('layout.principal')
@section('conteudo')
<div class="container">
  <h2>Guardas</h2>     
  <ul>
      <li><a href="{{action('ClienteController@novo')}}">Cadastrar Guardas</a></li>
  </ul>  
  @if(session()->has('message.level'))
    <div class="alert alert-{{ session('message.level') }}"> 
      {!! session('message.content') !!}
    </div>
  @endif

  <table id="listagem" class="table table-bordered">
    <thead>
      <tr>
        <th>#</th>
        <th>Nome Guarda</th>
        <th>CPF</th>
        <th>Celular</th>
        <th>E-Mail</th>
        <th>Saídas</th>
        <th>Editar Guarda</th>
        <th>Remover Guarda</th>
      </tr>
    </thead>
    <tbody>
      @foreach($clientes as $c)
        <tr>
          <td>{{ $c->id_clientes }}</td>
          <td>{{ $c->nome }}</td>
          <td>{{ $c->cpf }}</td>
          <td>{{ $c->celular }}</td>
          <td>{{ $c->email }}</td>
          <td><a href="/Listar/Compras/{{ $c->id_clientes }}"><span class="glyphicon glyphicon-th-list"></span></a></td>
          <td><a href="/ListarCliente/mostrar/{{ $c->id_clientes }}"><span class="glyphicon glyphicon-pencil"></span></a></td>
          <td><a href="/ListarCliente/remove/{{ $c->id_clientes }}"><span class="glyphicon glyphicon-trash"></span></a></td>
        </tr>     

      @endforeach
    </tbody>
  </table>
</div>
@stop