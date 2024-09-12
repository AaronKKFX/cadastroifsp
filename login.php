<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="stylelogin.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="stylelogin.css"> <!-- Link para o CSS personalizado -->
    <title>LOGIN</title>
    <?php
        include('menu.php');
    ?>
</head>
<body>
    <main class="d-flex justify-content-center align-items-center vh-100">
        <div class="card p-4 shadow-sm" style="width: 100%; max-width: 400px;">
            <h1 class="text-center mb-4">LOGIN</h1>
            <form action="loginExe.php" method="post">
                <div class="mb-3">
                    <label for="email" class="form-label">E-MAIL</label>
                    <input type="email" name="email" id="email" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label for="senha" class="form-label">SENHA</label>
                    <input type="password" name="senha" id="senha" class="form-control" required>
                </div>
                <div class="d-grid">
                    <button type="submit" class="btn btn-primary">Entrar</button>
                </div>
            </form>
        </div>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
