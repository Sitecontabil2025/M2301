<!DOCTYPE html>
<?php require_once("dados.php"); ?>
<?php $json = (isset($url_json)) ? get_materias($url_json) : NULL; ?>
<?php $json_ler = (isset($url_json_ler)) ? get_materias($url_json_ler) : NULL; ?>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0">
    <title>
        <?= $escritorio; ?>
        <?php if(isset($titulo_pagina)) : ?>
            - <?= $titulo_pagina; ?>
        <?php endif ?>
    </title>

    <!-- Favicons -->
    <link rel="shortcut icon" href="assets/images/favicon.png" type="image/png">
    
    <!-- SEO metaTags -->
    <meta property="og:title" content="<?= $titulo_pagina; ?>" />
    <meta property="og:description" content="<?= $descricao_pagina; ?>" />
    <meta property="og:type" content="website" />
    <meta property="og:site_name" content="<?= $escritorio; ?>" />
    <meta property="og:image" content="assets/images/og-img.jpg">
    <meta property="og:image:type" content="image/jpeg">
    <meta property="og:image:width" content="800">
    <meta property="og:image:height" content="600">
    <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
    <meta http-equiv="content-language" content="pt-BR" />
    <meta name="author" content="<?= $escritorio; ?>" />
    <meta name="contact" content="<?= $email; ?>" />
    <meta name="copyright" content="Copyright (c) <?= date("Y"); ?> - <?= $escritorio; ?>." />
    <meta name="description" content="<?= $descricao; ?>" />
    <meta name="keywords" content="<?= $keywords; ?>" />
    <meta name="resource-type" content="website" />

    <!-- color da status bar-->
	<meta name="msapplication-TileColor" content="#E52828">
	<meta name="theme-color" content="#E52828">
	<meta name="apple-mobile-web-app-status-bar-style" content="#E52828">

    <!-- FONTS -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;600;700;900&display=swap" rel="stylesheet">

    <!-- Arquivos CSS -->
    <link rel="stylesheet" href="assets/css/jquery-confirm.min.css">
    <link rel="stylesheet" href="assets/css/style.min.css">

    <!-- Scripts -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>

</head>
<body>
    <nav class="container-menu"></nav>
    <a href="<?= $whatsapp_link ?>" target="_blank" class="btn-whatsapp"><i class="fa-brands fa-whatsapp"></i></a>
    <header id="header">
        <section class="container position-relative py-2">
            <div class="row justify-content-between align-items-center">
                <div class="col-8 col-md-auto">
                    <a href="index.php" target="_self">
                        <img src="assets/images/logo.png" width="260" height="65" alt="" class="img-logo">
                    </a>
                </div>
                <div class="col-4 col-md-auto">
                    <div class="d-lg-none text-end">
                        <button class="btn-menu-open"><i class="fa-solid fa-bars"></i> Menu</button>
                    </div>
                    <nav class="d-none d-lg-block">
                        <ul class="menu-header">
                            <li><a href="index.php" target="_self">Home</a></li>
                            <li><a href="sobrenos.php" target="_self">Sobre Nós</a></li>
                            <li class="dropdown">
                                <a href="servicos.php" target="_self" class="dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-expanded="false">Serviços</a>
                                <ul class="dropdown-menu">
                                    <li><a href="contabilidade.php" target="_self" class="dropdown-item">Contabilidade</a></li>
                                    <li><a href="fiscais.php" target="_self" class="dropdown-item">Fiscais</a></li>
                                    <li><a href="assessoria-empresarial.php" target="_self" class="dropdown-item">Assessoria Empresarial</a></li>
                                    <li><a href="obrigacoes-trabalhistas.php" target="_self" class="dropdown-item">Obrigações Trabalhistas</a></li>
                                </ul>
                            </li>
                            <!-- <li><a href="" target="_blank">Informativo</a></li> -->
                            <li><a href="lgpd.php" target="_self">LGPD</a></li>
                            <li><a href="contato.php" target="_self">Contato</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </section>
    </header>