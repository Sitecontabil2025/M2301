<?php $titulo_pagina = "Notícias Empresariais" ?>
<?php include_once('header.php'); ?>

<?php
$limite = 10;
$max = 100;
if(isset($_GET["p"])):
    if($_GET["p"] < 1) :
        $p = 1;
    elseif($_GET["p"] > 10) :
        $p = $max / $limite;
    else :
        $p = $_GET["p"];
    endif;
else :
    $p = 1;
endif;
$i = ($p - 1) * $limite;
$j = $i + $limite;

$json = json_decode(get_json("https://sitecontabil.com.br/json/?db=sc_noticias&limite=$max"));
?>

<section class="container py-10">
    <h1 class="title-default mb-7"><?= $titulo_pagina; ?></h1>
    <?php if(array_key_exists("error", $json)): ?>
            <p><?= $json->error; ?></p>
        <?php else: ?>
            <?php for($i; $i < $j; $i++): ?>
                <?php if (isset($json[$i])) : ?>
                    <div class="mb-7">
                        <h2 class="title-news"><?= $json[$i]->titulo; ?></h2>
                        <div class="row">
                            <div class="col-auto"><p class="text-primary mb-0"><small><i class="fas fa-fw fa-calendar mr-1"></i> <?= mostra_data($json[$i]->pubdate); ?></small></p></div>
                            <div class="col-auto"><p class="text-primary mb-0"><small><i class="fas fa-fw fa-newspaper mr-1"></i> <?= $json[$i]->fonte; ?></small></p></div>
                        </div>
                        <p class="my-5"><?= limitar_texto(strip_tags(html_entity_decode($json[$i]->texto)), 350); ?></p>
                        <a href="noticias-ler.php?id=<?= $json[$i]->id ?>&p=<?= $p ?>" class="btn-default">Leia na integra</a>
                    </div>
                <?php endif ?>
            <?php endfor; ?>
            <div class="paginacao">
                <?php
                    $num = 1;
                    $maxpag = $max / $limite;
                ?>
                <div class="text-center">
                    <?php for($num;$num<=$maxpag;$num++): ?>
                        <a href="noticias.php?p=<?= $num ?>" class="btn-default px-3"><?= $num ?></a>
                    <?php endfor; ?>
                </div>
            </div>
        <?php endif; ?>
</section>

<?php include_once('footer.php'); ?>