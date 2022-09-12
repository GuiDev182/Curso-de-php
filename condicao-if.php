<?php

/* DECLARAÇÕES/INTRUSÇÕES CONDICIONAIS

SÃO INSTRUÇÕES UTILIZADAS PARA CONTROLAR O FLUXO DA APLICAÇÃO DE ACORDO
COM DETERMINADAS CONDIÇÕES

PARA A VERIFICAÇÃO DAS CONDIÇÕES DESTAS DECLARAÇÕES, RECORREMOS AO USO
DE OPERADORES DE COMPARAÇÃO COMBINADOS COM OS OPERADORES LÓGICOS

DECLARAÇÃO IF - DEFINE BLOCOS DE CÓDIGO QUE SÓ SÃO EXECUTADOS
SE A CONDIÇÃO FOR VERDADEIRA(TRUE)

*/

$nome = 'joao';
if($nome == 'joao'){
    echo 'foi identificado o nome do autor do vídeo.';
}

# IF ... ELSE

$idade = '18';
if ($idade <= 18){
    echo 'Adolescente';
} else {
    echo 'Adulto';
}

# IF... ELSEIF ... ELSE

$nota = 5; // num universo de 0 a 10
if ($nota <= 2){
    echo 'Nota fraca';
} elseif ($nota <=4){
    echo 'Nota insuficiente';
} elseif ($nota <=6){
    echo 'Nota Positiva';
} elseif ($nota <= 8){
    echo 'Nota muito positiva';
} else {
    echo 'Nota excelente';
}

# USO DE OPERADORES LÓGICOS

$numero = 20;
if($numero > 10 && $numero != 30){
    // executar código
}else{
    // executar outro código
}

# condições dentro de condição

$numero = 10;
if($numero >= 0){
    if ($numero >= 100){
        echo 'o numero é igual ou maior que 100';
    }else {
        echo 'o número é positivo,mas inferior a 100';
    }
} else {
    echo 'o numero é negativo.';
}

# sintaxe alternativa

# NORMAL
$VALOR = 5;
if ($valor == 10){
    // código 1
}else{
    // código 2
}

# alternativa
if ($valor == 10):
    // código 1
else:
    // código 2
endif;

<?php if(true): ?>
    <div>Executar este código html</div>
<?php else: ?>
    <h3>Executar aqui</h3>
<?php endif; ?>
