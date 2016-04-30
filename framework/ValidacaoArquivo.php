<?php

class ValidacaoArquivo {
	public function validaArquivo($arq) {
		// Implementar a rotina para verificar se o arquivo existe ou nao
		return (file_exists($arq) && !is_dir($arq));
	}
}

/*$va = new ValidacaoArquivo();
echo ("teste".$va->validaArquivo('teste.php')."</br>");
echo ("teste2".$va->validaArquivo('teste2.php')."</br>");
var_dump ($va->validaArquivo('teste2.php'));*/