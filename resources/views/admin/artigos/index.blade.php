@extends('layouts.app')

@section('content')
  <pagina tamanho="12">
    <painel titulo="Lista de Artigos">

      <migalhas :lista="{{$listaMigalhas}}"></migalhas>

      <modallink tipo="button" nome="meuModalTeste" titulo="Criar"></modallink>

        <tabela-lista 
            v-bind:titulos="['#', 'Nome', 'Descrição']"
            v-bind:itens="[[1,'PHP OO', 'Curso de PHP OO'],
                          ['2','Java', 'Curso de Java'],
                          ['3','Delphi', 'Curso Delphi Js'],
                          ['4','Vue JS', 'Curso de Vue Js']]"
          ordem="desc" ordemcol="1"
          criar="#criar" detalhe="#detalhe" editar="#editar" deletar="#deletar" token="5464654687687"
                          
        ></tabela-lista>

    </painel>

  </pagina>

  <modal nome="meuModalTeste">
    <painel titulo="Adicionar">
     <formulario css="" action="" method="put" enctype="" token="">

      <div class="form-group">
        <label for="titulo">Título</label>
        <input type="text" class="form-control" id="titulo" name="titulo" placeholder="Título">
      </div>
      <div class="form-group">
        <label for="descricao">Descrição</label>
        <input type="text" class="form-control" id="descricao" name="descricao" placeholder="Descrição">
      </div>
      <button class="btn btn-info">Adicionar</button>
     </formulario>
    </painel>
  </modal>

@endsection
