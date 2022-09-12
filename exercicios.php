<?php

#EXERCÍCIO 1

# 'a' é igual a 1000 e 'b' é igual a metade de 'a'

# apresentar o valor de 'b'

$a = 1000;
$b = $a / 2;

echo $b;

#EXERCÍCIO 2

# 'a' é igual a 100 e 'b' é igual a 3 vezes o valor de 'a'
# apresentar o valor de 'b'.

$a = 100;
$b = $a * 3;

echo $b;

#EXERCÍCIO 3

# 'a' é iniciado e apresentado com o valor 20.
# na instrução seguinte, 'a' deverá ser apresentado com o valor 21.

$a = 20;
echo $a++;
echo '<br>';
echo $a;


#EXERCÍCIO 4

/* 'a' é igual a 100
 'b' é igual a 250
 'c' é igual a 'a' mais 'b'
 acrescentar mais uma unidade a 'c'
 apresentar 'c'
*/

$a = 100;
$b = 250;
$c = $a + $b;
$c++;
echo $c;
