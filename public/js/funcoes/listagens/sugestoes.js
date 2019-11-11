$(document).ready(function () {

        var idLogado = $('#id-logado').val();

            //obtem a lista de usuarios do bd e exibe em sugestoes
            $.ajax({
                url:"/principal/getSugestoes/",
                method:"POST",
                data:{idProprio: idLogado},
                success:function(s){
                    $.ajax({
                        url:"/principal/getDeveriaConhecer/",
                        method:"POST",
                        data:{idProprio: idLogado},
                        success:function(v){
                            $('#content-voce-deveria').html(v);
                            $('.profiles-slider').slick({
                                slidesToShow: 3,
                                slck:true,
                                slidesToScroll: 1,
                                prevArrow:'<span class="slick-previous"></span>',
                                nextArrow:'<span class="slick-nexti"></span>',
                                autoplay: true,
                                dots: false,
                                autoplaySpeed: 2000,
                                responsive: [
                                    {
                                        breakpoint: 1200,
                                        settings: {
                                            slidesToShow: 2,
                                            slidesToScroll: 1,
                                            infinite: true,
                                            dots: false
                                        }
                                    },
                                    {
                                        breakpoint: 991,
                                        settings: {
                                            slidesToShow: 2,
                                            slidesToScroll: 2
                                        }
                                    },
                                    {
                                        breakpoint: 768,
                                        settings: {
                                            slidesToShow: 1,
                                            slidesToScroll: 1
                                        }
                                    }
                                    // You can unslick at a given breakpoint now by adding:
                                    // settings: "unslick"
                                    // instead of a settings object
                                ]


                            });
                        }
                    });
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

            var item = $(this).parent().parent().addClass('animated zoomOut');
        });
    },1000);
});