
function init(){

    $("#producto_form").on("submit", function(e){
        guardaryeditar(e);
    });
}

function guardaryeditar(e){
    e.preventDefault();
    var formData = new FormData($("#producto_form")[0]);
    $.ajax({
       url: "../../controller/producto.php?op=guardaryeditar",
       type: "POST",
       data: formData,
       contentType: false,
       processData: false,
       success: function(data){
        $('#modal').modal('hide');
        $('#producto_data').DataTable().ajax.reload();//RECARGAMOS EL DATATABLE.JS

        /* --MENSAJE DE REGISTRO EFECTUADO-- */

        Swal.fire({
            icon: 'success',
            title: 'Excelente',
            text: 'Registro Efectuado con Exito...!!',
            showConfirmButton: false,
            timer: 1500
          })

       }
    });
}

$(document).ready(function(){

    $('#producto_data').DataTable({
        "aProcessing": true,
        "aServerSide": true,
        dom: 'Bfrtip',
        buttons: [
            'copyHtml5',
            'excelHtml5',
            'csvHtml5',
        ],
        "ajax":{
            url:"../../controller/producto.php?op=listar",
            type:"post",
        },
        "bDestroy": true,
        "responsive": true,
        "bInfo":true,
        "iDisplayLength": 5,
        "order": [[ 0, "desc" ]],
        "language": {
            "sProcessing":     "Procesando...",
            "sLengthMenu":     "Mostrar _MENU_ registros",
            "sZeroRecords":    "No se encontraron resultados",
            "sEmptyTable":     "Ningún dato disponible en esta tabla",
            "sInfo":           "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
            "sInfoEmpty":      "Mostrando registros del 0 al 0 de un total de 0 registros",
            "sInfoFiltered":   "(filtrado de un total de _MAX_ registros)",
            "sInfoPostFix":    "",
            "sSearch":         "Buscar:",
            "sUrl":            "",
            "sInfoThousands":  ",",
            "sLoadingRecords": "Cargando...",
            "oPaginate": {
                "sFirst":    "Primero",
                "sLast":     "Último",
                "sNext":     "Siguiente",
                "sPrevious": "Anterior"
            },
            "oAria": {
                "sSortAscending":  ": Activar para ordenar la columna de manera ascendente",
                "sSortDescending": ": Activar para ordenar la columna de manera descendente"
            }
        }
    });

});

function eliminar(prod_id){
    Swal.fire({
        title: 'Eliminar?',
        text: "Esta seguro de Eliminar el Registro!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        cancelButtonText: 'No',
        confirmButtonText: 'Si'
    }).then((result) => {
        if (result.isConfirmed) {

            $.post("../../controller/producto.php?op=eliminar",{prod_id:prod_id},function(data){
                $('#producto_data').DataTable().ajax.reload();//RECARGAMOS EL DATATABLE.JS
            });

            Swal.fire( 
                'Eliminado!',
                'Registro Eliminado Correctamente.',
                'success'
            )
        }
    })

}

function editar(prod_id){
    $('#tituloModal').html("Editar Registro");
    $.post("../../controller/producto.php?op=mostrar", {prod_id:prod_id},function(data){

         var datos = JSON.parse(data);
        console.log(data);
        $('#prod_id').val(datos.prod_id);
        $('#prod_nom').val(datos.prod_nom);
        $('#prod_precion').val(datos.prod_precion);
        $('#prod_preciod').val(datos.prod_preciod);
        $('#prod_img').val(datos.prod_img);
        $('#prod_cupon').val(datos.prod_cupon);
        $('#prod_url').val(datos.prod_url);
        $('#prod_descripcion').val(datos.prod_descripcion);
        $('#modal').modal('show'); //llamamos al modal
    
     });
       
    }


function nuevo(){
   
    $('#tituloModal').html("Nuevo Registro");
    $('#prod_id').val('');
    $('#producto_form')[0].reset(); 
    $('#modal').modal('show');
}

init();

