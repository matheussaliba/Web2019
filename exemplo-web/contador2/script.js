function incrementar(e) {
	let botao = e.target;
	let span = botao.querySelector('span');
	let valor = span.textContent;
	valor = parseInt(valor) + 1;
	span.textContent = valor;
}

var botoes = document.querySelectorAll('.botao');

for (let i = 0; i < botoes.length; i++)
	botoes[i].onclick = incrementar;