<footer class="bg-gray">
        <div class="container py-8">
            <div class="row gy-6 gy-lg-0">
                <div class="col-md-6 col-lg-3 text-center text-md-start">
                    <h2 class="title-footer">Links Úteis</h2>
                    <ul class="menu-footer">
                        <li><a href="agendas.php" target="_self">Agendas de Obrigações</a></li>
                        <li><a href="certidoes.php" target="_self">Certidões Negativas</a></li>
                        <li><a href="tabelas.php" target="_self">Tabelas Práticas</a></li>
                        <li><a href="formularios.php" target="_self">Formulários Diversos</a></li>
                        <li><a href="facilitador.php" target="_self">Facilitador Contábil</a></li>
                        <li><a href="modelos-documentos.php" target="_self">Modelos de Documentos</a></li>
                        <li><a href="links.php" target="_self">Links Úteis</a></li>
                    </ul>
                </div>
                <div class="col-md-6 col-lg-3 text-center text-md-start">
                    <h2 class="title-footer">Localização</h2>
                    <p>
                        <a href="" target="_blank">
                            <?= $endereco; ?> - <?= $bairro; ?><br><?= $cidade; ?> - <?= $cep; ?>
                        </a>
                    </p>
    
                    <h2 class="title-footer mt-4">CRC</h2>
                    <p><?= $crc; ?></p>
                </div>
                <div class="col-md-6 col-lg-3 text-center text-md-start">
                    <h2 class="title-footer">Entre em contato</h2>
                    <p class="mb-0"><a href="" target="_blank"><?= $telefone; ?></a></p>
                    <p class="mb-0"><a href="" target="_blank"><?= $whatsapp; ?></a></p>
                    <p class="mb-0"><a href="" target="_blank"><?= $email; ?></a></p>
                </div>
                <div class="col-md-6 col-lg-3 text-center text-md-start">
                    <h2 class="title-footer">Redes Sociais</h2>
                    <a href="" target="_blank" class="icon-socialMedia"><i class="fab fa-fw fa-facebook-f"></i></a>
                    <a href="" target="_blank" class="icon-socialMedia"><i class="fab fa-fw fa-instagram"></i></a>
                    <a href="" target="_blank" class="icon-socialMedia"><i class="fab fa-fw fa-linkedin"></i></a>
                    <a href="" target="_blank" class="icon-socialMedia"><i class="fab fa-fw fa-twitter"></i></a>
                </div>
            </div>
        </div>

        <div class="text-center py-3">
            <p class="mb-0"><i class="far fa-copyright"></i> <?= date("Y"); ?> <?= $escritorio; ?> | Desenvolvido por <a href="" target="_blank" class="text-primary">Sitecontabil</a></p>
        </div>
    </footer>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v6.5.2/css/all.css">
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/jquery-confirm.min.js"></script>
    <script src="assets/js/jquery.mask.js"></script>
    <script src="assets/js/cookie.min.js"></script>
    <script src="assets/js/script.min.js" async></script>
</body>
</html>