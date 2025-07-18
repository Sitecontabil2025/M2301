<?php 
$titulo_pagina = "Fale Conosco";
$descricao_pagina = "Atuamos no mercado auxiliando as empresas, quanto a sua constituição, administração, consultorias e quando necessário, no encerramento das mesmas. Possuímos uma equipe de profissionais gabaritados nas áreas contábil, fiscal, trabalhista e de assessoria.";
?>

<?php include_once('header.php'); ?>
    <section class="container py-10">
        <h2 class="title-default mb-7">
            <span>Sinta-se à vontade para nos contatar para mais detalhes</span>
            <?= $titulo_pagina; ?>
        </h2>

        <form action="" id="formcontato">
            <div class="row">
                <div class="col-md-6">
                    <input type="text" name="nome" id="formnome" placeholder="Nome *" required class="form-control mb-4">
                </div>
                <div class="col-md-6">
                    <input type="text" name="email" id="formemail" placeholder="E-mail *" required class="form-control mb-4">
                </div>
                <div class="col-md-6">
                    <input type="text" name="fone" id="formfone" placeholder="Telefone *" class="celular-mask form-control mb-4">
                </div>
                <div class="col-md-6">
                    <input type="text" name="celular" id="formcelular" placeholder="Celular" class="celular-mask form-control mb-4">
                </div>
            </div>
            <div>
                <input type="text" name="assunto" id="formassunto" placeholder="Assunto *" required class="form-control mb-4">
            </div>
            <div>
                <textarea type="text" name="mensagem" id="formmensagem" cols="30" rows="7" placeholder="Mensagem *" required class="form-control mb-4"></textarea>
            </div>
            <p class="font-italic">Os dados captados nesse formulário não serão utilizados por terceiros, apenas para uso interno de acordo com a LGPD. Ao enviar sua mensagem você concorda com nossa política de privacidade.</p>
            <div class="g-recaptcha mb-4" data-sitekey="6LenHswpAAAAAB6wibivdpramy1rLoolplTL3KwD"></div>
            <button type="submit" class="btn-default">Enviar mensagem <i class="fa-solid fa-paper-plane border-start ps-4 ms-4"></i></button>
            <button type="reset" class="btn-default">Cancelar mensagem <i class="fa-solid fa-eraser border-start ps-4 ms-4"></i></button>
        </form>
    </section>
<?php include_once('footer.php'); ?>