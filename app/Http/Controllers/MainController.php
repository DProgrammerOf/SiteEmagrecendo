<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Artigo;
use App\Dieta;
use App\Exercicio;
use App\Suplemento;

class MainController extends Controller
{

	public function index(){
		$UltimoArtigo = new Artigo;
		$artigos = $UltimoArtigo->getArtigosPopulares();
		$artigodestaque = $UltimoArtigo->getArtigoDestaque();

		$suplementos = new Suplemento;
		$exercicios = new Exercicio;
		$dietas = new Dieta;

		$suplementos = $suplementos->getTop();
		$exercicios = $exercicios->getTop();
		$dietas = $dietas->getTop();

		$titulo = 'Artigos, receitas, exercícios e muito mais para você perder peso.';
		return view('website.pages.home', compact('titulo', 'artigos', 'artigodestaque', 'suplementos', 'exercicios', 'dietas'));
	}

	public function indexMyTv(){
		return view('website.pages.tv');
	}

	public function canalESPN(){
		return view('website.pages.espn');
	}

	public function canalFOXSPORTS(){
		return view('website.pages.foxsports');
	}

	public function indexArtigo($artigo){
		$UltimoArtigo = new Artigo;
		$artigos = $UltimoArtigo->getArtigosPopulares();
		$artigo = $UltimoArtigo->getArtigo($artigo);

		$titulo = $artigo->titulo;
		return view('website.pages.artigo', compact('titulo', 'artigos', 'artigo'));
	}

	public function indexTreino($treino){
		$UltimoArtigo = new Exercicio;
		$artigos = $UltimoArtigo->getArtigosPopulares();
		$artigo = $UltimoArtigo->getExercicio($treino);

		$titulo = $artigo->titulo;
		return view('website.pages.artigo', compact('titulo', 'artigos', 'artigo'));
	}

	public function indexSuplemento($suplemento){
		$UltimoArtigo = new Suplemento;
		$artigos = $UltimoArtigo->getArtigosPopulares();
		$artigo = $UltimoArtigo->getSuplemento($suplemento);

		$titulo = $artigo->titulo;
		return view('website.pages.artigo', compact('titulo', 'artigos', 'artigo'));
	}

	public function indexDieta($dieta){
		$UltimoArtigo = new Dieta;
		$artigos = $UltimoArtigo->getArtigosPopulares();
		$artigo = $UltimoArtigo->getDieta($dieta);

		$titulo = $artigo->titulo;
		return view('website.pages.artigo', compact('titulo', 'artigos', 'artigo'));
	}

	public function indexEditArtigo($artigo){
		$UltimoArtigo = new Artigo;
		$artigo = $UltimoArtigo->getArtigoId($artigo);

		return view('editartigo', ['artigo' => $artigo]);
	}

	public function indexEditDieta($dieta){
		$UltimoDieta = new Dieta;
		$dieta = $UltimoDieta->getDietaId($dieta);

		return view('editdieta', ['dieta' => $dieta]);
	}

	public function indexEditSuplemento($suplemento){
		$UltimoSuplemento = new Suplemento;
		$suplemento = $UltimoSuplemento->getSuplementoId($suplemento);

		return view('editsuplemento', ['suplemento' => $suplemento]);
	}

	public function indexEditExercicio($exercicio){
		$UltimoExercicio = new Exercicio;
		$exercicio = $UltimoExercicio->getExercicioId($exercicio);

		return view('editexercicio', ['exercicio' => $exercicio]);
	}

	public function indexArtigos(){
		$todosArtigos 			= new Artigo;
		$artigos 				= $todosArtigos->orderBy('id', 'desc')->get();

		$todosDietas 			= new Dieta;
		$dietas 				= $todosDietas->orderBy('id', 'desc')->get();

		$todosSuplementos 		= new Suplemento;
		$suplementos 			= $todosSuplementos->orderBy('id', 'desc')->get();

		$todosExercicios 		= new Exercicio;
		$exercicios 			= $todosExercicios->orderBy('id', 'desc')->get();

		return view('artigos', ['artigos' => $artigos, 'dietas' => $dietas, 'suplementos' => $suplementos, 'exercicios' => $exercicios]);
	}

	public function indexProdutos(){
		$titulo = 'E-Books para ajudar em sua dieta.';
		return view('website.pages.produtos', compact('titulo'));
	}

