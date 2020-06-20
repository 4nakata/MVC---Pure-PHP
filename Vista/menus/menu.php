<!-- Todos los menu -->
<?php if (isset($this->menus)): ?>
<div class="card">
    <div class="card-header">
        <div class="row">
            <div class="col-md-10 col-sm-6">
                <div class="text-center">
                    <h4 class="mt-1">Menú</h4>
                </div>
            </div>
            <div class="col-md-2 col-sm-6">
                <button type="button" class="btn btn-success btn-block" onclick="crearMenu()">
                    <i class="fa fa-plus position-left"></i> Nuevo
                </button>
            </div>
        </div>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-borderless table-hover">
                <thead class="thead-dark">
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Menú padre</th>
                    <th>Descripción</th>
                    <th>Acciones</th>
                </tr>
                </thead>
                <tbody>

                <?php foreach ($this->menus["todos"] as $menu): ?>
                    <tr>
                        <td><?php echo $menu["id_menu"] ?></td>
                        <td><?php echo $menu["nombre"] ?></td>
                        <td> <?php echo $menu["padre"] ?></td>
                        <td>
                            <?php echo $menu["descripcion"] ?>
                        </td>

                        <td>
                            <button type="button" class="btn btn-primary btn-sm"
                                    onclick="editarMenu('<?php echo $menu["id_menu"]; ?>','<?php echo $menu['nombre']; ?>','<?php echo $menu["descripcion"]; ?>',)">
                                <i class="fa fa-pencil-alt mr-1"></i>Editar
                            </button>
                            <button type="button" class="btn btn-danger btn-sm"
                                    onclick="eliminarMenu('<?php echo $menu["id_menu"]; ?>')">
                                <i class="fa fa-trash-alt mr-1"></i> Eliminar
                            </button>
                        </td>
                    </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>

</div>


<?php
include_once('modals/crear.php');
include_once('modals/editar.php');
include_once('modals/eliminar.php');
?>

<!-- Un solo menu -->
<?php elseif(isset($this->getMenu)) :?>
    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col-12">
                    <div class="text-center">
                        <h4 class="mt-1"><?php echo $this->getMenu["nombre"]?></h4>
                    </div>
                </div>
            </div>
        </div>
        <div class="card-body">
            <?php echo $this->getMenu["descripcion"]?>
        </div>

    </div>

<?php endif;?>