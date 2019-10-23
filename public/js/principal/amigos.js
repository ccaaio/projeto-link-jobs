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

    $.ajax({
        url:"/principal/refreshListagemAmigos/",
        method:"POST",
        data:{idProprio: userLogado},
        success:function(r){
            $('#content-amigos').html(r);
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
                    console.log('idAceitado: ', idAceitado);
                    console.log('nomeAceitado: ', nomeAceitado);
                    console.log('idLogado: ', userLogado2);
                    console.log('nomeLogado: ', nomeUsuarioLogado);
                    setTimeout(function () {
                        $(item).remove();
                        //atualiza status da amizade
                        $.ajax({
                            url:"/principal/atualizaStatusAceitacaoAmizade/",
                            method:"POST",
                            data:{idAceitado: idAceitado, idLogado: userLogado2},
                            success:function(p){
                                $.ajax({
                                    url:"/principal/refreshListagemAmigos/",
                                    method:"POST",
                                    data:{idProprio: userLogado},
                                    success:function(r){
                                        $('#content-amigos').html(r);
                                    }
                                });
                            }
                        });
                    },300);
                }
            });
        });
    },1000);

    //ao clicar em recusar a  solicitação de amizade...
    $('.recusar-solicitacao').on('click', function () {
        var idAceitado = $(this).attr('data-id-usuario-solicitante');

        var item = $(this).parent().parent().parent().parent().parent().addClass('animated fadeOut');

        $.ajax({
            url:"/principal/atualizaStatusNegacaoAmizade/",
            method:"POST",
            data:{idAceitado: idAceitado, idLogado: userLogado2},
            success:function(p){
                $.ajax({
                    url:"/principal/refreshListagemAmigos/",
                    method:"POST",
                    data:{idProprio: userLogado},
                    success:function(rn){
                        $('#content-amigos').html(rn);
                    }
                });
            }
        });
    });
});