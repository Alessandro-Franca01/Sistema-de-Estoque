@extends('layout.principal')
@section('conteudo')

<form class="form-horizontal" method="post" action="/CadastrarCliente/adiciona">
      <fieldset>

      <!-- Form Name -->
      <legend>Cadastro de GM</legend>

      <!-- Text input-->
        <div class="form-group">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <label class="col-md-4 control-label" for="textinput">Nome</label>  
            <div class="col-md-4">
                <input id="textinput" name="nome" value="{{ old('nome') }}" type="text" placeholder="Insira o nome" class="form-control input-md" required>  
            </div>
        </div> 
        <div class="form-group">
            <label class="col-md-4 control-label" for="textinput">CPF</label>
            <div class="col-md-4">
                <input id="textinput" name="cpf" value="{{ old('cpf') }}" type="text" placeholder="Insira o cpf" class="form-control input-md" required>  
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-4 control-label" for="textinput">Matricula</label>
            <div class="col-md-4">
                <input id="textinput" name="matricula" value="{{ old('matricula') }}" type="text" placeholder="Insira a matricula" class="form-control input-md" required>  
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-4 control-label" for="textinput">Celular</label>  
            <div class="col-md-4">
                <input id="textinput" name="celular" value="{{ old('celular') }}" type="text" placeholder="Número do celular" class="form-control input-md" required>  
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-4 control-label" for="textinput">E-Mail</label>  
            <div class="col-md-4">
                <input id="textinput" name="email" value="{{ old('email') }}" type="text" placeholder="Insira o email" class="form-control input-md">  
            </div>
        </div> 

        <!-- Button -->
        <div class="form-group">
            <label class="col-md-4 control-label" for="salvar"></label>
            <div class="col-md-4">
              <button class="btn btn-success">SALVAR</button>
            </div>
        </div>    

      </fieldset>
</form>



@stop