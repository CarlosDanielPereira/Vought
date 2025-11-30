<?php
require_once "../conexao/conexao.php";

// Pegando dados do formulário
$nome_usuario   = $_POST['nome_usuario'];
$email          = $_POST['email'];
$telefone       = $_POST['telefone'];
$data_nascimento = $_POST['data_nascimento'];

// Criptografando a senha
$senha = password_hash($_POST['senha'], PASSWORD_DEFAULT);

// Diretório onde as fotos vão ficar
$diretorio = "uploads/";

// Criar pasta se não existir
if (!is_dir($diretorio)) {
    mkdir($diretorio, 0777, true);
}

// Foto enviada
$foto = $_FILES['foto_perfil']['name'];
$caminho_final = $diretorio . basename($foto);

// Mover foto para a pasta uploads/
if (!move_uploaded_file($_FILES['foto_perfil']['tmp_name'], $caminho_final)) {
    die("Erro ao enviar a foto.");
}

// SQL de inserção
$sql = "INSERT INTO usuarios 
        (nome_usuario, email, telefone, data_nascimento, senha, foto_perfil)
        VALUES (?, ?, ?, ?, ?, ?)";

$stmt = $conn->prepare($sql);
$stmt->bind_param("ssssss", $nome_usuario, $email, $telefone, $data_nascimento, $senha, $caminho_final);

if ($stmt->execute()) {
    echo "<h1>Cadastrado com sucesso!</h1>";
    echo "<a href='login.html'>Ir para o login</a>";
} else {
    echo "Erro ao cadastrar: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>
