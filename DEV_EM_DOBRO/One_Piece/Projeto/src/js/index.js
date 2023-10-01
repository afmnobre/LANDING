/* Comentario em BLOCO
 * Testando aqui com varias linhas
 * Fechando aqui.
 */

//comentario em Linha

const botoes = document.querySelectorAll('.botao');

const personagens = document.querySelectorAll('.personagem');

botoes.forEach((botao, indice) => {
    botao.addEventListener("click", () => {

        desselecionarBotao();
        botao.classList.add("selecionado");

        desselecionarPersonagem();
        personagens[indice].classList.add("selecionado");

    })
})

function desselecionarBotao() {
        const botaoSelecionado = document.querySelector(".botao.selecionado");
        botaoSelecionado.classList.remove("selecionado");
}

function desselecionarPersonagem() {
        const personagemSelecionado = document.querySelector(".personagem.selecionado");
        personagemSelecionado.classList.remove("selecionado");
}
