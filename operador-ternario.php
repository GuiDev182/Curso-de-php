<?php

# OPERADOR TERNARIO

# É UM OPERADOR CONDICIONAL QUE PODE SUBSTITUIR UMA ESTRUTURA SIMPLES IF ELSE
# O OPERADOR NECESSITA DE TRÊS EXPRESSÕES OU ÁREAS:
# 1. A EXPRESSÃO QUE SERÁ AVALIADA COMO VERDADEIRA
# 2. A EXPRESSÃO QUE SERÁ EXECUTADA COM O TRUE
# 3. A EXPRESSÃO QUE SERÁ EXECUTADA COM O FALSE

$opcao = 0;

$nome = $opcao == 1 ? 'joao': 'antónio';

# podemos tambem usar da seguinte forma:

$opcao == ? $nome = 'joao': $nome = 'Antonio';

# podemos tambem usar da seguinte forma:

$opcao == 1 ? $nome = 'joao' : $nome = 'antonio';

# podemos usar o operador ternario em varias situações distintas.
# por exemplo, para apresentar um determinado texto.

echo $opcao == 1 ? 'sim' : 'nao';

?>

<!-- com instrução condicional IF -->

<?php if ($opcao == 1): ?>
    <h2>sim</h2>
<?php else: ?>
    <h2>nao</h2>
<?php endif; ?>

<!-- Com operador ternario -->
<h2><?= $opcao == 1 ? 'sim': 'nao' ?></h2>

<!-- por exemplo, para controlar CSS -->
<h2 style="'color: <?= $opcao == 1 ? 'red': 'blue' ?>">Este texto tem cor definida pelo php</h2>