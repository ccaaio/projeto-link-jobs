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

        self::setViewJs('/public/js/funcoes/listagens/sugestoes.js');

        $this->render('principal/index');

    }

    public function getSugestoes() {
        $conn = mysqli_connect("remotemysql.com", "GQ4OpczpAV", "jt4ifMIloM", "GQ4OpczpAV");
        $result = mysqli_query($conn, "SELECT * FROM usuario LIMIT 20");

        while($row = mysqli_fetch_assoc($result)) {
            $row["listagem"] = "
                    <div class='suggestions-list'>
                        <div class='suggestion-usd'>
                            <img src='http://via.placeholder.com/35x35' alt='".$row['titulo']."'>
                            <div class='sgt-text'>
                                <h4>".$row['titulo']."</h4>
                                <span>Designer Gráfico</span>
                            </div>
                            <span><i class='la la-plus'></i></span>
                        </div>
                    </div>  
                    ";
            ?>
            <?php
            echo $row["listagem"];
        }
    }

}