	public function indexReceitas(){	
		$titulo = 'Receitas que irão salvar sua dieta.';
		return view('website.pages.receitas', compact('titulo'));
	}

	public function indexAdmin(){
		return view('addartigo');
	}

	public function delArtigo($artigo){
		$Artigo = new Artigo;
		if($Artigo->delArtigo($artigo))
			return redirect('painel')->with('status', 'Artigo removido com sucesso!');
		else
			return "Artigo não pode ser removido, avise para o Renan!";
	}

	public function delDieta($dieta){
		$Dieta = new Dieta;
		if($Dieta->delDieta($dieta))
			return redirect('painel')->with('status', 'Dieta removido com sucesso!');
		else
			return "Dieta não pode ser removido, avise para o Renan!";
	}

	public function delSuplemento($suplemento){
		$Suplemento = new Suplemento;
		if($Suplemento->delSuplemento($suplemento))
			return redirect('painel')->with('status', 'Suplemento removido com sucesso!');
		else
			return "Suplemento não pode ser removido, avise para o Renan!";
	}

	public function delExercicio($exercicio){
		$Exercicio = new Exercicio;
		if($Exercicio->delExercicio($exercicio))
			return redirect('painel')->with('status', 'Exercicio removido com sucesso!');
		else
			return "Exercicio não pode ser removido, avise para o Renan!";
	}

	public function editArtigo(Request $request){
		if($request->all()){
			//dd($request->all());

			$Id = $request->input('id_art');
			if( !empty($request->input('titulo_art')) &&
				!empty($request->input('desc_art')) &&
				!empty($request->input('texto_art')) &&
				!empty($request->input('tags_art'))
			){
				$Titulo 	= $request->input('titulo_art');
				$Descricao 	= $request->input('desc_art');
				$Conteudo 	= $request->input('texto_art');
				$Tags 		= $request->input('tags_art');
				
			         
			        $Artigo = new Artigo;
			        if($Artigo->attArtigo($Id, $Titulo, $Descricao, $Conteudo, $Tags))
			        	return redirect('painel')->with('status', 'Artigo atualizado com sucesso!');
			        else
			        	return "Artigo não pode ser alterado, avise para o Renan!";
			 
			    }else{
			    	return redirect('painel/artigo/'.$Id.'/edit')->with('status', "Você não preencheu todos os campos do artigo, tente novamente.");
			    }
		}
	}

	public function editDieta(Request $request){
		if($request->all()){
			//dd($request->all());

			$Id = $request->input('id_art');
			if( !empty($request->input('titulo_art')) &&
				!empty($request->input('desc_art')) &&
				!empty($request->input('texto_art')) &&
				!empty($request->input('tags_art'))
			){
				$Titulo 	= $request->input('titulo_art');
				$Descricao 	= $request->input('desc_art');
				$Conteudo 	= $request->input('texto_art');
				$Tags 		= $request->input('tags_art');
				
			         
			        $Dieta = new Dieta;
			        if($Dieta->attDieta($Id, $Titulo, $Descricao, $Conteudo, $Tags))
			        	return redirect('painel')->with('status', 'Dieta atualizado com sucesso!');
			        else
			        	return "Dieta não pode ser alterado, avise para o Renan!";
			 
			    }else{
			    	return redirect('painel/dieta/'.$Id.'/edit')->with('status', "Você não preencheu todos os campos do dieta, tente novamente.");
			    }
		}
	}

	public function editSuplemento(Request $request){
		if($request->all()){
			//dd($request->all());

			$Id = $request->input('id_art');
			if( !empty($request->input('titulo_art')) &&
				!empty($request->input('desc_art')) &&
				!empty($request->input('texto_art')) &&
				!empty($request->input('tags_art'))
			){
				$Titulo 	= $request->input('titulo_art');
				$Descricao 	= $request->input('desc_art');
				$Conteudo 	= $request->input('texto_art');
				$Tags 		= $request->input('tags_art');
				
			         
			        $Suplemento = new Suplemento;
			        if($Suplemento->attSuplemento($Id, $Titulo, $Descricao, $Conteudo, $Tags))
			        	return redirect('painel')->with('status', 'Suplemento atualizado com sucesso!');
			        else
			        	return "Suplemento não pode ser alterado, avise para o Renan!";
			 
			    }else{
			    	return redirect('painel/suplemento/'.$Id.'/edit')->with('status', "Você não preencheu todos os campos do suplemento, tente novamente.");
			    }
		}
	}

