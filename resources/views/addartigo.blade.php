@extends('adminlte::page')

@section('title', 'Painel Administrativo - Adicionar Artigo')

@section('content_header')
    <h1>Adicionar Artigo</h1>
@stop

@section('content')
	@if (session('status'))
                        <div class="alert alert-danger" role="alert">
                            {{ session('status') }}
                        </div>
     @endif
    	<form id="form_18809" class="appnitro" enctype="multipart/form-data" method="post" action="/painel/artigo/addArtigo">
			{{ csrf_field() }}
					<div class="form_description">
			
			<p>Adicionando artigo ao website.</p>
		</div>				
		<br>		
			<ul >
			
					<li id="li_1" >
		<label class="description" for="titulo_art">Titulo </label>
		<div>
			<input id="titulo_art" name="titulo_art" class="element text medium" type="text" maxlength="255" value=""/> 
		</div> 
		</li>
		<br><br>		<li id="li_2" >
		<label class="description" for="desc_art">Descrição </label>
		<div>
			<textarea id="desc_art" name="desc_art" class="element textarea medium ckeditor"></textarea> 
		</div> 
		</li>	<br><br>	<li id="li_3" >
		<label class="description" for="texto_art">Conteúdo do Artigo </label>
		<div>
			<textarea id="texto_art" name="texto_art" class="element textarea medium ckeditor"></textarea> 
		</div><p class="guidelines" id="guide_3"><small>
</small></p> 
		</li>	<br><br>	<li id="li_4" >
		<label class="description" for="tags_art">Meta-tags </label>
		<div>
			<input id="tags_art" name="tags_art" class="element text large" type="text" maxlength="255" value=""/> 
		</div> 
		</li>	<br><br>	<li id="li_5" >
		<label class="description" for="figura_art">Figura Principal </label>
		<div>
			<input id="figura_art" name="figura_art" class="element file" type="file"/> 
		</div>  
		</li>
		<br><br>
		<li id="li_5" >
		<label class="description" for="figura_art">Categoria </label>
		<div>
			<select name="categoria_art">
			  <option value="artigo">Artigo</option>
			  <option value="dieta">Dieta</option>
			  <option value="suplem">Suplemento</option>
			  <option value="exerc">Exercicio</option>
			</select>
		</div>  
		</li><br><br><br>
			
					<li class="buttons" style="list-style: none;">
			    <input type="hidden" name="form_id" value="18809" />
			    
				<input id="saveForm" class="button_text" type="submit" name="submit" value="Adicionar Artigo" />
		</li>
			</ul>
		</form>	
	</div>
	<img id="bottom" src="filespainel/bottom.png" alt="">
@stop

@section('css')
<link rel="stylesheet" type="text/css" href="filespainel/view.css" media="all">
<script type="text/javascript" src="filespainel/view.js"></script>
<script src="//cdn.ckeditor.com/4.10.0/full/ckeditor.js"></script>
@stop