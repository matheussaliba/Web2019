<?php

# Veja uma complementação do exemplo anterior, em que agora adicionamos
# um outro vetor dentro dos vetores.

$usuarios = [
  [
    'usuario' => 'camila',
    'email' => 'camila@ifmg.edu.br',
    'interesses' => ['gatos', 'comida']
  ],
  [
    'usuario' -> 'danila',
    'email' => 'danila@sousabara.com.br',
    'interesses' => ['livros', 'gatos']
   ]
];

echo '<pre>', var_dump($usuarios), '</pre>';

# Podemos iterar sobre o vetor de usuários utilizando o comando foreach
# Coloco aqui dois trechos de código que utilizam o foreach para percorrer
# o vetor $usuarios. Descomente o primeiro e teste, depois o comente novamente
# e descomente o segundo e teste.

# Primeiro
#foreach ($usuarios as $usuario) {
#  var_dump($usuario);
#}

# Segundo
#foreach ($usuarios as $usuario) {
#  echo $usuario['email'] . '<br>';
#}

# Molhe os pés nesse código:
# a) adicione mais um usuário ao vetor e dê um var_dump.
