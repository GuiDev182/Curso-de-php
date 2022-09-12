<?php

# DO WHILE
# É MUITO SEMELHANTE AO CICLO WHILE, CONTUDO, NESTE CASO A CONDIÇÃO
# É AVALIADA APÓS A EXECUÇÃO DO CICLO

$x = 0;
do {
    echo $x++ . '<br>';
} while ($x < 10);

echo '<hr>';

# de igual modo, quando só temos uma expressão a executar,
# podemos ignorar as chaves
$x = 0;
do
    echo $x++ . '<hr>';
while($x < 10);

echo '<hr>';

