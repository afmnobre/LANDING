<!DOCTYPE html>
<html lang="pt-bt">
<head>
	<title>Combobox Assíncrono</title>
	<script src='curso.js'></script>
</head> 
<body> 
  
	<form>  
		<label>Região:</label> 
		<select id='regioes'>   
			<option value=''>Selecione...</option>	      
			<option value='centro-oeste'>Centro Oeste</option>
			<option value='sul'>Sul</option>
		</select> 
		<label>Estado:</label>
		<select id='estados'></select>
	</form>

	<script>
		const select = document.getElementById('regioes');
		select.addEventListener('change', selectEstados.bind(this, 'regioes', 'estados'));
	</script>

</body>
</html>

