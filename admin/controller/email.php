<?php
/* TODO:Hacemos el  requerimiento del modelo Email */
require_once("../models/Email.php"); 

/* TODO:Ejecutamos la clase Email que pertenece al modelo requerido EMAIL */
$email = new Email();

switch ($_GET["op"]) {

    case 'enviarCorreo':
        /* 1er Caso Enviar_correo */
        $email->enviar_correo(); /* TODO: ejecutamos la funcion enviar_correo del modelo Email */
        break;
    
}

?>