<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>arrays em php</title>
</head>
<body>
    <?php
        //CÓDIGO PHP

        echo "<h3> EXEMPLO DE ARRAY INDEXADO: </h3>";
        $frutas = ["Maçã","Banana","Laranja"];

        echo "<p>Fruta" .$frutas [0]. "</p>";
        echo "<p>Fruta" .$frutas [2]. "</p>";

        echo "<hr>";
       
        echo "<h3> EXEMPLO DE ARRAY ASSOCIATIVO: </h3>";
        $pessoa = ["nome" => "Ana", "cidade" => "TB", "profissão" => "Professora"];
        echo "<p>nome: " .$pessoa["nome"]. "</p>";
        echo "<p>cidade: " .$pessoa["cidade"]. "</p>";

        echo "<hr>";

        echo "<h3> EXEMPLO DE ARRAY MULTIDIMENSIONAL: </h3>";
        $alunos = [
            ["nome" => "João", "idade" => "20 anos", "curso" => "TADS"],
            ["nome" => "Ana", "idade" => "22 anos", "curso" => "Engenharia Elétrica"],
            ["nome" => "Fernanda", "idade" => "19 anos", "curso" => "Licenciatura em Física"]
        ];

        echo "<p>" . $alunos[1]["curso"]. "</p>";
        echo "<p>" . $alunos[0]["nome"]. "</p>";

        echo "<hr>";
        echo "<h3> EXIBINDO O ARRAY FRUTAS COM PRINT_R: </h3>";
        print_r($frutas);
        
        echo "<hr>";
        echo "<h3> EXIBINDO O ARRAY FRUTAS COM VAR_DUMP: </h3>";
        var_dump($frutas);
        echo "<hr>";

        echo "<h3> EXIBINDO VALORES DO ARRAY UTILIZANDO FOREACH: </h3>";
        foreach($frutas as $fruta){
            echo"<p>$fruta</p>";
        }
        echo "<hr>";

        echo "<h3> EXIBINDO VALORES DO ARRAY UTILIZANDO IMPLODE: </h3>";
        echo implode(", ",$pessoa);

    ?>
    </body>
</html>