<?php
include 'config.php';

if(isset($_GET['id'])){
    $id = $_GET['id'];
    $sql = "SELECT * FROM livros WHERE id=$id";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
}
?>