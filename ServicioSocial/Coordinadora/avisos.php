<?php
include '../DaoConnection/coneccion.php';
$opciones = $_GET["opciones"];

$cn = new coneccion();
$sql = "SELECT * FROM avisos a, usuarios u
WHERE a.control=1
and u.tipo = $opciones
and u.usuario = a.usuario";
$datos = mysql_query($sql, $cn->Conectarse());
 echo '<div>';
 while ($row = mysql_fetch_array($datos)) {
                    echo "<div style='float:left ; margin-left: 100px'>
                            <h3>"
                    . $row["titulo"] .
                    "</h3>
                                </div>
                                <br> <br>
                            ";

                    echo "<center>
                            <div style='width:60%'>
                                <p align='justify'>"
                    . $row["detalles"] . "
                                </p>
                            </div>
                     </center>
                              <br/>                                
                              ";
                }
echo '</div>';
$cn->cerrarBd();
?>
