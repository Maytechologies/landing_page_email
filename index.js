function init() {

/* cuando ejecute un submit en el elemento usuario_form */

$("#usuarios_form").on("submit", function(e){

    guardar(e); /* Ejecuta la funcion "Guardar" */

  });

    
}


/* Definimos la funcion Guardar y su Algoritmo */

function guardar(e){
    e.preventDefault(e);

    /* Alamacenamos en la variavle formData el Array optenido del id= usuario_form de nuestro formulario */
    var formData = new FormData($("#usuarios_form")[0]);

    /* Generamos el archivo Ajax y datos necesarios */
    $.ajax({
        url:"controller/usuario.php?op=guardarcorreo",
        type: "POST",
        data: formData,
        contentType:false,
        processData: false,
        success: function(data){

              /* ACCIONES DESPUES DE ENVIAR DATA */
             $("#usu_correo").val(''); // dejamos el input vacio
            $("#modalsuscribete").modal('hide');// ocultamos el modal

            if (data==1) {

              Swal.fire({
                icon: 'success',
                title: 'Muchas Gracias',
                text: 'Por Suscribirte..!',
                showConfirmButton: false,
                timer: 2500
              })
              
            }else{

              Swal.fire({
                icon: 'error',
                title: 'Registro no Efectuado',
                text: 'Correo Eléctronico ya existe',
                showConfirmButton: false,
                timer: 2500
              })


            }

            
        }
    });


    
}

init();


