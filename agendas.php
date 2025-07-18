<?php
$titulo_pagina = "Agendas de Obrigações";
?>
<?php include_once('header.php'); ?>
    <section class="container py-10">
        <h2 class="title-default mb-7"><?= $titulo_pagina; ?></h2>
        <?php include_once('paginas/agendas.php'); ?>
    </section>
<?php include_once('footer.php'); ?>