$(document).ready(function () {
    var userLogado = $('#id-logado').val();

    //obtem a lista de usuarios do bd e exibe em sugestoes
    $.ajax({
        url:"/principal/listagemSolicitacoesAmizade/",
        method:"POST",
        data:{idProprio: userLogado},
        success:function(dados){
            $('#content-solicitacoes-amizade').html(dados);
        }
    });
});