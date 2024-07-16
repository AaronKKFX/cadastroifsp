<?php
    include('includes/conexao.php');
    $id = $_GET['id'];
    $sql ="SELECT * FROM cidade WHERE id=$id";
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
    <title>Cadastro Cidade</title>
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
    <form action="alteraCidadeExe.php" method="post">
        <div id="corpo">
            <fieldset>
                <legend>Cadastro da CIDADE</legend>
                <div class="row g-3 align-items-center">
                    <div class="col-auto">
                      <label for="nome" class="col-form-label">Nome da Cidade:</label>
                    </div>
                    <div class="col-auto">
                      <input type="text" name ="nome" id="nome" class="form-control" value="<?php echo $row['nome']?>" required>
                    </div>
                  </div>
                <div>
                    <label for="estado">Sigla do Estado:</label>
                    <select class="form-select" name="estado" id="estado">
                    <option value="AC"<?php echo $row['estado'] == "AC" ? " selected" : ""; ?>>AC</option>
                    <option value="AL"<?php echo $row['estado'] == "AL" ? " selected" : ""; ?>>AL</option>
                    <option value="AP"<?php echo $row['estado'] == "AP" ? " selected" : ""; ?>>AP</option>
                    <option value="AM"<?php echo $row['estado'] == "AM" ? " selected" : ""; ?>>AM</option>
                    <option value="BA"<?php echo $row['estado'] == "BA" ? " selected" : ""; ?>>BA</option>
                    <option value="CE"<?php echo $row['estado'] == "CE" ? " selected" : ""; ?>>CE</option>
                    <option value="ES"<?php echo $row['estado'] == "ES" ? " selected" : ""; ?>>ES</option>
                    <option value="GO"<?php echo $row['estado'] == "GO" ? " selected" : ""; ?>>GO</option>
                    <option value="MA"<?php echo $row['estado'] == "MA" ? " selected" : ""; ?>>MA</option>
                    <option value="MT"<?php echo $row['estado'] == "MT" ? " selected" : ""; ?>>MT</option>
                    <option value="MS"<?php echo $row['estado'] == "MS" ? " selected" : ""; ?>>MS</option>
                    <option value="MG"<?php echo $row['estado'] == "MG" ? " selected" : ""; ?>>MG</option>
                    <option value="PA"<?php echo $row['estado'] == "PA" ? " selected" : ""; ?>>PA</option>
                    <option value="PB"<?php echo $row['estado'] == "PB" ? " selected" : ""; ?>>PB</option>
                    <option value="PE"<?php echo $row['estado'] == "PE" ? " selected" : ""; ?>>PE</option>
                    <option value="PI"<?php echo $row['estado'] == "PI" ? " selected" : ""; ?>>PI</option>
                    <option value="RJ"<?php echo $row['estado'] == "RJ" ? " selected" : ""; ?>>RJ</option>
                    <option value="RN"<?php echo $row['estado'] == "RN" ? " selected" : ""; ?>>RN</option>
                    <option value="RS"<?php echo $row['estado'] == "RS" ? " selected" : ""; ?>>RS</option>
                    <option value="RO"<?php echo $row['estado'] == "RO" ? " selected" : ""; ?>>RO</option>
                    <option value="RR"<?php echo $row['estado'] == "RR" ? " selected" : ""; ?>>RR</option>
                    <option value="SC"<?php echo $row['estado'] == "SC" ? " selected" : ""; ?>>SC</option>
                    <option value="SP"<?php echo $row['estado'] == "SP" ? " selected" : ""; ?>>SP</option>
                    <option value="SE"<?php echo $row['estado'] == "SE" ? " selected" : ""; ?>>SE</option>
                    <option value="TO"<?php echo $row['estado'] == "TO" ? " selected" : ""; ?>>TO</option>
                    </select>
                </div>

                <div>
                  <input type="hidden" name='id' value="<?php echo $row['id']?>">;
                </div>
            
                <div>
                    <button type="submit">Alterar</button>
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