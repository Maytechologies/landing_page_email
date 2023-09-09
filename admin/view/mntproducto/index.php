<?php
require_once("../../config/conexion.php");
if (isset($_SESSION["usu_id"])) {
?>


    <!doctype html>
    <html lang="es">

    <head>
        <?php require_once("../html/MainHead.php") ?>
    </head>

    <body>

        <!-- Start Sidemenu Area -->
        <?php require_once("../html/MainMenu.php") ?>
        <!-- End Sidemenu Area -->

        <!-- Start Main Content Wrapper Area -->
        <div class="main-content d-flex flex-column">

            <!-- Start NavBar End -->
            <?php require_once("../html/Navbar.php") ?>
            <!-- End NavBar End -->

            <!-- Breadcrumb Area -->
            <div class="breadcrumb-area">
                <h1>Dashboard</h1>

                <ol class="breadcrumb">
                    <li class="item"><a href="dashboard-analytics.html"><i class='bx bx-home-alt'></i></a></li>

                    <li class="item">Mantenimiento</li>

                    <li class="item">Productos</li>
                </ol>
            </div>
            <!-- End Breadcrumb Area -->

            <!-- STAR DATATABLE JS -->
            <div class="card mb-30">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h3>Listado de Productos</h3>
                    <br>
                    <button onclick="nuevo()" class="btn btn-primary"><i class="bx bxs-duplicate"></i>Nuevo</button>
                </div>

                <div class="card-body">
                    <table id="producto_data" class="table display responsive nowrap">
                        <thead>
                            <tr>
                                <th>Nombre</th>
                                <th>Precio</th>
                                <th>Descuento</th>
                                <th>Cupon</th>
                                <th></th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                        </tbody>
                    </table>
                </div><!-- End Card Body -->
            </div>
            <!-- END DATATABLE JS -->



            <?php require_once("modal.php") ?>

            <div class="flex-grow-1"></div>

            <!-- Start Footer End -->
            <?php require_once("../html/MainFooter.php") ?>
            <!-- End Footer End -->

        </div>
        <!-- End Main Content Wrapper Area -->

        <!-- ---Sesion of Script--- -->
        <?php require_once("../html/MainJs.php") ?>
        <script type="text/javascript" src="mntproducto.js"></script>
        <!-- ---End Sesion of Script--- -->


    </body>

    </html>


<?php

} else {
    header("location:" . Conectar::ruta() . "../../index.php");
}

?>