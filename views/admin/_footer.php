	<!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- valida campo CPF -->
    <script src="js/maskedinput.min.js"></script>

    <script type="text/javascript">

    //valida se o email eh valido
	function validaEmail(){
	    var email = $("#email").val();
	    var filtro = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i;
	    if(filtro.test(email)){
	        return true;
	    }else{
	        return false;
	    }
	}

	function verificaIdoso() {
	    var i = 0;
	    var msg = 'Erro, tem campo a ser preenchido:\n\n';
	    //
	    //
	    //
	    if (document.getElementById('cpf').value == '') {
	        $('#cpf').css({ border: '1px solid #ee1c25', })
	        msg = msg+'- CPF.\n';
	        i++;
	    } else {
	        $('#cpf').css({ border: '1px solid #ebebeb', })
	    }
	    //
	    if (document.getElementById('nome').value == '') {
	        $('#nome').css({ border: '1px solid #ee1c25', })
	        msg = msg+'- Nome.\n';
	        i++;
	    } else {
	        $('#nome').css({ border: '1px solid #ebebeb', })
	    }
	    //
	    if (document.getElementById('data_nascimento').value == '') {
	        $('#data_nascimento').css({ border: '1px solid #ee1c25', })
	        msg = msg+'- Data de Nascimento.\n';
	        i++;
	    } else {
	        $('#data_nascimento').css({ border: '1px solid #ebebeb', })
	    }
	    //
	    if (document.getElementById('nome_contato').value == '') {
	        $('#nome_contato').css({ border: '1px solid #ee1c25', })
	        msg = msg+'- Nome do Contato.\n';
	        i++;
	    } else {
	        $('#nome_contato').css({ border: '1px solid #ebebeb', })
	    }
	    //
	    if (document.getElementById('grau_parentesco').value == '') {
	        $('#grau_parentesco').css({ border: '1px solid #ee1c25', })
	        msg = msg+'- Grau de Parentesco.\n';
	        i++;
	    } else {
	        $('#grau_parentesco').css({ border: '1px solid #ebebeb', })
	    }
	    //
	    if (document.getElementById('telefone_contato').value == '') {
	        $('#telefone_contato').css({ border: '1px solid #ee1c25', })
	        msg = msg+'- Telefone de Contato.\n';
	        i++;
	    } else {
	        $('#telefone_contato').css({ border: '1px solid #ebebeb', })
	    }
	    //
	    if (document.getElementById('celular_contato').value == '') {
	        $('#celular_contato').css({ border: '1px solid #ee1c25', })
	        msg = msg+'- Celular de Contato.\n';
	        i++;
	    } else {
	        $('#celular_contato').css({ border: '1px solid #ebebeb', })
	    }    
	    
	    //
	    //
	    if (i > 0) {
	        alert(msg);
	        return false;
	    } else {
	        return true;
	    }
	}

	function verificaUser(){
		var i = 0;
	    var msg = 'Erro, tem campo a ser preenchido:\n\n';

	    if (document.getElementById('nome').value == '') {
	        $('#nome').css({ border: '1px solid #ee1c25', })
	        msg = msg+'- Nome.\n';
	        i++;
	    } else {
	        $('#nome').css({ border: '1px solid #ebebeb', })
	    }

	    if ($('#email').val() == ''){
	        $('#email').css({'border':'1px solid #ee1c25'});
	        msg = msg+'- E-mail.\n';
	        i++;
	    }else if (!validaEmail()) {
	        $('#email').css({'border':'1px solid #ee1c25'});
	        msg = msg+'- E-mail invalido\n';
	        i++;
	    }else{
	        $('#email').css({'border':'1px solid #ebebeb'});  
	    }

	    if (document.getElementById('senha').value == '') {
	        $('#senha').css({ border: '1px solid #ee1c25', })
	        msg = msg+'- Senha.\n';
	        i++;
	    } else {
	        $('#senha').css({ border: '1px solid #ebebeb', })
	    }

	    if (document.getElementById('confirmaSenha').value == '') {
	        $('#confirmaSenha').css({ border: '1px solid #ee1c25', })
	        msg = msg+'- Confirmar Senha.\n';
	        i++;
	    } else {
	        $('#confirmaSenha').css({ border: '1px solid #ebebeb', })
	    }

	    if (document.getElementById('cpf').value == '') {
	        $('#cpf').css({ border: '1px solid #ee1c25', })
	        msg = msg+'- CPF.\n';
	        i++;
	    } else {
	        $('#cpf').css({ border: '1px solid #ebebeb', })
	    }

		if (i > 0) {
	        alert(msg);
	        return false;
	    } else {
	        return true;
	    }
	}

	jQuery(function($){
	   $("#cpf").mask("999.999.999-99");
	   $("#data_nascimento").mask("99/99/9999");
	   $("#telefone_contato").mask("(99)9999-9999");
	   $("#celular_contato").mask("(99)99999-9999");
	});
</script>