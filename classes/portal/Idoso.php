<?php

	class Idoso{
	
		private $id;
		private $nome;
		private $cpf;
		private $data_nascimento;
		private $nome_contato;
		private $grau_parentesco;
		private $telefone_contato;
		private $celular_contato;
		private $necessidades_especiais;
				
		public function setId($value){
			$this->id = $value;
		}
		
		public function getId(){
			return $this->id;				
		}

		//Nome	
		public function setNome($value){
			$this->nome = $value;
		}
		
		public function getNome(){
			return $this->nome;
		}
				
		//CPF
		public function setCpf($value){
			$this->cpf = $value;
		}
		
		public function getCpf(){
			return $this->cpf;
		}
		
		//DATA_NASCIMENTO
		public function setData_nascimento($value){
			$this->data_nascimento = $value;
		}
		
		public function getData_nascimento(){
			return $this->data_nascimento;
		}
		
		//NOME CONTATO
		public function setNome_contato($value){
			$this->nome_contato = $value;
		}
		
		public function getNome_contato(){
			return $this->nome_contato;
		}
		
		//GRAU PARENTESCO
		public function setGrau_parentesco($value){
			$this->grau_parentesco = $value;
		}
		
		public function getGrau_parentesco(){
			return $this->grau_parentesco;
		}
		
		
		//TELEFONE CONTATO
		public function setTelefone_contato($value){
			$this->telefone_contato = $value;
		}
		
		public function getTelefone_contato(){
			return $this->telefone_contato;
		}
		
		//CELULAR CONTATO
		public function setCelular_contato($value){
			$this->celular_contato = $value;
		}
		
		public function getCelular_contato(){
			return $this->celular_contato;
		}
		
		//Necessidades Especiais	
		public function setNecessidades_especiais($value){
			$this->necessidades_especiais = $value;
		}
		
		public function getNecessidades_especiais(){
			return $this->necessidades_especiais;
		}
				
}