<?php

// criem um vetor com três nomes.
// fazer um for e imprimir os nomes linha por li

$topicos = [
	[
		'categoria' => 'PHP',
		'posts' => [
			[
				'id' => 1,
				'titulo' => 'Como fazer um vetor',
			],
			[
				'id' => 2,
				'titulo' => 'Utilizando foreach'
			]
		]
	],
	[
		'categoria' => 'CSS',
		'posts' => [
			[
				'id' => 3,
				'titulo' => 'Trabalhando com cores'
			]
		]
	]
];

foreach ($topicos as $topico) {

	echo '<h1>' . $topico['categoria'] . '</h1>';

	foreach ($topico['posts'] as $post) {
		echo '<p>' . $post['titulo'] . '</p>';
	}
}
