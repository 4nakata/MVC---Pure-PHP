<?php

class controlador
{
    public function __construct()
    {
        $this->view = new view();

        #Mostrar menus
        $this->view->menusHeader = menuModelo::getMenus();;

        #Mostrar mensajes
        if (isset($_GET["m"]) && isset($_GET["e"])) {
            $this->view->mensaje = $_GET["m"];
            $this->view->exito = $_GET["e"];
        }
    }
}
