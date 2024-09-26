<?php
include("./db/db-connection.php");

session_start();
if (isset($_SESSION["email"]) and isset($_SESSION["senha"])) {
    $email = $_SESSION["email"];
    $senha = $_SESSION["senha"];
    $nome = $_SESSION["nome"];

    $sql = "SELECT * FROM tb_alunos WHERE email = '{$email}' and senha = '{$senha}'";
    $rs = mysqli_query($con, $sql);
    $dados = mysqli_fetch_assoc($rs);
    $linha = mysqli_num_rows($rs);

    if ($linha == 0) {
        session_unset();
        session_destroy();
        header('Location: login.php');
        exit();
    }
} else {
    header('Location: login.php');
    exit();
}

if (isset($_GET["menu"])) {
    $menu = $_GET["menu"];
} else {
    $menu = "";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portal Matosinho</title>
    <link rel="shortcut icon" href="./Assets/Favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="./css/app.css">

    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <!-- swiper -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
</head>

<body class="bg-light vh-100">
    <header class="container-fluid" style="margin-bottom: 5.5rem; background-color: #3B307E">
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top" style="background-color: #3B307E">
            <div class="container">
                <a class="navbar-brand" href="index.php"><img src="./Assets/Favicon.png" alt="Icone escrito JMM" width="40"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent" style="justify-content: space-between;">
                    <ul class="navbar-nav nav-underline">
                        <li class="nav-item"><a class="nav-link <?php echo ($menu == 'principal') ? 'active' : '' ?>" href="index.php?menu=principal"><i class="bi bi-house"></i> Principal</a></li>
                        <li class="nav-item"><a class="nav-link <?php echo ($menu == 'perfil') ? 'active' : '' ?>" href="index.php?menu=perfil"><i class="bi bi-person-fill"></i> Perfil</a></li>
                        <li class="nav-item"><a class="nav-link <?php echo ($menu == 'boletim') ? 'active' : '' ?>" href="index.php?menu=boletim"><i class="bi bi-journal-bookmark-fill"></i> Boletim</a></li>
                        <li class="nav-item"><a class="nav-link <?php echo ($menu == 'avisos') ? 'active' : '' ?>" href="index.php?menu=avisos"><i class="bi bi-envelope-exclamation-fill"></i> Avisos</a></li>
                        <li class="nav-item"><a class="nav-link <?php echo ($menu == 'contato') ? 'active' : '' ?>" href="index.php?menu=contato"><i class="bi bi-chat-fill"></i> Contato</a></li>
                    </ul>
                    <div class="d-inline">
                        <p class="text-white d-inline me-3"><?= $nome?></p>
                        <a href="logout.php" class="btn btn-outline-light">Sair</a>
                    </div>
                </div>
            </div>
        </nav>
    </header>
    <main class="container">
        <?php
        switch ($menu) {
            case "principal":
                include("principal.php");
                break;
            case "perfil":
                include("perfil.php");
                break;
            case "boletim":
                include("boletim.php");
                break;
            case "avisos":
                include("avisos.php");
                break;
            case "contato":
                include("contato.php");
                break;
            case "horario-aulas":
                include("horario-aulas.php");
                break;
            case "tarefas":
                include("tarefas.php");
                break;
            case "biblioteca":
                include("biblioteca.php");
                break;
            case "cardapio":
                include("cardapio.php");
                break;
            case "vestibular":
                include("vestibular.php");
                break;
            case "plantao":
                include("plantao.php");
                break;
            case "tarefas-realizadas":
                include("tarefas-realizadas.php");
                break;
            case "tarefas-a-fazer":
                include("tarefas-a-fazer.php");
                break;
            case "tarefas-pendentes":
                include("tarefas-pendentes.php");
                break;
            default:
                include("principal.php");
                break;
        }
        ?>
    </main>
    <footer class="container-fluid text-white footer ps-5 pe-5" style="margin-top: 6rem; opacity: 1; background-color: #3B307E">
        <div class="row pt-5 pb-5">
            <section class="col-md-4">
                <h4>José Maria Matosinho</h4>
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link text-white a-underlined" href="#">Aluno</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white a-underlined" href="#">Professor</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white a-underlined" href="#">Coordenador</a>
                    </li>
                </ul>
            </section>
            <section class="col-md-4">
                <h4>Contato</h4>
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link text-white a-underlined" href="#">Email: Matosinho@exemplo.com</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white a-underlined" href="tel:+5511999999999">Telefone: (11) 99999-9999</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white a-underlined" href="https://wa.me/5511999999999?text=Quero%20saber%20mais%20sobre%20a%20escola!" target="_blank">Whatsapp: (11) 99999-9999</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white a-underlined" href="#">Telegram: @Matosinho</a>
                    </li>
                </ul>
            </section>
            <section class="col-md-4">
                <h4>Redes Sociais</h4>
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link text-white a-underlined" href="https://www.facebook.com/" target="_blank"><i class="bi bi-facebook"></i> Facebook</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white a-underlined" href="https://www.instagram.com/" target="_blank"><i class="bi bi-instagram"></i> Instagram</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white a-underlined" href="https://www.linkedin.com/" target="_blank"><i class="bi bi-linkedin"></i> LinkedIn</a>
                    </li>
                </ul>
            </section>
            <hr class="mt-5">
            <section class="col-md-12 mt-5">
                <p class="text-center">© <?= date("Y") ?>. Todos os direitos reservados.</p>
            </section>
        </div>
    </footer>

    <!-- bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <!-- swiper -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="./js/swiper.js"></script>
</body>

</html>