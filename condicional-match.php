<?php

# EXPRESSÃO MATCH

# É MUITO SEMELHANTE AO SWITCH, MAS com uma sintaxe mais concisa

# com switch

$x = 10;
switch($x) {
    case 5:
        echo 'parou no 5';
        break;

    case 10:
        echo 'parou no 10';
        break;

    case 15:
        echo 'parou no 15';
        break;

    default:
        echo 'é um numero diferente de 5, 10 ou 15';
        break;
}

echo  '<hr>';

# com match

echo match($x) {
    5 => 'parou no 5',
    10 => 'parou no 10',
    15 => 'parou no 15',
    default => ' é um numero diferente de 5, 10 ou 15'
};

# No match apenas uma expressão é valida por cada condição.
# e é possível executar a mesma operação para várias condições

$x = 10;
$opcao = match($x) {
    2 =>'é 2',
    4, 5, 6 => ' é 4,5 ou 6',
    default => 'é outro valor'
};

# no switch também é possível
$x = 10;
switch ($x) {
    case 2:
        $opcao = 'é 2';
        break;
    case 4:
    case 5:
    case 6:
        $opcao = ' é 4, 5 ou 6';
        break;
    default:
        $opcao = 'é outro valor';
        break;
}

#IMPORTANTE
# no Swicth, as comparações podem ser feitas só por valor (==)
# no caso do match, são sempre feitas por valor e tipo (===)

echo '<hr>';

$x = '1';

switch ($x) {
    case 1:
        echo 'inteiro';break;
    case 2:
        echo 'string';
}
# inteiro

echo '<hr>';

echo match($x){
    1 => 'inteiro',
    '1' => 'string'
};
# strings