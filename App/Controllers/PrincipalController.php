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
            $result = mysqli_query($conn, "SELECT * FROM usuario u WHERE NOT u.id = $idLogado AND NOT EXISTS (SELECT * FROM lista_amigos amigos WHERE u.id = $idLogado and amigos.id_solicitante = $idLogado)");

            while($row = mysqli_fetch_assoc($result)) {
                $row["listagem"] = "
                    <div class='suggestions-list' data-id-user-list='".$row['id']."'>
                        <div class='suggestion-usd'>
                            <img src='http://via.placeholder.com/35x35' alt='".$row['titulo']."'>
                            <div class='sgt-text' style='white-space: nowrap;width: 150px;overflow: hidden;text-overflow: ellipsis;'>
                                <h4 style='text-align: left !important;'>".$row['titulo']."</h4>
                                <span class='profissao-sidebar'>".$row['profissao']."</span>
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

        $result = mysqli_query($conn, "INSERT INTO amizade (id_solicitante, id_requisitado, nome_requisitado, nome_solicitado, status) VALUES ('$idSolicitante', '$idRequisitado', '$nome', '$nomeSolicitante', '0')");
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

    public function getSolicitacoesAmizades() {
        if(isset($_POST['idUser'])) {
            $idLogado = $_POST['idUser'];
            $conn = mysqli_connect("remotemysql.com", "GQ4OpczpAV", "jt4ifMIloM", "GQ4OpczpAV");
            $result = mysqli_query($conn, "SELECT COUNT(*) FROM amizade WHERE id_requisitado = '$idLogado' AND status = 0 LIMIT 999");

            if (mysqli_num_rows($result) > 0) {
                while($row = mysqli_fetch_assoc($result)) {
                    $row["listagem"] = " ".$row['COUNT(*)']." ";
                    ?>
                    <?php
                    header('Content-Type: application/json');
                    echo json_encode(array('qtdSolicitacoesAmizade' => ' '.$row["listagem"].' '));
                }
            } else {
                header('Content-Type: application/json');
                echo json_encode(array('qtdSolicitacoesAmizade' => '0'));
            }
        }
    }

    public function amigos() {
        self::setViewParam('nameController',$this->app->getNameController());


        self::setViewCss('/public/css/sweetalert2.min.css');
        self::setViewCss('/public/css/pages/principal/principal.css');
        self::setViewCss('/public/css/pages/principal/amigos.css');

        self::setViewJs('/public/js/sweetalert2.all.min.js');
        self::setViewJs('/public/js/principal/principal.js');
        self::setViewJs('/public/js/funcoes/listagens/sugestoes.js');
        self::setViewJs('/public/js/principal/amigos.js');

        $this->render('principal/amigos');
    }

    public function listagemSolicitacoesAmizade() {
        if(isset($_POST['idProprio'])) {
            $idLogado = $_POST['idProprio'];
            $conn = mysqli_connect("remotemysql.com", "GQ4OpczpAV", "jt4ifMIloM", "GQ4OpczpAV");
            $result = mysqli_query($conn, "SELECT * FROM amizade WHERE id_requisitado = '$idLogado' AND status = 0");

            while($row = mysqli_fetch_assoc($result)) {
                $row["listagem"] = '
                <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                    <div class="company_profile_info">
                        <div class="company-up-info">
                            <img src="/public/images/profile-default.png" alt="Foto do Usuário Solicitante">
                            <h3>'.$row['nome_solicitado'].'</h3>
                            <h4>Profissão</h4>
                            <ul>
                                <li><a href="#" title="" class="follow aceitar-solicitacao" data-id-usuario-solicitante="'.$row['id_solicitante'].'" data-nome-usuario-solicitante="'.$row['nome_solicitado'].'"><i class="fa fa-check" aria-hidden="true"></i></a></li>
                                <li><a href="#" title="" class="hire-us recusar-solicitacao" data-id-usuario-solicitante="'.$row['id_solicitante'].'" data-nome-usuario-solicitante="'.$row['nome_solicitado'].'"><i class="fa fa-times" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                        <a href="/principal/perfil/" title="" class="view-more-pro">Ver Perfil</a>
                    </div>
                </div>    
                ';
                ?>
                <?php
                echo $row["listagem"];
            }
        }
    }

    public function processaAceitacaoAmizade() {
        if(isset($_POST['idAceitado']) && isset($_POST['idLogado'])) {
            $conn = mysqli_connect("remotemysql.com", "GQ4OpczpAV", "jt4ifMIloM", "GQ4OpczpAV");

            $idAceitado = $_POST['idAceitado'];
            $nomeAceitado = $_POST['nomeAceitado'];
            $idLogado = $_POST['idLogado'];
            $nomeLogado = $_POST['nomeLogado'];

            $result = mysqli_query($conn, "INSERT INTO lista_amigos (id_solicitante, id_requisitado, nome_requisitado, nome_solicitante) VALUES ('$idLogado', '$idAceitado', '$nomeAceitado', '$nomeLogado')");
            $result3 = mysqli_query($conn, "INSERT INTO lista_amigos (id_solicitante, id_requisitado, nome_requisitado, nome_solicitante) VALUES ('$idAceitado', '$idLogado', '$nomeLogado', '$nomeAceitado')");
            $result2 = mysqli_query($conn, "UPDATE amizade SET status = '1' WHERE id_solicitante = '$idAceitado' AND id_requisitado = '$idLogado'");
        }
    }

    public function atualizaStatusAceitacaoAmizade() {
        if(isset($_POST['idAceitado']) && isset($_POST['idLogado'])) {
            $conn = mysqli_connect("remotemysql.com", "GQ4OpczpAV", "jt4ifMIloM", "GQ4OpczpAV");

            $idAceitado = $_POST['idAceitado'];
            $idLogado = $_POST['idLogado'];

            $result2 = mysqli_query($conn, "UPDATE amizade SET status = 1 WHERE id_solicitante = '$idLogado' AND id_requisitado = '$idAceitado'");
        }
    }

    public function atualizaStatusNegacaoAmizade() {
        if(isset($_POST['idAceitado']) && isset($_POST['idLogado'])) {
            $conn = mysqli_connect("remotemysql.com", "GQ4OpczpAV", "jt4ifMIloM", "GQ4OpczpAV");

            $idAceitado = $_POST['idAceitado'];
            $idLogado = $_POST['idLogado'];

            $result2 = mysqli_query($conn, "UPDATE amizade SET status = 1 WHERE id_solicitante = '$idLogado' AND id_requisitado = '$idAceitado'");
            $result2 = mysqli_query($conn, "UPDATE amizade SET status = '1' WHERE id_solicitante = '$idAceitado' AND id_requisitado = '$idLogado'");
        }
    }

    public function refreshListagemAmigos() {
        if(isset($_POST['idProprio'])) {
            $idLogado = $_POST['idProprio'];
            $conn = mysqli_connect("remotemysql.com", "GQ4OpczpAV", "jt4ifMIloM", "GQ4OpczpAV");
            $result = mysqli_query($conn, "SELECT * FROM lista_amigos WHERE id_requisitado = '$idLogado'");

            while($row = mysqli_fetch_assoc($result)) {
                $row["listagem"] = '
                <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                    <div class="company_profile_info">
                        <div class="company-up-info card-item-amigos">
                            <img src="/public/images/profile-default.png" alt="Foto do Usuário Solicitante">
                            <h3>'.$row['nome_solicitante'].'</h3>
                            <h4>Profissão</h4>
                        </div>
                        <a data-id-seguidor="'.$row['id_requisitado'].'" href="/principal/perfil/" title="" class="view-more-pro">Ver Perfil</a>
                    </div>
                </div>    
                ';
                ?>
                <?php
                echo $row["listagem"];
            }
        }
    }
}