<<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>CRUD com PHP e MySQL</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="styles.css">
</head>
<body>

<div class="container">
        <div>
            <?php 
                if(isset($_GET['validation'])){
                    echo "<p class=error_container>Usuário ou senha incorretos</p>";
                }
            ?>
        </div>
    <h2 class="mt-5">Login</h2>
    <form action="verification.php" method="post">
        <div class="form-group">
            <label for="Email">Email</label>
            <input type="email" name="Email" class="form-control" id="Email" required>
        </div>
        <div class="form-group">
            <label for="Senha">Senha</label>
            <input type="password" name="Senha" class="form-control" id="Senha" required pattern=".{6,}">
        </div>

        <button type="submit" class="btn btn-primary">Login</button>

        <button type="button" id="register" class="btn btn-primary btn-register">
            <a href="register/index.php">Registrar</a>
        </button> 
    </form>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const registerButton = document.getElementById('register');
        registerButton.addEventListener('click', function() {
            window.location.href = 'register/index.php';
        });
    });
</script>

</body>
</html>

