<?php

	class Pagina{

		private $pagina;

		public function setPagina($value){
			$this->pagina = $value;
		}

		public function getPagina(){
			return $this->pagina;
		}

		public function includePage(){
			return $this->pagina.'.php';
		}

		public function pageExists(){
			// consumo do framw
		}

	}