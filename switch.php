<?php

# DECLARAÇÕES/INSTRUÇÕES CONDICIONAIS

# SWICTH - UMA ALTERNATIVA AO IF

$nome = 'joao';
switch ($nome) {
    case 'joao':
        //código 1
        break;
    case 'ana':
        // código 2
        break;
    default:
        // codigo 3
        break;
}

switch ($nome) {
    case  'joao':
        echo '1';
        break;
    case  'ana':
        echo '2';
        break;
    default:
        echo 'outra coisa qualquer';
        break;
}

# SINTAXE ALTERNATIVA

$variable = 10;
switch ($variable):
    case 'value':
        # code...
        break;
    default:
        # code...
        break;
    endswitch;