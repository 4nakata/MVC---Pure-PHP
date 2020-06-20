<?php

class core
{
    public function __construct()
    {
        if (isset($_GET["p"])) {

            $nombreControlador = $_GET["p"]."Contralador";

            if (file_exists('Controlador/' . $nombreControlador . '.php')) {
                $controlador = new $nombreControlador();

                if (isset($_POST["a"])) {
                    $metodo = $_POST["a"];

                    if (method_exists($controlador, $metodo)) {
                        $controlador->{$metodo}($_POST);
                    }
                }
                elseif (isset($_GET["a"])) {
                    $metodo = $_GET["a"];

                    if (method_exists($controlador, $metodo)) {
                        $controlador->{$metodo}($_GET);
                    }

                } else {
                    $controlador->index();
                }

            } else {
                $error = new errorContralador();
                $error->index('404', '¿Buscas Algo?');
            }
        } else {

            $inicio = new inicioContralador();
            $inicio->index();
        }
    }

}