<?php

include_once 'conectar.php';

// Verifica se os dados foram submetidos via POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    // Obtém os dados do formulário
    $email = $_POST["email"];
    $senha = $_POST["password"];

    // Consulta SQL para verificar se o email e a senha correspondem a um usuário no banco de dados
    $sql = "SELECT * FROM usuarios WHERE email = '$email' AND senha = '$senha'";
    $resultado = $conexao->query($sql);

    // Verifica se a consulta retornou algum resultado
    if ($resultado->num_rows > 0) {
        // Login bem-sucedido
        header("Location: paginicial.html");
        exit();
    } else {
        // Login falhou
        header("Location: index.html?erro=1");
        exit();
    }

}
?>
