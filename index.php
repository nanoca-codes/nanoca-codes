<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>GENERICO</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
        
    </head>
    <body>

        <div class="p-3 text-dark text-center"> 
            <a href="index.php" title="retornar a pagina inicial">
                <img src="img/logotipo.png" alt="logotipo do sistema" style="width:150px">
            </a> 
        </div>

        <nav class="navbar navbar-expand-sm bg-dark navbar-dark sticky-top">
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="collpase" data-bs-target="#collapsibleNavbar">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="collapsibleNavbar">
                <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" href="index.php">Inicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="formProduto.php">Cadastrar um produto</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="formLogin.php">Login</a>
                    </li>
                 </ul>
                </div>
            </div>
        </nav>

        <div class="container mt-5">
            <div class="alert alert-info text-center">
            <p> Há <strong>X</strong> produtos cadastrados!</p>
                </div>
            <form name="formFiltro" action="index.php" method="GET" class="was-validated">
                 <div class="form-floating mt-3">
                    <select name="filtroProduto" class="form-select" required>
                        <option value="todos">Visualizar todos os produtos</option>
                        <option value="tdisponivel">Visualizar os produtos disponiveis</option>
                        <option value="esgostado">Visualizar os produtos esgotados</option>
                     </select>
                     <label for="filtroProduto">Selecione um filtro:</label><br>
                </div>
                <button type="submit" class="btn btn-success" style="float:right">Filtrar Produtos</button><br><br>
            </form>
            <hr>
            <div class="row">
                <div class="col-sm-3 style="margin-bottom:30px"> 
                    <div class="card" style="width:100%; height:100%">
                        <img class="card-img-top" src="img/logotipo.png" alt="Imagem do Produto">
                        <div class="card-body text-center">
                            <h4 class="card-title">Nome do produto</h4>
                                <p class="card-text">Explicação do produto.</p>
                                    <a href="#" class="btn btn-primary">Ver produto</a>
                        </div>
                    </div>
                </div>

<div class="mt-5 p-2 bg-dark text-white text-center sticky-bottom">
  <p>Sistema genérico desenvolvido nas aulas de programação web do curso de TADS &copy</p>
</div>

</body>
</html>