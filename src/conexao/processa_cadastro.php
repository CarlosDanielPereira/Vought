<?php

session_start();
require "conexao.php";


$nome_usuario = $_POST["nome_usuario"];
$idade = $_POST["idade"];
$foto_perfil = $_FILES["foto_perfil"];

// Processar upload da imagem
$foto_nome = basename($foto_perfil["name"]);
$pasta_destino = "../pages/uploads/herois/";
$caminho_completo = $pasta_destino . $foto_nome;

if (move_uploaded_file($foto_perfil["tmp_name"], $caminho_completo)) {
    // Inserir dados na tabela herois
    $sql = "INSERT INTO herois (nome, idade, imagem) 
            VALUES (?, ?, ?)";
    
    $stmt = $conn->prepare($sql);
    
    $stmt->bind_param("sis", $nome_usuario, $idade, $foto_nome);
    
    if ($stmt->execute()) {
        $_SESSION["mensagem"] = "Cadastro realizado com sucesso!";
        header("Location: ../pages/catalogo.php");
        exit();
    } else {
        $_SESSION["erro"] = "Erro ao cadastrar: " . $stmt->error;
        header("Location: ../pages/catalogo.php");
        exit();
    }
} else {
    $_SESSION["erro"] = "Erro ao fazer upload da imagem";
    header("Location: ../pages/catalogo.php");
    exit();
}

?>