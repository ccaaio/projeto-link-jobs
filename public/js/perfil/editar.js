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
    $(document).ready(function(){
        var idUser = $('#id_user').val();

        $image_crop = $('#image_demo').croppie({
            enableExif: true,
            viewport: {
                width:170,
                height:170,
                type:'circle' //circle
            },
            boundary:{
                width:250,
                height:250
            }
        });

        $('#insert_image').on('change', function(){
            var reader = new FileReader();
            reader.onload = function (event) {
                $image_crop.croppie('bind', {
                    url: event.target.result
                }).then(function(){
                    console.log('jQuery bind complete');
                });
            }
            reader.readAsDataURL(this.files[0]);
            $('#insertimageModal').modal('show');
        });

        $('.crop_image').click(function(event){
            $image_crop.croppie('result', {
                type: 'canvas',
                size: 'viewport'
            }).then(function(response){
                $.ajax({
                    url:'/perfil/fotoPerfilUpload',
                    type:'POST',
                    data:{"image":response, "idUser": idUser},
                    success:function(data){
                        $('#insertimageModal').modal('hide');
                        load_images();
                        alert(data);
                    }
                })
            });
        });

        load_images();

        function load_images()
        {
            $.ajax({
                url:"/perfil/getFotoPerfilUsuario",
                method: "POST",
                data:{id_user: idUser},
                success:function(data) {
                    console.log(data);
                    $('#img-usuario-foto-perfil').attr('src', data);
                }
            })
        }

    });
},3500);
