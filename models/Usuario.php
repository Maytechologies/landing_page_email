<?php

class Usuario extends Conectar{

    /* FUNCION PARA INSERTAR REGISTRO NUEVO EN DB */
    public function insert_correo($usu_correo){
        $conectar = parent::conexion();
        parent::set_names();
         /* SENTENCIA SQL  */
        $sql = "INSERT INTO tm_usuario (usu_correo, fech_crea) VALUES (?, now())";
        $sql=$conectar->prepare($sql);
        $sql->bindValue(1, $usu_correo);
        $sql->execute();
       
            
    }

    /* FUNCION PUB PARA CONSULTAR SI EXISTE UN REGISTRO CON EL CORREO PROPUESTO */ 
    public function get_correo($usu_correo){
        $conectar = parent::conexion();
        parent::set_names();
        /* SENTENCIA SQL  */
        $Sql= "SELECT *FROM tm_usuario WHERE usu_correo=?";
        $Sql=$conectar->prepare($Sql);
        $Sql->bindValue(1, $usu_correo);
        $Sql->execute();
        return $resultado= $Sql->fetchAll(PDO::FETCH_ASSOC);
    }


    
}

?>