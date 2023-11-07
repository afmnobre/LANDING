<?php
session_start();

echo $_SESSION['usuario']."\n";
echo $_SESSION['senha']."\n";

$usuario = $_SESSION['usuario'];

if(isset($_SESSION['usuario'])){
	echo "<br>Seja bem vindo $usuario";
}else{
	echo "<br>Você não esta com uma sessão válida";
}

?>
