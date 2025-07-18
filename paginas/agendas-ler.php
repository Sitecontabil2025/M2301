<?php $pagina_agenda = true; ?>
<?php
$id = (isset($_GET["id"])) ? $_GET["id"] : 0;

$json = json_decode(get_json("https://sitecontabil.com.br/json/?db=sc_agendas&id=$id"));
?>

<?php if(array_key_exists("error", $json)): ?>
    <p><?= $json->error; ?></p>
<?php else: ?>
    <?php foreach($json as $item): ?>
        <h2 class="title-news"><?= $item->titulo; ?></h2>
        <div class="bg-white my-5">
            <?= html_entity_decode($item->texto) ?>
        </div>
    <?php endforeach; ?>
    <a href="agendas.php?cat=<?= $_GET["cat"] ?>" target="_self" class="btn-default">Voltar para as agendas</a>
<?php endif; ?>