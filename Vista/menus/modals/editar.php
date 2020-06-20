
<div class="modal fade" id="modalEditar" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Editar Menú</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body text-left">
                    <div class="row ">
                        <div class="col-md-7 col-sm-12">
                            <div class="m-2">
                                <form action="" method="POST" id="formEditar">
                                    <input type="hidden" name="a" value="editar">
                                    <input type="hidden" name="id">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Menú Padre</label>
                                        <select class="form-control" name="menu_padre" id="menu_padre">
                                            <option class="form-control" value="">Selecciona una opción</option>
                                            <?php foreach ($this->menus["padres"] as $padre):?>
                                                <option class="form-control" value="<?php echo $padre["id_menu"] ;?>"><?php echo $padre["nombre"] ;?></option>
                                            <?php endforeach;?>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="nombre">Nombre</label>
                                        <input type="text" class="form-control" id="nombre" name="nombre" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="descripcion">Descripción</label>
                                        <textarea class="form-control" name="descripcion" id="descripcion" cols="30"
                                                  rows="5" required></textarea>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="col-md-5 d-none d-sm-block">
                            <img class="img-fluid mt-5" src="Assets/img/create.jpg" alt="">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar <i
                                class="fa fa-times ml-1"></i></button>
                    <button type="submit" form="formEditar" class="btn btn-primary">Actualizar <i
                                class="fa fa-check ml-1"></i></button>
                </div>
            </div>
        </div>
    </div>
