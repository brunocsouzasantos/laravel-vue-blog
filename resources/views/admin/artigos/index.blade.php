@extends('layouts.app')

@section('content')
  <pagina tamanho="12">
    <painel titulo="Lista de Artigos">
      
        <tabela-lista 
            v-bind:titulos="['#', 'Nome', 'Descrição']"
            v-bind:itens="[[1,'PHP OO', 'Curso de PHP OO'],
                          ['2','Vue JS', 'Curso de Vue Js'],
                          ['3','Vue JS', 'Curso de Vue Js'],
                          ['4','Vue JS', 'Curso de Vue Js']]"
            
          criar="#criar" detalhe="#detalhe" editar="#editar" deletar="#deletar" token="5464654687687"
                          
        ></tabela-lista>

    </painel>

  </pagina>
@endsection
