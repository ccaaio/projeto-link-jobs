$(document).ready(function () {
   setTimeout(function () {
       $('#data-nascimento').mask('00/00/0000');
   },250);


    $('body').on('click', function () {
        if ($('input#check-condicoes').is(':checked')) {
            $('#btn-cad-form').prop('disabled', false);
            $('#btn-cad-form').removeClass('disabled');
        } else {
            $('#btn-cad-form').prop('disabled', true);
            $('#btn-cad-form').addClass('disabled');
            $('#btn-cad-form').attr('alt', 'Você precisa ler e estar de acordo com os nossos Termos!');
            $('#btn-cad-form').attr('title', 'Você precisa ler e estar de acordo com os nossos Termos!');
        }
    });

    $('#tipo-conta').on('change', function () {
       if($(this).val() == 'GT') {
           $('.info-cartao').addClass('invisivel');
       } else if($(this).val() == 'PG') {
           $('.info-cartao').removeClass('invisivel');
       }
    });
});