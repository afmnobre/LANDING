<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset=UTF-8>	
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" lang="pt-br">
		<title>Manual Basico de PHP</title>
	</head>
	<body>
		<div class="cabecalho_php">
			<h4 class="cyber-h">Manual Básico de PHP</h4>
			
		<ul class="menu_php">
			<?php
				$diretorio = scandir("./php/");
				$qtd = count($diretorio) - 3;
				for($i=1; $i<=$qtd; $i++){
					echo "<li><a href=./index.php?pagina=php&codigo=".$i.">Aula-".$i."</a></li>";
				}
			?>
		</ul>

		</div>
		<div class="conteudo_php">
			<?php 

				@$pagina = 'Aula_'.$_GET['codigo'].'.html';

				if($pagina <> "Aulas.html"){
					//echo $pagina;
					include $pagina;
				}else{
					include "AULAS.php";
				}

			?>
		</div>
	</body>
</html>
