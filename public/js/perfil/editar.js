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
    var data = new FormData();
    $.each(jQuery('#profileImage')[0].files, function(i, file) {
        data.append('file-'+i, file);
    });
    var idUser = $('#hidden-id-user').val();
    $('#uploadPerfil').on('click', function () {
        $.ajax({
            url:"/perfil/fotoPerfilUpload/",
            cache: false,
            contentType: false,
            processData: false,
            method: 'POST',
            type: 'POST', // For jQuery < 1.9
            data:{usuario: idUser, profileImage: data},
            beforeSend: function(a) {
                alert('antes de enviar');
            },
            success:function(c){
                console.log(c);
            }
        });
    });
},1000);






