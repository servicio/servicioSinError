<?php
session_start();
include './plantillaEncabezado.php';
include './ConsultasOrganigrama.php';
?>
<!DOCTYPE html>


<html>
    <head><meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
        <!--<link rel="stylesheet" href="example/css/bootstrap.min.css"/>-->
        <link rel="stylesheet" href="example/css/jquery.jOrgChart.css"/>
        <link rel="stylesheet" href="example/css/custom.css"/>
        <link href="example/css/prettify.css" type="text/css" rel="stylesheet" />
        <script type="text/javascript" src="example/prettify.js"></script>
        <!-- jQuery includes -->
        <!--<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>-->
        <!--<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.16/jquery-ui.min.js"></script>-->

        <script src="example/jquery.jOrgChart.js"></script>

        <script>
            jQuery(document).ready(function() {
                $("#org").jOrgChart({
                    chartElement: '#chart',
                    dragAndDrop: true
                });
            });
        </script>
    </head>
    <div class="container">
        <center>
            <div    class="span12"  style="margin: auto; background-color: white; margin-top: -20px">
                
                <body onload="prettyPrint();">
                    <div style="width: 800px">
                        <ul id="org" style="display:none">
                            <li id="idjOrgChart">
                                Reticula del Alumno:
                                <br>
                                E09080264
                                <ul>
                                    <?php
                                    for ($x = 0; $x < 6; $x++) {
                                        ?>
                                        <li >
                                            <div style=" height: 90px ; background-color: <?php echo $materiasColores[$x]; ?>">
                                                <?php
                                                echo "<strong style='color: black'>" . $materias[$x] . "</strong>";
                                                echo"<br>";
                                                echo"<strong style='color: black'>" . $creditos1[$x] . "</strong>";
                                                echo"<br>";
                                                echo"<strong style='color: black'>" . $tiempos1[$x] . "</strong>";
                                                echo"<br>";
                                                echo "<strong style='color: black'>" . $infoMaterias[$x] . "</strong>";
                                                echo"<br>";
                                                echo "<strong style='color: black'>" . $repeticion[$x] . "</strong>";
                                                $x++
                                                ?>
                                            </div>
                                            <ul>
                                                <li>
                                                    <div style=" height: 90px ; background-color: <?php echo $materiasColores[$x]; ?>">
                                                        <?php
                                                        echo "<strong style='color: black'>" . $materias[$x] . "</strong>";
                                                        echo"<br>";
                                                        echo"<strong style='color: black'>" . $creditos1[$x] . "</strong>";
                                                        echo"<br>";
                                                        echo"<strong style='color: black'>" . $tiempos1[$x] . "</strong>";
                                                        echo"<br>";
                                                        echo "<strong style='color: black'>" . $infoMaterias[$x] . "</strong>";
                                                        echo"<br>";
                                                        echo "<strong style='color: black'>" . $repeticion[$x] . "</strong>";
                                                        $x++;
                                                        ?>
                                                    </div>
                                                    <ul>
                                                        <li>
                                                            <div style=" height: 90px ; background-color: <?php echo $materiasColores[$x]; ?>">
                                                                <?php
                                                                echo "<strong style='color: black'>" . $materias[$x] . "</strong>";
                                                                echo"<br>";
                                                                echo"<strong style='color: black'>" . $creditos1[$x] . "</strong>";
                                                                echo"<br>";
                                                                echo"<strong style='color: black'>" . $tiempos1[$x] . "</strong>";
                                                                echo"<br>";
                                                                echo "<strong style='color: black'>" . $infoMaterias[$x] . "</strong>";
                                                                echo"<br>";
                                                                echo "<strong style='color: black'>" . $repeticion[$x] . "</strong>";
                                                                $x++;
                                                                ?>
                                                            </div>
                                                            <ul>
                                                                <li>
                                                                    <div style=" height: 90px ; background-color: <?php echo $materiasColores[$x]; ?>">
                                                                        <?php
                                                                        echo "<strong style='color: black'>" . $materias[$x] . "</strong>";
                                                                        echo"<br>";
                                                                        echo"<strong style='color: black'>" . $creditos1[$x] . "</strong>";
                                                                        echo"<br>";
                                                                        echo"<strong style='color: black'>" . $tiempos1[$x] . "</strong>";
                                                                        echo"<br>";
                                                                        echo "<strong style='color: black'>" . $infoMaterias[$x] . "</strong>";
                                                                        echo"<br>";
                                                                        echo "<strong style='color: black'>" . $repeticion[$x] . "</strong>";
                                                                        $x++;
                                                                        ?>
                                                                    </div>
                                                                    <ul>
                                                                        <li>
                                                                            <div style=" height: 90px ; background-color: <?php echo $materiasColores[$x]; ?>">
                                                                                <?php
                                                                                echo "<strong style='color: black'>" . $materias[$x] . "</strong>";
                                                                                echo"<br>";
                                                                                echo"<strong style='color: black'>" . $creditos1[$x] . "</strong>";
                                                                                echo"<br>";
                                                                                echo"<strong style='color: black'>" . $tiempos1[$x] . "</strong>";
                                                                                echo"<br>";
                                                                                echo "<strong style='color: black'>" . $infoMaterias[$x] . "</strong>";
                                                                                echo"<br>";
                                                                                echo "<strong style='color: black'>" . $repeticion[$x] . "</strong>";
                                                                                $x++;
                                                                                ?>
                                                                            </div>
                                                                            <ul>
                                                                                <li>
                                                                                    <div style=" height:90px; background-color: <?php echo $materiasColores[$x]; ?>">
                                                                                        <?php
                                                                                        echo "<strong style='color: black'>" . $materias[$x] . "</strong>";
                                                                                        echo"<br>";
                                                                                        echo"<strong style='color: black'>" . $creditos1[$x] . "</strong>";
                                                                                        echo"<br>";
                                                                                        echo"<strong style='color: black'>" . $tiempos1[$x] . "</strong>";
                                                                                        echo"<br>";
                                                                                        echo "<strong style='color: black'>" . $infoMaterias[$x] . "</strong>";
                                                                                        echo"<br>";
                                                                                        echo "<strong style='color: black'>" . $repeticion[$x] . "</strong>";
                                                                                        $x++;
                                                                                        ?>
                                                                                    </div>
                                                                                </li>
                                                                            </ul>
                                                                        </li>
                                                                    </ul>
                                                                </li>
                                                            </ul>

                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul> 
                                            <?php
                                            break;
                                        }
                                        ?>
                                    </li>
                                    <?php
                                    for ($x = 0; $x < 7; $x++) {
                                        ?>
                                        <li >
                                            <div style=" height: 90px ; background-color: <?php echo $materiasColores2[$x]; ?>">
                                                <?php
                                                echo "<strong style='color: black'>" . $materias2[$x] . "</strong>";
                                                echo"<br>";
                                                echo"<strong style='color: black'>" . $creditos2[$x] . "</strong>";
                                                echo"<br>";
                                                echo"<strong style='color: black'>" . $tiempos2[$x] . "</strong>";
                                                echo"<br>";
                                                echo "<strong style='color: black'>" . $infoMaterias2[$x] . "</strong>";
                                                echo"<br>";
                                                echo "<strong style='color: black'>" . $repeticion2[$x] . "</strong>";
                                                $x++
                                                ?>
                                            </div>
                                            <ul>
                                                <li>
                                                    <div style=" height: 90px ; background-color: <?php echo $materiasColores2[$x]; ?>">
                                                        <?php
                                                        echo "<strong style='color: black'>" . $materias2[$x] . "</strong>";
                                                        echo"<br>";
                                                        echo"<strong style='color: black'>" . $creditos2[$x] . "</strong>";
                                                        echo"<br>";
                                                        echo"<strong style='color: black'>" . $tiempos2[$x] . "</strong>";
                                                        echo"<br>";
                                                        echo "<strong style='color: black'>" . $infoMaterias2[$x] . "</strong>";
                                                        echo"<br>";
                                                        echo "<strong style='color: black'>" . $repeticion2[$x] . "</strong>";
                                                        $x++;
                                                        ?>
                                                    </div>
                                                    <ul>
                                                        <li>
                                                            <div style=" height: 90px ; background-color: <?php echo $materiasColores2[$x]; ?>">
                                                                <?php
                                                                echo "<strong style='color: black'>" . $materias2[$x] . "</strong>";
                                                                echo"<br>";
                                                                echo"<strong style='color: black'>" . $creditos2[$x] . "</strong>";
                                                                echo"<br>";
                                                                echo"<strong style='color: black'>" . $tiempos2[$x] . "</strong>";
                                                                echo"<br>";
                                                                echo "<strong style='color: black'>" . $infoMaterias2[$x] . "</strong>";
                                                                echo"<br>";
                                                                echo "<strong style='color: black'>" . $repeticion2[$x] . "</strong>";
                                                                $x++;
                                                                ?>
                                                            </div>
                                                            <ul>
                                                                <li>
                                                                    <div style=" height: 90px ; background-color: <?php echo $materiasColores2[$x]; ?>">
                                                                        <?php
                                                                        echo "<strong style='color: black'>" . $materias2[$x] . "</strong>";
                                                                        echo"<br>";
                                                                        echo"<strong style='color: black'>" . $creditos2[$x] . "</strong>";
                                                                        echo"<br>";
                                                                        echo"<strong style='color: black'>" . $tiempos2[$x] . "</strong>";
                                                                        echo"<br>";
                                                                        echo "<strong style='color: black'>" . $infoMaterias2[$x] . "</strong>";
                                                                        echo"<br>";
                                                                        echo "<strong style='color: black'>" . $repeticion2[$x] . "</strong>";
                                                                        $x++;
                                                                        ?>
                                                                    </div>
                                                                    <ul>
                                                                        <li>
                                                                            <div style=" height: 90px ; background-color: <?php echo $materiasColores2[$x]; ?>">
                                                                                <?php
                                                                                echo "<strong style='color: black'>" . $materias2[$x] . "</strong>";
                                                                                echo"<br>";
                                                                                echo"<strong style='color: black'>" . $creditos2[$x] . "</strong>";
                                                                                echo"<br>";
                                                                                echo"<strong style='color: black'>" . $tiempos2[$x] . "</strong>";
                                                                                echo"<br>";
                                                                                echo "<strong style='color: black'>" . $infoMaterias2[$x] . "</strong>";
                                                                                echo"<br>";
                                                                                echo "<strong style='color: black'>" . $repeticion2[$x] . "</strong>";
                                                                                $x++;
                                                                                ?>
                                                                            </div>
                                                                            <ul>
                                                                                <li>
                                                                                    <div style=" height: 90px ; background-color: <?php echo $materiasColores2[$x]; ?>">
                                                                                        <?php
                                                                                        echo "<strong style='color: black'>" . $materias2[$x] . "</strong>";
                                                                                        echo"<br>";
                                                                                        echo"<strong style='color: black'>" . $creditos2[$x] . "</strong>";
                                                                                        echo"<br>";
                                                                                        echo"<strong style='color: black'>" . $tiempos2[$x] . "</strong>";
                                                                                        echo"<br>";
                                                                                        echo "<strong style='color: black'>" . $infoMaterias2[$x] . "</strong>";
                                                                                        echo"<br>";
                                                                                        echo "<strong style='color: black'>" . $repeticion2[$x] . "</strong>";
                                                                                        $x++;
                                                                                        ?>
                                                                                    </div>
                                                                                    <ul>
                                                                                        <li>
                                                                                            <div style=" height: 90px ; background-color: <?php echo $materiasColores2[$x]; ?>">
                                                                                                <?php
                                                                                                echo "<strong style='color: black'>" . $materias2[$x] . "</strong>";
                                                                                                echo"<br>";
                                                                                                echo"<strong style='color: black'>" . $creditos2[$x] . "</strong>";
                                                                                                echo"<br>";
                                                                                                echo"<strong style='color: black'>" . $tiempos2[$x] . "</strong>";
                                                                                                echo"<br>";
                                                                                                echo "<strong style='color: black'>" . $infoMaterias2[$x] . "</strong>";
                                                                                                echo"<br>";
                                                                                                echo "<strong style='color: black'>" . $repeticion2[$x] . "</strong>";
                                                                                                $x++;
                                                                                                ?>
                                                                                            </div>
                                                                                        </li>
                                                                                    </ul>
                                                                                </li>

                                                                            </ul>
                                                                        </li>
                                                                    </ul>
                                                                </li>
                                                            </ul>

                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                        <?php
                                        break;
                                    }
                                    ?>
                                    <!----------Apartir de aqui se pega------->
                                    <?php
                                    for ($x = 0; $x < 6; $x++) {
                                        ?>
                                        <li >
                                            <div style=" height: 90px ; background-color: <?php echo $materiasColores3[$x]; ?>">
                                                <?php
                                                echo "<strong style='color: black'>" . $materias3[$x] . "</strong>";
                                                echo"<br>";
                                                echo"<strong style='color: black'>" . $creditos3[$x] . "</strong>";
                                                echo"<br>";
                                                echo"<strong style='color: black'>" . $tiempos3[$x] . "</strong>";
                                                echo"<br>";
                                                echo "<strong style='color: black'>" . $infoMaterias3[$x] . "</strong>";
                                                echo"<br>";
                                                echo "<strong style='color: black'>" . $repeticion3[$x] . "</strong>";
                                                $x++
                                                ?>
                                            </div>
                                            <ul>
                                                <li>
                                                    <div style=" height: 90px ; background-color: <?php echo $materiasColores3[$x]; ?>">
                                                        <?php
                                                        echo "<strong style='color: black'>" . $materias3[$x] . "</strong>";
                                                        echo"<br>";
                                                        echo"<strong style='color: black'>" . $creditos3[$x] . "</strong>";
                                                        echo"<br>";
                                                        echo"<strong style='color: black'>" . $tiempos3[$x] . "</strong>";
                                                        echo"<br>";
                                                        echo "<strong style='color: black'>" . $infoMaterias3[$x] . "</strong>";
                                                        echo"<br>";
                                                        echo "<strong style='color: black'>" . $repeticion3[$x] . "</strong>";
                                                        $x++;
                                                        ?>
                                                    </div>
                                                    <ul>
                                                        <li>
                                                            <div style=" height: 90px ; background-color: <?php echo $materiasColores3[$x]; ?>">
                                                                <?php
                                                                echo "<strong style='color: black'>" . $materias3[$x] . "</strong>";
                                                                echo"<br>";
                                                                echo"<strong style='color: black'>" . $creditos3[$x] . "</strong>";
                                                                echo"<br>";
                                                                echo"<strong style='color: black'>" . $tiempos3[$x] . "</strong>";
                                                                echo"<br>";
                                                                echo "<strong style='color: black'>" . $infoMaterias3[$x] . "</strong>";
                                                                echo"<br>";
                                                                echo "<strong style='color: black'>" . $repeticion3[$x] . "</strong>";
                                                                $x++;
                                                                ?>
                                                            </div>
                                                            <ul>
                                                                <li>
                                                                    <div style=" height: 90px ; background-color: <?php echo $materiasColores3[$x]; ?>">
                                                                        <?php
                                                                        echo "<strong style='color: black'>" . $materias3[$x] . "</strong>";
                                                                        echo"<br>";
                                                                        echo"<strong style='color: black'>" . $creditos3[$x] . "</strong>";
                                                                        echo"<br>";
                                                                        echo"<strong style='color: black'>" . $tiempos3[$x] . "</strong>";
                                                                        echo"<br>";
                                                                        echo "<strong style='color: black'>" . $infoMaterias3[$x] . "</strong>";
                                                                        echo"<br>";
                                                                        echo "<strong style='color: black'>" . $repeticion3[$x] . "</strong>";
                                                                        $x++;
                                                                        ?>
                                                                    </div>
                                                                    <ul>
                                                                        <li>
                                                                            <div style=" height: 90px ; background-color: <?php echo $materiasColores3[$x]; ?>">
                                                                                <?php
                                                                                echo "<strong style='color: black'>" . $materias3[$x] . "</strong>";
                                                                                echo"<br>";
                                                                                echo"<strong style='color: black'>" . $creditos3[$x] . "</strong>";
                                                                                echo"<br>";
                                                                                echo"<strong style='color: black'>" . $tiempos3[$x] . "</strong>";
                                                                                echo"<br>";
                                                                                echo "<strong style='color: black'>" . $infoMaterias3[$x] . "</strong>";
                                                                                echo"<br>";
                                                                                echo "<strong style='color: black'>" . $repeticion3[$x] . "</strong>";
                                                                                $x++;
                                                                                ?>
                                                                            </div>
                                                                            <ul>
                                                                                <li>
                                                                                    <div style=" height: 90px ; background-color: <?php echo $materiasColores3[$x]; ?>">
                                                                                        <?php
                                                                                        echo "<strong style='color: black'>" . $materias3[$x] . "</strong>";
                                                                                        echo"<br>";
                                                                                        echo"<strong style='color: black'>" . $creditos3[$x] . "</strong>";
                                                                                        echo"<br>";
                                                                                        echo"<strong style='color: black'>" . $tiempos3[$x] . "</strong>";
                                                                                        echo"<br>";
                                                                                        echo "<strong style='color: black'>" . $infoMaterias3[$x] . "</strong>";
                                                                                        echo"<br>";
                                                                                        echo "<strong style='color: black'>" . $repeticion3[$x] . "</strong>";
                                                                                        $x++;
                                                                                        ?>
                                                                                    </div>
                                                                                </li>

                                                                            </ul>
                                                                        </li>
                                                                    </ul>
                                                                </li>
                                                            </ul>

                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                        <?php
                                        break;
                                    }
                                    ?>
                                    <!-----------------------------------------4Semestre--------------------------------->   
                                    <?php
                                    for ($x = 0; $x < 7; $x++) {
                                        ?>
                                        <li >
                                            <div style=" height: 90px ; background-color: <?php echo $materiasColores4[$x]; ?>">
                                                <?php
                                                echo "<strong style='color: black'>" . $materias4[$x] . "</strong>";
                                                echo"<br>";
                                                echo"<strong style='color: black'>" . $creditos4[$x] . "</strong>";
                                                echo"<br>";
                                                echo"<strong style='color: black'>" . $tiempos4[$x] . "</strong>";
                                                echo"<br>";
                                                echo "<strong style='color: black'>" . $infoMaterias4[$x] . "</strong>";
                                                echo"<br>";
                                                echo "<strong style='color: black'>" . $repeticion4[$x] . "</strong>";
                                                $x++
                                                ?>
                                            </div>
                                            <ul>
                                                <li>
                                                    <div style=" height: 90px ; background-color: <?php echo $materiasColores4[$x]; ?>">
                                                        <?php
                                                        echo "<strong style='color: black'>" . $materias4[$x] . "</strong>";
                                                        echo"<br>";
                                                        echo"<strong style='color: black'>" . $creditos4[$x] . "</strong>";
                                                        echo"<br>";
                                                        echo"<strong style='color: black'>" . $tiempos4[$x] . "</strong>";
                                                        echo"<br>";
                                                        echo "<strong style='color: black'>" . $infoMaterias4[$x] . "</strong>";
                                                        echo"<br>";
                                                        echo "<strong style='color: black'>" . $repeticion4[$x] . "</strong>";
                                                        $x++;
                                                        ?>
                                                    </div>
                                                    <ul>
                                                        <li>
                                                            <div style=" height: 90px ; background-color: <?php echo $materiasColores4[$x]; ?>">
                                                                <?php
                                                                echo "<strong style='color: black'>" . $materias4[$x] . "</strong>";
                                                                echo"<br>";
                                                                echo"<strong style='color: black'>" . $creditos4[$x] . "</strong>";
                                                                echo"<br>";
                                                                echo"<strong style='color: black'>" . $tiempos4[$x] . "</strong>";
                                                                echo"<br>";
                                                                echo "<strong style='color: black'>" . $infoMaterias4[$x] . "</strong>";
                                                                echo"<br>";
                                                                echo "<strong style='color: black'>" . $repeticion4[$x] . "</strong>";
                                                                $x++;
                                                                ?>
                                                            </div>
                                                            <ul>
                                                                <li>
                                                                    <div style=" height: 90px ; background-color: <?php echo $materiasColores4[$x]; ?>">
                                                                        <?php
                                                                        echo "<strong style='color: black'>" . $materias4[$x] . "</strong>";
                                                                        echo"<br>";
                                                                        echo"<strong style='color: black'>" . $creditos4[$x] . "</strong>";
                                                                        echo"<br>";
                                                                        echo"<strong style='color: black'>" . $tiempos4[$x] . "</strong>";
                                                                        echo"<br>";
                                                                        echo "<strong style='color: black'>" . $infoMaterias4[$x] . "</strong>";
                                                                        echo"<br>";
                                                                        echo "<strong style='color: black'>" . $repeticion4[$x] . "</strong>";
                                                                        $x++;
                                                                        ?>
                                                                    </div>
                                                                    <ul>
                                                                        <li>
                                                                            <div style=" height: 90px ; background-color: <?php echo $materiasColores4[$x]; ?>">
                                                                                <?php
                                                                                echo "<strong style='color: black'>" . $materias4[$x] . "</strong>";
                                                                                echo"<br>";
                                                                                echo"<strong style='color: black'>" . $creditos4[$x] . "</strong>";
                                                                                echo"<br>";
                                                                                echo"<strong style='color: black'>" . $tiempos4[$x] . "</strong>";
                                                                                echo"<br>";
                                                                                echo "<strong style='color: black'>" . $infoMaterias4[$x] . "</strong>";
                                                                                echo"<br>";
                                                                                echo "<strong style='color: black'>" . $repeticion4[$x] . "</strong>";
                                                                                $x++;
                                                                                ?>
                                                                            </div>
                                                                            <ul>
                                                                                <li>
                                                                                    <div style=" height: 90px ; background-color: <?php echo $materiasColores4[$x]; ?>">
                                                                                        <?php
                                                                                        echo "<strong style='color: black'>" . $materias4[$x] . "</strong>";
                                                                                        echo"<br>";
                                                                                        echo"<strong style='color: black'>" . $creditos4[$x] . "</strong>";
                                                                                        echo"<br>";
                                                                                        echo"<strong style='color: black'>" . $tiempos4[$x] . "</strong>";
                                                                                        echo"<br>";
                                                                                        echo "<strong style='color: black'>" . $infoMaterias4[$x] . "</strong>";
                                                                                        echo"<br>";
                                                                                        echo "<strong style='color: black'>" . $repeticion4[$x] . "</strong>";
                                                                                        $x++;
                                                                                        ?>
                                                                                    </div>

                                                                                    <ul>
                                                                                        <li>
                                                                                            <div style=" height: 90px ; background-color: <?php echo $materiasColores4[$x]; ?>">
                                                                                                <?php
                                                                                                echo "<strong style='color: black'>" . $materias4[$x] . "</strong>";
                                                                                                echo"<br>";
                                                                                                echo"<strong style='color: black'>" . $creditos4[$x] . "</strong>";
                                                                                                echo"<br>";
                                                                                                echo"<strong style='color: black'>" . $tiempos4[$x] . "</strong>";
                                                                                                echo"<br>";
                                                                                                echo "<strong style='color: black'>" . $infoMaterias4[$x] . "</strong>";
                                                                                                echo"<br>";
                                                                                                echo "<strong style='color: black'>" . $repeticion4[$x] . "</strong>";
                                                                                                $x++;
                                                                                                ?>
                                                                                            </div>
                                                                                        </li>
                                                                                    </ul>
                                                                                </li>

                                                                            </ul>
                                                                        </li>
                                                                    </ul>
                                                                </li>
                                                            </ul>

                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                        <?php
                                        break;
                                    }
                                    ?>
                                    <!------------------------------------------------siguienteCodigo------------------------->
                                    <?php
                                    for ($x = 0; $x < 7; $x++) {
                                        ?>
                                        <li >
                                            <div style=" height: 90px ; background-color: <?php echo $materiasColores5[$x]; ?>">
                                                <?php
                                                echo "<strong style='color: black'>" . $materias5[$x] . "</strong>";
                                                echo"<br>";
                                                echo"<strong style='color: black'>" . $creditos5[$x] . "</strong>";
                                                echo"<br>";
                                                echo"<strong style='color: black'>" . $tiempos5[$x] . "</strong>";
                                                echo"<br>";
                                                echo "<strong style='color: black'>" . $infoMaterias5[$x] . "</strong>";
                                                echo"<br>";
                                                echo "<strong style='color: black'>" . $repeticion5[$x] . "</strong>";
                                                $x++
                                                ?>
                                            </div>
                                            <ul>
                                                <li>
                                                    <div style=" height: 90px ; background-color: <?php echo $materiasColores5[$x]; ?>">
                                                        <?php
                                                        echo "<strong style='color: black'>" . $materias5[$x] . "</strong>";
                                                        echo"<br>";
                                                        echo"<strong style='color: black'>" . $creditos5[$x] . "</strong>";
                                                        echo"<br>";
                                                        echo"<strong style='color: black'>" . $tiempos5[$x] . "</strong>";
                                                        echo"<br>";
                                                        echo "<strong style='color: black'>" . $infoMaterias5[$x] . "</strong>";
                                                        echo"<br>";
                                                        echo "<strong style='color: black'>" . $repeticion5[$x] . "</strong>";
                                                        $x++;
                                                        ?>
                                                    </div>
                                                    <ul>
                                                        <li>
                                                            <div style=" height: 90px ; background-color: <?php echo $materiasColores5[$x]; ?>">
                                                                <?php
                                                                echo "<strong style='color: black'>" . $materias5[$x] . "</strong>";
                                                                echo"<br>";
                                                                echo"<strong style='color: black'>" . $creditos5[$x] . "</strong>";
                                                                echo"<br>";
                                                                echo"<strong style='color: black'>" . $tiempos5[$x] . "</strong>";
                                                                echo"<br>";
                                                                echo "<strong style='color: black'>" . $infoMaterias5[$x] . "</strong>";
                                                                echo"<br>";
                                                                echo "<strong style='color: black'>" . $repeticion5[$x] . "</strong>";
                                                                $x++;
                                                                ?>
                                                            </div>
                                                            <ul>
                                                                <li>
                                                                    <div style=" height: 90px ; background-color: <?php echo $materiasColores5[$x]; ?>">
                                                                        <?php
                                                                        echo "<strong style='color: black'>" . $materias5[$x] . "</strong>";
                                                                        echo"<br>";
                                                                        echo"<strong style='color: black'>" . $creditos5[$x] . "</strong>";
                                                                        echo"<br>";
                                                                        echo"<strong style='color: black'>" . $tiempos5[$x] . "</strong>";
                                                                        echo"<br>";
                                                                        echo "<strong style='color: black'>" . $infoMaterias5[$x] . "</strong>";
                                                                        echo"<br>";
                                                                        echo "<strong style='color: black'>" . $repeticion5[$x] . "</strong>";
                                                                        $x++;
                                                                        ?>
                                                                    </div>
                                                                    <ul>
                                                                        <li>
                                                                            <div style=" height: 90px ; background-color: <?php echo $materiasColores5[$x]; ?>">
                                                                                <?php
                                                                                echo "<strong style='color: black'>" . $materias5[$x] . "</strong>";
                                                                                echo"<br>";
                                                                                echo"<strong style='color: black'>" . $creditos5[$x] . "</strong>";
                                                                                echo"<br>";
                                                                                echo"<strong style='color: black'>" . $tiempos5[$x] . "</strong>";
                                                                                echo"<br>";
                                                                                echo "<strong style='color: black'>" . $infoMaterias5[$x] . "</strong>";
                                                                                echo"<br>";
                                                                                echo "<strong style='color: black'>" . $repeticion5[$x] . "</strong>";
                                                                                $x++;
                                                                                ?>
                                                                            </div>
                                                                            <ul>
                                                                                <li>
                                                                                    <div style=" height: 90px ; background-color: <?php echo $materiasColores5[$x]; ?>">
                                                                                        <?php
                                                                                        echo "<strong style='color: black'>" . $materias5[$x] . "</strong>";
                                                                                        echo"<br>";
                                                                                        echo"<strong style='color: black'>" . $creditos5[$x] . "</strong>";
                                                                                        echo"<br>";
                                                                                        echo"<strong style='color: black'>" . $tiempos5[$x] . "</strong>";
                                                                                        echo"<br>";
                                                                                        echo "<strong style='color: black'>" . $infoMaterias5[$x] . "</strong>";
                                                                                        echo"<br>";
                                                                                        echo "<strong style='color: black'>" . $repeticion5[$x] . "</strong>";
                                                                                        $x++;
                                                                                        ?>
                                                                                    </div>
                                                                                    <ul>
                                                                                        <li>
                                                                                            <div style=" height: 90px ; background-color: <?php echo $materiasColores5[$x]; ?>">
                                                                                                <?php
                                                                                                echo "<strong style='color: black'>" . $materias5[$x] . "</strong>";
                                                                                                echo"<br>";
                                                                                                echo"<strong style='color: black'>" . $creditos5[$x] . "</strong>";
                                                                                                echo"<br>";
                                                                                                echo"<strong style='color: black'>" . $tiempos5[$x] . "</strong>";
                                                                                                echo"<br>";
                                                                                                echo "<strong style='color: black'>" . $infoMaterias5[$x] . "</strong>";
                                                                                                echo"<br>";
                                                                                                echo "<strong style='color: black'>" . $repeticion5[$x] . "</strong>";
                                                                                                $x++;
                                                                                                ?>
                                                                                            </div> 
                                                                                        </li>
                                                                                    </ul>
                                                                                </li>

                                                                            </ul>
                                                                        </li>
                                                                    </ul>
                                                                </li>
                                                            </ul>

                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                        <?php
                                        break;
                                    }
                                    ?>
                                    <!-------------------siguieteCodigo--------------->

                                    <?php
                                    for ($x = 0; $x < 6; $x++) {
                                        ?>
                                        <li >
                                            <div style=" height: 90px ; background-color: <?php echo $materiasColores6[$x]; ?>">
                                                <?php
                                                echo "<strong style='color: black'>" . $materias6[$x] . "</strong>";
                                                echo"<br>";
                                                echo"<strong style='color: black'>" . $creditos6[$x] . "</strong>";
                                                echo"<br>";
                                                echo"<strong style='color: black'>" . $tiempos6[$x] . "</strong>";

                                                echo"<br>";
                                                echo "<strong style='color: black'>" . $infoMaterias6[$x] . "</strong>";
                                                echo"<br>";
                                                echo "<strong style='color: black'>" . $repeticion6[$x] . "</strong>";
                                                $x++
                                                ?>
                                            </div>
                                            <ul>
                                                <li>
                                                    <div style=" height: 90px ; background-color: <?php echo $materiasColores6[$x]; ?>">
                                                        <?php
                                                        echo "<strong style='color: black'>" . $materias6[$x] . "</strong>";
                                                        echo"<br>";
                                                        echo"<strong style='color: black'>" . $creditos6[$x] . "</strong>";
                                                        echo"<br>";
                                                        echo"<strong style='color: black'>" . $tiempos6[$x] . "</strong>";
                                                        echo"<br>";
                                                        echo "<strong style='color: black'>" . $infoMaterias6[$x] . "</strong>";
                                                        echo"<br>";
                                                        echo "<strong style='color: black'>" . $repeticion6[$x] . "</strong>";
                                                        $x++;
                                                        ?>
                                                    </div>
                                                    <ul>
                                                        <li>
                                                            <div style=" height: 90px ; background-color: <?php echo $materiasColores6[$x]; ?>">
                                                                <?php
                                                                echo "<strong style='color: black'>" . $materias6[$x] . "</strong>";
                                                                echo"<br>";
                                                                echo"<strong style='color: black'>" . $creditos6[$x] . "</strong>";
                                                                echo"<br>";
                                                                echo"<strong style='color: black'>" . $tiempos6[$x] . "</strong>";
                                                                echo"<br>";
                                                                echo "<strong style='color: black'>" . $infoMaterias6[$x] . "</strong>";
                                                                echo"<br>";
                                                                echo "<strong style='color: black'>" . $repeticion6[$x] . "</strong>";
                                                                $x++;
                                                                ?>
                                                            </div>
                                                            <ul>
                                                                <li>
                                                                    <div style=" height: 90px ; background-color: <?php echo $materiasColores6[$x]; ?>">
                                                                        <?php
                                                                        echo "<strong style='color: black'>" . $materias6[$x] . "</strong>";
                                                                        echo"<br>";
                                                                        echo"<strong style='color: black'>" . $creditos6[$x] . "</strong>";
                                                                        echo"<br>";
                                                                        echo"<strong style='color: black'>" . $tiempos6[$x] . "</strong>";
                                                                        echo"<br>";
                                                                        echo "<strong style='color: black'>" . $infoMaterias6[$x] . "</strong>";
                                                                        echo"<br>";
                                                                        echo "<strong style='color: black'>" . $repeticion6[$x] . "</strong>";
                                                                        $x++;
                                                                        ?>
                                                                    </div>
                                                                    <ul>
                                                                        <li>
                                                                            <div style=" height: 90px ; background-color: <?php echo $materiasColores6[$x]; ?>">
                                                                                <?php
                                                                                echo "<strong style='color: black'>" . $materias6[$x] . "</strong>";
                                                                                echo"<br>";
                                                                                echo"<strong style='color: black'>" . $creditos6[$x] . "</strong>";
                                                                                echo"<br>";
                                                                                echo"<strong style='color: black'>" . $tiempos6[$x] . "</strong>";
                                                                                echo"<br>";
                                                                                echo "<strong style='color: black'>" . $infoMaterias6[$x] . "</strong>";
                                                                                echo"<br>";
                                                                                echo "<strong style='color: black'>" . $repeticion6[$x] . "</strong>";
                                                                                $x++;
                                                                                ?>
                                                                            </div>
                                                                            <ul>
                                                                                <li>
                                                                                    <div style=" height: 90px ; background-color: <?php echo $materiasColores6[$x]; ?>">
                                                                                        <?php
                                                                                        echo "<strong style='color: black'>" . $materias6[$x] . "</strong>";
                                                                                        echo"<br>";
                                                                                        echo"<strong style='color: black'>" . $creditos6[$x] . "</strong>";
                                                                                        echo"<br>";
                                                                                        echo"<strong style='color: black'>" . $tiempos6[$x] . "</strong>";
                                                                                        echo"<br>";
                                                                                        echo "<strong style='color: black'>" . $infoMaterias6[$x] . "</strong>";
                                                                                        echo"<br>";
                                                                                        echo "<strong style='color: black'>" . $repeticion6[$x] . "</strong>";
                                                                                        $x++;
                                                                                        ?>
                                                                                    </div>
                                                                                </li>

                                                                            </ul>
                                                                        </li>
                                                                    </ul>
                                                                </li>
                                                            </ul>

                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                        <?php
                                        break;
                                    }
                                    ?>
                                    <!----------------siguientecodigo-->
                                    <?php
                                    for ($x = 0; $x < 8; $x++) {
                                        ?>
                                        <li >
                                            <div style=" height: 90px ; background-color: <?php echo $materiasColores7[$x]; ?>">
                                                <?php
                                                echo "<strong style='color: black'>" . $materias7[$x] . "</strong>";
                                                echo"<br>";
                                                echo"<strong style='color: black'>" . $creditos7[$x] . "</strong>";
                                                echo"<br>";
                                                echo"<strong style='color: black'>" . $tiempos7[$x] . "</strong>";
                                                echo"<br>";
                                                echo "<strong style='color: black'>" . $infoMaterias7[$x] . "</strong>";
                                                echo"<br>";
                                                echo "<strong style='color: black'>" . $repeticion7[$x] . "</strong>";
                                                $x++
                                                ?>
                                            </div>
                                            <ul>
                                                <li>
                                                    <div style=" height: 90px ; background-color: <?php echo $materiasColores7[$x]; ?>">
                                                        <?php
                                                        echo "<strong style='color: black'>" . $materias7[$x] . "</strong>";
                                                        echo"<br>";
                                                        echo"<strong style='color: black'>" . $creditos7[$x] . "</strong>";
                                                        echo"<br>";
                                                        echo"<strong style='color: black'>" . $tiempos7[$x] . "</strong>";
                                                        echo"<br>";
                                                        echo "<strong style='color: black'>" . $infoMaterias7[$x] . "</strong>";
                                                        echo"<br>";
                                                        echo "<strong style='color: black'>" . $repeticion7[$x] . "</strong>";
                                                        $x++;
                                                        ?>
                                                    </div>
                                                    <ul>
                                                        <li>
                                                            <div style=" height: 90px ; background-color: <?php echo $materiasColores7[$x]; ?>">
                                                                <?php
                                                                echo "<strong style='color: black'>" . $materias7[$x] . "</strong>";
                                                                echo"<br>";
                                                                echo"<strong style='color: black'>" . $creditos7[$x] . "</strong>";
                                                                echo"<br>";
                                                                echo"<strong style='color: black'>" . $tiempos7[$x] . "</strong>";
                                                                echo"<br>";
                                                                echo "<strong style='color: black'>" . $infoMaterias7[$x] . "</strong>";
                                                                echo"<br>";
                                                                echo "<strong style='color: black'>" . $repeticion7[$x] . "</strong>";
                                                                $x++;
                                                                ?>
                                                            </div>
                                                            <ul>
                                                                <li>
                                                                    <div style=" height: 90px ; background-color: <?php echo $materiasColores7[$x]; ?>">
                                                                        <?php
                                                                        echo "<strong style='color: black'>" . $materias7[$x] . "</strong>";
                                                                        echo"<br>";
                                                                        echo"<strong style='color: black'>" . $creditos7[$x] . "</strong>";
                                                                        echo"<br>";
                                                                        echo"<strong style='color: black'>" . $tiempos7[$x] . "</strong>";
                                                                        echo"<br>";
                                                                        echo "<strong style='color: black'>" . $infoMaterias7[$x] . "</strong>";
                                                                        echo"<br>";
                                                                        echo "<strong style='color: black'>" . $repeticion7[$x] . "</strong>";
                                                                        $x++;
                                                                        ?>
                                                                    </div>
                                                                    <ul>
                                                                        <li>
                                                                            <div style=" height: 90px ; background-color: <?php echo $materiasColores7[$x]; ?>">
                                                                                <?php
                                                                                echo "<strong style='color: black'>" . $materias7[$x] . "</strong>";
                                                                                echo"<br>";
                                                                                echo"<strong style='color: black'>" . $creditos7[$x] . "</strong>";
                                                                                echo"<br>";
                                                                                echo"<strong style='color: black'>" . $tiempos7[$x] . "</strong>";
                                                                                echo"<br>";
                                                                                echo "<strong style='color: black'>" . $infoMaterias7[$x] . "</strong>";
                                                                                echo"<br>";
                                                                                echo "<strong style='color: black'>" . $repeticion7[$x] . "</strong>";
                                                                                $x++;
                                                                                ?>
                                                                            </div>
                                                                            <ul>
                                                                                <li>
                                                                                    <div style=" height: 90px ; background-color: <?php echo $materiasColores7[$x]; ?>">
                                                                                        <?php
                                                                                        echo "<strong style='color: black'>" . $materias7[$x] . "</strong>";
                                                                                        echo"<br>";
                                                                                        echo"<strong style='color: black'>" . $creditos7[$x] . "</strong>";
                                                                                        echo"<br>";
                                                                                        echo"<strong style='color: black'>" . $tiempos7[$x] . "</strong>";
                                                                                        echo"<br>";
                                                                                        echo "<strong style='color: black'>" . $infoMaterias7[$x] . "</strong>";
                                                                                        echo"<br>";
                                                                                        echo "<strong style='color: black'>" . $repeticion7[$x] . "</strong>";
                                                                                        $x++;
                                                                                        ?>
                                                                                    </div>
                                                                                    <ul>
                                                                                        <li>
                                                                                            <div style=" height: 90px ; background-color: <?php echo $materiasColores7[$x]; ?>">
                                                                                                <?php
                                                                                                echo "<strong style='color: black'>" . $materias7[$x] . "</strong>";
                                                                                                echo"<br>";
                                                                                                echo"<strong style='color: black'>" . $creditos7[$x] . "</strong>";
                                                                                                echo"<br>";
                                                                                                echo"<strong style='color: black'>" . $tiempos7[$x] . "</strong>";
                                                                                                echo"<br>";
                                                                                                echo "<strong style='color: black'>" . $infoMaterias7[$x] . "</strong>";
                                                                                                echo"<br>";
                                                                                                echo "<strong style='color: black'>" . $repeticion7[$x] . "</strong>";
                                                                                                $x++;
                                                                                                ?>
                                                                                            </div>
                                                                                            <ul>
                                                                                                <li>
                                                                                                    <div style=" height: 90px ; background-color: <?php echo $materiasColores7[$x]; ?>">
                                                                                                        <?php
                                                                                                        echo "<strong style='color: black'>" . $materias7[$x] . "</strong>";
                                                                                                        echo"<br>";
                                                                                                        echo"<strong style='color: black'>" . $creditos7[$x] . "</strong>";
                                                                                                        echo"<br>";
                                                                                                        echo"<strong style='color: black'>" . $tiempos7[$x] . "</strong>";
                                                                                                        echo"<br>";
                                                                                                        echo "<strong style='color: black'>" . $infoMaterias7[$x] . "</strong>";
                                                                                                        echo"<br>";
                                                                                                        echo "<strong style='color: black'>" . $repeticion7[$x] . "</strong>";
                                                                                                        $x++;
                                                                                                        ?>
                                                                                                    </div>  
                                                                                                </li>
                                                                                            </ul>
                                                                                        </li>
                                                                                    </ul>
                                                                                </li>

                                                                            </ul>
                                                                        </li>
                                                                    </ul>
                                                                </li>
                                                            </ul>

                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                        <?php
                                        break;
                                    }
                                    ?>
                                    <!-------------------siguienteCodigo------------------>
                                    <?php
                                    for ($x = 0; $x < 6; $x++) {
                                        ?>
                                        <li >
                                            <div style=" height: 90px ; background-color: <?php echo $materiasColores78[$x]; ?>">
                                                <?php
                                                echo "<strong style='color: black'>" . $materias8[$x] . "</strong>";
                                                echo"<br>";
                                                echo"<strong style='color: black'>" . $creditos8[$x] . "</strong>";
                                                echo"<br>";
                                                echo"<strong style='color: black'>" . $tiempos8[$x] . "</strong>";
                                                echo"<br>";
                                                echo "<strong style='color: black'>" . $infoMaterias8[$x] . "</strong>";
                                                echo"<br>";
                                                echo "<strong style='color: black'>" . $repeticion8[$x] . "</strong>";
                                                $x++
                                                ?>
                                            </div>
                                            <ul>
                                                <li>
                                                    <div style=" height: 90px ; background-color: <?php echo $materiasColores8[$x]; ?>">
                                                        <?php
                                                        echo "<strong style='color: black'>" . $materias8[$x] . "</strong>";
                                                        echo"<br>";
                                                        echo"<strong style='color: black'>" . $creditos8[$x] . "</strong>";
                                                        echo"<br>";
                                                        echo"<strong style='color: black'>" . $tiempos8[$x] . "</strong>";
                                                        echo"<br>";
                                                        echo "<strong style='color: black'>" . $infoMaterias8[$x] . "</strong>";
                                                        echo"<br>";
                                                        echo "<strong style='color: black'>" . $repeticion8[$x] . "</strong>";
                                                        $x++;
                                                        ?>
                                                    </div>
                                                    <ul>
                                                        <li>
                                                            <div style=" height: 90px ; background-color: <?php echo $materiasColores8[$x]; ?>">
                                                                <?php
                                                                echo "<strong style='color: black'>" . $materias8[$x] . "</strong>";
                                                                echo"<br>";
                                                                echo"<strong style='color: black'>" . $creditos8[$x] . "</strong>";
                                                                echo"<br>";
                                                                echo"<strong style='color: black'>" . $tiempos8[$x] . "</strong>";
                                                                echo"<br>";
                                                                echo "<strong style='color: black'>" . $infoMaterias8[$x] . "</strong>";
                                                                echo"<br>";
                                                                echo "<strong style='color: black'>" . $repeticion8[$x] . "</strong>";
                                                                $x++;
                                                                ?>
                                                            </div>
                                                            <ul>
                                                                <li>
                                                                    <div style=" height: 90px ; background-color: <?php echo $materiasColores8[$x]; ?>">
                                                                        <?php
                                                                        echo "<strong style='color: black'>" . $materias8[$x] . "</strong>";
                                                                        echo"<br>";
                                                                        echo"<strong style='color: black'>" . $creditos8[$x] . "</strong>";
                                                                        echo"<br>";
                                                                        echo"<strong style='color: black'>" . $tiempos8[$x] . "</strong>";
                                                                        echo"<br>";
                                                                        echo "<strong style='color: black'>" . $infoMaterias8[$x] . "</strong>";
                                                                        echo"<br>";
                                                                        echo "<strong style='color: black'>" . $repeticion8[$x] . "</strong>";
                                                                        $x++;
                                                                        ?>
                                                                    </div>
                                                                    <ul>
                                                                        <li>
                                                                            <div style=" height: 90px ; background-color: <?php echo $materiasColores8[$x]; ?>">
                                                                                <?php
                                                                                echo "<strong style='color: black'>" . $materias8[$x] . "</strong>";
                                                                                echo"<br>";
                                                                                echo"<strong style='color: black'>" . $creditos8[$x] . "</strong>";
                                                                                echo"<br>";
                                                                                echo"<strong style='color: black'>" . $tiempos8[$x] . "</strong>";
                                                                                echo"<br>";
                                                                                echo "<strong style='color: black'>" . $infoMaterias8[$x] . "</strong>";
                                                                                echo"<br>";
                                                                                echo "<strong style='color: black'>" . $repeticion8[$x] . "</strong>";
                                                                                $x++;
                                                                                ?>
                                                                            </div>
                                                                            <ul>
                                                                                <li>
                                                                                    <div style=" height: 90px ; background-color: <?php echo $materiasColores8[$x]; ?>">
                                                                                        <?php
                                                                                        echo "<strong style='color: black'>" . $materias8[$x] . "</strong>";
                                                                                        echo"<br>";
                                                                                        echo"<strong style='color: black'>" . $creditos8[$x] . "</strong>";
                                                                                        echo"<br>";
                                                                                        echo"<strong style='color: black'>" . $tiempos8[$x] . "</strong>";
                                                                                        echo"<br>";
                                                                                        echo "<strong style='color: black'>" . $infoMaterias8[$x] . "</strong>";
                                                                                        echo"<br>";
                                                                                        echo "<strong style='color: black'>" . $repeticion8[$x] . "</strong>";
                                                                                        $x++;
                                                                                        ?>
                                                                                    </div>
                                                                                </li>

                                                                            </ul>
                                                                        </li>
                                                                    </ul>
                                                                </li>
                                                            </ul>

                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                        <?php
                                        break;
                                    }
                                    ?>



                                    <!----------------siguientecodigo-->
                                </ul>
                            </li>
                        </ul>
                        </li>
                        </ul>
                        </li>
                        </ul> 
                    </div>
                    <div id="chart" class="orgChart"></div>

                    <script>
                        jQuery(document).ready(function() {

                            /* Custom jQuery for the example */
                            $("#show-list").click(function(e) {
                                e.preventDefault();

                                $('#list-html').toggle('fast', function() {
                                    if ($(this).is(':visible')) {
                                        $('#show-list').text('Hide underlying list.');
                                        $(".topbar").fadeTo('fast', 0.9);
                                    } else {
                                        $('#show-list').text('Show underlying list.');
                                        $(".topbar").fadeTo('fast', 1);
                                    }
                                });
                            });

                            $('#list-html').text($('#org').html());

                            $("#org").bind("DOMSubtreeModified", function() {
                                $('#list-html').text('');

                                $('#list-html').text($('#org').html());

                                prettyPrint();
                            });
                        });
                    </script>

                </body>

            </div>
            <?php include './plantillaFooter.php'; ?>
        </center>
    </div>
</html>