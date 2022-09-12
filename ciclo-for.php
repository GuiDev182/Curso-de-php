<?php

# FOR

# Permite executar um bloco de código determinado número de vezes
# é constituído por três parâmetros
# 1. o iniciador - indica o valor inicial do contador
# 2. a condição qual a condição para que o ciclo termine
# 3. o incremento - altera o valor do contador em cada ciclo

for ($x = 1; $x < 10; $x++) {
    echo $x . '<br>';
}

echo '<hr';

# mais uma vez, se for executada apenas uma expressão,
# não é necessãrio usar chaves

for ($x = 1; $x < 10; $x++)
    echo $x . '<br>';

echo '<hr>';

# pode conter uma assinatura diferente.

$i = 1;
for (; $i < 10;){
    echo $i++ . '<br>';
}

echo '<hr>';

# o primeiro e último parâmetro também podem ser divididos
# em vários parâmetros usando a vírgula como separador
for ($contador = 1, $x = 10; $contador < 10; $contador++, $x--){
    echo $x . '<br>';
}

echo '<hr>';

# por exemplo, podemos apresentar todos os dados de um array
$nomes = ['joao', 'ana', 'carlos'];
for ($i = 0; $i < count($nomes); $i++){
    echo $nomes[$i] . '<br>';
}