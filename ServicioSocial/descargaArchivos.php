<?php
$archivo = "Php.pdf";
$ruta="Php.pdf";
if (is_file($ruta)) {
    header('Content-Type: application/force-download');
    header('Content-Disposition: attachment; filename=' . $archivo);
    header('Content-Transfer-Encoding: binary');
    header('Content-Length: ' . filesize($ruta));

    readfile($ruta);
}
else
    exit();
?>