<?php
$conex= mysql_connect("localhost","root","") or die ("No se pudo realizar la conexion");
        mysql_select_db("ods_db",$conex) or die ("ERROR con la base de datos");
        session_start();
    $id=$_GET['id'];
    $query="SELECT nro_ordenanza FROM digesto WHERE nro_ordenanza='$id'";
    $resultado=mysql_query($query,$conex);
    $final_resultado=mysql_fetch_array($resultado);
    $nom=$final_resultado['nro_ordenanza'];


    $query1="SELECT anio_ordenanza FROM digesto WHERE nro_ordenanza='$id'";
    $resultado1=mysql_query($query1,$conex);
    $final_resultado1=mysql_fetch_array($resultado1);
    $nom1=$final_resultado1['anio_ordenanza'];


    $query2="SELECT nro_expte FROM digesto WHERE nro_ordenanza='$id'";
    $resultado2=mysql_query($query2,$conex);
    $final_resultado2=mysql_fetch_array($resultado2);
    $nom2=$final_resultado2['nro_expte'];


    $query3="SELECT letra_expte FROM digesto WHERE nro_ordenanza='$id'";
    $resultado3=mysql_query($query3,$conex);
    $final_resultado3=mysql_fetch_array($resultado3);
    $nom3=$final_resultado3['letra_expte'];


    $query4="SELECT anio_expte FROM digesto WHERE nro_ordenanza='$id'";
    $resultado4=mysql_query($query4,$conex);
    $final_resultado4=mysql_fetch_array($resultado4);
    $nom4=$final_resultado4['anio_expte'];


    $query5="SELECT fecha_sancion FROM digesto WHERE nro_ordenanza='$id'";
    $resultado5=mysql_query($query5,$conex);
    $final_resultado5=mysql_fetch_array($resultado5);
    $nom5=$final_resultado5['fecha_sancion'];

    $query6="SELECT categoria FROM digesto WHERE nro_ordenanza='$id'";
    $resultado6=mysql_query($query6,$conex);
    $final_resultado6=mysql_fetch_array($resultado6);
    $nom6=$final_resultado6['categoria'];

    $query7="SELECT codAA FROM digesto WHERE nro_ordenanza='$id'";
    $resultado7=mysql_query($query7,$conex);
    $final_resultado7=mysql_fetch_array($resultado7);
    $nom7=$final_resultado7['codAA'];

    $query8="SELECT cuil FROM digesto WHERE nro_ordenanza='$id'";
    $resultado8=mysql_query($query8,$conex);
    $final_resultado8=mysql_fetch_array($resultado8);
    $nom8=$final_resultado8['cuil'];

    $query9="SELECT nro_expteM FROM digesto WHERE nro_ordenanza='$id'";
    $resultado9=mysql_query($query9,$conex);
    $final_resultado9=mysql_fetch_array($resultado9);
    $nom9=$final_resultado9['nro_expteM'];

    $query10="SELECT anio_expteM FROM digesto WHERE nro_ordenanza='$id'";
    $resultado10=mysql_query($query10,$conex);
    $final_resultado10=mysql_fetch_array($resultado10);
    $nom10=$final_resultado10['anio_expteM'];

    $query11="SELECT fecha_promulgacion FROM digesto WHERE nro_ordenanza='$id'";
    $resultado11=mysql_query($query11,$conex);
    $final_resultado11=mysql_fetch_array($resultado11);
    $nom11=$final_resultado11['fecha_promulgacion'];

    $query12="SELECT nro_decreto FROM digesto WHERE nro_ordenanza='$id'";
    $resultado12=mysql_query($query12,$conex);
    $final_resultado12=mysql_fetch_array($resultado12);
    $nom12=$final_resultado12['nro_decreto'];

    $query13="SELECT aprobado FROM digesto WHERE nro_ordenanza='$id'";
    $resultado13=mysql_query($query13,$conex);
    $final_resultado13=mysql_fetch_array($resultado13);
    $nom13=$final_resultado13['aprobado'];

    $query14="SELECT fecha_decreto FROM digesto WHERE nro_ordenanza='$id'";
    $resultado14=mysql_query($query14,$conex);
    $final_resultado14=mysql_fetch_array($resultado14);
    $nom14=$final_resultado14['fecha_decreto'];
                    
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
    <body style="background-image:url(img/login2.jpg); background-repeat: no-repeat;background-position: center; background-size: 100% ">
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
                                    <a href="nuevo.php">
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
                                    <a aria-expanded="false" aria-haspopup="true" class="dropdown-toggle " data-toggle="dropdown" href="recientes.php" role="button">
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
        <section class="full-reset" style="padding: 100px 0; padding-left: 350px; padding-right: 350px">
            <div class="row">
                <div class="col-lg-8">
                    <a class="btn btn-primary btn-default btn-block" href="busqueda.php" role="button" style="position: absolute; left:24%; top:70%;">
                        Volver a Búsqueda
                    </a>
                </div>
            </div>
            <br>
                <form>
                    <div class="col-lg-12">
                        <legend style="text-align: center; color: #000673;">
                            <h2>
                                Ficha de la Ordenanza N°
                                <?php echo $nom; ?>
                            </h2>
                        </legend>
                        <div class="form-group">
                            <div class="col-lg-12">
                                <label class="col-lg-2">
                                    <h5>
                                        Nro. Expte.
                                    </h5>
                                </label>
                                <div class="col-lg-3">
                                    <input class="material-login-control" name="nro" readonly="”readonly”" required="" type="text" value="<?php echo $nom2.' - '.$nom3.' - '.$nom4; ?>">
                                        <span class="highlight-login">
                                        </span>
                                        <span class="bar-login">
                                        </span>
                                    </input>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <label class="col-lg-3">
                                    <h5>
                                        Fecha de Sanción
                                    </h5>
                                </label>
                                <div class="col-lg-3">
                                    <input class="material-login-control" maxlength="4" name="anioexpte" readonly="”readonly”" required="" type="text" value="<?php echo $nom5; ?>">
                                        <span class="highlight-login">
                                        </span>
                                        <span class="bar-login">
                                        </span>
                                    </input>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <label class="col-lg-2">
                                    <h5>
                                        Categoria
                                    </h5>
                                </label>
                                <div class="col-lg-4">
                                    <input class="material-login-control" maxlength="15" name="categoria" onkeyup="this.value=this.value.toUpperCase();" readonly="”readonly”" required="" type="text" value="<?php echo utf8_encode( $nom6); ?>">
                                        <span class="highlight-login">
                                        </span>
                                        <span class="bar-login">
                                        </span>
                                    </input>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <label class="col-lg-3">
                                    <h5>
                                        Área de Aplicación
                                    </h5>
                                </label>
                                <div class="col-lg-4">
                                    <input class="material-login-control" maxlength="4" name="anioexpte" readonly="”readonly”" required="" type="text" value="<?php echo $nom7; ?>">
                                        <span class="highlight-login">
                                        </span>
                                        <span class="bar-login">
                                        </span>
                                    </input>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <label class="col-lg-4">
                                    <h5>
                                        Autores del Proyecto
                                    </h5>
                                </label>
                                <div class="col-lg-4">
                                    <input class="material-login-control" maxlength="4" name="anioexpte" readonly="”readonly”" required="" type="text" value="<?php echo $nom8; ?>">
                                        <span class="highlight-login">
                                        </span>
                                        <span class="bar-login">
                                        </span>
                                    </input>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <label class="col-lg-4">
                                    <h5>
                                        Nombre del Firmante
                                    </h5>
                                </label>
                                <div class="col-lg-5">
                                    <input class="material-login-control" maxlength="4" name="anioexpte" readonly="”readonly”" required="" type="text" value="LISANDRO AGUIAR">
                                        <span class="highlight-login">
                                        </span>
                                        <span class="bar-login">
                                        </span>
                                    </input>
                                </div>
                            </div>
                            <legend style="text-align: right; color: #000673;">
                                <h4>
                                    Datos de la Ordenanza Municipal
                                </h4>
                            </legend>
                            <div class="col-lg-12">
                                <label class="col-lg-3">
                                    <h5>
                                        Nro. Expte.
                                    </h5>
                                </label>
                                <div class="col-lg-3">
                                    <input class="material-login-control" name="nro" readonly="”readonly”" required="" type="text" value="<?php echo $nom9.' - '.$nom10; ?>">
                                        <span class="highlight-login">
                                        </span>
                                        <span class="bar-login">
                                        </span>
                                    </input>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <label class="col-lg-4">
                                    <h5>
                                        Fecha de Promulgación
                                    </h5>
                                </label>
                                <div class="col-lg-4">
                                    <input class="material-login-control" maxlength="4" name="anioexpte" readonly="”readonly”" required="" type="text" value="<?php echo $nom11; ?>">
                                        <span class="highlight-login">
                                        </span>
                                        <span class="bar-login">
                                        </span>
                                    </input>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <label class="col-lg-3">
                                    <h5>
                                        Nro. Decreto
                                    </h5>
                                </label>
                                <div class="col-lg-4">
                                    <input class="material-login-control" name="nrodecreto" readonly="”readonly”" required="" type="text" value="<?php echo $nom12; ?>">
                                        <span class="highlight-login">
                                        </span>
                                        <span class="bar-login">
                                        </span>
                                    </input>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </br>
        </section>
    </body>
</html>
