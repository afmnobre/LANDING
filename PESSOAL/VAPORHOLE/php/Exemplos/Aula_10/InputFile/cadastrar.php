<?php

//var_dump($_FILES);

$diretorio = "anexo".DIRECTORY_SEPARATOR;


foreach($_FILES as $arquivo){
	$nome     = $arquivo['name'];
	$conteudo = file_get_contents($arquivo['tmp_name']);
	file_put_contents($diretorio.$nome, $conteudo);
}


?>
