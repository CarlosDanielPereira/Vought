<?php
session_start();

// caminho certo da conexão (ajuste se necessário)
require_once "../conexao/conexao.php";

$nome_usuario = $_POST['nome_usuario'];
$senha        = $_POST['senha'];

// Consulta por nome de usuário OU email
$sql = "SELECT * FROM usuarios WHERE nome_usuario = ? OR email = ? LIMIT 1";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ss", $nome_usuario, $nome_usuario);
$stmt->execute();
$result = $stmt->get_result();

// Verifica se encontrou o usuário
if ($result->num_rows > 0) {
    $usuario = $result->fetch_assoc();

    // Verifica a senha criptografada
    if (password_verify($senha, $usuario['senha'])) {
        
        // Criar sessão
        $_SESSION['id'] = $usuario['id'];
        $_SESSION['nome_usuario'] = $usuario['nome_usuario'];
        $_SESSION['email'] = $usuario['email'];
        $_SESSION['foto_perfil'] = $usuario['foto_perfil'];

        // Redirecionar para a página inicial (ou outra)
        header("Location: ../../index.php");
        exit;
    
    } else {
        echo "<h2>❌ Senha incorreta!</h2>";
        echo "<a href='login.html'>Tentar novamente</a>";
        exit;
    }
} else {
    echo "<h2>❌ Usuário não encontrado!</h2>";
    echo "<a href='login.html'>Tentar novamente</a>";
    exit;
}

?>
