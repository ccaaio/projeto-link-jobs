$(document).ready(function () {

        var idLogado = $('#id-logado').val();

            //obtem a lista de usuarios do bd e exibe em sugestoes
            $.ajax({
                url:"/principal/getSugestoes/",
                method:"POST",
                data:{idProprio: idLogado},
                success:function(s){
                    $('#content-sugestoes').html(s);
                }
            });

            setTimeout(function () {
                $.ajax({
                    url:"/principal/getDeveriaConhecer/",
                    method:"POST",
                    data:{idProprio: idLogado},
                    success:function(v){
                        $('.profiles-slider').html(v);
                        $.ajax({
                            url:"/principal/getDadosAmizade/",
                            method:"POST",
                            data:{idSolicitante: idUserLogado, idRequisitado: $('#id-amigo').val(), nome: $('#nome-amigo').val(), nomeSolicitante: $('#nome-logado').val()},
                            success:function(s){
                                setTimeout(function () {
                                    $(item).remove();
                                },300);
                                Swal.fire({
                                    position: 'center',
                                    type: 'success',
                                    title: 'Solicitação de Amizade enviada!',
                                    showConfirmButton: false,
                                    timer: 1500
                                });
                            }
                        });
                    }
                });
            },500);

    //ao clicar em add amigo - SUGESTOES

    setTimeout(function () {
        var idUserLogado = $('#id-logado').val();
        $('.add-amigo').on('click', function () {
            var idLogado = $('#id-logado').val();
            var idAmigo = $(this).attr('data-id-usuario');
            $('#id-amigo').val(idAmigo);
            var nome = $(this).attr('data-nome-usuario');
            $('#nome-amigo').val(nome);

            var item = $(this).parent().parent().addClass('animated zoomOut');
        });
    },1000);
});