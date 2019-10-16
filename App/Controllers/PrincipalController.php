<?php

namespace App\Controllers;

class PrincipalController extends Controller {
    private $app;
    public $isAuth;

    public function __construct($app)
    {
        $this->app = $app;
    }

    public function index()
    {

        self::setViewParam('nameController',$this->app->getNameController());

        self::setViewJs('/public/js/funcoes/listagens/sugestoes.js');

        $this->render('principal/index');

    }

}