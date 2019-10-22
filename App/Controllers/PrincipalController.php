<?php

namespace App\Controllers;

class PrincipalController extends Controller {
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

        $this->render('principal/index');

    }

    public function getSugestoes() {
        if(isset($_POST['idProprio'])) {
            $idLogado = $_POST['idProprio'];
            $conn = mysqli_connect("remotemysql.com", "GQ4OpczpAV", "jt4ifMIloM", "GQ4OpczpAV");
            $result = mysqli_query($conn, "SELECT * FROM usuario WHERE NOT id = '$idLogado' LIMIT 20");

            while($row = mysqli_fetch_assoc($result)) {
                $row["listagem"] = "
                    <div class='suggestions-list' data-id-user-list='".$row['id']."'>
                        <div class='suggestion-usd'>
                            <img src='http://via.placeholder.com/35x35' alt='".$row['titulo']."'>
                            <div class='sgt-text'>
                                <h4 style='text-align: left !important;'>".$row['titulo']."</h4>
                                <span>Designer Gráfico</span>
                            </div>
                            <span class='add-amigo' data-id-usuario='".$row['id']."' data-nome-usuario='".$row['titulo']."'><i class='la la-plus'></i></span>
                        </div>
                    </div>  
                    ";
                ?>
                <?php
                echo $row["listagem"];
            }
        }
    }

    public function getDadosAmizade() {
        $conn = mysqli_connect("remotemysql.com", "GQ4OpczpAV", "jt4ifMIloM", "GQ4OpczpAV");

        $idSolicitante = $_POST['idSolicitante'];
        $idRequisitado = $_POST['idRequisitado'];
        $nome = $_POST['nome'];
        $nomeSolicitante = $_POST['nomeSolicitante'];

        $result = mysqli_query($conn, "INSERT INTO amizade (id_solicitante, id_requisitado, nome_requisitado, nome_solicitado) VALUES ('$idSolicitante', '$idRequisitado', '$nome', '$nomeSolicitante')");
    }

    public function getFotoPerfil() {
        if(isset($_POST['idUser'])) {
            $idLogado = $_POST['idUser'];
            $conn = mysqli_connect("remotemysql.com", "GQ4OpczpAV", "jt4ifMIloM", "GQ4OpczpAV");
            $result = mysqli_query($conn, "SELECT * FROM fotoPerfil WHERE id_usuario = '$idLogado' ORDER BY id DESC LIMIT 1");

            if (mysqli_num_rows($result) > 0) {
                while($row = mysqli_fetch_assoc($result)) {
                    $row["listagem"] = " ".$row['imagem']." ";
                    ?>
                    <?php
                    header('Content-Type: application/json');
                    echo json_encode(array('foto' => ' '.$row["listagem"].' '));
                }
            } else {
                header('Content-Type: application/json');
                echo json_encode(array('foto' => 'profile-default.png'));
            }
        }
    }
}