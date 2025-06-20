<!-- 
+-------------------------------------------------------------+
|           [ Logo do Petshop ]                               |
|    "Seu pet feliz é a nossa missão!"                        |
|                                                             |
|   [🐶 Imagem de cachorro e gato juntos]                     |
|                                                             |
|   [ Entrar ]    [ Fazer Login ]                             |
|                                                             |
|   ⬇ Benefícios rápidos:                                     |
|   ✔ Banho e tosa com carinho                                |
|   ✔ Loja com produtos selecionados                          |
|   ✔ Atendimento veterinário                                 |
+-------------------------------------------------------------+  -->




<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles/style-index.css">
    <link rel="shortcut icon" type="image/x-icon" href="./img/Logos/2.svg">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
    <link
        href="https://fonts.googleapis.com/css2?family=Bree+Serif&family=Zain:ital,wght@0,200;0,300;0,400;0,700;0,800;0,900;1,300;1,400&display=swap"
        rel="stylesheet">
    <title>Pagina Inicial</title>
</head>

<body class="body-inicial">
    <!-- Barra de navegação da pagina -->
    <nav class="navbar navbar-expand-lg  py-3">
        <div class="container-fluid">
            <!-- Imagem Logo completa -->
            <a class="navbar-brand d-flex align-items-center" href="#">
                <img src="./img/Logos/1.svg" alt="Logo Petshop" class="img-fluid" style="max-height: 50px;">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Itens do menu -->

            <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                <ul class="navbar-nav align-items-center me-3">

                    <li class="nav-item mx-2">
                        <a class="nav-link active" aria-current="page" href="#">Inicio</a>
                    </li>
                    <li class="nav-item mx-2">
                        <a class="nav-link active" href="#">Produtos</a>
                    </li>
                    <li class="nav-item dropdown mx-2">
                        <a class="nav-link active dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Contato
                        </a>
                        <ul class="dropdown-menu">
                            <li>
                                <a class="dropdown-item" href="#">
                                    <img src="./img/refs/Logo-WhatsApp.svg" alt="Logo WhatsApp" class="img-fluid me-2"
                                        style="max-height: 25px;">WhatsApp
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#">
                                    <img src="./img/refs/Logo-Email.svg" alt="Logo Email" class="img-fluid me-2"
                                        style="max-height: 25px;">E-mail
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#">
                                    <img src="./img/refs/Logo-Instagram.svg" alt="Logo Instagram" class="img-fluid me-2"
                                        style="max-height: 25px;">Instagram
                                </a>
                            </li>
                        </ul>
                    </li>

                    <!-- Fim do Itens do menu -->
                    <!-- Barra de busca e botão -->
                    <form class="d-flex" role="search">
                        <input class="form-control input-custom" type="search" placeholder="Buscar..."
                            aria-label="Buscar">
                        <!-- <button class="btn btn-outline-success me-2 btn-pesquisa" type="submit">Pesquisa</button>  -->
                    </form>
            </div>
        </div>
    </nav>
    <!-- Fim da barra de navegação -->




    <!-- Carrossel de imagens -->
    <div id="carouselExampleCombined" class="carousel slide carousel-fade" data-bs-ride="carousel">
        <!-- Indicadores -->
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCombined" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCombined" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCombined" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
            <button type="button" data-bs-target="#carouselExampleCombined" data-bs-slide-to="3"
                aria-label="Slide 4"></button>
            <button type="button" data-bs-target="#carouselExampleCombined" data-bs-slide-to="4"
                aria-label="Slide 5"></button>
        </div>

        <!-- Slides -->
        <div class="carousel-inner">
            <div class="carousel-item active w-100" data-bs-interval="5000">
                <img src="./img/Inicial/Carrossel/1.svg" class="d-block w-100" alt="Cachorro">
            </div>
            <div class="carousel-item" data-bs-interval="5000">
                <img src="./img/Inicial/Carrossel/2.svg" class="d-block w-100" alt="Gato">
            </div>
            <div class="carousel-item" data-bs-interval="5000">
                <img src="./img/Inicial/Carrossel/3.svg" class="d-block w-100" alt="Peixe">
            </div>
            <div class="carousel-item" data-bs-interval="5000">
                <img src="./img/Inicial/Carrossel/4.svg" class="d-block w-100" alt="Calopsita">
            </div>
            <div class="carousel-item" data-bs-interval="5000">
                <img src="./img/Inicial/Carrossel/5.svg" class="d-block w-100" alt="Hamster">
            </div>
        </div>

        <!-- Controles (corrigido) -->
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCombined"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCombined"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>



    <!-- Titulo da pagina -->
    <div class="text-center">
        <h1 class="lead">
            Cuidando do seu melhor amigo<br>
            com carinho e dedicação
        </h1>
    </div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-auto">
                <div class="d-flex">
                    <a href="#" class="btn btn-primary botton-inicial me-3">Entrar</a>
                    <a href="./login/login.php" class="btn btn-primary botton-inicial">Login</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Fim do Carrossel de Imagens -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO"
        crossorigin="anonymous"></script>
</body>

</html>