<?php


class Producto extends Conectar{
  
    /* TODO: Function Get Producto show product active */
    public function get_producto(){
        $conectar=parent ::conexion();
        parent::set_names();
        $Sql="SELECT *FROM tm_producto WHERE est = 1";
        $Sql=$conectar->prepare($Sql);
        $Sql->execute();
        return $resultado=$Sql->fetchAll(PDO::FETCH_ASSOC);
    }
    

    /* TODO:function Update est=? of product for id */
    public function delete_producto($prod_id){
        $conectar=parent ::conexion();
        parent::set_names();

        $Sql="UPDATE tm_producto SET est=0  WHERE prod_id=?";

        $Sql=$conectar->prepare($Sql);
        $Sql->bindValue(1, $prod_id);
        $Sql->execute();
        return $resultado=$Sql->fetchAll(PDO::FETCH_ASSOC);

    }


    public function get_producto_x_id($prod_id){
        $conectar=parent ::conexion();
        parent::set_names();

        $Sql="SELECT *FROM tm_producto  WHERE prod_id =? AND est =1";

        $Sql=$conectar->prepare($Sql);
        $Sql->bindValue(1,$prod_id);
        $Sql->execute();
        return $resultado=$Sql->fetchAll(PDO::FETCH_ASSOC);
    }



    public function insert_producto($prod_nom, $prod_precion, $prod_preciod, $prod_url, $prod_img, $prod_cupon, $prod_descripcion){
        $conectar=parent ::conexion();
        parent::set_names();

        $Sql="INSERT INTO tm_producto( prod_nom, prod_precion, prod_preciod, prod_url, prod_img, prod_cupon, prod_descripcion ) 
                     VALUES(?,?,?,?,?,?,?)";

        $Sql=$conectar->prepare($Sql);
        $Sql->bindValue(1, $prod_nom);
        $Sql->bindValue(2, $prod_precion);
        $Sql->bindValue(3, $prod_preciod);
        $Sql->bindValue(4, $prod_url);
        $Sql->bindValue(5, $prod_img);
        $Sql->bindValue(6, $prod_cupon);
        $Sql->bindValue(7, $prod_descripcion);
        $Sql->execute();
        return $resultado=$Sql->fetchAll(PDO::FETCH_ASSOC); 
    }
    

    public function update_producto( $prod_id, $prod_nom, $prod_precion, $prod_preciod, $prod_url, $prod_img, $prod_cupon, $prod_descripcion){
        $conectar=parent ::conexion();
        parent::set_names();

        $Sql="UPDATE tm_producto
              SET
              prod_nom=?,
              prod_precion=?,
              prod_preciod=?,
              prod_url=?,
              prod_img=?,
              prod_cupon=?,
              prod_descripcion=?,
              fech_modi=now()
              WHERE prod_id=?";

              

                $Sql=$conectar->prepare($Sql);
                $Sql->bindValue(1, $prod_nom);
                $Sql->bindValue(2, $prod_precion);
                $Sql->bindValue(3, $prod_preciod);
                $Sql->bindValue(4, $prod_url);
                $Sql->bindValue(5, $prod_img);
                $Sql->bindValue(6, $prod_cupon);
                $Sql->bindValue(7, $prod_descripcion);
                $Sql->bindValue(8, $prod_id);
                $Sql->execute();
                return $resultado=$Sql->fetchAll(PDO::FETCH_ASSOC);
    }






}

?>
