<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8">
		<title>Formulario FETCH</title>
		<script src="curso.js"></script>
	</head>
	<body>
		<form id="meu_form" action="meu_form_data.php">
			<label>Nome:</label>
			<input type=text name="nome">
			<label>Email:</label>
			<input type="email" name="email">
			<input type="submit" value="Cadastrar">
		</form>
		<br>
		<div id="mensagem"></div>

	<script>
		const form = document.getElementById("meu_form");
		form.addEventListener("submit", meuFormData);
	</script>
	</body>
</html>
