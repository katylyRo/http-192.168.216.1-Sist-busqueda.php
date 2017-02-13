<?php
$conex= mysql_connect("localhost","root","") or die ("No se pudo realizar la conexion");
        mysql_select_db("ods_db",$conex) or die ("ERROR con la base de datos");
             


        $buscar=$_POST['busqueda'];
        $jQuery="SELECT * FROM digesto WHERE nro_ordenanza='$buscar' OR anio_ordenanza='$buscar' OR nro_expte='$buscar' OR letra_expte='$buscar' OR anio_expte='$buscar' OR  fecha_sancion='$buscar' OR tema LIKE '%$buscar%'  ";  
        $final_resultadoo=mysql_query($jQuery,$conex);

       
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
        <script type="text/javascript">
            function borrar() {
  tab = document.getElementById('tabla');
  for (i=tab.getElementsByTagName('input').length-1; i>=0; i--) {
    chk = tab.getElementsByTagName('input')[i];
    if (chk.checked)
      tab.removeChild(chk.parentNode.parentNode);
  }
}
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
                <div class="row">
                    <div class="col-md-12">
                        <a class="btn btn-primary btn-default" href="index.php" role="button" style="alignment-baseline: right; align-content: right;">
                            Volver
                        </a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <legend>
                            Lista de Ordenanzas
                        </legend>
                        <div class="table-responsive">
                            <table class="table table-bordred table-striped" id="mytable">
                                <thead>
                                    <th>
                                        <input id="checkall" style="text-align: center;" type="checkbox"/>
                                    </th>
                                    <th>
                                        Nro. Ordenanza
                                    </th>
                                    <th>
                                        Año
                                    </th>
                                    <th>
                                        Síntesis/Tema
                                    </th>
                                    <th>
                                        Fecha Sanción
                                    </th>
                                    <th>
                                        Categoría
                                    </th>
                                    <th>
                                        Ver
                                    </th>
                                </thead>
                                <tbody>
                                    <form>
                                        <?php while ($row = mysql_fetch_array($final_resultadoo) )   {?>
                                        <tr>
                                            <td>
                                                <input class="checkthis" type="checkbox"/>
                                            </td>
                                            <td>
                                                 <?php echo $row['nro_ordenanza'];?>
                                            </td>
                                            <td>
                                                <?php echo $row['anio_ordenanza'];?>
                                            </td>
                                            <td>
                                                <?php echo utf8_encode($row['sintesis']);?>
                                            </td>
                                            <td>
                                                <?php echo $row['fecha_sancion'];?>
                                            </td>
                                            <td>
                                                <?php echo utf8_encode($row['categoria']);?>
                                            </td>
                                            <td>
                                                <a class="btn-danger btn-default icon-file-pdf" target="_blank" href="visualizar.php?id=<?php echo $row['nro_ordenanza'];?>">
                                                    
                                                </a>
                                            </td>
                                            
                                        </tr>
                                        <?php } ?>
                                    </form>
                                </tbody>
                            </table>
                           
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </body>
</html>
