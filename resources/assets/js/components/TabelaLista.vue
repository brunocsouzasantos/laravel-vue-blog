<template>
<div>
  <div>
    <div class="form-line">
      <a v-if="criar" v-bind:href="criar">Criar</a>
      <div class="form-group pull-right">
        <input type="search" placeholder=" Buscar" class="form-control" v-model="buscar" style="border: 1px solid #ddd;">
      </div>
    </div>
  </div>
   

      <table class="table table-striped table-hover">
        <thead>
          <tr>
            <th v-for="titulo in titulos">{{titulo}}</th>

            <th v-if="detalhe || editar || deletar">Ação</th>

          </tr>
        </thead>
        <tbody>
          <tr v-for="(item,index) in lista">
            <td v-for="i in item">{{i}}</td>

            <td v-if="detalhe || editar || deletar">

              <form v-bind:id="index" v-if="deletar && token" v-bind:action="deletar" method="post">

                <input type="hidden" name="_method" value="DELETE">
                <input type="hidden" name="_token" v-bind:value="token">

                <a v-if="detalhe" v-bind:href="detalhe">Detalhe</a>
                <a v-if="editar" v-bind:href="editar"> | Editar</a>
                <a href="#" v-on:click="executaForm(index)"> | Deletar</a>

              </form>

              <!-- Se não tiver o token exibe sem o form, não concordei pq sem o Token não vai efetuar o delete. Então penso que 
              sem o token OU sem o deletar não há pq mostar o link. 
              <span v-if="!token"> 
                <a v-if="detalhe" v-bind:href="detalhe">Detalhe |</a>
                <a v-if="editar" v-bind:href="editar"> Editar |</a>
                <a v-if="deletar" v-bind:href="deletar"> Deletar</a>
              </span>
              -->
               <span v-if="!token || !deletar">
                <a v-if="detalhe" v-bind:href="detalhe">Detalhe</a>
                <a v-if="editar" v-bind:href="editar"> | Editar</a>
              </span>
              

            </td>
          </tr>
        </tbody>

      </table>
</div>
</template>

<script>
    export default {
        props:['titulos','itens', 'criar', 'ordem', 'ordemcol', 'detalhe', 'editar','deletar','token'],
        data: function(){
          return {
            buscar:'',
          }
        },
        methods: {
          executaForm: function(index){
            document.getElementById(index).submit();
          }
        },
        computed: {
          lista:function(){

            let ordem = this.ordem || "asc";
            let ordemCol = this.ordemcol || 0;
            ordem = ordem.toLowerCase();
            ordemCol = parseInt(ordemCol);

            if(ordem == "asc"){
              this.itens.sort(function(a,b){
                if(a[ordemCol]>b[ordemCol]){
                  return 1;
                }
                if(a[ordemCol]<b[ordemCol]){
                  return -1;
                }
                return 0;
              });
            }else{
              this.itens.sort(function(a,b){
                if(a[ordemCol]<b[ordemCol]){
                  return 1;
                }
                if(a[ordemCol]>b[ordemCol]){
                  return -1;
                }
                return 0;
              });
            }

            

            return this.itens.filter(res => {
              for(let posicao = 0; posicao < res.length; posicao++){
                if((res[posicao]+"").toLowerCase().indexOf(this.buscar.toLowerCase()) >= 0){
                  return true;
                }
              } 
              return false;
            });
            return this.itens;
          }
        }
    }
</script>
