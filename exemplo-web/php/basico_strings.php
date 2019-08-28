<?php

#$mensagem1 = 'Traga-me um copo d'água, tenho sede'; // esta linha não funciona
$mensagem2 = 'Traga-me um copo d\'água, tenho sede'; // esta linha FUNCIONA

# Na $mensagem1, observe que o trecho d'água contém uma aspa simples, entre
# a letra d e a letra á. Em PHP, a aspa é usada para delimitar strings mas,
# nessa frase, a aspa faz parte da mensagem. A linguagem PHP acha que
# a string começa em Traga-me e termina em copo d. O resto da linha é considerado
# um erro de sintaxe. Para fazer a PHP entender que a aspa faz parte da string,
# você deve "escapá-la" utilizando uma barra invertida (\). Veja a $mensagem2.

#$mensagem3 = "Então ela me disse: "aprender PHP é legal!""; // não funciona :(
$mensagem4 = "Então ela me disse: \"aprender PHP é legal!\"";

# Nota: em PHP, você também pode delimitar strings utilizando aspas duplas.
# A diferença entre $mensagem3 e $mensagem4 é semelhante ao caso anterior,
# entre $mensagem1 e $mensagem2.

$mensagem5 = 'Então ela me disse: "aprender PHP é legal!"';

# Note que, na $mensagem5, não foi preciso escapar as aspas duplas.
