<?php

$diaDaSemana = 1;
$mensagem = null;

if ($diaDaSemana == 1) {
	echo 'Hoje é segunda.';
	$diaDaSemana = $diaDaSemana + 1;
} 

if ($diaDaSemana == 2) {
	echo 'Hoje é terça.';
} elseif ($diaDaSemana == 3) {
	echo 'Hoje é quarta';
}

#echo htmlentities($mensagem);