$(document).ready(function () {
    var idLogadoFoto = $('#id-logado').val();

    //obtem a lista de usuarios do bd e exibe em sugestoes
    $.ajax({
        url:"/principal/getFotoPerfil/",
        method:"POST",
        data:{idUser: idLogadoFoto},
        success:function(s){
            //alert(s.foto);
            var foto =s.foto;
            var trimFoto = $.trim(foto);
            $('.usr-pic').html('<img class="foto-perfil-user-logado" src="/public/images/perfil/'+trimFoto+'" alt="Foto do Perfil">');
            $('.user-picy').html('<img class="foto-perfil-user-logado" src="/public/images/perfil/'+trimFoto+'" alt="Foto do Perfil">');
            $('.foto-perfil-navbar').attr('src', '/public/images/perfil/'+trimFoto+'');
        }
    });
});