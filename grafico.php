<?php
$conex= mysql_connect("localhost","root","") or die ("No se pudo realizar la conexion");
        mysql_select_db("ods_db",$conex) or die ("ERROR con la base de datos");
        
?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        </meta>
        <meta content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0" name="viewport">
            <title>
                Sistema Ordenanzas
            </title>
            <!-- CSS de Bootstrap -->
        </meta>
        <link href="css/bootstrap.min.css" media="screen" rel="stylesheet">
        </link>
        <link href="css/style_copia.css" media="screen" rel="stylesheet">
        </link>
        <link href="css/modalordenanza.css" media="screen" rel="stylesheet">
        </link>
        <link href="fonts/style.css" media="screen" rel="stylesheet">
        </link>
        <!-- CSS de Bootstrap -->
        <script src="js/main.js">
        </script>
        <script src="js/bootstrap.js">
        </script>
        <script src="js/jquery-3.1.1.min.js">
        </script>
        <script src="js/jquery-latest.js">
        </script>
        <!-- Librería jQuery requerida por los plugins de JavaScript -->
        <script src="http://code.jquery.com/jquery.js">
        </script>
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js">
        </script>
        <script src="http://getbootstrap.com/dist/js/bootstrap.min.js">
        </script>
        <script>
            $(document).ready(function(){
        $("#mytable #checkall").click(function () {
        if ($("#mytable #checkall").is(':checked')) {
                $("#mytable input[type=checkbox]").each(function () {
                    $(this).prop("checked", true);
                });

            } else {
                $("#mytable input[type=checkbox]").each(function () {
                    $(this).prop("checked", false);
                });
            }
        });
    
        $("[data-toggle=tooltip]").tooltip();
        });
        </script>
        <script>
            document.getElementById("mytable").reset();
        </script>
    </head>
    <body>
        <div class="navbar-lateral full-reset" style="position: fixed; z-index: 100;">
            <div class="visible-xs font-movile-menu mobile-menu-button">
            </div>
            <div class="full-reset container-menu-movile custom-scroll-containers">
                <div class="logo full-reset all-tittles">
                    <i class="visible-xs pull-left mobile-menu-button" style="line-height: 55px; cursor: pointer; padding: 0 10px; margin-left: 7px;">
                    </i>
                    Sistema Ordenanzas
                </div>
                <div class="full-reset" style="background-color:#FFFFFF; padding: 10px 0; color:#000;">
                    <figure>
                        <img alt="Ordenanza" class="img-responsive center-box mCS_img_loaded" src="img/fondo.jpg" style="width:55%;">
                        </img>
                    </figure>
                </div>
                <nav>
                    <div class="nav-lateral-list-menu">
                       
                    </div>
                </nav>
            </div>
        </div>
        <!--Contenedor pagina-->
        <div class="content-page-container full-reset custom-scroll-containers">
            <!--nav top azul-->
            <nav class="navbar-user-top full-reset" style="position: fixed;">
             
            </nav>
            <!--*******Fin nav top-->
            <!--Seccion del medio-->
            <section ;="" class="full-reset" style="padding: 120px 0; padding-left: 30px; padding-right: 10px">
                <!--inicio logueo-->
                <legend>
                    Buscar Ordenanzas
                </legend>
                <div>
                    <div class="row">
                        <form action="buscarordenanzatablas.php" method="post">
                            <div class="col-lg-12">
                                <legend>
                                    <h6>
                                        Búsqueda por palabra
                                    </h6>
                                </legend>
                                <div class="input-group">
                                    <input class="form-control" name="busqueda" placeholder="Introduce una palabra" type="text">
                                        <span class="input-group-btn">
                                            <button class="btn btn-default" type="submit">
                                                Buscar
                                            </button>
                                        </span>
                                    </input>
                                </div>
                            </div>
                        </form>
                    </div>
                    <br>
                        <form action="buscarordenanzatablas.php" method="post">
                            <legend>
                                <h6>
                                    Búsqueda por detalle
                                </h6>
                            </legend>
                            <div class="row">
                                <div class="col-lg-2">
                                    <form action="buscarordenanzatablas.php" method="post">
                                        <div class="col-lg-12">
                                            <label for="">
                                                Nro. Ordenanza
                                            </label>
                                            <div class="input-group">
                                                <input class="form-control" name="busqueda" placeholder="Introduce Nro." type="text">
                                                    <span class="input-group-btn">
                                                        <button class="btn btn-default" type="submit">
                                                            Buscar
                                                        </button>
                                                    </span>
                                                </input>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="col-lg-3">
                                    <form action="buscarordenanzatablas.php" method="post">
                                        <div class="col-lg-12">
                                            <label for="">
                                                Año Ordenanza
                                            </label>
                                            <div class="input-group">
                                                <input class="form-control" name="busqueda" placeholder="Introduce Nro." type="text">
                                                    <span class="input-group-btn">
                                                        <button class="btn btn-default" type="submit">
                                                            Buscar
                                                        </button>
                                                    </span>
                                                </input>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="col-lg-7">
                                    <form action="buscarordenanzatablas.php" method="post">
                                        <div class="col-lg-12">
                                            <label for="">
                                                Tema
                                            </label>
                                            <div class="input-group">
                                                <input class="form-control" name="busqueda" placeholder="Introduce Tema" type="text">
                                                    <span class="input-group-btn">
                                                        <button class="btn btn-default" type="submit">
                                                            Buscar
                                                        </button>
                                                    </span>
                                                </input>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </form>
                    </br>
                </div>
            </section>
        </div>
    </body>
</html>
