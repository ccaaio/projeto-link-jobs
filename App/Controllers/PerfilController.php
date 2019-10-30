<?php

namespace App\Controllers;

class PerfilController extends Controller {
    private $app;
    public $isAuth;

    public function __construct($app)
    {
        $this->app = $app;
    }

    public function index() {

        self::setViewParam('nameController',$this->app->getNameController());


        self::setViewCss('/public/css/sweetalert2.min.css');
        self::setViewCss('/public/css/pages/principal/principal.css');

        self::setViewJs('/public/js/sweetalert2.all.min.js');
        self::setViewJs('/public/js/principal/principal.js');
        self::setViewJs('/public/js/funcoes/listagens/sugestoes.js');

        $this->render('perfil/index');

    }

    public function editar() {

        self::setViewParam('nameController',$this->app->getNameController());


        self::setViewCss('/public/css/sweetalert2.min.css');
        self::setViewCss('/public/css/pages/principal/principal.css');
        self::setViewCss('/public/css/croppie.css');

        self::setViewJs('/public/js/sweetalert2.all.min.js');
        self::setViewJs('/public/js/principal/principal.js');
        self::setViewJs('/public/js/funcoes/listagens/sugestoes.js');
        self::setViewJs('/public/js/perfil/editar.js');
        self::setViewJs('/public/js/croppie.min.js');
        self::setViewJs('/public/js/exif.js');

        $this->render('perfil/editar');

    }

    public function uploadCapaPerfil() {
        if(isset($_POST['save-capa'])) {
            $id_user = $_POST['id_user'];
            $nomeImagemUpload = time() . '_' . $_FILES['save-capa-user']['name'];

            $target = 'public/uploads/capa//'.$nomeImagemUpload;

            if (move_uploaded_file($_FILES['save-capa-user']['tmp_name'], $target)) {
                $conn = mysqli_connect("remotemysql.com", "GQ4OpczpAV", "jt4ifMIloM", "GQ4OpczpAV");
                $sql = "INSERT INTO capaPerfil (id_usuario, profile_image) VALUES ('$id_user', '$nomeImagemUpload')";

                if(mysqli_query($conn, $sql)) {
                    $this->redirect('perfil/editar/');
                }
            } else {
                $this->render('error/usuario');
            }

        }
    }

    public function getCapaPerfil() {
        if(isset($_POST['idUser'])) {

            $idUser = $_POST['idUser'];

            $conn = mysqli_connect("remotemysql.com", "GQ4OpczpAV", "jt4ifMIloM", "GQ4OpczpAV");

            $result = mysqli_query($conn, "SELECT * FROM capaPerfil WHERE id_usuario = '$idUser' ORDER BY id DESC LIMIT 1");

            if (mysqli_num_rows($result) > 0) {
                while($row = mysqli_fetch_assoc($result)) {
                    header('Content-Type: application/json');
                    echo json_encode(array('src'=> $row['profile_image']));
                }
            } else {
                header('Content-Type: application/json');
                echo json_encode(array('src' => 'capa-default.png'));
            }

        } else {
            $this->render('error/usuario');
        }
    }

    public function fotoPerfilUpload() {
        if(isset($_POST["image"])) {
            $data = $_POST["image"];

            $image_array_1 = explode(";", $data);

            $image_array_2 = explode(",", $image_array_1[1]);

            $data = base64_decode($image_array_2[1]);

            $imageName = time() . '.png';

            file_put_contents($imageName, $data);
            echo $imageName;
        }
    }
}