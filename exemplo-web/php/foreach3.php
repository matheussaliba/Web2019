<?php

$alunos = [
	['nome' => 'tinky winky', 'nota' => 10],
	['nome' => 'dipsy', 'nota' => 9.9],
	['nome' => 'lala', 'nota' => 8.8],
	['nome' => 'po', 'nota' => 7.7]
];

$procurarPor = $_GET['nome'];
$encontrado = null;

foreach ($alunos as $aluno) {

	if ($aluno['nome'] === $procurarPor) {
		$encontrado = $aluno;
		break;
	}

}

echo "$encontrado[nome] tem nota $encontrado[nota]";