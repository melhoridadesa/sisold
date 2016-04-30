<?php

	class Contato{
		private $id;
		private $nome;
		private $email;
		private $mensagem;
		private $data;

		public function setId($value){
			$this->id = $value;
		}

		public function getId(){
			return $this->id;
		}

		public function setNome($value){
			$this->nome = $value;
		}

		public function getNome(){
			return $this->nome;
		}

		public function setEmail($value){
			$this->email = $value;
		}

		public function getEmail(){
			return $this->email;
		}

		public function setMensagem($value){
			$this->mensagem = $value;
		}

		public function getMensagem(){
			return $this->email;
		}

		public function setData($value){
			$this->data = $value;
		}

		public function getData(){
			return $this->data;
		}

		public function gravar(){
			//
		}
	}