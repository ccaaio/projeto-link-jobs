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

        $this->render('perfil/index');

    }
}