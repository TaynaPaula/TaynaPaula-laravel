<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <title>Ceravida</title>
    <style>
        .image-hover {
            display: none;
            width: 100%;
            height: auto;
        }

        .d-block w-100 {
            display: none;
            width: 1%;
            height: auto;
        }

        .accordion-item:hover .image-hover {
            display: block;
        }
    </style>
</head>

<body>
    <header>
        
        <div class="shadow p-3 mb-5 bg-body-tertiary rounded">
            <nav class="navbar navbar-expand-lg bg-body-tertiary">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#">Ceravida</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                        <div class="navbar-nav">
                            <a class="nav-link" href="#">Aparelho de Jantar</a>
                            <a class="nav-link" href="#">Pratos</a>
                            <a class="nav-link" href="#">Pets</a>
                            <a class="nav-link" href="#">Servir</a>
                            <a class="nav-link" href="#">Chá e Café</a>
                            <a class="nav-link active" aria-current="page" href="#">Home</a>
                        </div>
                    </div>
                </div>

        </div>
        </nav>
    </header>
    <!-- Banner Principal -->

    <main>
        <div class="shadow p-3 mb-5 bg-body-tertiary rounded">
            <div class="container text-center">
                <div class="row" id="accordionFlushExample">
                    <div class="col-md-3">
                        <div class="accordion accordion-flush">
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                                        Aparelho de Jantar
                                    </button>
                                </h2>
                                <div id="flush-collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">
                                        <p><a class="link-opacity-50" href="#">Clássicos</a></p>
                                        <p><a class="link-opacity-50" href="#">Floreal</a></p>
                                        <p><a class="link-opacity-50" href="#">Comtemporâneo</a></p>
                                    </div>
                                    <img src="/public/imagens/aparelhoJantar.jpg" alt="Imagem 4" class="image-hover">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="accordion accordion-flush">
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                                        Pratos
                                    </button>
                                </h2>
                                <div id="flush-collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">
                                        <p><a class="link-opacity-50" href="#">Rasos</a></p>
                                        <p><a class="link-opacity-50" href="#">Fundos</a></p>
                                        <p><a class="link-opacity-50" href="#">Avulsos</a></p>
                                    </div>
                                    <img src="/public/imagens/pratos.jpg" alt="Imagem 4" class="image-hover">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="accordion accordion-flush">
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                                        Servir
                                    </button>
                                </h2>
                                <div id="flush-collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">
                                        <p><a class="link-opacity-50" href="#">Sobremesas</a></p>
                                        <p><a class="link-opacity-50" href="#">Bowls e Tigelas</a></p>
                                        <p><a class="link-opacity-50" href="#">Travessas</a></p>
                                    </div>
                                    <img src="/public/imagens/bowls.jpg" alt="Imagem 4" class="image-hover">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="accordion accordion-flush">
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseFour">
                                        Chá e Café
                                    </button>
                                </h2>
                                <div id="flush-collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">
                                        <p><a class="link-opacity-50" href="#">Copos</a></p>
                                        <p><a class="link-opacity-50" href="#">Canecas</a></p>
                                        <p><a class="link-opacity-50" href="#">Conjuntos</a></p>
                                    </div>
                                    <img src="/public/imagens/copos.jpg" alt="Imagem 4" class="image-hover">

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- favoritos -->
        <div>
            <div class="container px-4 text-center">
                <div class="row gx-5">
                    <div class="col">
                        <div class="p-3">
                            <div id="carouselExampleIndicators" class="carousel slide">
                                <div class="carousel-indicators">
                                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                                </div>
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img src="/public/imagens/aparelhoJantar.jpg" class="d-block w-100" alt="...">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="/public/imagens/travessaOrganica.jpg" class="d-block w-100" alt="...">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="/public/imagens//conjuntoCha.jpg" class="d-block w-100" alt="...">
                                    </div>
                                </div>
                                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Next</span>
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- cards das novidades-->
                    <div class="col">
                        <div class="p-3">
                            <div id="carouselTwo" class="carousel slide">
                                <div class="carousel-indicators">
                                    <button type="button" data-bs-target="#carouselTwo" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                    <button type="button" data-bs-target="#carouselTwo" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                    <button type="button" data-bs-target="#carouselTwo" data-bs-slide-to="2" aria-label="Slide 3"></button>
                                </div>

                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                    
                                        <img src="/public/imagens/xicaras.jpg" class="d-block w-100" alt="...">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="/public/imagens/bule.jpg" class="d-block w-100" alt="...">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="/public/imagens/mantegueira.png" class="d-block w-100" alt="...">
                                    </div>
                                </div>
                                <button class="carousel-control-prev" type="button" data-bs-target="#carouselTwo" data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button" data-bs-target="#carouselTwo" data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Next</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div>
            <div class="container text-center">
                <div class="row justify-content-md-center">
                    <div class="col col-lg-2">
                    </div>
                    <div class="col-md-auto">

                        <h3>CERÂMICAS</h3>
                        <p>Peças perfeitas para o seu dia a dia. Produtos alegres,
                            com cores e estampas modernas aliadas a um design pensado
                            unicamente na praticidade e no seu conforto. Aparelhos de
                            jantar, peças temáticas, copos, canecas, tigelas e complementos
                            em cerâmica que serão verdadeiros companheiros para os melhores momentos da sua rotina!</p>

                    </div>
                </div>
            </div>
        </div>

        <!-- Footer -->
        <div>
             <!-- Footer -->
        <footer class="bg-dark text-light text-center py-3 mt-5">
            <p>&copy; 2025 Ceravida. Todos os direitos reservados.</p>
        </footer>
        </div>

    </main>
</body>

</html>