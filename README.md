# MVP---Pure-PHP
CRUD en el que implemento el patrón MVC si ningún tipo de framework **( MYSQL + PHP + POO )**, unicamente se necesita el PDO de MYSQL.

# Base de datos
Para ejecutar el programa necesitaras el siguiente esquema y modificar las variables de conexión en **index.php**
```sql
CREATE SCHEMA IF NOT EXISTS `menus` DEFAULT CHARACTER SET utf8mb4 ;
USE `menus` ;

CREATE TABLE IF NOT EXISTS `menus`.`menu` (
  `id_menu` INT(11) NOT NULL AUTO_INCREMENT,
  `nombre` VARCHAR(50) NOT NULL,
  `descripcion` VARCHAR(200) NOT NULL,
  `padre` INT(11) NOT NULL,
  PRIMARY KEY (`id_menu`))
ENGINE = InnoDB
AUTO_INCREMENT = 15
DEFAULT CHARACTER SET = utf8mb4;
```
