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
    <body style="background-image:url(img/login2.jpg); background-repeat: no-repeat;background-position: center; background-size: 100% " >
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
        
         <section ;="" class="full-reset" style="padding: 150px 0; padding-left: 200px; padding-right: 200px">
                <script src="Chart.js">
            </script>
            <div id="canvas-holder">
                <canvas height="500" id="chart-area" width="500">
                </canvas>
            </div>
            <script>
                var pieData = [{value: 40,color:"#0b82e7",highlight: "#0c62ab",label: "Google Chrome"},
                {
                    value: 16,
                    color: "#e3e860",
                    highlight: "#a9ad47",
                    label: "Android"
                },
                {
                    value: 11,
                    color: "#eb5d82",
                    highlight: "#b74865",
                    label: "Firefox"
                },
                {
                    value: 10,
                    color: "#5ae85a",
                    highlight: "#42a642",
                    label: "Internet Explorer"
                },
                {
                    value: 8.6,
                    color: "#e965db",
                    highlight: "#a6429b",
                    label: "Safari"
                }
            ];

    var barChartData = {
        labels : ["Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio"],
        datasets : [
            {
                fillColor : "#6b9dfa",
                strokeColor : "#ffffff",
                highlightFill: "#1864f2",
                highlightStroke: "#ffffff",
                data : [90,30,10,80,15,5,15]
            },
            {
                fillColor : "#e9e225",
                strokeColor : "#ffffff",
                highlightFill : "#ee7f49",
                highlightStroke : "#ffffff",
                data : [40,50,70,40,85,55,15]
            }
        ]

    }   
        var lineChartData = {
            labels : ["Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio"],
            datasets : [
                {
                    label: "Primera serie de datos",
                    fillColor : "rgba(220,220,220,0.2)",
                    strokeColor : "#6b9dfa",
                    pointColor : "#1e45d7",
                    pointStrokeColor : "#fff",
                    pointHighlightFill : "#fff",
                    pointHighlightStroke : "rgba(220,220,220,1)",
                    data : [90,30,10,80,15,5,15]
                },
                {
                    label: "Segunda serie de datos",
                    fillColor : "rgba(151,187,205,0.2)",
                    strokeColor : "#e9e225",
                    pointColor : "#faab12",
                    pointStrokeColor : "#fff",
                    pointHighlightFill : "#fff",
                    pointHighlightStroke : "rgba(151,187,205,1)",
                    data : [40,50,70,40,85,55,15]
                }
            ]

        }
var ctx = document.getElementById("chart-area").getContext("2d");
window.myPie = new Chart(ctx).Pie(pieData); 
window.myPie = new Chart(ctx2).Doughnut(pieData);               
window.myPie = new Chart(ctx3).Bar(barChartData, {responsive:true});
window.myPie = new Chart(ctx4).Line(lineChartData, {responsive:true});
            </script>
            </section>
    </body>
</html>
