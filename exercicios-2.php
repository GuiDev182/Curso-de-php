<?php
///*
// 1. crie um script index.php
// 2. defina duas variáveis: o seu nome e o seu apelido
// 3. numa estrutura básica de HTML, apresente um título estático do tipo h3 com o texto "o meu nome é:"
// 4. apresenta numa tag h1 o nome completo a partir das variáveis iniciadas no ponto 2
// */
//
//$nome = 'Guilherme';
//$apelido = 'Gui';
//?>
<!---->
<!--<!DOCTYPE html>-->
<!--<html lang="en">-->
<!--<head>-->
<!--    <meta charset="UTF-8">-->
<!--    <title>Title</title>-->
<!--</head>-->
<!--<body>-->
<!--<h3>O meu nome é:</h3>-->
<!--<h1>--><?//= "$nome $apelido"?><!--</h1>-->
<!---->
<!--</body>-->
<!--</html>-->

/*
1. crie um ficheiro index.php
2. defina as variáveis nome e apelido com os respectivos valores.
3. apresente o nome completo num parágrafo de html
4. no segundo parágrafo presente o seguinte:
        o meu nome tem x caracteres.
        sendo o x o cálculo do total de caracteres do seu nome.
*/

<?php
//
//$nome = 'Guilherme';
//$apelido = 'Gui';
//
//?>
<!---->
<!--<!DOCTYPE html>-->
<!--<html lang="en">-->
<!--<head>-->
<!--    <meta charset="UTF-8">-->
<!--    <title>Title</title>-->
<!--</head>-->
<!--<body>-->
<!--    <p>-->
<!--        --><?//= "$nome $apelido"?>
<!--    </p>-->
<!--    <p>-->
<!--        o meu nome tem --><?//= strlen($nome) ?><!-- caracteres-->
<!--    </p>-->
<!--</body>-->
<!--</html>-->


/*
1. crie um ficheiro index.php
2. defina duas variáveis: nome e apelido
    (ambas deverão ter texto com letras minúsculas)
3. numa página HTML simples, apresente o seguinte texto dentro de um parágrafo:

o meu nome é NOME e o meu apelido é APELIDO.
*/

<?php
    $nome = 'guilherme';
    $apelido = 'lima';
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
    <?= "$nome $apelido" ?>
    <p>
        <?= "o meu nome é" . ' ' . strtoupper($nome) .' '. "e o meu apelido é". ' ' . strtoupper($apelido) ?>
    </p>

</body>
</html>