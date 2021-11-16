@extends('layout.principal')
@section('conteudo')

<form class="form-horizontal" method="post" action="/CadastrarCategoria/adiciona">
      <fieldset>

      <!-- Form Name -->
      <legend>Cadastro de Categoria</legend>

      <!-- Text input-->
        <div class="form-group">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <label class="col-md-4 control-label" for="textinput">Nome</label>  
            <div class="col-md-4">
                <input id="textinput" name="nome" value="{{ old('nome') }}" type="text" placeholder="Insira nome da categoria" class="form-control input-md" required>  
            </div>
        </div>

        <!-- Text Area-->
        <div class="form-group">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <label class="col-md-4 control-label" for="textarea">Descrição</label>  
            <div class="col-md-4">
                <textarea id="textarea" name="descricao" value="{{ old('descricao') }}" class="form-control input-md" required> </textarea>
                <small id="textarea" class="form-text text-muted">*Campo não obrigatório</small>
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