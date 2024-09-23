<div class="container">
    <div class="mb-4">
        <p class="d-inline">Você está em: </p>
        <a class="d-inline text-decoration-none" href="index.php?menu=principal">Principal/</a>
        <h6 class="d-inline">Tarefas</h6>
    </div>
    <div class="text-center border bg-light p-3 rounded">
        <h3 class="mb-4">Lista de Tarefas</h3>
        <div class="d-block w-100 text-start p-3">
            <a class="text-decoration-none" href="./index.php?menu=tarefas-realizadas">
                <div class="container border w-100 mb-3 rounded tarefas d-flex align-items-center p-3 justify-content-between">
                    <div>
                        <div class="ms-2 me-3 ps-1 pe-1 text-light d-inline-flex justify-content-center align-items-center rounded-pill" style="background-color: green; min-width: 1.2rem; font-size: 0.8rem;">
                            <?php echo 5; ?>
                        </div>
                        <i class="bi bi-clipboard-check-fill"></i> Tarefas realizadas
                    </div>
                    <i class="bi bi-arrow-right d-inline" style="height: fit-content;"></i>
                </div>
            </a>
            <a class="text-decoration-none" href="./index.php?menu=tarefas-a-fazer">
                <div class="container border w-100 mb-3 rounded tarefas d-flex align-items-center p-3 justify-content-between">
                    <div>
                        <div class="ms-2 me-3 ps-1 pe-1 text-dark d-inline-flex justify-content-center align-items-center rounded-pill bg-warning" style="min-width: 1.2rem; font-size: 0.8rem;">
                            <?php echo 2; ?>
                        </div>
                        <i class="bi bi-pencil-fill"></i> Tarefas a fazer
                    </div>
                    <i class="bi bi-arrow-right d-inline" style="height: fit-content;"></i>
                </div>
            </a>
            <a class="text-decoration-none" href="./index.php?menu=tarefas-pendentes">
                <div class="container border w-100 mb-3 rounded tarefas d-flex align-items-center p-3 justify-content-between">
                    <div>
                        <div class="ms-2 me-3 ps-1 pe-1 text-light d-inline-flex justify-content-center align-items-center rounded-pill bg-danger" style="min-width: 1.2rem; font-size: 0.8rem;">
                            <?php echo 3; ?>
                        </div>
                        <i class="bi bi-clock-fill"></i> Tarefas pendentes
                    </div>
                    <i class="bi bi-arrow-right d-inline" style="height: fit-content;"></i>
                </div>
            </a>
        </div>
    </div>
</div>