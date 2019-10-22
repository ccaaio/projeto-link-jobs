$(document).ready(function () {
    setTimeout(function () {
        var idLogado = $('#id-logado').val();
        setTimeout(function () {
            //obtem a lista de usuarios do bd e exibe em sugestoes
            $.ajax({
                url:"/principal/getSugestoes/",
                method:"POST",
                data:{idProprio: idLogado},
                success:function(s){
                    $('#content-sugestoes').html(s);
                }
            });

        },200);
    },200);
    //ao clicar em add amigo - SUGESTOES

    setTimeout(function () {
        var idUserLogado = $('#id-logado').val();
        $('.add-amigo').on('click', function () {
            var idLogado = $('#id-logado').val();
            var idAmigo = $(this).attr('data-id-usuario');
            var nome = $(this).attr('data-nome-usuario');

            console.log('id logado: ', idLogado);
            console.log('id amigo: ', idAmigo);
            console.log('nome: ', nome);

            $.ajax({
                url:"/principal/getDadosAmizade/",
                method:"POST",
                data:{idSolicitante: idUserLogado, idRequisitado: idAmigo, nome: nome},
                success:function(s){
                    alert('solicitação realizada! ');
                }
            });
        });
    },1000);
});