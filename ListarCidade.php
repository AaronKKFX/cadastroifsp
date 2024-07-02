<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="stylelista.css">
    <title>Lista de Cidades Cadastradas</title>
</head>
<body>
    
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
        <th>Estado</th>
    </tr>
    <?php
        while($row = mysqli_fetch_array($result))
        {
            echo "<tr>";
            echo "<td>".$row['id']."</td>";
            echo "<td>".$row['nome']."</td>";
            echo "<td>".$row['estado']."</td>";
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