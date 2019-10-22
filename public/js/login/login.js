$(document).ready(function () {
   setTimeout(function () {
       $('#data-nascimento').mask('00/00/0000');
   },250);


    $('body').on('click', function () {
        if ($('input#check-condicoes').is(':checked')) {
            $('#btn-cad-form').prop('disabled', false);
        } else {
            $('#btn-cad-form').prop('disabled', true);
        }
    });
});