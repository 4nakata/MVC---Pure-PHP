
    <div class="modal fade" id="modalEliminar" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Eliminar Menu</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body text-center">
                    <div class="row ">
                        <div class="col-md-7 col-sm-12">
                            <div class="m-2">
                                <form action="" method="POST" id="formEliminar">
                                    <input type="hidden" name="a" value="eliminar">
                                    <input type="hidden" name="id">
                                        <h1>¿Estas seguro de eliminar el menú?</h1>
                                    <br>
                                    <br>
                                        <h4 class="text-danger"> Si el menú es 'padre' se eliminara todos los menus 'hijos'</h4>
                                </form>
                            </div>
                        </div>
                        <div class="col-md-5 d-none d-sm-block">
                            <div class="m-5">
                                <img class="img-fluid " src="Assets/img/warning.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar <i
                                class="fa fa-times ml-1"></i></button>
                    <button type="submit" form="formEliminar" class="btn btn-danger">Borrar <i
                                class="fa fa-check ml-1"></i></button>
                </div>
            </div>
        </div>
    </div>