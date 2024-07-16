<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="stylelista.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Lista de Cidades Cadastradas</title>
</head>
<body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <nav class="navbar navbar-expand-lg bg-body-tertiary" >
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Cadastro</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="Index.html">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="cadastrocidade.html">Cadastrar</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="ListarCidade.php">Listar</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    <div>
    
<?php
    include('includes/conexao.php');
    $sql = "SELECT * FROM cidade";
    //Executa a consulta
    $result  = mysqli_query($con, $sql);
    // Retorna apenas uma linha
    
?>
<h1>Consulta de cidades</h1>
<div id="corpo">
<table border="1" width="500" >
    <tr>
        <th>Código</th>
        <th>Nome</th>
        <th>Email</th>
        <th>Senha</th>
        <th>Atualizar</th>
        <th>Deletar</th>
    </tr>
    <?php
        while($row = mysqli_fetch_array($result))
        {
            echo "<tr>";
            echo "<td>".$row['id']."</td>";
            echo "<td>".$row['nome']."</td>";
            echo "<td>".$row['email']."</td>";
            echo "<td>".$row['senha']."</td>";
            echo "<td><a href='alteraCliente.php?id=".$row['id']."'>Alterar</a></td>";
            echo "<td><a href='deletarCliente.php?id=".$row['id']."'>Deletar</a></td>";
            echo "</tr>";
        }
    ?>
</table>
</div>
<div>
<a href="Index.html">

<button>Voltar para a página inicial</button>

</a></div>
</body>
</html>