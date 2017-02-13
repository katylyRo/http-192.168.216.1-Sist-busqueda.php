
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

ul.social-network {
    list-style: none;
    display: inline;
    margin-left:0 !important;
    padding: 0;
}
ul.social-network li {
    display: inline;
    margin: 0 5px;
}


/* footer social icons */
.social-network a.icoRss:hover {
    background-color: #F56505;
}
.social-network a.icoFacebook:hover {
    background-color:#3B5998;
}
.social-network a.icoTwitter:hover {
    background-color:#33ccff;
}
.social-network a.icoGoogle:hover {
    background-color:#BD3518;
}
.social-network a.icoVimeo:hover {
    background-color:#0590B8;
}
.social-network a.icoLinkedin:hover {
    background-color:#007bb7;
}
.social-network a.icoRss:hover i, .social-network a.icoFacebook:hover i, .social-network a.icoTwitter:hover i,
.social-network a.icoGoogle:hover i, .social-network a.icoVimeo:hover i, .social-network a.icoLinkedin:hover i {
    color:#fff;
}
a.socialIcon:hover, .socialHoverClass {
    color:#44BCDD;
}

.social-circle li a {
    display:inline-block;
    position:relative;
    margin:0 auto 0 auto;
    -moz-border-radius:50%;
    -webkit-border-radius:50%;
    border-radius:50%;
    text-align:center;
    width: 90px;
    height: 90px;
    font-size:70px;
}
.social-circle li i {
    margin:0;
    line-height:50px;
    text-align: center;
}

.social-circle li a:hover i, .triggeredHover {
    -moz-transform: rotate(360deg);
    -webkit-transform: rotate(360deg);
    -ms--transform: rotate(360deg);
    transform: rotate(360deg);
    -webkit-transition: all 0.2s;
    -moz-transition: all 0.2s;
    -o-transition: all 0.2s;
    -ms-transition: all 0.2s;
    transition: all 0.2s;
}
.social-circle i {
    color: #fff;
    -webkit-transition: all 0.8s;
    -moz-transition: all 0.8s;
    -o-transition: all 0.8s;
    -ms-transition: all 0.8s;
    transition: all 0.8s;
}

a {
 background-color: #D3D3D3;   
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
        <section class="full-reset" style="padding: 300px 0; padding-left: 200px; padding-right: 200px;">
            <!--Pulling Awesome Font -->
            <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
                <div class="col-md-12" style="background-color: rgb(230,230,230);">
                    <ul class="social-network social-circle">
                        <li>
                            <a class="icoRss" href="#" title="Rss">
                                <i class="fa fa-rss">
                                </i>
                            </a>
                        </li>
                        <li>
                            <a class="icoFacebook" href="#" title="Facebook">
                                <i class="fa fa-facebook">
                                </i>
                            </a>
                        </li>
                        <li>
                            <a class="icoTwitter" href="#" title="Twitter">
                                <i class="fa fa-twitter">
                                </i>
                            </a>
                        </li>
                        <li>
                            <a class="icoGoogle" href="#" title="Google +">
                                <i class="fa fa-google-plus">
                                </i>
                            </a>
                        </li>
                        <li>
                            <a class="icoLinkedin" href="#" title="Linkedin">
                                <i class="fa fa-linkedin">
                                </i>
                            </a>
                        </li>
                    </ul>
                </div>
            </link>
        </section>
    </body>
</html>
