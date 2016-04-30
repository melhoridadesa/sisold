<html>
<head>
	<title> IDOSO S.A </title>
</head>
<body>
	<?php
		if (array_key_exists('pagina', $_GET)){
			
			require "Pagina.php";

			$pagina = new Pagina();
			$pagina->setPagina($_GET['pagina']);

			if ( $pagina->pageExists() ){
				include $pagina->includePage();
			}
			else{
				include '/html/404.php';
			}
		}
		else{
			require_once 'principal.php';
		}
	?>
</body>
</html>