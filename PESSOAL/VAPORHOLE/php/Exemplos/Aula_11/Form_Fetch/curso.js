function meuFormData(event){
	event.preventDefault();
	const formData = new FormData(this);
	window.fetch(this.getAttribute('action'), {
		method: 'POST',
		body: formData
	}).then(function(response){
		return response.text();
	}).then(function (text){
		document.getElementById('mensagem').innerHTML =text;
	}).catch(function (error){
		alert('erro !' + error);
	});
}
