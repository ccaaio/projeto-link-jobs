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

    //ao clicar em add amigo - SUGESTOES

    setTimeout(function () {
        var idUserLogado = $('#id-logado').val();
        $('.add-amigo').on('click', function () {
            var idLogado = $('#id-logado').val();
            var idAmigo = $(this).attr('data-id-usuario');
            $('#id-amigo').val(idAmigo);
            var nome = $(this).attr('data-nome-usuario');
            $('#nome-amigo').val(nome);

            setTimeout(function () {
                $.ajax({
                    url:"/principal/getDadosAmizade/",
                    method:"POST",
                    data:{idSolicitante: idUserLogado, idRequisitado: $('#id-amigo').val(), nome: $('#nome-amigo').val()},
                    success:function(s){
                        $(this).addClass('animated fadeOutLeft');
                    }
                });
            },100);
        });
    },1000);
});