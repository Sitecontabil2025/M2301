<?php
    $titulo_pagina = "Modelos Documentos";
    $descricao_pagina = "Atuamos no mercado auxiliando as empresas, quanto a sua constituição, administração, consultorias e quando necessário, no encerramento das mesmas. Possuímos uma equipe de profissionais gabaritados nas áreas contábil, fiscal, trabalhista e de assessoria.";
?>
<?php include_once('header.php'); ?>
    <section class="container py-10">
        <h2 class="title-default mb-7"><?= $titulo_pagina; ?></h2>
        <?php include_once('paginas/modelos-documentos-ler.php'); ?>
    </section>
<?php include_once('footer.php'); ?>