<!-- 
+---------------------------------+
|   [🐾 Logo do Petshop]          |
|                                 |
|   Bem-vindo de volta! 🐶        |
|                                 |
|   Email:     [__________]       |
|   Senha:     [__________]       |
|                                 |
|   [ Entrar ]                    |
|                                 |
|   Esqueceu a senha?             |
|   Não tem conta? [Cadastre-se]  |
+---------------------------------+

-->

<?php
require_once('conexao.php');
@session_start();
?>

<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS personalizado -->
    <link rel="stylesheet" href="./style-login.css">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="../img/Logos/2.svg">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css2?family=Bree+Serif&family=Zain:ital,wght@0,200;0,300;0,400;0,700;0,800;0,900;1,300;1,400&display=swap"
        rel="stylesheet">
    <title>Página Inicial</title>
</head>

<body class="pagina-cadastro">
    <!-- Barra de navegação da página -->
    <nav class="navbar navbar-expand-lg py-3">
        <div class="container-fluid">
            <!-- Logo do Petshop -->
            <a class="navbar-brand d-flex align-items-center" href="./index.html">
                <img src="../img/Logos/1.svg" alt="Logo Petshop" class="img-fluid" style="max-height: 50px;">
            </a>
            <!-- Botão para menu responsivo -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Itens do menu -->
            <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                <ul class="navbar-nav align-items-center me-3">
                    <!-- Link para página inicial -->
                    <li class="nav-item mx-2">
                        <a class="nav-link active" aria-current="page" href="#">Início</a>
                    </li>
                    <!-- Link para produtos -->
                    <li class="nav-item mx-2">
                        <a class="nav-link active" href="#">Produtos</a>
                    </li>
                    <!-- Dropdown de contato -->
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
                </ul>
                <!-- Barra de busca -->
                <form class="d-flex" role="search">
                    <input class="form-control input-custom" type="search" placeholder="Buscar..." aria-label="Buscar">
                    <!-- Botão de pesquisa (opcional) -->
                    <!-- <button class="btn btn-outline-success me-2 btn-pesquisa" type="submit">Pesquisa</button>  -->
                </form>
            </div>
        </div>
    </nav>
    <!---------------------------- Fim da barra de navegação ------------------>

<div class="login">
    <div class="form">
    <form action="salvar.php" method="POST">
        <input type="text" name="usuario" placeholder="Digite seu nome" required>
        <input type="password" name="senha" placeholder="*******" required>
        <button>Salvar</button>
    </form>
    </div>
</div>


    <script src="script.js"></script>
    <!-- Bootstrap JS (opcional, se usar funcionalidades JS do Bootstrap) -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"></script> -->
</body>

</html>