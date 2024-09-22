<?php include("card.php");?>

<div class="container">
    <div class="mb-4">
        <p class="d-inline">Você está em: </p>
        <h6 class="d-inline">Principal</h6>
    </div>
    <div class="container text-center border bg-light p-3 rounded">
        <div class="row row-cols-3">
            <div class="col  d-flex justify-content-center mb-3">
                <a class="text-decoration-none" href="./index.php?menu=horario-aulas">
                    <div class="card" style="width: 20rem;">
                        <img src="https://revistaeducacao.com.br/wp-content/uploads/2018/09/shutterstock_309241151-site.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Horario de Aulas</h5>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col  d-flex justify-content-center mb-3">
                <a class="text-decoration-none" href="./index.php?menu=tarefas">
                    <div class="card" style="width: 20rem;">
                        <img src="https://sitecontent.kumon.com.br/site/general/637963541310204762_tarefa-de-casa-momento-de-prazer.jpg?width=100" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Tarefas de casa</h5>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col  d-flex justify-content-center mb-3">
                <a class="text-decoration-none" href="./index.php?menu=biblioteca">
                    <div class="card" style="width: 20rem;">
                        <img src="https://i0.wp.com/educacional.com.br/wp-content/uploads/2023/12/como-organizar-uma-biblioteca-escolar.jpg?fit=1024%2C698&ssl=1" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Biblioteca online</h5>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col  d-flex justify-content-center">
                <a class="text-decoration-none" href="./index.php?menu=cardapio">
                    <div class="card" style="width: 20rem;">
                        <img src="https://cnte.org.br/images/cache/systemuploadsnews14d4b1ee294bbb2f34b-320x210xfit-4e125.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Cardápio</h5>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col  d-flex justify-content-center">
                <a class="text-decoration-none" href="./index.php?menu=vestibular">
                    <div class="card" style="width: 20rem;">
                        <img src="https://tuiuti.edu.br/wp-content/uploads/2023/01/vestibular-utp.webp" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Aceleração vestibular</h5>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col  d-flex justify-content-center">
                <a class="text-decoration-none" href="./index.php?menu=plantao">
                    <?php $card = new CardComponent("https://porvir-prod.s3.amazonaws.com/wp-content/uploads/2020/08/05174957/cloe-perguntadisparadora.jpg","Plantão de dúvidas");?>
                </a>
            </div>
        </div>
    </div>
</div>