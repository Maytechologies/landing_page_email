<?php
require_once("../../config/conexion.php");
 if (isset($_SESSION["usu_id"])) {
?>


<!doctype html>
<html lang="es">
    <head>
        <?php  require_once("../html/MainHead.php")?>
    </head>

    <body>

        <!-- Start Sidemenu Area -->
        <?php  require_once("../html/MainMenu.php")?>
        <!-- End Sidemenu Area -->

        <!-- Start Main Content Wrapper Area -->
        <div class="main-content d-flex flex-column">

          <!-- Start NavBar End -->
          <?php  require_once("../html/Navbar.php")?>
            <!-- End NavBar End -->
            
            <!-- Breadcrumb Area -->
            <div class="breadcrumb-area">
                <h1>Dashboard</h1>

                <ol class="breadcrumb">
                    <li class="item"><a href="dashboard-analytics.html"><i class='bx bx-home-alt'></i></a></li>

                    <li class="item">Mantenimiento</li>

                    <li class="item">Usuarios</li>
                </ol>
            </div>
            <!-- End Breadcrumb Area -->


            <div class="card mb-30">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h3>Listado de Usuario</h3>
                </div>

                <div class="card-body">
                    <table id="usuario_data" class="table display responsive nowrap">
                        <thead>
                            <tr>
                                <th>Correo Electronico</th>
                                <th>Estatus</th>
                                <th>Acción</th>
                            </tr>
                        </thead>
                        <tbody>
                          
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="flex-grow-1"></div>


            <!-- Start Footer End -->
            <?php  require_once("../html/MainFooter.php")?>
            <!-- End Footer End -->

        </div>
        <!-- End Main Content Wrapper Area -->

        <!-- ---Sesion of Script--- -->
        <?php  require_once("../html/MainJs.php")?>
        <script type="text/javascript" src="mntusuario.js"></script>
        <!-- ---End Sesion of Script--- -->

        
    </body>
</html>


<?php

 }else {
    header("location:".Conectar::ruta()."../../index.php");
 }

?>