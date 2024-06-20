<?php
session_start();

// Verificação fictícia de login
$valid_email = "teste@example.com";
$valid_password = "senha123";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['Email'];
    $senha = $_POST['Senha'];

    if ($email == $valid_email && $senha == $valid_password) {
        // Login válido, redireciona para a página inicial
        $_SESSION['user_email'] = $email;
        header("Location: home_page/index.php");
        exit;
    } else {
        // Login inválido, pode exibir uma mensagem de erro
        header("Location: index.php?validation=false");
    }
}
?>