	public function editExercicio(Request $request){
		if($request->all()){
			//dd($request->all());

			$Id = $request->input('id_art');
			if( !empty($request->input('titulo_art')) &&
				!empty($request->input('desc_art')) &&
				!empty($request->input('texto_art')) &&
				!empty($request->input('tags_art'))
			){
				$Titulo 	= $request->input('titulo_art');
				$Descricao 	= $request->input('desc_art');
				$Conteudo 	= $request->input('texto_art');
				$Tags 		= $request->input('tags_art');
				
			         
			        $Exercicio = new Exercicio;
			        if($Exercicio->attExercicio($Id, $Titulo, $Descricao, $Conteudo, $Tags))
			        	return redirect('painel')->with('status', 'Exercicio atualizado com sucesso!');
			        else
			        	return "Exercicio não pode ser alterado, avise para o Renan!";
			 
			    }else{
			    	return redirect('painel/exercicio/'.$Id.'/edit')->with('status', "Você não preencheu todos os campos do exercicio, tente novamente.");
			    }
		}
	}

	public function addArtigo(Request $request){
		if($request->all()){
			//dd($request->all());

			if($request->has(['titulo_art', 'desc_art', 'texto_art', 'tags_art'])){

				$Titulo 	= $request->input('titulo_art');
				$Descricao 	= $request->input('desc_art');
				$Conteudo 	= $request->input('texto_art');
				$Tags 		= $request->input('tags_art');
				$Categoria  = $request->input('categoria_art');
				 // Define o valor default para a variável que contém o nome da imagem 
			    $nameFile = null;
			 
			    // Verifica se informou o arquivo e se é válido
			    if ($request->hasFile('figura_art') && $request->file('figura_art')->isValid()) {
			         
			        // Define um aleatório para o arquivo baseado no timestamps atual
			        $name = uniqid(date('HisYmd'));
			 
			        // Recupera a extensão do arquivo
			        $extension =  $request->file('figura_art')->extension();
			 
			        // Define finalmente o nome
			        $nameFile = "{$name}.{$extension}";
			 
			        // Faz o upload:
			        $upload = $request->file('figura_art')->storeAs('artigos', $nameFile);
			        // Se tiver funcionado o arquivo foi armazenado em storage/app/public/categories/nomedinamicoarquivo.extensao
			 
			        // Verifica se NÃO deu certo o upload (Redireciona de volta)
			        if ( !$upload )
			            return "FALHA NO UPLOAD";

			        switch ($Categoria) {
			        	case 'artigo':
			        			$Artigo = new Artigo;
			        			if($Artigo->newArtigo($Titulo, $Descricao, $Conteudo, $Tags, $nameFile))
						        	return redirect('painel')->with('status', 'Artigo adicionado!');
						        else
						        	return "Artigo não pode ser criado, avise para o Renan!";
			        		break;
			        	case 'dieta':
			        			$Dieta = new Dieta;
			        			if($Dieta->newDieta($Titulo, $Descricao, $Conteudo, $Tags, $nameFile))
						        	return redirect('painel')->with('status', 'Dieta adicionada!');
						        else
						        	return "Dieta não pode ser criada, avise para o Renan!";
			        		break;
			        	case 'suplem':
			        			$Suplemento = new Suplemento;
			        			if($Suplemento->newSuplemento($Titulo, $Descricao, $Conteudo, $Tags, $nameFile))
						        	return redirect('painel')->with('status', 'Suplemento adicionado!');
						        else
						        	return "Suplemento não pode ser criado, avise para o Renan!";
			        		break;
			        	case 'exerc':
			        			$Exercicio = new Exercicio;
			        			if($Exercicio->newExercicio($Titulo, $Descricao, $Conteudo, $Tags, $nameFile))
						        	return redirect('painel')->with('status', 'Exercicio adicionado!');
						        else
						        	return "Exercicio não pode ser criado, avise para o Renan!";
			        		break;
			        	
			        	default:
			        		return "Artigo não pode ser criado, avise para o Renan!";
			        		break;
			        }
			 
			    }else{
			    	return redirect('painel/artigo/add')->with('status', "Você não preencheu todos os campos do artigo, tente novamente.");
			    }
			}
		}
	}
    //
}
