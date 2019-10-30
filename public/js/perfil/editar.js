$(document).ready(function () {
    setTimeout(function () {
        var idUserLogado = $('#id_user').val();

        $.ajax({
            url:"/perfil/getCapaPerfil/",
            method:"POST",
            data:{id_user: idUserLogado},
            success: function (capa) {
                $('#img-capa').attr('src', '/public/uploads/capa/'+capa.src+'');
                $('.loader-capa').remove();
            }
        });
    },250);
});