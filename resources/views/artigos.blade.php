@extends('adminlte::page')

@section('title', 'Painel Administrativo - Artigos')

@section('content_header')
    <h1>Painel de Postagens</h1>
@stop

@section('content')
 	<div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">Artigos</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table class="table table-bordered">
                <tbody><tr>
                  <th style="width: 10px">#</th>
                  <th>Título</th>
                  <th style="width: 40px"></th>
                  <th style="width: 40px"></th>
                </tr>

                @foreach($artigos as $key => $artigo)
                <tr>
                  <td colspan="2">{{$artigo->titulo}}</td>
                  <td>
			                   <a href="/painel/artigo/{{$artigo->id}}/edit" class="btn btn-warning btn-lg">
			          <span class="glyphicon glyphicon-edit"></span> Editar
			        </a>
                  </td>
                  <td><a href="#" class="btn btn-danger btn-lg" onclick="ConfirmDelete({{$artigo->id}},1)">
			          <span class="glyphicon glyphicon-remove"></span> Remover 
			        </a></td>
                </tr>
                @endforeach
                
              </tbody></table>
            </div>
            <!-- /.box-body -->
          </div>

  <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">Dietas</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table class="table table-bordered">
                <tbody><tr>
                  <th style="width: 10px">#</th>
                  <th>Título</th>
                  <th style="width: 40px"></th>
                  <th style="width: 40px"></th>
                </tr>

                @foreach($dietas as $key => $dieta)
                <tr>
                  <td colspan="2">{{$dieta->titulo}}</td>
                  <td>
                         <a href="/painel/dieta/{{$dieta->id}}/edit" class="btn btn-warning btn-lg">
                <span class="glyphicon glyphicon-edit"></span> Editar
              </a>
                  </td>
                  <td><a href="#" class="btn btn-danger btn-lg" onclick="ConfirmDelete({{$dieta->id}},2)">
                <span class="glyphicon glyphicon-remove"></span> Remover 
              </a></td>
                </tr>
                @endforeach
                
              </tbody></table>
            </div>
            <!-- /.box-body -->
          </div>

    <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">Suplementos</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table class="table table-bordered">
                <tbody><tr>
                  <th style="width: 10px">#</th>
                  <th>Título</th>
                  <th style="width: 40px"></th>
                  <th style="width: 40px"></th>
                </tr>

                @foreach($suplementos as $key => $suplemento)
                <tr>
                  <td colspan="2">{{$suplemento->titulo}}</td>
                  <td>
                         <a href="/painel/suplemento/{{$suplemento->id}}/edit" class="btn btn-warning btn-lg">
                <span class="glyphicon glyphicon-edit"></span> Editar
              </a>
                  </td>
                  <td><a href="#" class="btn btn-danger btn-lg" onclick="ConfirmDelete({{$suplemento->id}},3)">
                <span class="glyphicon glyphicon-remove"></span> Remover 
              </a></td>
                </tr>
                @endforeach
                
              </tbody></table>
            </div>
            <!-- /.box-body -->
          </div>

      <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">Exercicios</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table class="table table-bordered">
                <tbody><tr>
                  <th style="width: 10px">#</th>
                  <th>Título</th>
                  <th style="width: 40px"></th>
                  <th style="width: 40px"></th>
                </tr>

                @foreach($exercicios as $key => $exercicio)
                <tr>
                  <td colspan="2">{{$exercicio->titulo}}</td>
                  <td>
                         <a href="/painel/exercicio/{{$exercicio->id}}/edit" class="btn btn-warning btn-lg">
                <span class="glyphicon glyphicon-edit"></span> Editar
              </a>
                  </td>
                  <td><a href="#" class="btn btn-danger btn-lg" onclick="ConfirmDelete({{$exercicio->id}},4)">
                <span class="glyphicon glyphicon-remove"></span> Remover 
              </a></td>
                </tr>
                @endforeach
                
              </tbody></table>
            </div>
            <!-- /.box-body -->
          </div>
          <script type="text/javascript">
          	function ConfirmDelete($id, $categoria)
			{
        switch($categoria){
            case 1:
             var x = confirm("Tem certeza que quer deletar esse Artigo?");
              if (x)
                  window.location.replace("https://emagrecendocomdieta.com.br/painel/artigo/"+$id+"/del");
          break;

            case 2:
             var x = confirm("Tem certeza que quer deletar essa Dieta?");
              if (x)
                  window.location.replace("https://emagrecendocomdieta.com.br/painel/dieta/"+$id+"/del");
          break;

            case 3:
             var x = confirm("Tem certeza que quer deletar esse Suplemento?");
              if (x)
                  window.location.replace("https://emagrecendocomdieta.com.br/painel/suplemento/"+$id+"/del");
          break;

            case 4:
             var x = confirm("Tem certeza que quer deletar esse Exercicio?");
              if (x)
                  window.location.replace("https://emagrecendocomdieta.com.br/painel/exercicio/"+$id+"/del");
          break;

            default:
          break;
        }
			}</script>
@stop
