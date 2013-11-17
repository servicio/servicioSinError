<head>
    <title>Portal de Alumnos Ing. Industrial</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <link rel="stylesheet" type="text/css" href="../bootsTrap2/css/bootstrap.css"/>
    <link rel="stylesheet" type="text/css" href="../bootsTrap2/css/bootstrap-responsive.css"/>
    <script src="../bootsTrap2/js/jquery.js"></script>
    <script src="../bootsTrap2/js/bootstrap.js"></script>
    <script type="text/javascript" charset="utf-8" src="koko_edgePreload.js"></script>

    <style>
        .edgeLoad-EDGE-3614109 { visibility:hidden; }
        body{ 
            background: url(galeria/backgroundfinal.png)  center center fixed; 
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;
        }
        .cabecera{
            background: url(galeria/fondo.png) center center fixed; 
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;
            height: 40%;
            border-radius: 5px;
        }
    </style>
</head>
<header>
    <div class="container cabecera">
        <div class="">
            <div id="Stage" class="EDGE-3614109">
            </div>
        </div>
    </div>
    <div class="navbar-wrapper">
        <div class="container">
            <div class="navbar navbar-inverse">
                <div class="navbar-inner">
                    <!--                        .btn-navbar is used as the toggle for collapsed navbar content -->
                    <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </a>
                    <!--                        Be sure to leave the brand out there if you want it shown -->
                    <ul class="nav">
                        <li><a href="index.php">Inicio</a></li>
                        <li class="divider-vertical"></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Panel de usuario<b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="perfil.php">Editar perfil</a></li>
                                <li><a href="cerrarSesion.php">Cerrar sesion</a></li>
                            </ul>
                        </li>
                    </ul>
                    <!--                        Everything you want hidden at 940px or less, place within here -->
                    <div class="nav-collapse collapse">
                        <ul class="nav">
                            <li class="divider-vertical"></li>
                            <li><a href="#myModal" data-toggle="modal">Regitro de Usuario</a> </li>
                            <li class="divider-vertical"></li>
                            <li><a href="">Calificaciones</a> </li>
                            <li class="divider-vertical"></li>
                            <li><a href="cargaArchivos.php">Creditos Extra</a> </li>
                            <li class="divider-vertical"></li>
                            <li><a href="cargaMaterias.php">Creacion de grupos</a> </li>
                            <li class="divider-vertical"></li>
                            <li><a href="encuestaTutorias.php">Tutorias</a> </li>
                            <li class="divider-vertical"></li>
                            <li><a href="cuestionarioTutoria.php">Encuesta Tutoria</a> </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<?php

include './datosPersonales.php';
?>