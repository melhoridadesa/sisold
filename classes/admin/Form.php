<?php

	class Form{
		
		private $id;
	  	private $descricao;
	  	private $categoria;
	  	private $criacao_datahora;
	  	private $atualizacao_datahora;

	  	public function setId($value){
	  		$this->id = $value;
	  	}

	  	public function setDescricao($value){
	  		$this->descricao = $value;
	  	}

	  	public function setCategoria($value){
	  		$this->categoria = $value;
	  	}

	  	public function setCriacao_datahora($value){
	  		$this->criacao_datahora = $value;
	  	}

	  	public function setAtualizacao_datahora($value){
	  		$this->atualizacao_datahora = $value;
	  	}

	  	public function getId(){
	  		return $this->id;
	  	}

	  	public function getDescricao(){
	  		return $this->descricao;
	  	}

	  	public function getCategoria(){
	  		return $this->categoria;
	  	}

	  	public function getCriacao_datahora(){
	  		return $this->criacao_datahora;
	  	}

	  	public function getAtualizacao_datahora(){
	  		return $this->atualizacao_datahora;
	  	}
}