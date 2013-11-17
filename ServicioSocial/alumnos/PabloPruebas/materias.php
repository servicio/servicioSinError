<?php
include '../../DaoConnection/coneccion.php';
$data = json_decode(stripslashes($_POST['data']));
$cn = new coneccion();

// here i would like use foreach:
$sentencias;
$contador = 0;
foreach ($data as $d) {
    $sql = "INSERT INTO precarga(usuario, idMateria, fecha) VALUES('12345678','$d', '' )";
    $sentencias[$contador] = $sql;
    echo $d;
    $contador++;
}
for($i=0 ; $i<$contador; $i++){
    mysql_query($sentencias[$i], $cn->Conectarse());
}

?>
