    setTimeout(function () {

        $('#upload-capa').on('change', function () {
            $('.form-upload-capa-perfil').submit();
            $('#modal-capa').show();
        });

        var idUsuario = $('#id_user').val();

        setTimeout(function () {
            //obtem a lista de usuarios do bd e exibe em sugestoes
            $.ajax({
                url:"/perfil/getCapaPerfil/",
                method:"POST",
                data:{idUser: idUsuario},
                success:function(c){
                    $('.loader-capa').addClass('d-none');
                    var capa =c.src;
                    var trimCapa = $.trim(capa);
                    $('#img-capa').attr("src", "/public/uploads/capa/"+trimCapa+"");
                }
            });
        },200);
    },1000);
