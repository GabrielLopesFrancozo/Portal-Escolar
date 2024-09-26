<?php
include('db/db-connection.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = mysqli_real_escape_string($con, $_POST['nome']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $senha = mysqli_real_escape_string($con, $_POST['senha']);

    if (!empty($nome) && !empty($email) && !empty($senha)) {
        $hashed_password = hash('sha256', $senha);

        $query = "INSERT INTO tb_alunos (nome, email, senha) VALUES ('$nome', '$email', '$hashed_password')";

        if (mysqli_query($con, $query)) {
            session_start();
            $_SESSION["email"] = $email;
            $_SESSION["senha"] = $hashed_senha;
            $_SESSION["nome"] = $dados["nome"];
            header('Location: index.php');
            exit();
        } else {
            echo "Erro ao cadastrar: " . mysqli_error($con);
        }
    } else {
        echo "Todos os campos são obrigatórios!";
    }
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="css\app.css">
    <link rel="stylesheet" href="css\style.css">
    <link rel="shortcut icon" href="./Assets/Favicon.png" type="image/x-icon">
</head>
<body>
    <div class="container">
        <div class="signup-form">
            <h2>Cadastro</h2>
            <form action="signup.php" method="POST">
                <div class="input-group">
                    <label for="nome">Nome:</label>
                    <input type="text" id="nome" name="nome" placeholder="Digite seu nome" required>
                </div>
                <div class="input-group">
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" placeholder="Digite seu email" required>
                </div>
                <div class="input-group">
                    <label for="password">Senha:</label>
                    <input type="password" id="senha" name="senha" placeholder="Digite sua senha" required>
                </div>
                <button class="card-1" type="submit"><i class="bi bi-check2-square"></i> Cadastrar</button>
            </form>
            <p class="login-link">Já tem uma conta? <a href="login.php">Faça login aqui</a></p>
        </div>
        <div class="maps">
            <iframe 
                src="https://www.google.com/maps/embed?pb=!4v1727215978314!6m8!1m7!1sDC32rR0uDCcVUhOnSoO1rg!2m2!1d-22.92491403213698!2d-47.07512254392601!3f167.36216204996714!4f-2.88823987522521!5f0.7820865974627469" 
                width="600" 
                height="450" 
                style="border:0;" 
                allowfullscreen="" 
                loading="lazy" 
                referrerpolicy="no-referrer-when-downgrade">
            </iframe>
        </div>
    </div>
</body>
</html>
