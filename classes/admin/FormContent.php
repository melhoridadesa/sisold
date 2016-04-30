<?php

	class FormContent{

		private $id;
 		private $form_id;
 		private $content;

 		public function setId($value){
 			$this->id = $value;
 		}

 		public function setForm_id($value){
 			$this->Form_id = $value;
 		}

 		public function setContent($value){
 			$this->content = $value;
 		}

 		public function getId(){
 			return $this->id;
 		}

 		public function getForm_id(){
 			return $this->Form_id;
 		}

 		public function getContent(){
 			return $this->content;
 		}
	} 