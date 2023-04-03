
$("#prod_codigo").on("blur",function () { 
    codigo=$("#prod_codigo").val()
    $.ajax({
        type: "GET",
        url: "/productos/consultacodigo/"+codigo,
        dataType: "json",
        success: function (response) {
            if (response){
                $("#valid_codigo").css('display','block')
            }else{
                $("#valid_codigo").css('display','none')
            }
        }
    });
 })

$("#btnNuevoProducto").on("click",function (e) {
    e.preventDefault();
    $("#etiquetaProducto").text('Registrar Producto');
    $("#modalProducto").modal('show');
});

$(document).on("click",".btnEditarProducto",function (e) { 
    e.preventDefault();
    
    fila = $(this).closest("tr");
    id = (fila).find('td:eq(0)').text();
    $("#etiquetaProducto").text('Editar Producto');
    $.ajax({
        type: "GET",
        url: "/productos/edit/"+id,
        dataType: "json",
        success: function (response) {
            $("#idProducto").val(response.id);
            $("#prod_medida").val(response.idUnidades).change();
            $("#prod_codigo").val(response.prod_codigo);
            $("#prod_nombre").val(response.prod_nombre);
            $("#prod_stock").val(response.prod_stock);
            $("#prod_precio").val(response.prod_precio);
            $("#activo").val(response.activo).change();

        }
    });

    $("#modalProducto").modal('show');
 })

$(document).on("click",".btnEliminarProducto",function (e) {
    e.preventDefault();
    fila = $(this).closest("tr");
    id = (fila).find('td:eq(0)').text();
    ru='/productos/destroy/'+ id;
    mje='Registro Eliminado'
    dt='#DTProductos'
    EliminarRegistro(ru,mje,dt);
})



// let table = new DataTable('#DTProductos');
$("#DTProductos").DataTable({
    "destroy":true,
    "ajax":'/productos/show',
    "method":'GET',
    "columns":[
        {data:'id'},
        {'defaultContent':
        "<button class='btn btn-icon btn btn-outline-warning btn-sm btnEditarProducto'><i class='bx bx-pencil'></i></button>\
        <button class='btn btn-icon btn btn-outline-danger btn-sm btnEliminarProducto'><i class='bx bx-trash'></i></button>"},
        {data:'prod_codigo'},
        {data:'prod_nombre'},
        {data:'cod'},
        {data:'prod_stock'},
        {data:'prod_precio'},
        {data:'activo'},
        ],
        order:[0],
        dom: 'Bfrtip',
        buttons: [
            'copy', 'excel', 'pdf'
        ]

})