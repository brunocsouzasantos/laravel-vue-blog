@extends('layouts.app')

@section('content')
  <pagina tamanho="12">
    <painel titulo="Lista de Artigos">
      
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
@endsection
