<?php

/*
 *
 * Front-end controller
 */

namespace Crellan\PdoCrud\Core;

use Crellan\PdoCrud\Controllers\HomeController;

class App
{
    protected $controller = "HomeController";
    protected $action = "index";

    protected $params = [];

    public function __construct()
    {
        $this->prepareURL();
        $this->render();
    }


    /*
     * Extrai a URL recebida e realiza seu tratamento, definindo o controlador, a ação e os parâmetros que serão utilizados.
     * @return void
     */
    private function prepareURL()
    {
        $url = $_SERVER['REQUEST_URI'];


        if (!empty($url)) {
            if ($url === "/") {
                $url = ['0' => 'home'];
            } else {
                $url = trim($url, '/');
                $url = explode("/", $url);
            }


            // define o controllador;
            $this->controller = isset($url) ? ucwords($url[0]) . "Controller" : "HomeController";


            //define a ação
            $this->action = isset($url[1]) ? $url[1] : "index";


            unset($url[0], $url[1]);


            //define os parâmetros

            $this->params = !empty($url) ? array_values($url) : [];

        }
    }

    private function render()
    {
        if (class_exists("Crellan\\PdoCrud\\Controllers") . $this->controller) {
            $controlerName = "Crellan\\PdoCrud\\Controllers\\" . $this->controller;
            $controller = new $controlerName;


            if (method_exists($controller, $this->action)) {
                call_user_func_array([$controller, $this->action], $this->params);
            } else {
                echo "O método " . $this->action . " não existe.";
            }

        } else {
            echo "A classe " . $this->controller . " não existe";
        }

    }
}
