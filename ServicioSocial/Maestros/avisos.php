<?php

include '../DaoConnection/coneccion.php';

$cn = new coneccion();
$sql = "SELECT * FROM curso";
$datos = mysql_query($sql, $cn->Conectarse());
echo '<div>';
while ($rs = mysql_fetch_array($datos)) {
    echo '
            ' . $rs[0] . '
         ';
}
echo '</div>';
?>
