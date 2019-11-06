$(document).ready(function () {
    var idLogadoFoto = $('#id-logado').val();

    //obtem a lista de usuarios do bd e exibe em sugestoes
    $.ajax({
        url:"/perfil/getFotoPerfil/",
        method:"POST",
        data:{idUser: idLogadoFoto},
        success:function(f){
            var capa =f.src;
            var trimFoto = $.trim(capa);
            $('.usr-pic').html('<img class="foto-perfil-user-logado" src="/public/uploads/fotoPerfil/'+trimFoto+'" alt="Foto do Perfil">');
            $('.user-picy').html('<img class="foto-perfil-user-logado" src="/public/uploads/fotoPerfil/'+trimFoto+'" alt="Foto do Perfil">');
            $('.foto-perfil-navbar').attr('src', '/public/uploads/fotoPerfil/'+trimFoto+'');
            setTimeout(function () {

            }, 1500);
        }
    });

    //Obtem a quantidade de solicitacoes de amizade para o usuario logado
    $.ajax({
        url:"/principal/getSolicitacoesAmizades/",
        method:"POST",
        data:{idUser: idLogadoFoto},
        success:function(n){
            var qtd = n.qtdSolicitacoesAmizade;

            if(qtd == '0') {
                $('.badge-notificacoes').addClass('invisivel');
            } else if(qtd > 0) {
                $('.badge-notificacoes-quantidade').text(qtd);
                $('.badge-notificacoes').removeClass('invisivel').addClass('animated bounceIn');

                setTimeout(function () {
                    $('.badge-notificacoes').removeClass('animated bounceIn').addClass('animated flash');
                },1000);
            }
        }
    });
});