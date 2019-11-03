    setTimeout(function () {

        $('#upload-capa').on('change', function () {
            $('.btn-upload').removeClass('d-none');
            setTimeout(function () {
                Swal.fire({
                    title: 'Foto selecionada. Vamos ao próximo passo....',
                    animation: false,
                    customClass: {
                        popup: 'animated tada'
                    }
                });
            }, 1000);
        });

        var idUsuario = $('#id_user').val();

        setTimeout(function () {
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
    },1000);

setTimeout(function () {
    $(document).ready(function(){
        var idUser = $('#id_user').val();

    });
},3500);
