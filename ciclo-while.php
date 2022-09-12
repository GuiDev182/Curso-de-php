<?php

#CICLOS/LOOPS
# Existem 4 estruturas de ciclos em php
#elas existem para permitir executar um determinado bloco de código várias vezes.

# WHILE
# Definimos a condição durante a qual o ciclo deve continuar a ser executado.
# quando essa condição for falsa, o ciclo termina e o código avança

$x = 1;
while ($x < 10) {
    echo 'ciclo em execução<br>';
    $x++;
}

echo '<hr>';

# outro exemplo
$i = 0;
while ($i < 10) {
    echo $i++ . '<br>';
}

echo '<hr>';

# neste caso podemos remover as chaves
$i = 0;
while ($i < 10) echo $i++ . '<br>';

