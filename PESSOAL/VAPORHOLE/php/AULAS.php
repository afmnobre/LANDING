<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset=UTF-8>	
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" lang="pt-br">
		<title>Manual Basico de PHP</title>
	</head>
	<body>
		<div class="cabecalho">
			<h4 class="cyber-h">Manual Básico de PHP</h4>

			<?php
				$diretorio = scandir("../85Bits/");
				$qtd = count($diretorio) - 3;
			
				for($i=1; $i<=$qtd; $i++){
					echo "<a href=./AULAS.php?pagina=".$i.">Link_".$i."</a><br>";
				}
			?>
		</div>
		<div class="corpo">
			<?php 

			@$pagina = 'Aula_'.$_GET['pagina'].'.html';

				if($pagina <> "Aulas.html"){
					include $pagina;
				}else{
					include "AULAS.html";
				}

			?>
		</div>
	</body>
</html>
