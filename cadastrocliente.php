<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro Cliente</title>
</head>
<body>
    <?php
        include('includes/conexao.php');
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];

        echo "<h1>Dados do Cliente</h1>";
        echo "Nome: $nome<br>";
        echo "email: $email<br>";
        echo "senha: $senha<br>";

        // INSERT INTO cidade (nome,estado) VALUES ('$nome','$estado')

        $sql = "INSERT INTO cliente (nome,email,senha)";
        $sql .=" VALUES('".$nome."','".$email."','".$senha."')";
        echo $sql;

        //EXECUTA COMANDO NO BANCO DE DADOS
        $result = mysqli_query($con,$sql);
        if($result){
            echo "<h2>Dados cadastrados com sucesso</h2>";
        }
        else{
            echo "<h2>Erro ao cadastrar!!!!</h2>";
            echo mysqli_error($con);
        }

    ?>
    <form action="index.html">
    <input type="submit" value="Ir para o Index" />
</form>
</body>
</html>