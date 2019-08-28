<?php

$usuarios = [
	['usuario' => 'darlyn',    'email' => 'e@e.com'],
	['usuario' => 'duda',      'email' => 'd@d.mus.br'],
	['usuario' => 'delrio',    'email' => 'del@rio.com'],
	['usuario' => 'enzo',      'email' => '11@11.com'],
	['usuario' => 'aline',     'email' => 'a@line.com'],
	['usuario' => 'navegantes','email' => 'a@tur.nav'],
	['usuario' => 'larissa',   'email' => 'l@rissa.mai.br'],
	['usuario' => 'matarelli', 'email' => 'm@m.mm.br']
];

$procurarPor = 'enzo';
$encontrado = null;

foreach ($usuarios as $usuario) {

	if ($usuario['usuario'] === $procurarPor) {
		$encontrado = $usuario;
		break;
	}

}

echo 'O email de ' . $encontrado['usuario'] . ' é ' . $encontrado['email'];