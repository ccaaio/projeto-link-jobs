$(document).ready(function () {
    var idUsuario = $('#idUsuario').val();

    var getVisaoGeral = function() {
        $.ajax({
            url: '/perfil/getVisao',
            method: 'POST',
            data: {idUser: idUsuario},
            success: function (v) {
                $('#texto-visao-geral').text(v.visao);
            }
        });
    }

   //carrega informações do perfil de usuário
    setTimeout(function () {
        getVisaoGeral();
    },1000);
});