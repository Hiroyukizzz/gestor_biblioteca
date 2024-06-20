<?php
include 'config.php';  

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST["id"];        
    $nome = $_POST["nome"];       
    $sobrenome = $_POST["sobrenome"]; 
    $telefone = $_POST["telefone"];   
    $email = $_POST["email"];
    $senha = $_POST["senha"];

    $sql = "UPDATE usuarios SET nome='$nome', sobrenome='$sobrenome', telefone='$telefone', email='$email', senha='$senha' WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        header("Location: index.php"); 
        exit();
    } else {
        echo "Erro: " . $sql . "<br>" . $conn->error;  
    }
}

$conn->close(); 
?>