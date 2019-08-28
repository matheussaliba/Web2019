<?php

$diasDaSemana = [
	1 => 'Domingo',
	2 => 'Segunda',
	3 => 'Terça',
	4 => 'Quarta',
	5 => 'Quinta',
	6 => 'Sexta',
	7 => 'Sábado'
];

$dia = 500;

if (in_array($dia, array_keys($diasDaSemana))) {
	echo htmlentities('Hoje é ' . $diasDaSemana[$dia]);
} else {
	echo 'Dia invalido';
}
