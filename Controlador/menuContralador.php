<?php

class menuContralador extends miControlador
{

    public function index()
    {
        $menus = menuModelo::getAll();
        $this->view->menus = $menus;
        $this->view->render('menus/menu');
    }
    public function ver($data)
    {

        $menu = menuModelo::getOne($data);
        $this->view->getMenu = $menu;
        $this->view->render('menus/menu');
    }

    public function crear($data)
    {

        $nombre = $data["nombre"];
        $descripcion = $data["descripcion"];
        $menu_padre = ($data["menu_padre"]) ? $data["menu_padre"] : null;
        $menu = menuModelo::create($nombre, $descripcion, $menu_padre);

        header('Location: ?p=menu&e='.$menu["exito"].'&m=' . base64_encode($menu["mensaje"]));
        exit();

    }
    public function editar($data)
    {
        $id = intval($data["id"]);
        $nombre = $data["nombre"];
        $descripcion = $data["descripcion"];
        $menu_padre = ($data["menu_padre"]) ? $data["menu_padre"] : null;
        $menu = menuModelo::update($id, $nombre, $descripcion, $menu_padre);

        header('Location: ?p=menu&e='.$menu["exito"].'&m=' . base64_encode($menu["mensaje"]));
        exit();

    }
    public function eliminar($data){

        $id = intval($data["id"]);
        $menu = menuModelo::delete($id);

        header('Location: ?p=menu&e='.$menu["exito"].'&m=' . base64_encode($menu["mensaje"]));
        exit();
    }

}