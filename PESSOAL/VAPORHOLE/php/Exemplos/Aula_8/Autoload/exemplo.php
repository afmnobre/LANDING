<?php

function meu_autoloader($class) {
	include_once 'classes'.$class.'.php';
}

spl_autoload_register('meu_autoloader');

$pessoa1  = new Pessoa();
$veiculo1 = new Veiculo();

?>
