<?php

class Usuario extends Conectar{

    /* FUNCION PARA INSERTAR REGISTRO NUEVO EN DB */
    public function login(){
        $conectar = parent::conexion();
        parent::set_names();



       

        if (isset($_POST["enviar"])) {

            $correo = $_POST["correo"];
            $password = $_POST["password"];

            if(empty($correo) and empty($password)){
                header("location:" . Conectar::ruta() . "index.php?m=2");
                exit();
            }else{
                $Sql="SELECT * FROM tm_usuario WHERE usu_correo=? AND usu_pass=? AND rol_id = 2 ";
                $Sql=$conectar->prepare($Sql);
                $Sql->bindValue(1, $correo);
                $Sql->bindValue(2, $password);
                $Sql->execute();
                $resultado=$Sql->fetch();

                if(is_array($resultado)==true and count($resultado)>0){
                    $_SESSION["usu_id"] = $resultado["usu_id"];
                    $_SESSION["usu_nom"] = $resultado["usu_nom"];
                    $_SESSION["usu_apep"]= $resultado["usu_apep"];
                    $_SESSION["usu_apem"]= $resultado["usu_apem"];
                    $_SESSION["usu_correo"]=$resultado["usu_correo"];

                    header("location: " . Conectar::ruta() . "view/home/");
                    exit();

                }else{
                    header("location: " . Conectar::ruta() . "index.php?m=1");
                    exit();
                }
            }
        } /* end IF */
       
            
    }/* End Function */

    
    /* --FUNCION PARA OBTENER EL LISTADO DE USUARIOS DE DB-- */

    public function get_usuario(){
        $conectar=parent::conexion();
        parent::set_names();
        $Sql="SELECT *FROM tm_usuario WHERE est = 1";
        $Sql=$conectar->prepare($Sql);
        $Sql->execute();
        return $resultado=$Sql->fetchAll(PDO::FETCH_ASSOC);
    }

    /* --FUNCION PUBLICA CON LA QUE ACTUALIZAREMOS EL CAMPO EST DE TABLA tm_usuario-- */
    public function delete_usuario($usu_id){
       
        $conectar=parent::conexion();
        parent::set_names();
        $Sql="UPDATE tm_usuario SET est= 0 WHERE usu_id =? AND est=1";
        $Sql=$conectar->prepare($Sql);
        $Sql->bindValue(1, $usu_id);
        $Sql->execute();
        return $resultado=$Sql->fetchAll(PDO::FETCH_ASSOC);
    }





}

?>