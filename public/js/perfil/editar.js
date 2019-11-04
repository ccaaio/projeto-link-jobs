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

        setTimeout(function () {
            //obtem a lista de usuarios do bd e exibe em sugestoes
            $.ajax({
                url:"/perfil/getFotoPerfil/",
                method:"POST",
                data:{idUser: idUsuario},
                success:function(f){
                    var capa =f.src;
                    var trimCapa = $.trim(capa);
                    $('#img-usuario-foto-perfil').attr("src", "/public/uploads/fotoPerfil/"+trimCapa+"");
                    setTimeout(function () {

                    }, 1500);
                }
            });
        },200);

        /* MODAL EDITAR NOME E PROFISSAO */
        $('.chama-modal-editar-nome').on('click', function () {
            //informacoes do nome e profissao atuais
            var nomeAtual = $('#nomeUser').text();
            var profissaoAtual = $('#profissaoUser').text();

            //informacoes do nome e profissao que serao atualizados
            var nomeSobrenome = $('#nome-sobrenome').val();
            var profissao = $('#edit-profissao').val();

            $('#modal-edit-nome-profissao').modal('show');

            $('#btn-atualizarInformacoes').on('click', function () {
                setTimeout(function () {
                    $.ajax({
                        url: '/perfil/atualizarInformacoes',
                        method: 'POST',
                        data: {idUser: idUsuario, nome: nomeSobrenome, profissao: profissao},
                        success: function (get) {
                            alert('Informações atualizadas!');
                        }
                    });
                },300);
            });
        });
    },1000);