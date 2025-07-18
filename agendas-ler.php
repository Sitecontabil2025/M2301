
<?php
$titulo_pagina = "Agendas de Obrigações";
$descricao_pagina = "Atuamos no mercado auxiliando as empresas, quanto a sua constituição, administração, consultorias e quando necessário, no encerramento das mesmas. Possuímos uma equipe de profissionais gabaritados nas áreas contábil, fiscal, trabalhista e de assessoria.";
?>

<?php include_once('header.php'); ?>
    <section class="container py-10">
        <h2 class="title-default mb-7"><?= $titulo_pagina; ?></h2>
        <div>
            <?php include_once('paginas/agendas-ler.php'); ?>
        </div>
    </section>
<?php include_once('footer.php'); ?>