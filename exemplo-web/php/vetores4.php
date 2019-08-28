<?php

# Podemos fazer vetores multidimensionais um pouco mais complexos que
# o mostrado anteriormente. Suponha que precisássemos guardar também
# o email de cada um de nossos usuários. Nosso vetor ficaria assim:

$usuarios = [
  [
    'usuario' => 'camila',
    'email' => 'camila@ifmg.edu.br'
  ],
  [
    'usuario' -> 'danila',
    'email' => 'danila@sousabara.com.br'
  ]
];

# para ficar mais fácil de visualizar um var_dump, você pode colocá-lo
# dentro de uma tag <pre>. Esta é uma tag HTML que PREserva a formatação
# do conteúdo dentro dela.
echo '<pre>', var_dump($usuarios), '</pre>';
