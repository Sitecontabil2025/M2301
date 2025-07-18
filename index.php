<?php 
$index = true;
include_once('header.php'); 
?>
    <section class="container-banner" id="banner">
        <section class="container">
            <div class="col-lg-7 text-center mx-auto">
                <h1 class="title-slogan">
                    <span>Bem-vindo ao nosso site</span>
                    Encontre tudo o que precisa em um Escritório de Contabilidade
                </h1>
                <a href="<?= $whatsapp_link; ?>" target="_blank" class="btn-default">Entre em contato</a>
            </div>
        </section>
    </section>
    
    <main class="container py-10">
        <div class="text-center mb-8">
            <div class="col-lg-8 mx-auto mb-8">
                <h2 class="title-default">Por que nos escolher?</h2>
                <p>Somos uma empresa de serviços de contabilidade constituída por profissionais com larga experiência nas áreas de gestão empresarial. Em nosso contexto, o cliente é a figura mais importante. Assim, nos colocamos à sua disposição para ajudá-lo a ter sucesso neste mundo globalizado e altamente competitivo.</p>
            </div>
        </div>

        <div class="row gy-6 gy-lg-0 align-items-stretch">
            <div class="col-lg-4">
                <div class="box-mission">
                    <i class="fas fa-bullseye icon-mission"></i>
                    <h2 class="title-mission">Missão</h2>
                    <p>Entendemos que os serviços contábeis são uma importante ferramenta para o bom funcionamento das empresas e indispensável para o crescimento e desenvolvimento delas. Por isso, queremos potencializar, por meio do serviço contábil de qualidade, transparência, suporte e rapidez, os negócios de nossos clientes.</p>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="box-mission">
                    <i class="fas fa-eye icon-mission"></i>
                    <h2 class="title-mission">Visão</h2>
                    <p>Queremos ser reconhecidos por aquilo que prometemos em qualidade de serviços contábeis, sempre almejando a melhoria contínua e empenho para entregar serviços de altíssima qualidade aos nossos clientes. Buscamos oferecer sempre apoio presente e trabalho eficaz a todos aqueles que são nossos parceiros, gerando valor para suas empresas.</p>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="box-mission">
                    <i class="fas fa-hands-helping icon-mission"></i>
                    <h2 class="title-mission">Valores</h2>
                    <p>Prezamos sempre por ética, respeito e compromisso com nossos clientes e com os princípios que norteiam a contabilidade. Estamos, também, visando a humanização de nossos serviços e qualidade em nossas ações para as empresas que nos contratam.</p>
                </div>
            </div>
        </div>
    </main>

    <section class="container-background">
        <section class="container py-10">
            <div class="col-lg-6 mx-auto text-center mb-8">
                <h2 class="title-default">
                    <span>Nossos Serviços</span>
                    Veja o que podemos fazer por você e sua empresa!
                </h2>
            </div>

            <div class="row gy-6 gy-lg-0 align-items-center">
                <div class="col-lg-6 order-lg-2">
                    <h2 class="font-600 text-dark mb-4">
                        <i class="fas fa-plus-circle icon-plus text-primary me-4"></i> 
                        Serviços de Contabilidade
                    </h2>
                    <p><a href="contabilidade.php" target="_self">Serviços pertinentes a rotina contábil, desde a classificação dos documentos até a emissão dos relatórios correspondentes.</a></p>
                    <hr class="my-5">
                    <h2 class="font-600 text-dark mb-4">
                        <i class="fas fa-plus-circle icon-plus text-primary me-4"></i> 
                        Serviços Fiscais
                    </h2>
                    <p><a href="fiscais.php" target="_self">Efetuar toda a rotina do departamento fiscal, desde a classificação fiscal das Notas Fiscais de Entrada e Saída.</a></p>
                    <hr class="my-5">
                    <h2 class="font-600 text-dark mb-4">
                        <i class="fas fa-plus-circle icon-plus text-primary me-4"></i> 
                        Assessoria Empresarial
                    </h2>
                    <p><a href="assessoria-empresarial.php" target="_self">Com uma equipe treinada, nossa empresa efetua assessoria e consultoria nas áreas: Fiscal, Recursos Humanos, Contábil e Legalizações.</a></p>
                    <hr class="my-5">
                    <h2 class="font-600 text-dark mb-4">
                        <i class="fas fa-plus-circle icon-plus text-primary me-4"></i> 
                        Obrigações Trabalhistas
                    </h2>
                    <p><a href="obrigacoes-trabalhistas.php" target="_self">Executamos todos os serviços envolvidos na rotina do departamento pessoal a partir do registro do funcionário.</a></p>
                </div>
                <div class="col-lg-6 order-lg-1">
                    <img src="assets/images/about-img-1.jpg" width="780" height="780" alt="" class="img-services">
                </div>
            </div>
        </section>
    </section>

    <section class="container-fluid px-lg-0 overflow-hidden bg-dark">
        <div class="row gy-6 gy-lg-0 align-items-center">
            <div class="col-lg-5 mx-auto py-5 px-md-5 order-lg-2">
                <h2 class="title-bureaucracy">
                    <span>Deixe a burocracia com a gente!</span>
                    Estamos prontos para dar o que você mais precisa: tempo.
                </h2>

                <div class="box-simple">
                    <div>
                        <span class="icon-simple"><i class="fas fa-business-time"></i></span>
                    </div>
                    <div>
                        <h2 class="title-simple">Contabilidade Rápida</h2>
                        <p class="text-white">Temos uma equipe totalmente dedicada a contabilidade da sua empresa que trabalha com rapidez e agilidade.</p>
                    </div>
                </div>
                <div class="box-simple">
                    <div>
                        <span class="icon-simple"><i class="fas  fa-check"></i></span>
                    </div>
                    <div>
                        <h2 class="title-simple">Com Simplicidade</h2>
                        <p class="text-white">Com dinamismo e praticidade, fazemos todo o trabalho duro por você de forma simples, rápida e interativa.</p>
                    </div>
                </div>
                <div class="box-simple">
                    <div>
                        <span class="icon-simple"><i class="fas fa-thumbs-up"></i></span>
                    </div>
                    <div>
                        <h2 class="title-simple">Mais praticidade</h2>
                        <p class="text-white">Somos um escritório decontabilidade com profissionais capacitados para facilitar sua vida.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 container-team order-lg-1"></div>
        </div>
    </section>

    <section class="container py-10">
        <div class="col-lg-8 mx-auto text-center">
            <h2 class="title-default">
                <span>Notícias Empresariais</span>
                Atualize-se com os principais acontecimentos do mundo contábil!
            </h2>
        </div>

        <div class="row gy-6 align-items-stretch my-7">
            <?php $dados = get_materias('https://sitecontabil.com.br/json/?db=sc_noticias&limite=6'); ?>
            <?php foreach($dados as $item): ?>
                <div class="col-md-6 col-lg-4 flex-column justify-content-between p-2 text-center text-lg-start">
                    <a href="noticias-ler.php?id=<?= $item->id ?>" class="box-news">
                        <div>
                            <h2 class="font-600"> <?= limitar_texto($item->titulo, 120)?> </h2>
                            <p class="my-4 text-primary"> <small>Publicado em <?= mostra_data($item->pubdate, '%d de %B de %Y'); ?></small> </p>
                        </div>
                        <p class="text-default"> <?= limitar_texto(strip_tags(html_entity_decode($item->texto)), 240); ?> </p>
                    </a>
                </div>
            <?php endforeach; ?>
        </div>

        <div class="text-center">
            <a href="noticias.php" target="_self" class="btn-default">Confira todas as notícias</a>
        </div>
    </section>
<?php include_once('footer.php'); ?>