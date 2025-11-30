<?php
session_start();
require "/conexao.php";

$nome_usuario = $_POST["nome_usuario"];
$email = $_POST["email"];
$telefone = $_POST["telefone"];
$data_nascimento = $_POST["data_nascimento"];
$senha = password_hash($_POST["senha"], PASSWORD_DEFAULT);

$foto = $_FILES["foto_perfil"];
$nomeFoto = time() . "_" . $foto["name"];
$caminhoFoto = "../../assets/uploads" . $nomeFoto;

move_uploaded_file($foto["tmp_name"], $caminhoFoto);

$sql = "INSERT INTO usuarios (nome_usuario, email, telefone, data_nascimento, senha, foto_perfil) 
VALUES ('$nome_usuario', '$email', '$telefone', '$data_nascimento', '$senha', '$nomeFoto')";

if ($conn->query($sql) === TRUE) {
    header("Location: login.html");
    exit();
} else {
    echo "Erro ao cadastrar: " . $conn->error;
}
?>