<?php


#Definir los valores de BD

define ('__HOSTNAME__', 'localhost');
define ('__USERNAME__', 'userDB');
define ('__PASSWORD__', 'passDB');
define ('__DATABASE__', 'nameDB');

session_start();

spl_autoload_register(function ($className) {
    if (file_exists('Controlador/' . $className . '.php')) {

        require_once 'Controlador/' . $className . '.php';
    }
    if (file_exists('Core/' . $className . '.php')) {

        require_once 'Core/' . $className . '.php';
    }
    if (file_exists('Vista/' . $className . '.php')) {

        require_once 'Vista/' . $className . '.php';
    }

    if (file_exists('Modelos/' . $className . '.php')) {

        require_once 'Modelos/' . $className . '.php';
    }
});

new core();