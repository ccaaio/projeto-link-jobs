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


        self::setViewCss('/xavier-link-jobs/public/css/slick.css');
        self::setViewCss('/xavier-link-jobs/public/css/slick-theme.css');

        self::setViewJs('/xavier-link-jobs/public/js/slick.min.js');

        self::setViewParam('nameController', $this->app->getNameController());

        $this->render('login/index');

    }

}