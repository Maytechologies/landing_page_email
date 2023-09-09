<?php

require_once("../config/conexion.php");
require_once("../models/Producto.php");
$producto = new Producto();

switch($_GET["op"]){
       /* --CUANDO LLEGUE CON PRODUCTO_ID "EDITAMOS" DE LO CONTRARIO INSERTAMOS-- */
    case "guardaryeditar":
          if(empty($_POST["prod_id"])){
             $producto->insert_producto(
                $_POST["prod_nom"],
                $_POST["prod_precion"],
                $_POST["prod_preciod"],
                $_POST["prod_url"],
                $_POST["prod_img"],
                $_POST["prod_cupon"],
                $_POST["prod_descripcion"]
             );
          }else{
            $producto->update_producto(
                $_POST["prod_id"],
                $_POST["prod_nom"],
                $_POST["prod_precion"],
                $_POST["prod_preciod"],
                $_POST["prod_url"],
                $_POST["prod_img"],
                $_POST["prod_cupon"],
                $_POST["prod_descripcion"]
            );
          }
    break;
             
       
          
          /* --DEFINIMOS CASE QUE USAREMOS PARA MOSTRAR LISTA DE PRODUCTOS-- */
    case "listar":
        $datos = $producto->get_producto();
        $data = array();
        foreach ($datos as $row) {
            $sub_array = array();
            $sub_array[] = $row["prod_nom"];
            $sub_array[] = $row["prod_precion"];
            $sub_array[] = $row["prod_preciod"];
            $sub_array[] = $row["prod_cupon"];
            $sub_array[] = '<button type="button" onClick="editar('.$row["prod_id"].')" id="'.$row["prod_id"].'" class="btn btn-outline-warning"><i class="bx bx-edit"></i></button>';
            $sub_array[] = '<button type="button" onClick="eliminar('.$row["prod_id"].')" id="'.$row["prod_id"].'" class="btn btn-outline-danger"><i class="bx bx-trash"></i></button>';
            $data[] = $sub_array;
        }                                                                                                                                                                          

             $results = array(
            "sEcho"=>1,//Informacion para el dataTable
            "iTotalRecords"=>count($datos),//Enviamos el Total registros al dataTable
            "itotalDisplayRecords"=>count($datos),//enviamos el total registro a visualizar
            "aaData"=>$data);
            echo json_encode($results);

    break; 
     


     /* --DEFINIMOS CASE QUE USAREMOS PARA ELIMINAR USUARIO SEGUN  ID-- */
     case "eliminar":
        $producto->delete_producto($_POST["prod_id"]);
     break;


     /* --DEFINIMOS CASE QUE CREARA JSON SEGUN ID-- */
    case "mostrar":
        $datos=$producto->get_producto_x_id($_POST["prod_id"]);
        if(is_array($datos)==true and count($datos)<>0){
            foreach ($datos as $row) {
                $output["prod_id"] = $row["prod_id"];
                $output["prod_nom"] = $row["prod_nom"];
                $output["prod_precion"] = $row["prod_precion"];
                $output["prod_preciod"] = $row["prod_preciod"];
                $output["prod_img"] = $row["prod_img"];
                $output["prod_cupon"] = $row["prod_cupon"];
                $output["prod_url"] = $row["prod_url"];
                $output["prod_descripcion"] = $row["prod_descripcion"];

             }

            echo json_encode($output);
        }
    break;

    }



?>