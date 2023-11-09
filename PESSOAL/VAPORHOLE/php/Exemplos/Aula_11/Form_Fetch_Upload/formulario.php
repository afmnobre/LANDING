<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8">
		<title>Formulario FETCH</title>
		<script src="curso.js"></script>
	</head>
	<body>
		<form id="meu_form" action="meu_form_data.php" enctype="multipart/form-data">
			<input type="text" name="nome">
			<input type="file" name='anexo' multiple="multiple">
			<input type="submit" value="UPLOAD">
		</form>
		<br>
		<div id="mensagem"></div>
	<script>
		const form = document.getElementById("meu_form");
		form.addEventListener("submit", meuFormData);
	</script>
	</body>
</html>
