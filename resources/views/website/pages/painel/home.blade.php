<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Emagrecendo com Dieta - {{ $titulo }}</title>
<link rel="stylesheet" type="text/css" href="filespainel/view.css" media="all">
<script type="text/javascript" src="filespainel/view.js"></script>
<script src="//cdn.ckeditor.com/4.10.0/full/ckeditor.js"></script>

</head>
<body id="main_body" >
	<div id="form_container">
	
		<h1><a>PAINEL ADMINISTRATIVO</a></h1>
		<form id="form_18809" class="appnitro" enctype="multipart/form-data" method="post" action="addArtigo">
			{{ csrf_field() }}
					<div class="form_description">
			<h2>PAINEL ADMINISTRATIVO</h2>
			<p>Adicionando artigo ao website.</p>
		</div>						
			<ul >
			
					<li id="li_1" >
		<label class="description" for="titulo_art">Titulo </label>
		<div>
			<input id="titulo_art" name="titulo_art" class="element text medium" type="text" maxlength="255" value=""/> 
		</div> 
		</li>		<li id="li_2" >
		<label class="description" for="desc_art">Descrição </label>
		<div>
			<textarea id="desc_art" name="desc_art" class="element textarea medium ckeditor"></textarea> 
		</div> 
		</li>		<li id="li_3" >
		<label class="description" for="texto_art">Conteúdo do Artigo </label>
		<div>
			<textarea id="texto_art" name="texto_art" class="element textarea medium ckeditor"></textarea> 
		</div><p class="guidelines" id="guide_3"><small>
</small></p> 
		</li>		<li id="li_4" >
		<label class="description" for="tags_art">Meta-tags </label>
		<div>
			<input id="tags_art" name="tags_art" class="element text large" type="text" maxlength="255" value=""/> 
		</div> 
		</li>		<li id="li_5" >
		<label class="description" for="figura_art">Figura Principal </label>
		<div>
			<input id="figura_art" name="figura_art" class="element file" type="file"/> 
		</div>  
		</li><br><br><br>
			
					<li class="buttons">
			    <input type="hidden" name="form_id" value="18809" />
			    
				<input id="saveForm" class="button_text" type="submit" name="submit" value="Adicionar Artigo" />
		</li>
			</ul>
		</form>	
	</div>
	<img id="bottom" src="filespainel/bottom.png" alt="">
	</body>
</html>