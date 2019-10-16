$(document).ready(function () {

    //obtem a lista de usuarios do bd e exibe em sugestoes
    var id = '1';
    $.ajax({
        url:"/principal/getSugestoes/",
        method:"POST",
        data:{id: id},
        success:function(s){
            $('#content-sugestoes').html(s);
        }
    });

    //ao clicar em add amigo - SUGESTOES

    $('.add-amigo').on('click', function () {
        var idLogado = $('#id-logado').val();
       var idAmigo = $(this).attr('data-id-usuario');
       var nome = $(this).attr('data-nome-usuario');

       console.log('id logado: ', idLogado);
        console.log('id amigo: ', idAmigo);
        console.log('nome: ', nome);
    });
});