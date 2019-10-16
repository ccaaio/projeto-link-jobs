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

        self::setViewCss('/public/css/slick.css');
        self::setViewCss('/public/css/slick-theme.css');

        $this->render('principal/index');

    }

}