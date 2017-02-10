<?php

namespace App\Controllers;


use Silex\Application;

class HomeController
{
    private $app;

    /**
     * BookController constructor
     * @param Application $app
     */
    public function __construct(Application $app)
    {
        $this->app = $app;
    }

    public function index()
    {
        return $this->app['twig']->render('home.twig');
    }
}