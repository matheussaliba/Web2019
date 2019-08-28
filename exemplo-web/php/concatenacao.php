<?php

$tempoEntrega = 34;

echo 'Seu pedido será entregue em ' . $tempoEntrega . ' minutos.';

# notas
# criamos uma variável com um número inteiro.
# Utilizamos o operador ponto (.) para concatenar strings
# (PHP converte magicamente o número inteiro em string no momento da concatenação)
#
# Convenção de nomes de variável
#
# é boa prática adotar uma convenção de nomeação de variável. Veja algumas:
#
# 1) $tempoEntrega    Convenção chamada de camelCase
# 2) $tempo_entrega   Convenção que usa o sublinhado
# 3) $TempoEntrega    Variação da primeira.
#
# Normalmente, os desenvolvedores preferem a primeira. Consiste em juntar
# todas as palavras e colocar as iniciais em maiúsculas, com exceção da primeira
# palavra. P. ex. se eu tivesse que criar uma variável contendo o tempo de
# preparo estimado, ela se chamaria $tempoPreparoEstimado.
#
# Não importa qual você escolher. Importa mesmo é manter-se *consistente*.
# Ou seja, não misture as convenções. Ou use uma ou outra.
