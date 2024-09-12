
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <nav class="navbar navbar-expand-lg bg-body-tertiary" >
        <div class="container-fluid">
        <a class="navbar-brand" href="#">Menu</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="Index.php">Home</a>
            </li>
            <?php
                include('inicia_sessao.php');
                if(!empty($_SESSION['login'])):
            ?>
            <li class="nav-item">
                <a class="nav-link" href="cadastrocidade.php">Cadastrar Cidade</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="cadastroclientes.php">Cadastrar Cliente</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="ListarCidade.php">Listar Cidade</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="ListarClientes.php">Listar Cliente</a>
            </li>
            <li class="nav-item"><a class="nav-link" href="logout.php">LogOut</a></li>
            <?php
                echo "<li class='nav-item'><a class='nav-link'style='font-weight: bold;'>Olá ".$_SESSION['login']['nome']."</a></li>";
                
                endif;
            ?>
            </ul>
        </div>
        </div>
    </nav>

