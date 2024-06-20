<?php
include 'config.php';

$sql = "SELECT * FROM pessoas";
$result = $conn->query($sql);

if ($result->num_rows > 0) {  
    echo '<table class="table table-bordered">';
    echo '<tr><th>ID</th><th>Nome</th><th>Sobrenome</th><th>Telefone</th><th>Ação</th></tr>';
    while ($row = $result->fetch_assoc()) {  
        echo '<tr>';
        echo '<td>' . $row["id"] . '</td>';
        echo '<td>' . $row["nome"] . '</td>';
        echo '<td>' . $row["sobrenome"] . '</td>';
        echo '<td>' . $row["telefone"] . '</td>';
        echo '<td>' . $row["endereco"] . '</td>';
        echo '<td>';
        echo '<a href="update.php?id=' . $row["id"] . '" class="btn btn-success">Editar</a> ';
        echo '<a href="delete.php?id=' . $row["id"] . '" class="btn btn-danger">Excluir</a>';    
        echo '</td>';
        echo '</tr>';
    }
    echo '</table>';
} else {
    echo "0 resultados"; 
}

$conn->close(); 
?>
