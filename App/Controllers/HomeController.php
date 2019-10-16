<?php

namespace App\Controllers;

class HomeController extends Controller {
    private $app;
    public $isAuth;

    public function __construct($app)
    {
        $this->app = $app;
    }

    public function index()
    {

        $this->existeLayout(false);


        self::setViewCss('/public/css/slick.css');
        self::setViewCss('/public/css/slick-theme.css');

        self::setViewJs('/public/js/slick.min.js');

        self::setViewParam('nameController', $this->app->getNameController());

        $this->render('login/index');

    }

}