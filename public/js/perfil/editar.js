    setTimeout(function () {

        $('#upload-capa').on('change', function () {
            $('.btn-upload').removeClass('d-none');
            setTimeout(function () {
                Swal.fire({
                    title: 'Foto selecionada. Vamos ao próximo passo....',
                    animation: false,
                    customClass: {
                        popup: 'animated tada'
                    }
                });
            }, 1000);
        });

        var idUsuario = $('#id_user').val();

        setTimeout(function () {
            //obtem a lista de usuarios do bd e exibe em sugestoes
            $.ajax({
                url:"/perfil/getCapaPerfil/",
                method:"POST",
                data:{idUser: idUsuario},
                success:function(c){
                    var capa =c.src;
                    var trimCapa = $.trim(capa);
                    $('#img-capa').attr("src", "/public/uploads/capa/"+trimCapa+"");
                    setTimeout(function () {
                        $('.loader-capa').addClass('d-none');
                    }, 1500);
                }
            });
        },200);
    },1000);

setTimeout(function () {
    function CropUpload() {
        var $uploadCrop;
        var blob;
        function readFile(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function (e) {
                    $('.upload-demo').addClass('ready');
                    $uploadCrop.croppie('bind', {
                        url: e.target.result
                    }).then(function(){
                        console.log('Imagem lida com sucesso');
                    });
                }
                reader.readAsDataURL(input.files[0]);
            }
            else {
                swal("Seu navegador não suporta o FileReader API");
            }
        }
        $uploadCrop = $('#upload-demo').croppie({
            viewport: {
                width: 450,
                height: 400,
                type: 'square'
            },
            boundary: {
                width: 550,
                height: 400
            },
            update: function(resp){
                $uploadCrop.croppie('result', {
                    type: 'canvas'
                }).then(function (resp) {
                    $('#img-preview').attr('src', resp);
                });
                $uploadCrop.croppie('result', {
                    type: 'blob'
                }).then(function (resp) {
                    blob = resp;
                });
            },
            enableExif: true
        });
        $('#img').on('change', function () {
            readFile(this);
        });

        $('form#img-upload').submit(function (ev) {
            ev.preventDefault();
            var data = new FormData(this);

            data.append('img-h', blob);
            $.ajax({
                type: "POST",
                enctype: 'multipart/form-data',
                url: "perfil/fotoPerfilUpload",
                data: data,
                processData: false,
                contentType: false,
                success: function (data) {
                    $("#response").html(data);
                    console.log(data);
                },
                error: function (ev) {
                    $("#response").text(ev.responseText);
                    console.log(ev);
                }
            });
        });
    }
    CropUpload();

},7000);
