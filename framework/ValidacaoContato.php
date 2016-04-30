<?php

class ValidacaoContato {
    public function validaEmail ($email) {
    	echo ('</br>'.$email.' ');
        //return ( preg_match('/^(?!(?:(?:\x22?\x5C[\x00-\x7E]\x22?)|(?:\x22?[^\x5C\x22]\x22?)){255,})(?!(?:(?:\x22?\x5C[\x00-\x7E]\x22?)|(?:\x22?[^\x5C\x22]\x22?)){65,}@)(?:(?:[\x21\x23-\x27\x2A\x2B\x2D\x2F-\x39\x3D\x3F\x5E-\x7E]+)|(?:\x22(?:[\x01-\x08\x0B\x0C\x0E-\x1F\x21\x23-\x5B\x5D-\x7F]|(?:\x5C[\x00-\x7F]))*\x22))(?:\.(?:(?:[\x21\x23-\x27\x2A\x2B\x2D\x2F-\x39\x3D\x3F\x5E-\x7E]+)|(?:\x22(?:[\x01-\x08\x0B\x0C\x0E-\x1F\x21\x23-\x5B\x5D-\x7F]|(?:\x5C[\x00-\x7F]))*\x22)))*@(?:(?:(?!.*[^.]{64,})(?:(?:(?:xn--)?[a-z0-9]+(?:-[a-z0-9]+)*\.){1,126}){1,}(?:(?:[a-z][a-z0-9]*)|(?:(?:xn--)[a-z0-9]+))(?:-[a-z0-9]+)*)|(?:\[(?:(?:IPv6:(?:(?:[a-f0-9]{1,4}(?::[a-f0-9]{1,4}){7})|(?:(?!(?:.*[a-f0-9][:\]]){7,})(?:[a-f0-9]{1,4}(?::[a-f0-9]{1,4}){0,5})?::(?:[a-f0-9]{1,4}(?::[a-f0-9]{1,4}){0,5})?)))|(?:(?:IPv6:(?:(?:[a-f0-9]{1,4}(?::[a-f0-9]{1,4}){5}:)|(?:(?!(?:.*[a-f0-9]:){5,})(?:[a-f0-9]{1,4}(?::[a-f0-9]{1,4}){0,3})?::(?:[a-f0-9]{1,4}(?::[a-f0-9]{1,4}){0,3}:)?)))?(?:(?:25[0-5])|(?:2[0-4][0-9])|(?:1[0-9]{2})|(?:[1-9]?[0-9]))(?:\.(?:(?:25[0-5])|(?:2[0-4][0-9])|(?:1[0-9]{2})|(?:[1-9]?[0-9]))){3}))\]))$/iD', $email);
        return filter_var($email, FILTER_VALIDATE_EMAIL);
    }

    public function validaNome ($nome) {
    	//echo ('</br>'.$nome.' ');
    	return preg_match ('/\b([A-Z]{1}[a-z]{1,30}[- ]{0,1}|[A-Z]{1}[- \']{1}[A-Z]{0,1}[a-z]{1,30}[- ]{0,1}|[a-z]{1,2}[ -\']{1}[A-Z]{1}[a-z]{1,30}){2,5}/',$nome);
    }

    public function validaMensagem ($msg) {
        //echo ('</br>'.$msg.' ');
    	return !empty($msg);
    }
}

//$vc = new ValidacaoContato();
/*echo ($vc->validaMensagem('Bom Dia!'));
echo ($vc->validaMensagem('O'));
echo ($vc->validaMensagem(' '));
echo ($vc->validaMensagem('87 + 1 = 89'));
echo ($vc->validaMensagem('$pode sim'));
echo ($vc->validaMensagem('   '));
echo ($vc->validaMensagem('&'));
echo ($vc->validaMensagem(''));*/


/*echo ($vc->validaEmail('teste@teste.com'));
echo ($vc->validaEmail('teste@teste'));
echo ($vc->validaEmail('teste@.com'));
echo ($vc->validaEmail('@teste.com'));
echo ($vc->validaEmail('teste.com'));
echo ($vc->validaEmail('teste.com@gmail.com'));
echo ($vc->validaEmail('teste@a@com.com'));*/

/*echo ($vc->validaNome('a'));
echo ($vc->validaNome('a o'));
echo ($vc->validaNome('jet li'));
echo ($vc->validaNome('aas oko2'));
echo ($vc->validaNome('A '));
echo ($vc->validaNome('Joaozinhodeumnomeso'));
echo ($vc->validaNome(' a'));
echo ($vc->validaNome('  '));
echo ($vc->validaNome('M@rcelo'));
echo ($vc->validaNome(' a '));
echo ($vc->validaNome('Marcos Sobrenome'));
echo ($vc->validaNome('Treto PRtos'));
echo ($vc->validaNome('Jet Li'));
echo ($vc->validaNome('Conan O\'Brian'));
echo ($vc->validaNome('Jet List-Kyo'));
echo ($vc->validaNome('J P'));*/

