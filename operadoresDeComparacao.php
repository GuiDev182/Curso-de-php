<?php
/* OPERADORES DE COMPARAÇÃO

PERMITEM EFETURAR UMA COMPARAÇÃO ENTRE VALORES
VERIFICAM SE OS VALORES SÃO IGUAIS, DIFERENTES, MAIORES OU MENORES, OU DO MESMO TIPO

O RESULTADO DA COMPARAÇÃO SERÁ O VALOR
VERDADEIRO(TRUE) OU FALSO (FALSE)
 */

# VALORES SÃO IGUAIS?

$a = (2 == 3); # false
$a = (100 == 100); #true
$a = (50 == '50'); #true
$a = ( 50 === '50'); #false



# valores são diferentes?

$a = (2 != 3); #true
$a = (2 <> 3); #true (alternativo)
$a = (50 != 50); #false
$a = (50 != '50'); #false
$a = (50 !== '50'); #true


#operadores de comparação com 3 símbolos, comparam valor e tipo de valor
# ===
# !==

# valores são maiores ou menores?

$a = (2 > 3); #false
$a = (2 < 3); #true
$a = (50 >= 50); #true
$a = (50 <= 50); #true
$a = (50 < 50); #false

# spaceship operator

$x = 1 <=> 1; #0 (1==1)
$x = 3 <=> 2; #1 (3 > 2)
$x = 1 <=> 2; #-1 (1 < 2)


