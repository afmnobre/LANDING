<!--<!DOCTYPE html>-->
<html lang="pt-br">
<head>
	<meta charset=UTF-8>
	<!--<meta http-equiv="Content-Security-Policy" content="script-src 'self'">-->
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" lang="pt-br">


	<link rel="stylesheet" type="text/css" href="./src/css/cyberpunk.css" />
	<link rel="stylesheet" type="text/css" href="./src/css/guest.css" />
	<link rel="stylesheet" type="text/css" href="./src/css/home.css" />
	<link rel="stylesheet" type="text/css" href="./src/css/main.css" />
	<link rel="stylesheet" type="text/css" href="./src/css/tutoriais.css" />
	<link rel="stylesheet" type="text/css" href="./src/css/twtxt.css" />
	<link rel="stylesheet" type="text/css" href="./music/music.css" />


	<title>Manual de Instalação </title>

</head>
<body>

<div class="cyber-banner">
	.creation-Center<span class="cyber-glitch-3">_</span>
</div>

<h1 class="cyber-h cyber-glitch-4">###.creation-menu-01 <span class="cyber-glitch-3">_</span> </h1>
<div class="musica"><?php include('./music/music.php'); ?></div>
<div class="main">

	<div class="esquerda">
		<div class="logo">
			<img class="cyber-glitch-0" src="./src/img/Cyberpunk_Logo_2.png"/>
		</div>


		<div class="menu">
			<ul>
				<li>
					<button class="cyber-button-small bg-blue fg-white m-2 vt-bot">
						<a href="index.php?pagina=home">.home</a>
						<span class="glitchtext">Home</span>
						<span class="tag">R25</span>
                    </button>
				</li>
				<li>
					<button class="cyber-button-small bg-blue fg-white m-2 vt-bot">
						<a href="index.php?pagina=tutoriais">.tutoriais</a>
						<span class="glitchtext">.tutoriais</span>
						<span class="tag">AXC</span>
                    </button>
				</li>
				<li>
					<button class="cyber-button-small bg-blue fg-white m-2 vt-bot">
						<a href="index.php?pagina=twtxt">.twtxt</a>
						<span class="glitchtext">.twtxt</span>
						<span class="tag">LM4</span>
                    </button>
				</li>
				<li>
					<button class="cyber-button-small bg-blue fg-white m-2 vt-bot">
						<a href="index.php?pagina=images">.images</a>
						<span class="glitchtext">.images</span>
						<span class="tag">k33</span>
                    </button>
				</li>
				<li>
					<button class="cyber-button-small bg-blue fg-white m-2 vt-bot">
						<a href="index.php?pagina=rice">.rice</a>
						<span class="glitchtext">.rice</span>
						<span class="tag">XYX</span>
                    </button>
				</li>
				<li>
					<button class="cyber-button-small bg-blue fg-white m-2 vt-bot">
						<a href="index.php?pagina=guest">.guest</a>
						<span class="glitchtext">.guest</span>
						<span class="tag">P32</span>
                    </button>
				</li>
		</ul>
		</div>
	</div>

	<div class="direita">

		<div class="cyber-razor-top bg-dark fg-white p-3 mt-4 mr-4 inline-block"></div>
		<div class="corpo">
			<?php
				ini_set('display_errors', 1);
				error_reporting(E_ALL);
				@$pagina = $_REQUEST['pagina'];
				@$codigo = $_REQUEST['codigo'];
				//echo "A pagina é ".$pagina. " e o codigo é: ".$codigo;
			switch ($pagina) {
			case 'home':
					include('./home.html');
					break;
			case 'guest':
					include('./guestbook/index.php');
					break;
			case 'twtxt':
					include('./ler_twtxt.php');
					break;
			case 'tutoriais':
					if($codigo == ""){
						include('./tutoriais/tutoriais.php');
					}else if ($codigo == 'nvim'){
						include('./tutoriais/manual_vim.html');
					}else if($codigo == 'mariadb'){
						include('./tutoriais/manual_mysql.html');
					}else if($codigo == 'tmux'){
						include('./tutoriais/manual_tmux.html');
					}


					break;
				default:
					include('./home.html');
			}

		?>
		</div>
		<div class="cyber-razor-bottom bg-dark fg-white p-3 mt-4 mr-4 inline-block"></div>

	</div>
</div>

<footer class="fixar-rodape">
	<div class="cyber-banner-short bg-purple fg-white cyberpunk-font-og">
		Cyberpunk
	</div>
</div>


	<script src="./src/js/jquery-3.6.0.min.js"></script>
	<script src="./music/music.js"></script>
</body>
</html>
