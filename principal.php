<?php include("card.php");
?>

<div class="container">
    <div class="mb-4">
        <p class="d-inline">Você está em: </p>
        <h6 class="d-inline">Principal</h6>
    </div>
    <div class="container text-center border bg-light p-3 rounded mb-5">
        <div class="row row-cols-1 row-cols-md-2 row-cols-xl-3">
            <div class="col d-flex justify-content-center mb-3">
                <a class="text-decoration-none" href="./index.php?menu=horario-aulas">
                    <?php $card = new CardComponent("https://revistaeducacao.com.br/wp-content/uploads/2018/09/shutterstock_309241151-site.jpg", "Horario de aulas", "<i class='bi bi-clock'></i>"); ?>
                </a>
            </div>
            <div class="col d-flex justify-content-center mb-3">
                <a class="text-decoration-none" href="https://cmspweb.ip.tv/" target="_blank">
                    <?php $card = new CardComponent("https://sitecontent.kumon.com.br/site/general/637963541310204762_tarefa-de-casa-momento-de-prazer.jpg?width=100", "Tarefas de casa", "<i class='bi bi-list-task'></i>"); ?>
                </a>
            </div>
            <div class="col d-flex justify-content-center mb-3">
                <a class="text-decoration-none" href="https://leiasp.odilo.us/" target="_blank">
                    <?php $card = new CardComponent("https://i0.wp.com/educacional.com.br/wp-content/uploads/2023/12/como-organizar-uma-biblioteca-escolar.jpg?fit=1024%2C698&ssl=1", "Biblioteca online", "<i class='bi bi-book-fill'></i>"); ?>
                </a>
            </div>
            <div class="col d-flex justify-content-center mb-3">
                <a class="text-decoration-none" href="./index.php?menu=cardapio">
                    <?php $card = new CardComponent("https://cnte.org.br/images/cache/systemuploadsnews14d4b1ee294bbb2f34b-320x210xfit-4e125.png", "Cardápio", "<i class='bi bi-egg-fried'></i>"); ?>
                </a>
            </div>
            <div class="col d-flex justify-content-center mb-3">
                <a class="text-decoration-none" href="https://www.mesalva.com/app/painel" target="_blank">
                    <?php $card = new CardComponent("https://tuiuti.edu.br/wp-content/uploads/2023/01/vestibular-utp.webp", "Aceleração vestibular", "<i class='bi bi-clipboard-data'></i>"); ?>
                </a>
            </div>
            <div class="col d-flex justify-content-center mb-3">
                <a class="text-decoration-none" href="./index.php?menu=plantao">
                    <?php $card = new CardComponent("https://porvir-prod.s3.amazonaws.com/wp-content/uploads/2020/08/05174957/cloe-perguntadisparadora.jpg", "Plantão de dúvidas", "<i class='bi bi-question-circle-fill'></i>"); ?>
                </a>
            </div>
        </div>
    </div>
    <div class="p-3 pb-5 rounded border text-center" style="background: var(--tertiary-color);">
        <h4 class="mt-3 mb-5">Principais notícias</h4>
        <!-- Swiper carousel -->
        <div class="swiper w-100">
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper">
                <!-- Slides -->
                <div class="swiper-slide d-flex justify-content-center align-items-center">
                    <div class="container p-0 h-100 w-75 d-flex justify-content-center align-items-center rounded" style="overflow: hidden">
                        <img src="https://www.educacao.sp.gov.br/wp-content/uploads/2024/08/53775380051_d1d92f3043_k.jpg" alt="" style="height: 40rem">
                        <div class="sticky-bottom d-flex justify-content-center align-items-end text-light w-75 p-3 pb-4 rounded-bottom" style="height: 12rem; background: linear-gradient(rgba(0, 0, 0, 0), rgba(0, 0, 0, 1)); position: absolute;">
                            <div>
                                <a class="nav-link text-light a-underlined" style="font-weight: 700; font-size: 1.1rem" href="https://www.educacao.sp.gov.br/educacao-de-sp-avalia-aprendizado-de-25-milhoes-de-estudantes-partir-de-segunda-23/" target="_blank">Educação de SP avalia aprendizado de 2,5 milhões de estudantes a partir de segunda (23)</a>
                                <p style="font-size: 0.9rem;">Prova Paulista segue até o dia 30 de setembro; escolas podem organizar repescagem até 2 de outubro</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide d-flex justify-content-center align-items-center">
                    <div class="container p-0 h-100 w-75 d-flex justify-content-center align-items-center rounded" style="overflow: hidden">
                        <img src="https://www.educacao.sp.gov.br/wp-content/uploads/2024/09/WhatsApp-Image-2024-09-24-at-17.07.26-2-1024x682.jpeg" alt="" style="height: 40rem">
                        <div class="sticky-bottom d-flex justify-content-center align-items-end text-light w-75 p-3 pb-4 rounded-bottom" style="height: 12rem; background: linear-gradient(rgba(0, 0, 0, 0), rgba(0, 0, 0, 1)); position: absolute;">
                            <div>
                                <a class="nav-link text-light a-underlined" style="font-weight: 700; font-size: 1.1rem" href="" target="_blank">Educação define premiação para grêmios de escolas com melhores notas no Saresp</a>
                                <p style="font-size: 0.9rem;">Unidades que obtiverem metas ouro e diamante receberão bonificação de acordo com número de estudantes matriculados</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide d-flex justify-content-center align-items-center">
                    <div class="container p-0 h-100 w-75 d-flex justify-content-center align-items-center rounded" style="overflow: hidden">
                        <img src="https://www.educacao.sp.gov.br/wp-content/uploads/2024/09/54015657336_f87354b480_k.jpg" alt="" style="height: 40rem">
                        <div class="sticky-bottom d-flex justify-content-center align-items-end text-light w-75 p-3 pb-5 rounded-bottom" style="height: 12rem; background: linear-gradient(rgba(0, 0, 0, 0), rgba(0, 0, 0, 1)); position: absolute;">
                            <div>
                                <a class="nav-link text-light a-underlined" style="font-weight: 700; font-size: 1.1rem" href="" target="_blank">Região de Campinas: Governo de SP entrega 52ª unidade do programa Creche Escola</a>
                                <p style="font-size: 0.9rem;">Unidade de ensino infantil inaugurada em Jaguariúna tem capacidade de atender 70 crianças</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide d-flex justify-content-center align-items-center">
                    <div class="container p-0 h-100 w-75 d-flex justify-content-center align-items-center rounded" style="overflow: hidden">
                        <img src="https://www.educacao.sp.gov.br/wp-content/uploads/2024/09/53834595761_9d09f0bf6c_k.jpg" alt="" style="height: 40rem">
                        <div class="sticky-bottom d-flex justify-content-center align-items-end text-light w-75 p-3 pb-5 rounded-bottom" style="height: 12rem; background: linear-gradient(rgba(0, 0, 0, 0), rgba(0, 0, 0, 1)); position: absolute;">
                            <div>
                                <a class="nav-link text-light a-underlined" style="font-weight: 700; font-size: 1.1rem" href="" target="_blank">Recorde na Educação: em 8 meses, SP iguala número de obras realizadas em 2023</a>
                                <p style="font-size: 0.9rem;">Investimento este ano foi de R$ 470 milhões em 880 revitalizações</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide d-flex justify-content-center align-items-center">
                    <div class="container p-0 h-100 w-75 d-flex justify-content-center align-items-center rounded" style="overflow: hidden">
                        <img src="https://www.educacao.sp.gov.br/wp-content/uploads/2024/09/SAO-SEBASTIAO.jpg" alt="" style="height: 40rem">
                        <div class="sticky-bottom d-flex justify-content-center align-items-end text-light w-75 p-3 pb-5 rounded-bottom" style="height: 12rem; background: linear-gradient(rgba(0, 0, 0, 0), rgba(0, 0, 0, 1)); position: absolute;">
                            <div>
                                <a class="nav-link text-light a-underlined" style="font-weight: 700; font-size: 1.1rem" href="" target="_blank">Escola Estadual de São Sebastião é uma das vencedoras do 1º Prêmio Projeto de Arquitetura</a>
                                <p style="font-size: 0.9rem;">A Escola Estadual Plínio Gonçalves de Oliveira Santos, em São Sebastião, no litoral norte de São Paulo, é uma das vencedoras do 1º Prêmio Projeto de Arquitetura, concedido a obras de autoria de arquitetos brasileiros executadas no país, publicadas pela...</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide d-flex justify-content-center align-items-center">
                    <div class="container p-0 h-100 w-75 d-flex justify-content-center align-items-start rounded" style="overflow: hidden">
                        <img src="https://www.educacao.sp.gov.br/wp-content/uploads/2024/09/54002841481_e8007afca2_h.jpg" alt="" style="height: 40rem">
                        <div class="sticky-bottom d-flex justify-content-center align-items-end text-light w-75 p-3 pb-5 rounded-bottom" style="height: 12rem; background: linear-gradient(rgba(0, 0, 0, 0), rgba(0, 0, 0, 1)); position: absolute;">
                            <div>
                                <a class="nav-link text-light a-underlined" style="font-weight: 700; font-size: 1.1rem" href="" target="_blank">Estudante da rede vai competir pelo arremesso de peso nos Jogos Escolares Brasileiros</a>
                                <p style="font-size: 0.9rem;">Mikaely começou a praticar há menos de dois anos; em um ano já se tornou destaque da modalidade nas edições do Jeesp</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Pagination -->
            <div class="swiper-pagination"></div>
            <!-- Navigation buttons -->
            <div class="swiper-button-prev" style="color: #3B307E;"></div>
            <div class="swiper-button-next" style="color: #3B307E;"></div>
        </div>
        <a href="https://www.saopaulo.sp.gov.br/" class="btn btn-dark text-light btn-lg btn-block mt-5" target="_blank"><i class="bi bi-newspaper"></i> Mais notícias</a>
    </div>
    <h4 class="mt-5">A escola José Maria Matosinho oferece a opção de três cursos técnicos:</h4>
    <div class="container mt-5 d-flex justify-content-between">
        <div class="card mb-3" style="width: 22rem;">
            <div class="card-body">
                <h5 class="card-title">Engenharia de Alimentos</h5>
                <p class="card-text">Aprenda sobre a industrialização de alimentos, seja no desenvolvimento, fabricação, conservação, armazenamento, transporte e comercialização.</p>
                <a href="#" class="btn card-1 text-light" style="background-color: var(--primary-color)";>Matricule-se já</a>
            </div>
        </div>
        <div class="card text-center mb-3 ms-3 me-3" style="width: 22rem;">
            <div class="card-body">
                <h5 class="card-title">Analise e Desenvolvimento de Sistemas</h5>
                <p class="card-text">Aprenda várias linguagens de programação, cada uma com seus propósitos e aplicações específicas.</p>
                <a href="#" class="btn card-1 text-light" style="background-color: var(--primary-color);">Matricule-se já</a>
            </div>
        </div>
        <div class="card text-end mb-3" style="width: 22rem;">
            <div class="card-body">
                <h5 class="card-title">Física Aplicada</h5>
                <p class="card-text">Estude sobre interações das radiações não ionizantes com a matéria e suas aplicações tecnológicas.</p>
                <a href="#" class="btn card-1 text-light" style="background-color: var(--primary-color); position: absolute; right: 0; bottom: 0; margin-bottom: 0.8rem; margin-right: 0.8rem; left: 1;">Matricule-se já</a>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Novas salas de informática</h5>
                <p class="card-text">A escola oferece novas salas de informática para o Ensino Médio integrado com o Ensino Tácnico em Análise e Desenvolvimento de Sistemas</p>
            </div>
            <img src="https://www.fae.ufmg.br/wp-content/uploads/2022/07/IMG_20190909_130059074-edited-scaled.jpg" class="card-img-bottom" alt="...">
        </div>
    </div>
</div>