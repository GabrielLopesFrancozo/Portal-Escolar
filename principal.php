<?php include("card.php");
?>

<div class="container">
    <div class="mb-4">
        <p class="d-inline">Você está em: </p>
        <h6 class="d-inline">Principal</h6>
    </div>
    <div class="container text-center border bg-light p-3 rounded">
        <div class="row row-cols-1 row-cols-md-2 row-cols-xl-3">
            <div class="col d-flex justify-content-center mb-3">
                <a class="text-decoration-none" href="./index.php?menu=horario-aulas">
                    <?php $card = new CardComponent("https://revistaeducacao.com.br/wp-content/uploads/2018/09/shutterstock_309241151-site.jpg", "Horario de aulas"); ?>
                </a>
            </div>
            <div class="col d-flex justify-content-center mb-3">
                <a class="text-decoration-none" href="./index.php?menu=tarefas">
                    <?php $card = new CardComponent("https://sitecontent.kumon.com.br/site/general/637963541310204762_tarefa-de-casa-momento-de-prazer.jpg?width=100", "Tarefas de casa"); ?>
                </a>
            </div>
            <div class="col d-flex justify-content-center mb-3">
                <a class="text-decoration-none" href="./index.php?menu=biblioteca">
                    <?php $card = new CardComponent("https://i0.wp.com/educacional.com.br/wp-content/uploads/2023/12/como-organizar-uma-biblioteca-escolar.jpg?fit=1024%2C698&ssl=1", "Biblioteca online"); ?>
                </a>
            </div>
            <div class="col d-flex justify-content-center mb-3">
                <a class="text-decoration-none" href="./index.php?menu=cardapio">
                    <?php $card = new CardComponent("https://cnte.org.br/images/cache/systemuploadsnews14d4b1ee294bbb2f34b-320x210xfit-4e125.png", "Cardápio"); ?>
                </a>
            </div>
            <div class="col d-flex justify-content-center mb-3">
                <a class="text-decoration-none" href="./index.php?menu=vestibular">
                    <?php $card = new CardComponent("https://tuiuti.edu.br/wp-content/uploads/2023/01/vestibular-utp.webp", "Aceleração vestibular"); ?>
                </a>
            </div>
            <div class="col d-flex justify-content-center mb-3">
                <a class="text-decoration-none" href="./index.php?menu=plantao">
                    <?php $card = new CardComponent("https://porvir-prod.s3.amazonaws.com/wp-content/uploads/2020/08/05174957/cloe-perguntadisparadora.jpg", "Plantão de dúvidas"); ?>
                </a>
            </div>
        </div>
    </div>
</div>