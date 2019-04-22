<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Artigo extends Model
{
	protected $table = 'artigos';


	protected $fillable = [ 'autor_id', 'titulo', 'titulo_slug', 'descricao', 'conteudo', 'tags', 'figura'];

	public function getArtigo($titulo){
		return $this->where('titulo_slug', $titulo)->first();
	}

	public function getArtigoId($id){
		return $this->where('id', $id)->first();
	}

	public function getArtigosPopulares(){
		return $this->latest()->take(6)->get();
	}

	public function getArtigoDestaque(){
		return $this->latest()->first();
	}

	public function attArtigo($id, $titulo, $descricao, $conteudo, $tags){
		return $this->where('id', $id)->update([
			'titulo' 		=> 	$titulo,
			'titulo_slug'	=>	str_slug($titulo),
			'descricao'		=> 	$descricao,
			'conteudo'		=> 	$conteudo,
			'tags'			=>	$tags,
		]);
	}

	public function delArtigo($id){
		return $this->where('id', $id)->delete();
	}

	public function newArtigo($titulo, $descricao, $conteudo, $tags, $figura){
		return $this->create([
			'autor_id'		=>	10,
			'titulo' 		=> 	$titulo,
			'titulo_slug'	=>	str_slug($titulo),
			'descricao'		=> 	$descricao,
			'conteudo'		=> 	$conteudo,
			'tags'			=>	$tags,
			'figura'		=> 	$figura,
		]);
	}

    //
}
