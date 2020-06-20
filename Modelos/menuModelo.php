<?php

class menuModelo
{

    public $id;
    public $nombre;
    public $descripcion;
    public $padre;

    public function __construct($id, $nombre, $descripcion, $padre)
    {

        $this->id = $id;
        $this->nombre = $nombre;
        $this->descripcion = $descripcion;
        $this->padre = $padre;
    }

    public
    static function create($nombre, $descripcion, $padre)
    {

        try {
            $db = db::getInstance();

            if ($padre == null) {
                $padre = 0;

            }

            $req = $db->prepare("INSERT INTO menu (nombre, descripcion, padre) values (:nombre, :descripcion, :padre)");
            $req->execute(array(
                ':nombre' => $nombre,
                ':descripcion' => $descripcion,
                ':padre' => $padre
            ));
            return array(
                "exito" => true,
                "mensaje" => "¡ Menú Padre Guardado Correctamente !"
            );
        } catch (PDOException $ex) {

            return array(
                "exito" => false,
                "mensaje" => 'Error: ' . $ex->getMessage()
            );

        }

    }


    public
    static function delete($id_menu)
    {
        try {

            $db = db::getInstance();

            $req2 = $db->prepare("DELETE FROM menu WHERE padre = :padre");
            $req2->execute(array('padre' => $id_menu));

            $req = $db->prepare("DELETE FROM menu WHERE id_menu = :id_menu");
            $req->execute(array('id_menu' => $id_menu));

            return array(
                "exito" => true,
                "mensaje" => "¡ Menú(s) Eliminado(s) Correctamente !"
            );

        } catch (PDOException $ex) {

            return array(
                "exito" => false,
                "mensaje" => 'Error: ' . $ex->getMessage()
            );
        }

    }

    public
    static function update($id_menu, $nombre, $descipcion, $padre)
    {

        try {

            if ($padre == null) {
                $padre = 0;

            }
            $db = db::getInstance();
            $req = $db->prepare("UPDATE menu SET nombre = :nombre, descripcion = :descripcion, padre = :padre WHERE id_menu = :id_menu");


            $req->execute(array(
                ':nombre' => $nombre,
                ':descripcion' => $descipcion,
                ':padre' => $padre,
                ':id_menu' => $id_menu
            ));
            return array(
                "exito" => true,
                "mensaje" => "¡ Menú Actualizado Correctamente !"
            );
        } catch (PDOException $ex) {

            return array(
                "exito" => false,
                "mensaje" => 'Error: ' . $ex->getMessage()
            );

        }

    }

    public
    static function getAll()
    {

        try {

            $menus = [];
            $db = db::getInstance();

            $menusTodos = $db->query('SELECT * FROM menu');
            $menusTodos = $menusTodos->fetchAll();

            foreach ($menusTodos as $i => $menusTodo) {
                if (intval($menusTodo['padre']) != 0) {

                    $req = $db->prepare('SELECT nombre FROM menu WHERE id_menu = :padre');
                    $req->execute(['padre' => intval($menusTodo['padre'])]);
                    $nombrePadre = $req->fetchAll();

                    if (count($nombrePadre) >= 1) {
                        $menusTodos[$i]['padre'] = $nombrePadre[0]["nombre"];
                    }
                } else {
                    $menusTodos[$i]['padre'] = '-';
                }


            }
            $req = $db->prepare('SELECT * FROM menu WHERE padre = 0');
            $req->execute();
            $nombrePadres = $req->fetchAll();

            $menus["padres"] = $nombrePadres;
            $menus["todos"] = $menusTodos;


            return $menus;

        } catch (PDOException $ex) {
            $error = new errorContralador();
            $error->index('500', $ex->getMessage());
        }

    }

    public static function getMenus()
    {
        try {

            $menus = [];
            $db = db::getInstance();

            $menusTodos = $db->query('SELECT * FROM menu where padre = 0');
            $menusTodos = $menusTodos->fetchAll();

            foreach ($menusTodos as $i => $menusTodo) {
                $req = $db->prepare('SELECT * FROM menu WHERE padre = :padre');
                $req->execute(['padre' => intval($menusTodo['id_menu'])]);
                $nombrePadre = $req->fetchAll();
                $menu = array(
                    'nombreMenu' => $menusTodo['nombre'],
                    'subMenus' => $nombrePadre
                );
                $menus[] = $menu;
            }

            return $menus;

        } catch (PDOException $ex) {
            $error = new errorContralador();
            $error->index('500', $ex->getMessage());
        }
    }

    public
    static function getOne($data)
    {
        try {
            $db = db::getInstance();
            $id = intval($data["id"]);
            $req = $db->prepare('SELECT * FROM menu WHERE id_menu = :id');
            $req->execute(array('id' => $id));
            $menu = $req->fetch();

            return $menu;

        } catch (PDOException $ex) {
            $error = new errorContralador();
            $error->index('500', $ex->getMessage());
        }
    }
}
