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

    var refreshContadorLikes = function (idPerfil) {
        $.ajax({
           url: '/perfil/getLikes',
           method: 'POST',
           data: {idUser:idUsuario, idPerfil: idPerfil},
           success: function (l) {
               $('#qtd-likes').text(l.qtd);
           }
        });
    };

    $('.recomendarPerfil').on('click', function () {
       getIdPerfil = $(this).attr('data-id-perfil');

       $.ajax({
          url: '/perfil/recomendarPerfil',
          method: 'POST',
          data: {idPerfil: getIdPerfil, idUser: idUsuario},
          success: function (r) {
              refreshContadorLikes(getIdPerfil);
              alert('Perfil recomendado com sucesso!');
          }
       });
    });



   //carrega informações do perfil de usuário
    setTimeout(function () {
        getVisaoGeral();

        //obtem a lista de usuarios do bd e exibe em sugestoes
        $.ajax({
            url:"/perfil/getCapaPerfil/",
            method:"POST",
            data:{idUser: idUsuario},
            success:function(c){
                var capa =c.src;
                var trimCapa = $.trim(capa);
                $('#img-capa').attr("src", "/public/uploads/capa/"+trimCapa+"");
                setTimeout(function () {
                    $('.loader-capa').addClass('d-none');
                }, 1500);
            }
        });
    },200);

    setTimeout(function () {
        //obtem a lista de usuarios do bd e exibe em sugestoes
        $.ajax({
            url:"/perfil/getFotoPerfil/",
            method:"POST",
            data:{idUser: idUsuario},
            success:function(f){
                var capa =f.src;
                var trimCapa = $.trim(capa);
                $('.user-pro-img img').attr("src", "/public/uploads/fotoPerfil/"+trimCapa+"");
                $('.foto-perfil-navbar').attr('src', '/public/uploads/fotoPerfil/'+trimCapa+'');
                setTimeout(function () {

                }, 1500);
            }
        });
    },1000);
});