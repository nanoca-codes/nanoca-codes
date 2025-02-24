<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>APRENDENDO PHP</title>
</head>
<body>
    <h1>AULA DE PROGRAMAÇÃO WEB</h1>
    
    <?php
        //  início do bloco PHP
        $anoAtual = 2025;
        $anoNascimento = 2005;
        $altura = 1.75;
        $nomeUsuario = "João";

        echo "<h3 style='color:red'>" . $anoAtual. "</h3>"; // o comando echo é o output d alingaugem php
        echo "<p>O usuário $nomeUsuario nasceu em $anoNascimento, portanto ele possui " . ($anoAtual - $anoNascimento).  " anos de idade</p>";

        $idade = $anoAtual - $anoNascimento;
        if($idade < 18)
            echo "<p>Joaõ é menor </p>";
        else
            echo "<p>João é maior </p>";

            //exemplo de switch/case
            
            $corFavorita = "Azul";
            switch($corFavorita){
                case "Vermelho" : echo "<p style = 'color:red'>Sua cor favorita é vermelho </p>"; 
                break;
                
                case "Azul" : echo "<p style = 'color:blue'>Sua cor favorita é azul </p>";
                break;
                
                case "Amarelo" : echo "<p style = 'color:yellow'>Sua cor favorita é amarelo </p>";
                break;

                default : echo "Sua cor favorita não é vermelho, nem azul e nem amarelo";
            }

            //estrutura de repetição

            //while ex
            $i = 1;
            
            while($i < 5){
                echo "<p>O contador vale $i</p>";
                $i++; 
            }

            //do while ex
            $i = 100;
            do {
                echo "<p> O ocntador vale $i </p>";
                $i++;
            }while ($i < 5);

            //for ex
            for ($i = 1; $i < 5; $i++){
                echo "<p>Exemplo de repetição $i </p>";
            }

            echo "<h1> Criando tabelas HTML dinamicas com PHP</h1>" .
            "<table border ='1'";
            for($linha = 1; $linha <= 3; $linha++){
                echo "<try>";
                for ($coluna = 1; $coluna <= 3; $coluna++){
                    echo "<td>";
                    echo "linha $linha, coluna $coluna";
                    echo "</td>";
                }
                echo "</try>";
            }
            echo "</table>";

            
    ?>
</body>
</html>