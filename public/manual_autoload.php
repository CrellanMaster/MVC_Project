<?php

define("DS", DIRECTORY_SEPARATOR);
define("ROOT_PATH", dirname(__DIR__) . DS);
define("APP", ROOT_PATH . "src" . DS);
define("CORE", APP . 'Core' . DS);
define("MODELS", APP . 'Models' . DS);
define("VIEWS", APP . 'Views' . DS);
define("CONTROLLERS", APP . 'Controllers' . DS);
define("UPLOADS", ROOT_PATH . 'public' . DS . 'uploads' . DS);

require_once dirname(__DIR__) . "/src/Config/config.php";
require_once dirname(__DIR__) . "/src/Config/helpers.php";


$modules = [ROOT_PATH, APP, CORE, MODELS, VIEWS, CONTROLLERS, UPLOADS];
set_include_path(get_include_path() . PATH_SEPARATOR . implode(PATH_SEPARATOR, $modules));
spl_autoload_register('spl_autoload', true);
