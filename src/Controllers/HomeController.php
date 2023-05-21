<?php

namespace Crellan\PdoCrud\Controllers;


use Crellan\PdoCrud\Core\View;

class HomeController
{

    public function index()
    {

        View::load('home');
    }
}