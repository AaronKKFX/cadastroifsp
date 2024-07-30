<?php
    include('includes/conexao.php');
    $id = $_GET['id'];
    $sql ="SELECT * FROM cliente WHERE id=$id";
    $result =  mysqli_query($con,$sql);
    $row = mysqli_fetch_array($result);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="stylecidade.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Atualizar Cliente</title>
</head>
<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <nav class="navbar navbar-expand-lg bg-body-tertiary" >
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Navegar</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="Index.html">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="cadastrocidade.html">Cadastrar Cidade</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="cadastroclientes.html">Cadastrar Cliente</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="ListarCidade.php">Listar Cidade</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="ListarClientes.php">Listar Cliente</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    <div>
    <form action="cadastroclienteExe.php" method="post">
        <div id="corpo">
            <fieldset>
                <legend>Cadastro de Clietes</legend>
                <div class="row g-3 align-items-center">
                    <div class="col-auto">
                      <label for="nome" class="col-form-label">Nome do Cliente:</label>
                    </div>
                    <div class="col-auto">
                      <input type="text" name ="nome" id="nome" class="form-control" value="<?php echo $row['nome']?>" aria-describedby="NomeCliente" required>
                    </div>
                    <div class="col-auto">
                        <label for="email" class="col-form-label">Email do Cliente:</label>
                      </div>
                      <div class="col-auto">
                        <input type="text" name ="email" id="email" class="form-control" value="<?php echo $row['email']?>" aria-describedby="EmailCliente" required>
                      </div>
                      <div class="col-auto">
                        <label for="senha" class="col-form-label">Senha do Cliente:</label>
                      </div>
                      <div class="col-auto">
                        <input type="password" name ="senha" id="senha" class="form-control" value="<?php echo $row['senha']?>" aria-describedby="SenhaCliente" required>
                      </div>
                  </div>
                  <div>
                    <input type="checkbox" id="ativo" name="ativo" value="1" checked>
                    <label for="ativo" value="<?php echo $row['ativo']?>">Ativo</label>
                  </div>
                  <div>
                    <label for="cidade">CIDADE</label>
                    <select name="cidade" id="cidade">
                      <?php 
                        include('includes/conexao.php');
                        $sql = "SELECT * FROM cidade";
                        $result = mysqli_query($con,$sql);
                        while($rowCidade = mysqli_fetch_array($result))
                        {
                          echo "<option value='".$rowCidade['id']."' ". $rowCidade['id'] == $row['id_cliente'] ? "selected" : "" .">".$rowCidade['nome']."/".$rowCidade['estado']."</option>";
                        }
                      ?>
                    </select>
                  </div>
                <div>
                    <button type="submit">Atualizar</button>
                </div>
            </fieldset>
        </div>
        </form>
          <div>
            <a href="Index.html">

              <button>Voltar para a página inicial</button>
    
            </a>
          </div>
    </div>
</body>
</html>