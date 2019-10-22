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
        }
    });
});