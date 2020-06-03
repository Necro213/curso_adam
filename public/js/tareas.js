$(function(){
    getTareas();
});


async function getTareas() {
    let tareas = [];
    await axios.get(location.protocol+'//'+location.host+"/admin/tareas/all")
        .then(function (resonse) {
            let data = resonse.data;
            for(let i =0; i<data.length; i++){
                $("#tareas").append(generaItem(pdcts[i].nombre,
                    pdcts[i].descripcion,pdcts[i].numero,pdcts[i].estado,));
            }
        }).catch(function (error) {
            message('warning'," Ocurrio un error, revise su conexion o intentelo mas tarde");
        });


    $('#clave').text(clave);
    $('#tareas-modal').modal('toggle');
}


function generaItem(nombre,descripcion,numero,estado) {
    let item = '<a onclick="quitar(this,'+id+')" class="list-group-item list-group-item-action flex-column align-items-start" id="'+id+'">' +
        '<div class="row">' +
        '<div class="col-3">' +
        '<div class="d-flex justify-content-center">'+
        '</div>' +
        '</div>' +
        '<div class="col">' +
        '<div class="d-flex w-100 justify-content-between">' +
        '<h5 class="mb-1">'+nombre+'</h5>' +
        '<small>$'+precio+'</small>' +
        '</div>' +
        '<p class="mb-1">'+descripcion+'</p>' +
        '<small>'+numero+'</small>' +
        '<small>'+estado+'</small>' +
        '</div>' +
        '</div>' +
        '</a>';

    return item;
}





