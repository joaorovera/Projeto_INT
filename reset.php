<?php
session_start();

include_once 'conectar.php';
if (isset($_SESSION['id_usuario'])) {

    $id_usuario = $_SESSION['id_usuario'];
    $sql = "DELETE FROM cart WHERE id_usuario = $id_usuario";

if ($conn->query($sql) === TRUE) {
    header("Location: compra.html");
    exit(); 
} else {
    echo "Erro ao apagar os dados: " . $conn->error;
}
} else {
    header('Location: index.html');
    exit();
}


$conn->close();
?>