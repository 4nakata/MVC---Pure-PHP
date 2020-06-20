function crearMenu() {
    $('#modalCrear').on('shown.bs.modal', function () {
        $('#formCrear [ name = id ]').val("");
        $('#formCrear [ name = nombre ]').val("");
        $('#formCrear [ name = descripcion ]').val("");
    }).modal('show');

}
function editarMenu(id, nombre, descripcion) {
    $('#modalEditar').on('shown.bs.modal', function () {
        $('#formEditar [ name = id ]').val(id);
        $('#formEditar [ name = nombre ]').val(nombre);
        $('#formEditar [ name = descripcion ]').val(descripcion);
    }).modal('show');

}
function eliminarMenu(id) {

    $('#modalEliminar').on('shown.bs.modal', function () {
        $('#formEliminar [ name = id ]').val(id);
    }).modal('show');

}