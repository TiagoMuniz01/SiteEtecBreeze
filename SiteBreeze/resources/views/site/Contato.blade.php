<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contato</title>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
        integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('style.css') }}">
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <img class="logo m-3" src="{{ asset('imagens/Logo - EtecZonaLeste.png') }}" alt="Bootstrap" width="300"
                    height="80">
            </div>
        </div>
    </div>
    <nav class="navbar navbar-expand-lg sticky-top" style="background-color: #AE0F0A;">
        <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
            <ul class="navbar-nav mx-auto">
                <li class="nav-item mx-3">
                    <a class="nav-link" aria-current="page" href="{{ route('home') }}">Home</a>
                </li>
                <li class="nav-item mx-3">
                    <a class="nav-link active" href="{{ route('contato') }}">Contato</a>
                </li>
                <li class="nav-item mx-3">
                    <a class="nav-link" href="{{ route('login') }}">Login</a>
                </li>
            </ul>
        </div>
    </nav>

    <main>
        <div class="container-fluid">
            <div class="row">
                <div class="col m-5">
                    <br class="m-5">
                    <section>

                        <h2>Contato</h2>
                        <div class="linha-decorativa">
                            <div class="quadrado"></div>
                            <div class="linha"></div>
                        </div>

                        <img src="{{ asset('imagens/imagem_contato.webp') }}" class="img-fluid mt-5">


                        <!--Formulário-->
                        <div class="bg-secondary-subtle text-secondary-emphasis p-4 mt-3">
                            <div class="row">
                                <form action="" method="post">
                                    <div class="mb-3">
                                        <label for="nome" class="form-label">Nome</label>
                                        <input type="text" class="form-control" id="nome"
                                            placeholder="Digite seu nome completo" name="nome">
                                    </div>
                                    <div class="mb-3">
                                        <label for="email" class="form-label">Email</label>
                                        <input type="email" class="form-control" id="email"
                                            placeholder="seuemail@gmail.com" name="email">
                                    </div>
                                    <div class="mb-3">
                                        <label for="assunto" class="form-label">Assunto</label>
                                        <input type="text" class="form-control" id="assunto" placeholder="Assunto"
                                            name="assunto">
                                    </div>
                                    <div class="mb-3">
                                        <label for="mensagem" class="form-label">Mensagem</label>
                                        <textarea class="form-control" id="mensagem" name="mensagem" rows="3"
                                            placeholder="Digite sua mensagem"></textarea>
                                    </div>
                                    <button type="submit" class="btn btn-primary"
                                        style="--bs-btn-padding-y: .5%; --bs-btn-padding-x: 5%; --bs-btn-font-size: 1.2rem;">
                                        Enviar
                                    </button>
                                </form>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </main>

    <footer class="bg-dark text-ligth mt-5">
        <div class="container-fluid py-3">
            <div classs="row">
                <div classs="col">
                    <a href="https://sp.gov.br/sp">
                        <img class="rounded mx-auto d-block"
                            src="{{ asset('imagens/logo-rodape-governo-do-estado-sp.png') }}" alt="Bootstrap"
                            width="300" height="80">
                    </a>
                </div>
            </div>
        </div>
    </footer>
</body>

</html>