<?php

include '../../DaoConnection/coneccion.php';
$cn = new coneccion();
$sql = "SELECT * FROM materias 
                    WHERE materias.id NOT IN (SELECT idMateria FROM historial where usuario='e09080264')
                    order by semestre 
                    limit 10";
$datos = mysql_query($sql, $cn->Conectarse());
?>
<?php

while ($rs = mysql_fetch_array($datos)) {
    echo '   <input type="checkbox" 
                       name="orderBox[]"
                       value=' . $rs[0] . '/>' . utf8_encode($rs[2]) . '
                <br>';
}
echo '<input type = "submit" value = "Guardar" id="guardar" class = "btn btn-info"/>';
?>
          