$(document).ready(function () {
    var userLogado = $('#id-logado').val();
    var userLogado2 = $('#id-logado').val();

    //obtem a lista de usuarios do bd e exibe em sugestoes
    $.ajax({
        url:"/principal/listagemSolicitacoesAmizade/",
        method:"POST",
        data:{idProprio: userLogado},
        success:function(dados){
            $('#content-solicitacoes-amizade').html(dados);
        }
    });

    //ao clicar em aceitar solicitação de amizade...
    setTimeout(function () {
        $('.aceitar-solicitacao').on('click', function () {
            var idAceitado = $(this).attr('data-id-usuario-solicitante');
            var nomeAceitado = $(this).attr('data-nome-usuario-solicitante');
            var nomeUsuarioLogado = $('#nome-user-logado-titulo').text();

            var item = $(this).parent().parent().parent().parent().parent().addClass('animated fadeOut');

            $.ajax({
                url:"/principal/processaAceitacaoAmizade/",
                method:"POST",
                data:{idAceitado: idAceitado, nomeAceitado: nomeAceitado, idLogado: userLogado2, nomeLogado: nomeUsuarioLogado},
                success:function(p){
                    setTimeout(function () {
                        $(item).remove();
                    },300);
                }
            });
        });
    },1000);
});