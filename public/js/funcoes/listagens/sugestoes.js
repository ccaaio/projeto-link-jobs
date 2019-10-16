$(document).ready(function () {
    var id = '1';
    $.ajax({
        url:"/principal/getSugestoes/",
        method:"POST",
        data:{id: id},
        success:function(s){
            $('#content-sugestoes').html(s);
        }
    });
});