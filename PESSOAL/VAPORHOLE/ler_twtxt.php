	<h4 class="cyber-h" >.my microblog <code>TWTXT</code></h4>
<div class="twtxt">

    <div id="conteudo"></div>

    <script  type="text/javascript">
	  const fileName = "twtxt.txt";
	  console.log(fileName);
	  fetch(fileName)
		.then(response => {
			if (!response.ok) {
				throw new Error ('Não foi possivel carregar o Arquivo!');
			}
			return response.text();
		})
		.then(text => {
			textContent = text

            // Divide o texto em linhas
            const linhas = text.split('\n');

            // Cria uma tabela HTML
            const table = document.createElement('table');
            //table.border = '1';
			table.classList.add('cyber-table');



            //Percorre as linhas e cria as linhas da tabela
            linhas.forEach((linha) => {
            const [data, mensagem] = linha.split('\t');
              if (data && mensagem) {
                 const row = table.insertRow();
                 const cell1 = row.insertCell(0);
                 const cell2 = row.insertCell(1);
               cell1.textContent = data;
               cell2.textContent = mensagem;
            }
            });

            // Adiciona a tabela ao elemento com id "conteudo"
            const conteudo = document.getElementById('conteudo');
            conteudo.appendChild(table);
		})
		.catch(error => {
			console.error('ERRO:', error);
		});
	</script>
</div>
