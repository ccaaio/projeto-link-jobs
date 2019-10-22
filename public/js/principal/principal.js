$(document).ready(function () {
    var idLogadoFoto = $('#id-logado').val();

    //obtem a lista de usuarios do bd e exibe em sugestoes
    $.ajax({
        url:"/principal/getFotoPerfil/",
        method:"POST",
        data:{idUser: idLogadoFoto},
        success:function(s){
            //alert(s.foto);
            $('.usr-pic').html('<img class="foto-perfil-user-logado" src="/public/images/'+s.foto+'" alt="Foto do Perfil">');
        }
    });
});