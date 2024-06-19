<?php
include 'config.php'; 

if (isset($_GET['id'])) {  
    $id = $_GET['id'];


    $sql = "DELETE FROM usuarios WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        header("Location: index.php"); 
        exit();
    } else {
        echo "Erro: " . $sql . "<br>" . $conn->error; 
    }
}

$conn->close();  
?>