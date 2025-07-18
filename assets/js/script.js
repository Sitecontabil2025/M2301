const banner = document.querySelector('#banner');
const header = document.querySelector('#header');
let headerHeight = header.offsetHeight;


if (banner) {
    banner.style.paddingTop = `${headerHeight}px`;
    banner.style.marginTop = `${-headerHeight}px`;
}else{
    header.className = 'bg-gray';
}

// Seleciona o botão de menu e adiciona um ouvinte de evento de clique
const btnMenu = document.querySelector('.btn-menu-open');
btnMenu.addEventListener('click', () => {
    let menu = document.querySelector('.menu-header');
    const body = document.querySelector('body');
    
    // Verifica se o menu ou o body existem
    if (!menu || !body) {
        return;
    };
    
    // Criação dos elementos do menu mobile
    let menuContainer = document.querySelector('.container-menu');
    let bgMenu = document.createElement('div');
    let btnClose = document.createElement('button');
    let createMenu = document.createElement('ul');
    let creatClient = document.createElement('a');

    // Configurações dos elementos criados
    btnClose.innerHTML = '<i class="fas fa-times"></i>';
    bgMenu.className = 'bg-menu';
    btnClose.className = 'btn-outline';
    createMenu.className = 'menu-mobile';

    createMenu.innerHTML = menu.innerHTML;

    // Adiciona os elementos ao DOM
    menuContainer.append(btnClose, createMenu);
    body.append(bgMenu);

    // Exibe o menu móvel e desabilita o overflow do body
    menuContainer.style.right = '0';
    bgMenu.style.display = 'block';
    body.style.overflow = 'hidden';
    btnClose.removeEventListener('click', closeMenu);
    bgMenu.removeEventListener('click', closeMenu);

    // Função para fechar o menu móvel
    function closeMenu() {
        menuContainer.style.right = '-100%';
        body.style.overflow = 'auto';
        setTimeout(() => {
            btnClose.remove();
            createMenu.remove();
            bgMenu.remove();
        }, 300);
    }

    // Adiciona ouvintes de evento para fechar o menu
    btnClose.addEventListener('click', closeMenu);
    bgMenu.addEventListener('click', closeMenu);
});

$loading = $.dialog({
	content: "Enviando sua mensagem",
	title: false,
	type: "green",
	theme: "modern",
	lazyOpen: true,
	closeIcon: false,
	icon: "fas fa-circle-notch fa-spin",
	buttons: false,
});

$('#formcontato').submit(function(){
    var dados = $(this).serialize();

    $.ajax({
        type: "POST",
        url: "enviar.php",
        data: dados,
        dataType: 'json',
        beforeSend: function(){
            $loading.open();
        },
        success: function(resposta){
            if(resposta.tipo == "green"){
                $icone = "far fa-check-circle";
            }else{
                $icone = "fas fa-times";
            }
            $.alert({
                content: resposta.mensagem,
                title: false,
                type: resposta.tipo,
                theme: "modern",
                closeIcon: false,
                icon: $icone,
                buttons: {
                    ok: function(okButton){
                        if(resposta.tipo == "green"){
                            location.href="https://sitecontabil.com.br"
                        }
                    }
                }
            });
        },
        error: function(resposta){
            $.alert({
                content: "Um erro desconhecido aconteceu e sua mensagem não pode ser enviada",
                title: false,
                type: "red",
                theme: "modern",
                closeIcon: true,
                icon: "fas fa-times",
                buttons: {
                    ok: function(){
                    }
                }
            });
        },
        complete:function(){
            $loading.close()
        }
    });
    return false;
});

AOS.init({
    once: true
});

$(document).ready(function(){
    var SPMaskBehavior = function (val) {
        return val.replace(/\D/g, '').length === 11 ? '(00) 00000-0000' : '(00) 0000-00009';
    },
    spOptions = {
        onKeyPress: function(val, e, field, options) {
            field.mask(SPMaskBehavior.apply({}, arguments), options);
        }
    };
    $('.celular-mask').mask(SPMaskBehavior, spOptions);
});