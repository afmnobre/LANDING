<?php

if (isset($_COOKIE['usuario'])){
	echo "Seja bem vindo {$_COOKIE['usuario']}";
}else{
	echo "Cookie sem Valor";
}

?>
