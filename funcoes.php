<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FUNÇÕES PHP</title>
</head>
<body>
    <?php
    echo "<h3> FUNÇÃO SIMPLES SEM PARAMETRO: </h3>";

    function exibirSaudacao(){
       echo "<p>Olá! Bem-vindo(a) à disciplina de programção web </p>";
    }

    exibirSaudacao();

    echo"</hr>";

    echo "<h3> FUNÇÃO COM PARAMENTRO: </h3>";
    function exibirSaudacaoNome ($nome){
        echo "<p>Olá, $nome! Bem-vindo(a) à disciplina de programção web</p>";
   
    }
    //chamndo a fução com diferentes valores
    exibirSaudacaoNome("Salomão");
    exibirSaudacaoNome("Raissa");

    echo"</hr>";

    echo "<h3> FUNÇÃO COM RETORNO DE VALORES: </h3>";
    function efetuarSoma ($a, $b){
        return ($a + $b);
    }

    //armazena o retorno da função em uma variavel

    $resultado = efetuarSoma(5, 10);
    echo "<p>A soma dos valores é: $resultado </p>";

    ?>
</body>
</html>