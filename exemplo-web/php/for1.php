<?php

$quantidadeResultados = 9999;
$quantidadePorPagina = 25;

$quantidadePaginas = ceil($quantidadeResultados / $quantidadePorPagina);

if (isset($_GET['pagina'])) {

	$pagina = $_GET['pagina'];
	echo '<h2>Você está na página ' . $pagina . '</h2>';

}

for ($i = 1; $i <= $quantidadePaginas; $i++) {
	echo '<a href="?pagina=' . $i . '">' . $i . '</a>', ' ';
}