<?php
/* Llamado a la cadena de conexion */
require_once("../config/conexion.php");
require_once("../models/Usuario.php");


/* Generamos un peticion a la Calse Usuario del Model */
$usuario = new Usuario();

    /* Opcion de solicitud de controller */
    switch ($_GET["op"]) {
        case "guardarcorreo":

           /*  Almacenamos en "datos" el array que recibimos de view por method POST  */
            $datos = $usuario->get_correo($_POST["usu_correo"]);

            /* Aplicamos una condicion, Si recibimos datos de la consulta y resulto == 0
            procedemos al nuevo registro, de lo contrario Alert email ya existe */
            if(is_array($datos)==true and count($datos)==0){

            $usuario->insert_correo($_POST["usu_correo"]);
            echo 1;

            }else {
                echo 2;
            }
          

            break;

            
        
    }

?>