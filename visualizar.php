<?php
	
$conex= mysql_connect("localhost","root","") or die ("No se pudo realizar la conexion");
        mysql_select_db("ods_db",$conex) or die ("ERROR con la base de datos");
        session_start();
	$id=$_GET['id'];
	$query="SELECT nro_ordenanza FROM digesto WHERE nro_ordenanza='$id'";
	$resultado=mysql_query($query,$conex);
    $final_resultado=mysql_fetch_array($resultado);
    $nom=$final_resultado['nro_ordenanza'];
	echo $nom;
	$mi_pdf = fopen ("pdf/$nom.pdf", "r");
                                               if (!$mi_pdf) {
                                                    echo "<p>No puedo abrir el archivo para lectura</p>";
                                                   exit;
                                                }
                                                header('Content-type: application/pdf');
                                                fpassthru($mi_pdf); // Esto hace la magia
                                                fclose ($archivo);
	
?>