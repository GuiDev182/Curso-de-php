<?php

# Strings são variáveis muito especiais dentro do php.
# Existem dezenas de funções para tratamento de strings
#(veremos mais a frente o que são funções e como criar funções)

# por exemplo, podemos apresentar um determinado caracter de uma string da seguinte forma

$frase = 'Esta frase tem 29 caracteres.';
$n = '<br>';

// apresenta o primeiro caracter da frase
echo $frase[0];
echo $n;

// apresenta o sexto caracter da frase
echo $frase[5];

#podemos comparar strings da seguinte forma;
$a = 'joao';
$b = 'carlos';

$c = ($a == $b); //false
$d = ($a != $b); //true

#Existem muitas funções nativas no PHP para operar com strings

#Exemplos:

$frase = 'Esta frase tem 29 caracteres.';

# retorna o número de caracteres da string
$numero_caracteres_total = strlen($frase);

# retorna as letras a partir da posição 0 e durante 4 caracteres
$primeira_palavra = substr($frase, 0, 4); #Esta

# converte toda a string em letras maiúsculas
$todas_maiusculas = strtoupper($frase);

#converte em letras minúsculas
$todas_minusculas = strtolower($frase);

#substituir uma letra por outra
$nova_frase = str_replace('a','x',$frase);  #estx frxse tem 29 cxrxcteres.

# verifica qual é aposição de um caracter dentro da string
$posicao = strpos($frase,'a'); # 3

# str_contains()
$nome = "Ana Maria Silva Cardoso";
$x = str_contains($nome, 'silva'); #true

# str_starts_with()
$x = str_starts_with($nome, 'Ana'); #true
$x = str_starts_with($nome, 'ana'); #false

#str_ends_with()
$x = str_ends_with($nome, 'oso'); #true
$x = str_ends_with($nome, 'oso'); #false
