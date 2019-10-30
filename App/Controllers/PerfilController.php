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

        self::setViewJs('/public/js/sweetalert2.all.min.js');
        self::setViewJs('/public/js/principal/principal.js');
        self::setViewJs('/public/js/funcoes/listagens/sugestoes.js');

        $this->render('perfil/editar');

    }

    public function uploadCapaPerfil() {
        if(isset($_POST['save-capa-user']) && isset($_POST['id_user'])) {
            $id_user = $_POST['id_user'];
            $nomeImagemUpload = time() . '_' . $_FILES['profileImage']['name'];

            $target = 'public/uploads/perfil//' . $nomeImagemUpload;

            if (move_uploaded_file($_FILES['profileImage']['tmp_name'], $target)) {
                $conn = mysqli_connect("localhost", "servicon", "3Mv2J0bw2b", "servicon_servicosnaweb");
                $sql = "INSERT INTO capaPerfil (id_usuario, profile_image) VALUES ('$id_user', '$nomeImagemUpload')";

                if(mysqli_query($conn, $sql)) {
                    $this->redirect('principal/editar/');
                }
            } else {
                $this->render('error/usuario');
            }

        }
    }
}