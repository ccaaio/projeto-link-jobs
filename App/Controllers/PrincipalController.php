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


        self::setViewCss('/public/css/pages/principal/principal.css');
        self::setViewJs('/public/js/funcoes/listagens/sugestoes.js');

        $this->render('principal/index');

    }

    public function getSugestoes() {
        $idLogado = $_POST['id'];
        $conn = mysqli_connect("remotemysql.com", "GQ4OpczpAV", "jt4ifMIloM", "GQ4OpczpAV");
        $result = mysqli_query($conn, "SELECT * FROM usuario WHERE NOT id = '$idLogado' LIMIT 20");

        while($row = mysqli_fetch_assoc($result)) {
            $row["listagem"] = "
                    <div class='suggestions-list'>
                        <div class='suggestion-usd'>
                            <img src='http://via.placeholder.com/35x35' alt='".$row['titulo']."'>
                            <div class='sgt-text'>
                                <h4>".$row['titulo']."</h4>
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

    public function getDadosAmizade() {
        $conn = mysqli_connect("remotemysql.com", "GQ4OpczpAV", "jt4ifMIloM", "GQ4OpczpAV");

        $idSolicitante = $_POST['idSolicitante'];
        $idRequisitado = $_POST['idRequisitado'];
        $nome = $_POST['nome'];

        $result = mysqli_query($conn, "INSERT INTO amizade (id_solicitante, id_requisitado, nome_requisitado) VALUES ('$idSolicitante', '$idRequisitado', '$nome')");
    }

}