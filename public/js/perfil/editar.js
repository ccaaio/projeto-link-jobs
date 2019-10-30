    setTimeout(function () {

        $('#upload-capa').on('change', function () {
            setTimeout(function () {
                Swal.fire({
                    title: 'Foto selecionada! Clique em CLIQUE PARA CARREGAR A FOTO SELECIONADA para aplicar as alterações.',
                    animation: false,
                    customClass: {
                        popup: 'animated tada'
                    }
                });
            }, 500);
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
