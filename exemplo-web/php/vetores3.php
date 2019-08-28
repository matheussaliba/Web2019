<?php

# Em aplicativos web reais, é comum a manipulação de vetores multidimensionais
# para ler/guardar dados provenientes de bancos de dados, quer seja uma lista
# de usuários, um carrinho de compras em sites de ecommerce, ou uma lista
# de posts de um blog ou site de jornal.
# Vamos fazer uma lista de usuários:

$usuarios = [
  ['usuario' => 'camila'],
  ['usuario' => 'danila'],
  ['usuario' => 'evelin']
];

echo $usuarios[0]['usuario']; # acessando o usuario da primeira $pessoas
# comente a linha acima e descomente a de baixo para ver a parte interna do vetor:
#var_dump($usuarios);
