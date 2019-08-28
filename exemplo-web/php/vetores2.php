<?php

# Em linguagens como C++ e Java, os vetores possuem elementos
# que são acessíveis por um índice numérico começando em 0.
# Em PHP, os vetores podem ser usados para construir "dicionários".
# Dicionários são estruturas de dados que associam chaves e valores.
# Ou seja, um dicionário possui um conjunto de chaves e, para cada chave,
# um valor está associado. Assim, você pode consegue acessar os valores
# por meio das chaves. P. ex., veja o vetor abaixo:

$pessoas = [
  'Amanda' => 26,
  'Beatriz' => 21
];

var_dump($pessoas);

# Molhe os pés nesse código:
# a) Tente dar echo no primeiro valor do vetor
# b) Tente dar echo utilizando um índice inexistente
