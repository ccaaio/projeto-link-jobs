$(document).ready(function () {
    var idLogadoFoto = $('#id-logado').val();

    var excluirVaga = function(idVaga, idUsuario) {
        $.ajax({
           url: '/perfil/excluirVaga',
           method: 'POST',
           data: {idVaga: idVaga, idUser: idUsuario},
           success: function (d) {
               alert('excluído com sucesso!');
           }
        });
    };

    var editarVaga = function(idVaga, idUsuario, titulo, categoria, habilidade, preco, integral, descricao) {
        $.ajax({
            url: '/perfil/editarVaga',
            method: 'POST',
            data: {idVaga: idVaga, idUser: idUsuario, titulo: titulo, categoria: categoria, habilidade: habilidade, preco: preco, integral: integral, descricao: descricao},
            success: function (d) {
                alert('Editado com sucesso!');
            }
        });
    };

    $('.li-editar-vaga').on('click', function () {
       var idVaga = $(this).attr('data-id-vaga');
       var idUsuario = $(this).attr('data-id-usuario-vaga');
       var titulo = $(this).attr('data-titulo-vaga');
       var categoria = $(this).attr('data-categoria-vaga');
       var habilidade = $(this).attr('data-habilidade-vaga');
       var preco = $(this).attr('data-preco-vaga');
       var integral = $(this).attr('data-integral-vaga');
       var descricao = $(this).attr('data-descricao-vaga');

       editarVaga(idVaga, idUsuario, titulo, categoria, habilidade, preco, integral, descricao);
    });

    $('.li-excluir-vaga').on('click', function () {
       var idVaga = $(this).attr('data-id-vaga');
       var idUsuario = $(this).attr('data-id-usuario-vaga');
       var titulo = $(this).attr('data-titulo-vaga');

       $('#modal-confirmacao-exluir-vaga').modal('show');

        $('#modal-confirmacao-exluir-vaga').on('show.bs.modal', function (event) {
            $('#tituloPostagemVaga').text(titulo);

            $('#excluirPostagem').on('click', function () {
                excluirVaga(idVaga, idUsuario);
                $('#modal-confirmacao-exluir-vaga').modal('hide');
            });
        });
    });

    //obtem a lista de usuarios do bd e exibe em sugestoes
    $.ajax({
        url:"/perfil/getFotoPerfil/",
        method:"POST",
        data:{idUser: idLogadoFoto},
        success:function(f){
            var capa =f.src;
            var trimFoto = $.trim(capa);
            $('.usr-pic').html('<img class="foto-perfil-user-logado" src="/public/uploads/fotoPerfil/'+trimFoto+'" alt="Foto do Perfil">');
            $('.user-picy').html('<img class="foto-perfil-user-logado" src="/public/uploads/fotoPerfil/'+trimFoto+'" alt="Foto do Perfil">');
            $('.foto-perfil-navbar').attr('src', '/public/uploads/fotoPerfil/'+trimFoto+'');
            setTimeout(function () {

            }, 1500);
        }
    });

    //Obtem a quantidade de solicitacoes de amizade para o usuario logado
    $.ajax({
        url:"/principal/getSolicitacoesAmizades/",
        method:"POST",
        data:{idUser: idLogadoFoto},
        success:function(n){
            var qtd = n.qtdSolicitacoesAmizade;

            if(qtd == '0') {
                $('.badge-notificacoes').addClass('invisivel');
            } else if(qtd > 0) {
                $('.badge-notificacoes-quantidade').text(qtd);
                $('.badge-notificacoes').removeClass('invisivel').addClass('animated bounceIn');

                setTimeout(function () {
                    $('.badge-notificacoes').removeClass('animated bounceIn').addClass('animated flash');
                },1000);
            }
        }
    });
});