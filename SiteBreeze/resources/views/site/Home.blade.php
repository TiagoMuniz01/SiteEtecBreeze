<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
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
                    <a class="nav-link active" aria-current="page" href="{{ route('home') }}">Home</a>
                </li>
                <li class="nav-item mx-3">
                    <a class="nav-link" href="{{ route('contato') }}">Contato</a>
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
                <div class="col">
                    <section>
                        <div class="container-fluid mt-3">
                            <div id="carouselExampleCaptions" class="carousel slide">
                                <div class="carousel-indicators">
                                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0"
                                        class="active" aria-current="true" aria-label="Slide 1"></button>
                                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                                        aria-label="Slide 2"></button>
                                </div>
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img src="{{ asset('imagens/Sala-De-Aula.jpg') }}" class="img-fluid w-100"
                                            alt="..." style="max-height: 3000px; object-fit: cover;">
                                        <div class="carousel-caption d-none d-md-block">
                                            <h5>Nossos cursos</h5>
                                            <p>Conheça nossos cursos e as modalidades disponíveis</p>
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <img src="{{ asset('imagens/BLOCO-A.jpg') }}" class="d-block w-100" alt="...">
                                        <div class="carousel-caption d-none d-md-block">
                                            <h5>Nosso espaço</h5>
                                            <p>Contamos com uma infraestrutura moderna, laboratórios e salas equipadas
                                                com
                                                televisões, computadores, notebooks, impressoras 3D e muitos outros
                                                componentes
                                                propícios aos projetos que desenvolvemos durante a jornada dos
                                                estudantes.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <button class="carousel-control-prev" type="button"
                                    data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button"
                                    data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Next</span>
                                </button>
                            </div>
                        </div>
                    </section>
                    <br>
                    <div class="container-fluid">
                        <section>
                            <!--Elemento visual de linha decorativa em vermelho -->
                            <div class="linha-decorativa">
                                <div class="quadrado"></div>
                                <div class="linha"></div>
                            </div>
                            <h2>Cursos</h2>
                            <p>Na ETEC Zona Leste, você encontra educação de qualidade, infraestrutura moderna e cursos pensados para preparar você para os desafios do mercado de trabalho, com laboratórios equipados, professores experientes e metodologias que conectam teoria e prática, oferecendo uma formação completa para quem busca crescimento pessoal e profissional, nas áreas de tecnologia, gestão, saúde ou indústria, abrindo portas para o seu sucesso com projetos inovadores, parcerias com empresas, incentivo ao empreendedorismo e ensino gratuito de qualidade reconhecida.</p>
                            <br>
                            <div class="linha-decorativa">
                                <div class="quadrado"></div>
                                <div class="linha"></div>
                            </div>
                            <h2>Departamentos</h2>
                            <p>A ETEC Zona Leste conta com diversos departamentos especializados que garantem suporte completo aos estudantes, desde coordenação de cursos e orientação educacional até setores administrativos e de tecnologia, oferecendo atendimento dedicado para esclarecer dúvidas, acompanhar o desenvolvimento acadêmico e proporcionar uma experiência de ensino integrada e eficiente.</p>
                            <br>
                            <div class="linha-decorativa">
                                <div class="quadrado"></div>
                                <div class="linha"></div>
                            </div>
                            <h2>Contato</h2>
                            <p>Fale com a ETEC Zona Leste e tire suas dúvidas sobre cursos, processos seletivos ou estrutura da escola por meio dos nossos canais oficiais de atendimento, incluindo telefone, e-mail e presencialmente, contando sempre com uma equipe pronta para atender você com agilidade, clareza e dedicação.</p>
                        </section>
                    </div>
                </div>
            </div>
        </div>

    </main>
    <footer class="bg-dark text-ligth mt-5">
        <div class="container-fluid py-3">
            <div classs="row">
                <div classs="col">
                        <a href="https://sp.gov.br/sp">
                            <img class="rounded mx-auto d-block" src="{{ asset('imagens/logo-rodape-governo-do-estado-sp.png') }}" alt="Bootstrap" width="300" height="80">
                        </a>
                </div>
            </div>
        </div> 
    </footer >
</body>

</html>