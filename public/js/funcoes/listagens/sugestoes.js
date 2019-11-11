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
                        $('#content-voce-deveria').html(v);
                    }
                });
            },1200);

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