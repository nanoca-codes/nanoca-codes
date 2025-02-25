<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORMULÁRIO PARA CADASTRO DE PESSOA</title>
</head>
<body>
    


    <h3> FORMULÁRIO PARA CADASTRO DE PESSOA </h3>
    
    <form name="formPessoa" method="post" action="action_pessoa.php">
    
    <label for="nomePessoa">Nome:</label><br>
    <input name="nomePessoa" type="text"><br><br>
    
    <label for="emailPessoa">Email:</label><br>
    <input name="emailPessoa" type="email"><br><br>
    
    <label for="cidadePessoa">CIDADE:</label><br>
    <select name="cidadePessoa"> 
        <option value="TB">Telêmaco Borba</option>
        <option value="imbau">Imbaú</option>
        <option value="curiuva">Curiúva</option>
        <option value="ortigueira">Ortigueira</option>
        <option value=>SELECIONE UMA CIDADE</option>

    </select>
    <br><br>

    <input type="submit" name="btCadastrar" value="Cadastrar">
    
</body>
</html>