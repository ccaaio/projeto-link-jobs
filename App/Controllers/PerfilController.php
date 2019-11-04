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

        self::setViewCss('/public/css/pages/principal/principal.css');

        self::setViewJs('/public/js/principal/principal.js');
        self::setViewJs('/public/js/funcoes/listagens/sugestoes.js');

        $this->render('perfil/index');

    }

    public function editar() {

        self::setViewParam('nameController',$this->app->getNameController());


        self::setViewCss('/public/css/pages/principal/principal.css');

        self::setViewJs('/public/js/principal/principal.js');
        self::setViewJs('/public/js/funcoes/listagens/sugestoes.js');
        self::setViewJs('/public/js/perfil/editar.js');

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

    public function getFotoPerfil() {
        if(isset($_POST['idUser'])) {

            $idUser = $_POST['idUser'];

            $conn = mysqli_connect("remotemysql.com", "GQ4OpczpAV", "jt4ifMIloM", "GQ4OpczpAV");

            $result = mysqli_query($conn, "SELECT * FROM imgPerfil WHERE usuario = '$idUser' ORDER BY id DESC LIMIT 1");

            if (mysqli_num_rows($result) > 0) {
                while($row = mysqli_fetch_assoc($result)) {
                    header('Content-Type: application/json');
                    echo json_encode(array('src'=> $row['img']));
                }
            } else {
                header('Content-Type: application/json');
                echo json_encode(array('src' => 'profile-default.png'));
            }
        } else {
            $this->render('error/usuario');
        }
    }



    public function uploadFoto() {

        $id_user = $_POST['usuario'];
        $nomeImagemUpload = time() . '_' . $_FILES['save-foto-user']['name'];

        $target = 'public/uploads/fotoPerfil//'.$nomeImagemUpload;

        if (move_uploaded_file($_FILES['save-foto-user']['tmp_name'], $target)) {
            $conn = mysqli_connect("remotemysql.com", "GQ4OpczpAV", "jt4ifMIloM", "GQ4OpczpAV");
            $sql = "INSERT INTO imgPerfil (usuario, img) VALUES ('$id_user', '$nomeImagemUpload')";

            if(mysqli_query($conn, $sql)) {
                $this->redirect('perfil/editar/');
            }
        } else {
            $this->render('error/usuario');
        }
    }

    public function atualizarInformacoes() {
        $nome = $_POST['nome'];
        $profissao = $_POST['profissao'];
        $idUser = $_POST['idUser'];

        $conn = mysqli_connect("remotemysql.com", "GQ4OpczpAV", "jt4ifMIloM", "GQ4OpczpAV");

        $sql2 = "UPDATE usuario SET titulo = '".$nome."', profissao =  '".$profissao."' WHERE id = '$idUser'";
        if(mysqli_query($conn, $sql2)) {
            $this->redirect('perfil/editar/');
        } else {
            $this->render('error/usuario');
        }
    }

    public function getInformacoesPerfil() {
        if(isset($_POST['idUser'])) {

            $idUser = $_POST['idUser'];

            $conn = mysqli_connect("remotemysql.com", "GQ4OpczpAV", "jt4ifMIloM", "GQ4OpczpAV");

            $result = mysqli_query($conn, "SELECT titulo,profissao FROM usuario WHERE id = '$idUser' ORDER BY id DESC LIMIT 1");

            if (mysqli_num_rows($result) > 0) {
                while($row = mysqli_fetch_assoc($result)) {
                    header('Content-Type: application/json');
                    echo json_encode(array('titulo'=> $row['titulo'], 'profissao'=> $row['profissao']));
                }
            } else {
                $this->render('error/usuario');
            }
        } else {
            $this->render('error/usuario');
        }
    }
}