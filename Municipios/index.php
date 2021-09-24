<?php

if (isset($_GET["nav"])) {
    $_location = $_GET["nav"];

    spl_autoload_register(function ($class) {

        if (file_exists("controllers/C" . $class . ".php")) {
            require "controllers/C" . $class . ".php";
        }
    });
} else {
    $_location = 'Inicio';

    spl_autoload_register(function ($class) {

        if (file_exists("controllers/C" . $class . ".php")) {
            require "controllers/C" . $class . ".php";
        }
    });
}

switch ($_location) {

    case 'Principal':
        $Home = new Principal();
        $Home->ViewPrincipal();
        break;
    case 'Inicio':
        $Home = new Inicio();
        $Home->ViewInicio();
        break;

}
