<?php

include('./db/db-connection.php');

$msg_error = "";

if (isset($_POST["email"]) &&  isset($_POST["senha"])) {
    $email =  mysqli_escape_string($con, $_POST["email"]);
    $hashed_senha = hash('sha256', $_POST["senha"]);

    $sql = "SELECT * FROM tb_alunos WHERE email = '{$email}' and senha = '{$hashed_senha}'";
    $rs = mysqli_query($con, $sql);
    $dados = mysqli_fetch_assoc($rs);
    $linha = mysqli_num_rows($rs);

    if ($linha != 0) {
        session_start();
        $_SESSION["email"] = $email;
        $_SESSION["senha"] = $hashed_senha;
        $_SESSION["nome"] = $dados["nome"];

        header('Location: ./index.php');
    } else {
        $msg_error = "<div class='alert alert-danger mt-3'>
                        <p>Usuário não encontrado ou a senha não confere.</p>
                        </div>
        ";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="./css/app.css">
    <link rel="stylesheet" href="./css/style.css">
    <title>Portal Matosinho</title>
    <link rel="shortcut icon" href="./Assets/Favicon.png" type="image/x-icon">
</head>

<body style="background-color: var(--tertiary-color);">
    <div class="container">
        <div class="login-form">
            <h2>Login</h2>
            <form action="login.php" method="POST">
                <div class="input-group">
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" placeholder="Digite seu email" required>
                </div>
                <div class="input-group">
                    <label for="senha">Senha:</label>
                    <input type="password" id="senha" name="senha" placeholder="Digite sua senha" required>
                </div>
                <button class="card-1" type="submit"><i class="bi bi-box-arrow-in-right"></i> Entrar</button>
            </form>
            <p class="signup-link">Ainda não tem uma conta? <a href="signup.php">Cadastre-se</a></p>
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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <script src="./js/validation.js"></script>
</body>

</html>