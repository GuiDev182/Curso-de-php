<?php

# ARRAYS

# UM ARRAY (TRADUZIDO PARA PT É UMA MATRIZ) É NA REALIDADE UMA COLEÇÃO DE VALORES.
# FUNCIONA COMO UMA VARIÁVEL, MAS QUE PODE CONTER MUITOS VALORES "ARRUMADOS" CADA UM O SEU ESPAÇO.
# ESSE "ESPAÇO" É DESIGNADO POR ÍNDICE DO ARRAY.

# RESUMINDO, UM ARRAY É UMA COLEÇÃO CONSTITUIDA POR CHAVES/ÍNDICES E VALORES.
# AS CHAVES/ÍNDICES PODEM SER NUMÉRICOS (ARRAY NUMÉRICO) OU STRINGS (ARRAY ASSOCIATIVO)
# E PODEM ATÉ COEXISTIR OS DOIS TIPOS DE ÍNDICES NO ARRAY.
# OS VALORES PODEM SER DE QUALQUER TIPO,INCLUSIVE SEREM OUTROS ARRAYS.

#EXEMPLOS

$valores = [1,2,3,10,20,30];
$nomes = ['joão', 'ana', 'carlos'];

# ESTES ARRAYS SÃO DE ÍNDICE NUMÉRICO.
# PARA APRESENTAR UM DOS SEUS VALORES,PROCEDEMOS DA SEGUINTE FORMA:

echo $valores[0];
echo $nomes[1];

# Sempre que queremos apresentar um valor de um array,usamos o seu índice.
# da mesma forma, podemos alterar o valor do array usando o seu índice.

$valores = [10,20,30];

$valores[1] = 2000; # $valores = [10,2000,30];

# ou de outra forma...

array_push($valores, 5000); # avlores = [10,2000,30,3000, 5000];

# para apresentar valores de um array numa string, podemos fazer da seguinte forma:

echo 'Os valores são: '. $valores[0] . ' e ' . $valores[1];

# ou

echo "os valores são: $valores[0] e $valores[1]";

# ARRAYS ASSOCIATIVOS

# AO CONTRARIO DOS ARRAYS NUMERICOS, AS CHAVES SÃO DO TIPO STRING

$dados = [
    'A' => 20,
    'B' => 30,
    'C' => 40,
    'D' => 50,
    'E' => 60
 ];

# ou

$dados = [
    'nome' => 'joao',
    'email' => 'joao@gamil.com',
    'nacionaliidade' => 'portugal',
    'telefone' => '999999999'
];

# da mesma forma que nos arrays numéricos não devem existir duas chaves iguais,
# nos assosciativos tambem não.
# na apresentação não é gerado nenhum erro. o valor a ser definido é sempre o último.
$dados = [
    'nome' => 'joao',
    'nome' => 'carlos'
];

/* ARRAYS MISTOS
É POSSÍVEL CRIAR UM ARRAY QUE COMBINA ÍNDICES NUMÉRICOS E STRINGS.
EMBORA NÃO SEJA DE NECESSIDADE MUITO FREQUENTE,É POSSÍVEL DA SEGUINTE FORMA:
 */

$dados = [
    0=> 10,
    'nome' => 'Antonio',
    'apelido' => 'silva',
    10=> 10000,
    11=> 'Rua de Lisboa',
    12=> 'Portugal'
];

# uma estrutura deste tipo é mais complexa de gerir
# devido à mistura de indices e tipos de dados

# para apresentar dados do array, procedemos sempre da mesma forma;

echo $dados[0];  #10
echo $dados['apelido']; #silva

# ARRAYS MULTIDIMENSIONAIS

#SÃO ARRAYS, NUMÉRICOS OU ASSOCIATIVOS, CUJOS VALORES SÃO OUTROS ARRAYS.

$dados = [
    [10, 20, 30, 40],
    [100, 200, 300, 400],
    [1000, 2000, 3000, 4000]
];

#NESTE CASO, PARA APRESENTAR-MOS VALORES DESTE ARRAY:

echo $dados[1][2]; #300
echo $dados[0][3]; #40

# podemos ter arrays multidimensionais associativos:

$cidades = [
    'portugal' => ['lisboa','Porto','Coimbra'],
    'brasil'=> ['Brasília', 'São Paulo','Rio de janeiro'],
    'espanha' => ['Madrid', 'Barcelona','Sevilha']
];

echo $cidades['brasil'][1]; #são paulo
echo $cidades['espanha'][0]; # Madrid
echo $cidades['portugal'][2]; # Coimbra

# os arrays podem ter mais do que duas dimensões.

# iremos voltar aos arrays mais a frente para ver algumas funções relacionadas com esta matéria.