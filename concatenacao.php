<?php

/* CONCATENAÇÃO DE STRINGS*/


# .
# .=

$a = 'Joao' . ' ' . ' Ribeiro';

$b = 'joao';
$b .= ' '. 'Ribeiro';

echo $b;
die();


$nome = 'joao';
$apelido = 'Ribeiro';
$nome_completo = $nome . ' '. $apelido;

echo $nome_completo;
die();