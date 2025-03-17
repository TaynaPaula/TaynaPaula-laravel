<!doctype html>
<html lang="en" data-bs-theme="auto">

<head>
    <script src="/docs/5.3/assets/js/color-modes.js"></script>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

    <meta name="generator" content="Hugo 0.122.0">
    <title>Formulário</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/checkout/">



    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3">

    <link href="/docs/5.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!-- Favicons -->
    <link rel="apple-touch-icon" href="/docs/5.3/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
    <link rel="icon" href="/docs/5.3/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
    <link rel="icon" href="/docs/5.3/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
    <link rel="manifest" href="/docs/5.3/assets/img/favicons/manifest.json">
    <link rel="mask-icon" href="/docs/5.3/assets/img/favicons/safari-pinned-tab.svg" color="#712cf9">
    <link rel="icon" href="/docs/5.3/assets/img/favicons/favicon.ico">
    <meta name="theme-color" content="#712cf9">

    <!-- Custom styles for this template -->
    <link href="checkout.css" rel="stylesheet">
</head>

<body class="bg-body-tertiary">
    <svg xmlns="http://www.w3.org/2000/svg" class="d-none">
        <symbol id="check2" viewBox="0 0 16 16">
            <path d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z" />
        </symbol>
        <symbol id="circle-half" viewBox="0 0 16 16">
            <path d="M8 15A7 7 0 1 0 8 1v14zm0 1A8 8 0 1 1 8 0a8 8 0 0 1 0 16z" />
        </symbol>
        <symbol id="moon-stars-fill" viewBox="0 0 16 16">
            <path d="M6 .278a.768.768 0 0 1 .08.858 7.208 7.208 0 0 0-.878 3.46c0 4.021 3.278 7.277 7.318 7.277.527 0 1.04-.055 1.533-.16a.787.787 0 0 1 .81.316.733.733 0 0 1-.031.893A8.349 8.349 0 0 1 8.344 16C3.734 16 0 12.286 0 7.71 0 4.266 2.114 1.312 5.124.06A.752.752 0 0 1 6 .278z" />
            <path d="M10.794 3.148a.217.217 0 0 1 .412 0l.387 1.162c.173.518.579.924 1.097 1.097l1.162.387a.217.217 0 0 1 0 .412l-1.162.387a1.734 1.734 0 0 0-1.097 1.097l-.387 1.162a.217.217 0 0 1-.412 0l-.387-1.162A1.734 1.734 0 0 0 9.31 6.593l-1.162-.387a.217.217 0 0 1 0-.412l1.162-.387a1.734 1.734 0 0 0 1.097-1.097l.387-1.162zM13.863.099a.145.145 0 0 1 .274 0l.258.774c.115.346.386.617.732.732l.774.258a.145.145 0 0 1 0 .274l-.774.258a1.156 1.156 0 0 0-.732.732l-.258.774a.145.145 0 0 1-.274 0l-.258-.774a1.156 1.156 0 0 0-.732-.732l-.774-.258a.145.145 0 0 1 0-.274l.774-.258c.346-.115.617-.386.732-.732L13.863.1z" />
        </symbol>
        <symbol id="sun-fill" viewBox="0 0 16 16">
            <path d="M8 12a4 4 0 1 0 0-8 4 4 0 0 0 0 8zM8 0a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 0zm0 13a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 13zm8-5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2a.5.5 0 0 1 .5.5zM3 8a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2A.5.5 0 0 1 3 8zm10.657-5.657a.5.5 0 0 1 0 .707l-1.414 1.415a.5.5 0 1 1-.707-.708l1.414-1.414a.5.5 0 0 1 .707 0zm-9.193 9.193a.5.5 0 0 1 0 .707L3.05 13.657a.5.5 0 0 1-.707-.707l1.414-1.414a.5.5 0 0 1 .707 0zm9.193 2.121a.5.5 0 0 1-.707 0l-1.414-1.414a.5.5 0 0 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .707zM4.464 4.465a.5.5 0 0 1-.707 0L2.343 3.05a.5.5 0 1 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .708z" />
        </symbol>
    </svg>

    <div class="dropdown position-fixed bottom-0 end-0 mb-3 me-3 bd-mode-toggle">
        <button class="btn btn-bd-primary py-2 dropdown-toggle d-flex align-items-center"
            id="bd-theme"
            type="button"
            aria-expanded="false"
            data-bs-toggle="dropdown"
            aria-label="Toggle theme (auto)">
            <svg class="bi my-1 theme-icon-active" width="1em" height="1em">
                <use href="#circle-half"></use>
            </svg>
            <span class="visually-hidden" id="bd-theme-text">Toggle theme</span>
        </button>
        <ul class="dropdown-menu dropdown-menu-end shadow" aria-labelledby="bd-theme-text">
            <li>
                <button type="button" class="dropdown-item d-flex align-items-center" data-bs-theme-value="light" aria-pressed="false">
                    <svg class="bi me-2 opacity-50" width="1em" height="1em">
                        <use href="#sun-fill"></use>
                    </svg>
                    Light
                    <svg class="bi ms-auto d-none" width="1em" height="1em">
                        <use href="#check2"></use>
                    </svg>
                </button>
            </li>
            <li>
                <button type="button" class="dropdown-item d-flex align-items-center" data-bs-theme-value="dark" aria-pressed="false">
                    <svg class="bi me-2 opacity-50" width="1em" height="1em">
                        <use href="#moon-stars-fill"></use>
                    </svg>
                    Dark
                    <svg class="bi ms-auto d-none" width="1em" height="1em">
                        <use href="#check2"></use>
                    </svg>
                </button>
            </li>
            <li>
                <button type="button" class="dropdown-item d-flex align-items-center active" data-bs-theme-value="auto" aria-pressed="true">
                    <svg class="bi me-2 opacity-50" width="1em" height="1em">
                        <use href="#circle-half"></use>
                    </svg>
                    Auto
                    <svg class="bi ms-auto d-none" width="1em" height="1em">
                        <use href="#check2"></use>
                    </svg>
                </button>
            </li>
        </ul>
    </div>
    <!-- Nav bar -->
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
            </nav>


        </div>

    </header>


    <div class="container">
        <main>
            <div class="py-5 text-center">
                <h2>Criar minha conta</h2>
                <p class="lead">Preencha os campos abaixo:</p>
            </div>

            <div class="row g-5">

                <div class="col-md-7 col-lg-8">
                    <h4 class="mb-3">Meu Endereço</h4>
                    <form class="needs-validation" novalidate method="post" action="/cadastrar">
                        @csfr
                        @method('@POST')
                        <div class="row g-3">
                            <div class="col-sm-6">
                                <label for="firstName" class="form-label">Primeiro nome</label>
                                <input type="text" class="form-control" id="firstName" placeholder="" value="" required>
                                <div class="invalid-feedback">
                                    É necessário um primeiro nome válido.
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <label for="lastName" class="form-label">Sobrenome</label>
                                <input type="text" class="form-control" id="lastName" placeholder="" value="" required>
                                <div class="invalid-feedback">
                                    É necessário um sobrenome válido.
                                </div>
                            </div>

                            <div class="col-12">
                                <label for="username" class="form-label">Nome de usuário</label>
                                <div class="input-group has-validation">
                                    <span class="input-group-text">@</span>
                                    <input type="text" class="form-control" id="username" placeholder="Nome de usuário" required>
                                    <div class="invalid-feedback">
                                        É necessário um nome válido.
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <label for="password" class="form-label">Senha</label>
                                <input type="password" class="form-control" id="password" placeholder="Senha com no minimo 6 Caracteres" value="" required>
                                <div class="invalid-feedback">
                                    É necessário uma senha valida.
                                </div>
                            </div>

                            <div class="col-12">
                                <label for="email" class="form-label">Email <span class="text-body-secondary">(Opcional)</span></label>
                                <input type="email" class="form-control" id="email" placeholder="voce@examplo.com">
                                <div class="invalid-feedback">
                                    Insira um endereço de e-mail válido para atualizações de envio.
                                </div>
                            </div>

                            

                            <div class="col-12">
                                <label for="address" class="form-label">Endereço</label>
                                <input type="text" class="form-control" id="address" placeholder="Rua 1234 " required>
                                <div class="invalid-feedback">
                                    Insira um endereço válido
                                </div>
                            </div>

                            <div class="col-12">
                                <label for="address2" class="form-label">Complemento<span class="text-body-secondary">(Opcional)</span></label>
                                <input type="text" class="form-control" id="address2" placeholder="Apartamento 123 Bloco C">
                            </div>

                            <div class="col-md-5">
                                <label for="country" class="form-label">País</label>
                                <select class="form-select" id="country" required>
                                    <option value="">Selecione...</option>
                                    <option>Brasil</option>

                                </select>
                                <div class="invalid-feedback">
                                    Por favor selecione um país válido.
                                </div>
                            </div>

                            <div class="col-md-4">
                                <label for="sestado" class="form-label">Estado</label>
                                <select class="form-select" id="estado" required>
                                    <option value="">Selecione...</option>
                                    <option>Acre</option>
                                    <option>Alagoas</option>
                                    <option>Amapá</option>
                                    <option>Amazonas</option>
                                    <option>Bahia</option>
                                    <option>Ceará</option>
                                    <option>Distrito Federal</option>
                                    <option>Espírito Santo</option>
                                    <option>Goiás</option>
                                    <option>Maranhão</option>
                                    <option>Mato Grosso</option>
                                    <option>Mato Grosso do Sul</option>
                                    <option>Minas Gerais</option>
                                    <option>Pará</option>
                                    <option>Paraíba</option>
                                    <option>Paraná</option>
                                    <option>Pernambuco</option>
                                    <option>Piauí</option>
                                    <option>Rio de Janeiro</option>
                                    <option>Rio Grande do Norte</option>
                                    <option>Rio Grande do Sul</option>
                                    <option>Rondônia</option>
                                    <option>Roraima</option>
                                    <option>Santa Catarina</option>
                                    <option>São Paulo</option>
                                    <option>Sergipe</option>
                                    <option>Tocantins</option>
                                </select>
                                <div class="invalid-feedback">
                                    Por favor selecione um Estado válido.
                                </div>
                            </div>

                            <div class="col-md-3">
                                <label for="cidade" class="form-label">Cidade</label>
                                <input type="cidade" class="form-control" id="zip" placeholder="São Paulo" required>
                                <div class="invalid-feedback">
                                    Insira uma cidade valida
                                </div>
                            </div>

                            <div class="col-md-3">
                                <label for="cep" class="form-label">Cep</label>
                                <input type="text" class="form-control" id="cep" placeholder="08000-200" required>
                                <div class="invalid-feedback">
                                    Insira um cep válido
                                </div>
                            </div>
                        </div>

                        <hr class="my-4">

                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="same-address">
                            <label class="form-check-label" for="same-address">O endereço de entrega é o mesmo que meu endereço de cobrança</label>
                        </div>

                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="save-info">
                            <label class="form-check-label" for="save-info">Guarde esta informação para a próxima vez</label>

                        </div>

                        <hr class="my-4">


                        <button class="w-100 btn btn-primary btn-lg" type="submit">Continuar para finalizar o cadastro</button>
                        <small class="form__spam-disclaimer">
                            <p data-spam-detection-disclaimer="">Este site é protegido por hCaptcha e a <a href="https://hcaptcha.com/privacy">Política de privacidade</a> e os <a href="https://hcaptcha.com/terms">Termos de serviço</a> do hCaptcha se aplicam.</p>
                        </small>



                    </form>
                    <div class="form__secondary-action">
                        <p>Já tem uma conta? <a href="/account/login" class="link link--accented">Entre aqui</a></p>
                    </div>
                </div>
        </main>

        <!-- Aqui ele carrega ofoot separado -->
        @include('layouts.footer')
    </div>
    <script src="/docs/5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <script src="checkout.js"></script>
</body>

</html>