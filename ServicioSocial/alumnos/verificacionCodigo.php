<?php

session_start();
$codigo = $_SESSION["clave"];
$clave = $_POST["codigo"];
$valido = strcmp($codigo, $clave);
//if ($codigo == clave) {
//    $paso = "123";
    echo json_encode($valido);
//    echo json_encode(array('paso' => 1));
//} else {
//    $paso = "012";
//    echo json_encode($paso);
//  echo json_encode(array('paso' => 1));
//}
?>
