<?php
session_start();
require "../backend/conexao.php";

$nome_usuario = $_POST["nome_usuario"];
$senha = $_POST["senha"];

$sql = "SELECT * FROM usuarios WHERE nome_usuario = '$nome_usuario' OR email = '$nome_usuario'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $usuario = $result->fetch_assoc();

    if (password_verify($senha, $usuario["senha"])) {
        $_SESSION["id"] = $usuario["id"];
        $_SESSION["nome"] = $usuario["nome_usuario"];
        $_SESSION["foto"] = $usuario["foto_perfil"];

        header("Location: ../../index.html");
        exit();
    }
}

echo "Login inválido";
?>