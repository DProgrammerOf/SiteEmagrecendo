<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Suplemento extends Model
{
    //
    protected $table = 'suplementos';

    protected $fillable = [ 'autor_id', 'titulo', 'titulo_slug', 'descricao', 'conteudo', 'tags', 'figura'];

    public function getTop(){
    	return $this->take(3)->get();
    }

    public function getSuplemento($titulo){
		return $this->where('titulo_slug', $titulo)->first();
	}

    public function getSuplementoId($id){
		return $this->where('id', $id)->first();
	}

	public function getArtigosPopulares(){
		return $this->latest()->take(6)->get();
	}

	public function attSuplemento($id, $titulo, $descricao, $conteudo, $tags){
		return $this->where('id', $id)->update([
			'titulo' 		=> 	$titulo,
			'titulo_slug'	=>	str_slug($titulo),
			'descricao'		=> 	$descricao,
			'conteudo'		=> 	$conteudo,
			'tags'			=>	$tags,
		]);
	}

	public function delSuplemento($id){
		return $this->where('id', $id)->delete();
	}

    public function newSuplemento($titulo, $descricao, $conteudo, $tags, $figura){
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
}
