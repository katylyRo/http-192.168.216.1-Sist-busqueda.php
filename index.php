<?php
$conex= mysql_connect("localhost","root","") or die ("No se pudo realizar la conexion");
        mysql_select_db("ods_db",$conex) or die ("ERROR con la base de datos");
             



       
?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta content="text/html; charset=utf-8" http-equiv="Content-Type"/>
        <style>
            body{
    background: #8999A8;
}
.navbar, .dropdown-menu{
background:rgba(0,0,0,0.50);
border: none;

}

.nav>li>a, .dropdown-menu>li>a:focus, .dropdown-menu>li>a:hover, .dropdown-menu>li>a, .dropdown-menu>li{
  border-bottom: 3px solid transparent;
}
.nav>li>a:focus, .nav>li>a:hover,.nav .open>a, .nav .open>a:focus, .nav .open>a:hover, .dropdown-menu>li>a:focus, .dropdown-menu>li>a:hover{
  border-bottom: 3px solid transparent;
  background: none;
}
.navbar a, .dropdown-menu>li>a, .dropdown-menu>li>a:focus, .dropdown-menu>li>a:hover, .navbar-toggle{
 color: #fff;
}
.dropdown-menu{
      -webkit-box-shadow: none;
    box-shadow:none;
}

.nav li:hover:nth-child(8n+1), .nav li.active:nth-child(8n+1){
  border-bottom: #C4E17F 3px solid;
}
.nav li:hover:nth-child(8n+2), .nav li.active:nth-child(8n+2){
  border-bottom: #F7FDCA 3px solid;
}
.nav li:hover:nth-child(8n+3), .nav li.active:nth-child(8n+3){
  border-bottom: #FECF71 3px solid;
}
.nav li:hover:nth-child(8n+4), .nav li.active:nth-child(8n+4){
  border-bottom: #F0776C 3px solid;
}
.nav li:hover:nth-child(8n+5), .nav li.active:nth-child(8n+5){
  border-bottom: #DB9DBE 3px solid;
}
.nav li:hover:nth-child(8n+6), .nav li.active:nth-child(8n+6){
  border-bottom: #C49CDE 3px solid;
}
.nav li:hover:nth-child(8n+7), .nav li.active:nth-child(8n+7){
  border-bottom: #669AE1 3px solid;
}
.nav li:hover:nth-child(8n+8), .nav li.active:nth-child(8n+8){
  border-bottom: #62C2E4 3px solid;
}

.navbar-toggle .icon-bar{
    color: #fff;
    background: #fff;
}
        </style>
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
    </head>
    <body style="background-image:url(img/login.jpg); background-repeat: no-repeat;background-position: center; background-size: 100% ">
        <div class="navbar-wrapper">
            <div class="container-fluid">
                <nav class="navbar navbar-fixed-top">
                    <div class="container">
                        <div class="navbar-header">
                            <button aria-controls="navbar" aria-expanded="false" class="navbar-toggle collapsed" data-target="#navbar" data-toggle="collapse" type="button">
                                <span class="sr-only">
                                    Nav
                                </span>
                                <span class="icon-bar">
                                </span>
                                <span class="icon-bar">
                                </span>
                                <span class="icon-bar">
                                </span>
                            </button>
                        </div>
                        <div class="navbar-collapse collapse" id="navbar">
                            <ul class="nav navbar-nav">
                                <li class="active">
                                    <a href="index.php">
                                        Inicio
                                    </a>
                                </li>
                                <li>
                                    <a href="busqueda.php">
                                        Búsqueda
                                    </a>
                                </li>
                                <li>
                                    <a href="estadistica.php">
                                        Estadísticas
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-toggle " href="recientes.php">
                                        Recientes
                                    </a>
                                </li>
                                <li>
                                    <a aria-expanded="false" aria-haspopup="true" class="dropdown-toggle active" data-toggle="dropdown" href="vota.php" role="button">
                                        Contáctanos
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
        <section class="full-reset" style="padding: 50px 0; padding-left: 30px; padding-right: 10px">
        </section>
    </body>
</html>
