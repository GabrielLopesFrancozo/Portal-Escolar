<?php
// include("./db/conexao.php");

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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="./css/app.css">
</head>

<body class="bg-light">
    <header class="container-fluid bg-primary" style="margin-bottom: 8rem;">
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary mb-5 fixed-top" style="height: 6rem;">
            <div class="container">
                <a class="navbar-brand" href="index.php"><img src="./Assets/Favicon.png" alt="Icone escrito JMM" width="40"></a>
                <div class="navbar-collapse" style="justify-content: space-between;">
                    <ul class="navbar-nav nav-underline mb-2 mt-2">
                        <li class="nav-item"><a class="nav-link <?php echo ($menu == 'principal') ? 'active' : '' ?>" href="index.php?menu=principal"><i class="bi bi-house"></i> Principal</a></li>
                        <li class="nav-item"><a class="nav-link <?php echo ($menu == 'perfil') ? 'active' : '' ?>" href="index.php?menu=perfil"><i class="bi bi-person-fill"></i> Perfil</a></li>
                        <li class="nav-item"><a class="nav-link <?php echo ($menu == 'boletim') ? 'active' : '' ?>" href="index.php?menu=boletim"><i class="bi bi-journal-bookmark-fill"></i> Boletim</a></li>
                        <li class="nav-item"><a class="nav-link <?php echo ($menu == 'avisos') ? 'active' : '' ?>" href="index.php?menu=avisos"><i class="bi bi-envelope-exclamation-fill"></i> Avisos</a></li>
                        <li class="nav-item"><a class="nav-link <?php echo ($menu == 'contato') ? 'active' : '' ?>" href="index.php?menu=contato"><i class="bi bi-chat-fill"></i> Contato</a></li>
                    </ul>
                    <div class="m-5 d-inline">
                        <p class="text-white d-inline m-2 mb-0 mt-0">João Matosinho da Silva</p>
                        <button class="btn btn-outline-light">Sair</button>
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
            default:
                include("principal.php");
                break;
        }
        ?>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>