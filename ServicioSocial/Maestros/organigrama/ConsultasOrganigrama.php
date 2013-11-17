<?php

include '../../Dao/daoServicio.php';
include '../../clases/historialAcademico.php';
$historial = new historialAcademico();
include '../../DaoConnection/coneccion.php';
try {
    $cn = new coneccion();
} catch (Exception $e) {
    $e->getMessage();
}
$usuario = $_GET["usuario"];
//$usuario ="E12081142";
$materias;
$creditos1;
$tiempos1;
$sql = "SELECT * FROM materias WHERE semestre =1";
$contador = 0;
$datos = mysql_query($sql, $cn->Conectarse());
while ($rs = mysql_fetch_array($datos)) {
    $materias[$contador] = utf8_encode($rs["2"]);
    $creditos1[$contador] = utf8_encode($rs[4]);
    $tiempos1[$contador] = $rs[3];
    $contador++;
}
$infoMaterias;
$materiasColores;
$repeticion;
$sqlInfoMaterias = "SELECT materia, max(calificacion), max(idAcreditacion), cursando, max(ingresoCursado), historial.idMateria FROM materias, historial 
                    where historial.idMateria = materias.id 
                    and usuario = '$usuario'
                    and materias.semestre = 1
                    group by historial.idMateria";

$ifo = mysql_query($sqlInfoMaterias, $cn->Conectarse());
$contadorInfo = 0;
while ($rsInfo = mysql_fetch_array($ifo)) {
//    if ($rsInfo[1] < 70) {
//        $materiasColores[$contadorInfo] = "#F5A9A9";
//    } else if ($rsInfo[1] > 69) {
//        $materiasColores[$contadorInfo] = "#64FE2E";
//    }
    $infoMaterias[$contadorInfo] = $rsInfo[1];
    if ($rsInfo["2"] == 1) {
//        $repeticion[$contadorInfo] = "*";
        $repeticion[$contadorInfo] = "$rsInfo[4]|cn|$rsInfo[1]|";
        $materiasColores[$contadorInfo] = "#64FE2E";
    }
    if ($rsInfo["2"] == 2) {
        $repeticion[$contadorInfo] = "$rsInfo[4]|cr|$rsInfo[1]";
        $materiasColores[$contadorInfo] = "#FFC02B";
    }
    if ($rsInfo["2"] == 3) {
        $repeticion[$contadorInfo] = "$rsInfo[4]|ce|$rsInfo[1]";
        $materiasColores[$contadorInfo] = "#FFC1AE";
    }
    $contadorInfo++;
}


//------------------------------2Semestre-------------------------------------------

$materias2;
$sql2 = "SELECT * FROM materias WHERE semestre =2";
$contador2 = 0;
$creditos2;
$tiempos2;
$datos2 = mysql_query($sql2, $cn->Conectarse());
while ($rs2 = mysql_fetch_array($datos2)) {
    $materias2[$contador2] = utf8_encode($rs2[2]);
    $creditos2[$contador2] = utf8_encode($rs2["creditos"]);
    $tiempos2[$contador2] = $rs2["tiempos"];
    $contador2++;
}
$infoMaterias2;
$materiasColores2;
$repeticion2;
$sqlInfoMaterias2 = "SELECT materia, max(calificacion), max(idAcreditacion), cursando, max(ingresoCursado), historial.idMateria FROM materias, historial 
                    where historial.idMateria = materias.id 
                    and usuario = '$usuario'
                    and materias.semestre = 2
                    group by historial.idMateria";
$ifo2 = mysql_query($sqlInfoMaterias2, $cn->Conectarse());
$contadorInfo2 = 0;
while ($rsInfo2 = mysql_fetch_array($ifo2)) {
//    if ($rsInfo2[1] < 70) {
//        $materiasColores2[$contadorInfo2] = "#F5A9A9";
//    } else if ($rsInfo2[1] > 69) {
//        $materiasColores2[$contadorInfo2] = "#64FE2E";
//    }
    if ($rsInfo2["2"] == 1) {
        $repeticion2[$contadorInfo2] = "$rsInfo2[4]|cn|$rsInfo2[1]";
//        $repeticion2[$contadorInfo2] = "*";
        $materiasColores2[$contadorInfo2] = "#64FE2E";
    }
    if ($rsInfo2["2"] == 2) {
//        $repeticion2[$contadorInfo2] = "**";
        $repeticion2[$contadorInfo2] = "$rsInfo2[4]|cr|$rsInfo2[1]";
        $materiasColores2[$contadorInfo2] = "#FF9E00";
    }
    if ($rsInfo2["2"] == 3) {
        $repeticion2[$contadorInfo2] = "$rsInfo2[4]|ce|$rsInfo2[1]";
//        $repeticion2[$contadorInfo2] = "***";
        $materiasColores2[$contadorInfo2] = "#FFC1AE";
    }
    $contadorInfo2++;
}



//-----------------------3Semestre-------------------------------------


$materias3;
$sql3 = "SELECT * FROM materias WHERE semestre =3";
$contador3 = 0;
$datos3 = mysql_query($sql3, $cn->Conectarse());
while ($rs3 = mysql_fetch_array($datos3)) {
    $materias3[$contador3] = utf8_encode($rs3["2"]);
    $creditos3[$contador3] = utf8_encode($rs3[4]);
    $tiempos3[$contador3] = $rs3[3];
    $contador3++;
}
$infoMaterias3;
$materiasColores3;
$repeticion3;
$sqlInfoMaterias3 = "SELECT materia, max(calificacion), max(idAcreditacion), cursando, max(ingresoCursado), historial.idMateria FROM materias, historial 
                    where historial.idMateria = materias.id 
                    and usuario = '$usuario'
                    and materias.semestre = 3
                    group by historial.idMateria";
$ifo3 = mysql_query($sqlInfoMaterias3, $cn->Conectarse());
$contadorInfo3 = 0;
while ($rsInfo3 = mysql_fetch_array($ifo3)) {
//    if ($rsInfo3[1] < 70) {
//        $materiasColores3[$contadorInfo3] = "#F5A9A9";
//    } else if ($rsInfo3[1] > 69) {
//        $materiasColores2[$contadorInfo3] = "#64FE2E";
//    }
    $infoMaterias3[$contadorInfo3] = $rsInfo3[1];
    if ($rsInfo3["2"] == 1) {
        $repeticion3[$contadorInfo3] = "$rsInfo3[4]|cn|$rsInfo3[1]";
//        $repeticion3[$contadorInfo3] = "*";
        $materiasColores3[$contadorInfo3] = "#64FE2E";
    }
    if ($rsInfo3["2"] == 2) {
        $repeticion3[$contadorInfo3] = "$rsInfo3[4]|cr|$rsInfo3[1]";
//        $repeticion3[$contadorInfo3] = "**";
        $materiasColores3[$contadorInfo3] = "#FF9E00";
    }
    if ($rsInfo3["2"] == 3) {
        $repeticion3[$contadorInfo3] = "$rsInfo3[4]|ce|$rsInfo3[1]";
//        $repeticion3[$contadorInfo3] = "***";
        $materiasColores3[$contadorInfo3] = "#FFC1AE";
    }
    $contadorInfo3++;
}


//-----------------------------------



$materias4;
$sql4 = "SELECT * FROM materias WHERE semestre =4";
$contador4 = 0;
$datos4 = mysql_query($sql4, $cn->Conectarse());
while ($rs4 = mysql_fetch_array($datos4)) {
    $materias4[$contador4] = utf8_encode($rs4["2"]);
    $creditos4[$contador4] = utf8_encode($rs4[4]);
    $tiempos4[$contador4] = $rs4[3];
    $contador4++;
}
$infoMaterias4;
$materiasColores4;
$repeticion4;
$sqlInfoMaterias4 = "SELECT materia, max(calificacion), max(idAcreditacion), cursando, max(ingresoCursado), historial.idMateria FROM materias, historial 
                    where historial.idMateria = materias.id 
                    and usuario = '$usuario'
                    and materias.semestre = 4
                    group by historial.idMateria";
$ifo4 = mysql_query($sqlInfoMaterias4, $cn->Conectarse());
$contadorInfo4 = 0;
while ($rsInfo4 = mysql_fetch_array($ifo4)) {
//    if ($rsInfo4[1] < 70) {
//        $materiasColores4[$contadorInfo4] = "#F5A9A9";
//    } else if ($rsInfo4[1] > 69) {
//        $materiasColores4[$contadorInfo4] = "#64FE2E";
//    }
    $infoMaterias4[$contadorInfo4] = $rsInfo4[1];
    if ($rsInfo4["2"] == 1) {
        $repeticion4[$contadorInfo4] = "$rsInfo4[4]|cn|$rsInfo4[1]";
//        $repeticion4[$contadorInfo4] = "*";
        $materiasColores4[$contadorInfo4] = "#64FE2E";
    }
    if ($rsInfo4["2"] == 2) {
        $repeticion4[$contadorInfo4] = "$rsInfo4[4]|cr|$rsInfo4[1]";
//        $repeticion4[$contadorInfo4] = "**";
        $materiasColores4[$contadorInfo4] = "#FF9E00";
    }
    if ($rsInfo4["2"] == 3) {
        $repeticion4[$contadorInfo4] = "$rsInfo4[4]|ce|$rsInfo4[1]";
//        $repeticion4[$contadorInfo4] = "***";
        $materiasColores4[$contadorInfo4] = "#FFC1AE";
    }
    $contadorInfo4++;
}
//-------------------------5semestre


$materias5;
$sql5 = "SELECT * FROM materias WHERE semestre =5";
$contador5 = 0;
$datos5 = mysql_query($sql5, $cn->Conectarse());
while ($rs5 = mysql_fetch_array($datos5)) {
    $materias5[$contador5] = utf8_encode($rs5["2"]);
    $creditos5[$contador5] = utf8_encode($rs5[4]);
    $tiempos5[$contador5] = $rs5[3];
    $contador5++;
}
$infoMaterias5;
$materiasColores5;
$repeticion5;
$sqlInfoMaterias5 = "SELECT materia, max(calificacion), max(idAcreditacion), cursando, max(ingresoCursado), historial.idMateria FROM materias, historial 
                    where historial.idMateria = materias.id 
                    and usuario = '$usuario'
                    and materias.semestre = 5
                    group by historial.idMateria";
$ifo5 = mysql_query($sqlInfoMaterias5, $cn->Conectarse());
$contadorInfo5 = 0;
while ($rsInfo5 = mysql_fetch_array($ifo5)) {
//    if ($rsInfo5[1] < 70) {
//        $materiasColores5[$contadorInfo5] = "#F5A9A9";
//    } else if ($rsInfo5[1] > 69) {
//        $materiasColores5[$contadorInfo5] = "#64FE2E";
//    }
    $infoMaterias5[$contadorInfo5] = $rsInfo5[1];
    if ($rsInfo5["2"] == 1) {
        $repeticion5[$contadorInfo5] = "$rsInfo5[4]|cn|$rsInfo5[1]";
//        $repeticion5[$contadorInfo5] = "*";
        $materiasColores5[$contadorInfo5] = "#64FE2E";
    }
    if ($rsInfo5["2"] == 2) {
        $repeticion5[$contadorInfo5] = "$rsInfo5[4]|cr|$rsInfo5[1]";
//        $repeticion5[$contadorInfo5] = "**";
        $materiasColores5[$contadorInfo5] = "#FF9E00";
    }
    if ($rsInfo5["2"] == 3) {
        $repeticion5[$contadorInfo5] = "$rsInfo5[4]|ce|$rsInfo5[1]";
//        $repeticion5[$contadorInfo5] = "***";
        $materiasColores5[$contadorInfo5] = "#FFC1AE";
    }
    $contadorInfo5++;
}
//----------------------------------------------6 Semestre-----------------------------



$materias6;
$sql6 = "SELECT * FROM materias WHERE semestre =6";
$contador6 = 0;
$datos6 = mysql_query($sql6, $cn->Conectarse());
while ($rs6 = mysql_fetch_array($datos6)) {
    $materias6[$contador6] = utf8_encode($rs6["2"]);
    $creditos6[$contador6] = utf8_encode($rs6[4]);
    $tiempos6[$contador6] = $rs6[3];
    $contador6++;
}
$infoMaterias6;
$materiasColores6;
$repeticion6;
$sqlInfoMaterias6 = "SELECT materia, max(calificacion), max(idAcreditacion), cursando, max(ingresoCursado), historial.idMateria FROM materias, historial 
                    where historial.idMateria = materias.id 
                    and usuario = '$usuario'
                    and materias.semestre = 6
                    group by historial.idMateria";
$ifo6 = mysql_query($sqlInfoMaterias6, $cn->Conectarse());
$contadorInfo6 = 0;
while ($rsInfo6 = mysql_fetch_array($ifo6)) {
//    if ($rsInfo6[1] < 70) {
//        $materiasColores6[$contadorInfo6] = "#F5A9A9";
//    } else if ($rsInfo6[1] > 69) {
//        $materiasColores6[$contadorInfo6] = "#64FE2E";
//    }
    $infoMaterias6[$contadorInfo6] = $rsInfo6[1];
    if ($rsInfo6["2"] == 1) {
        $repeticion6[$contadorInfo6] = "$rsInfo6[4]|cn|$rsInfo6[1]";
        $repeticion6[$contadorInfo6] = "*";
        $materiasColores6[$contadorInfo6] = "#64FE2E";
    }
    if ($rsInfo6["2"] == 2) {
        $repeticion6[$contadorInfo6] = "$rsInfo6[4]|cr|$rsInfo6[1]";
//        $repeticion6[$contadorInfo6] = "**";
        $materiasColores6[$contadorInfo6] = "#FF9E00";
    }
    if ($rsInfo6["2"] == 3) {
        $repeticion6[$contadorInfo6] = "$rsInfo6[4]|ce|$rsInfo6[1]";
//      $repeticion6[$contadorInfo6] = "***";
        $materiasColores6[$contadorInfo6] = "#FFC1AE";
    }
    $contadorInfo6++;
}
//---------7Semestre-----------------------------


$materias7;
$sql7 = "SELECT * FROM materias WHERE semestre =7";
$contador7 = 0;
$datos7 = mysql_query($sql7, $cn->Conectarse());
while ($rs7 = mysql_fetch_array($datos7)) {
    $materias7[$contador7] = utf8_encode($rs7["2"]);
    $creditos7[$contador7] = utf8_encode($rs7[4]);
    $tiempos7[$contador7] = $rs7[3];
    $contador7++;
}
$infoMaterias7;
$materiasColores7;
$repeticion7;
$sqlInfoMaterias7 = "SELECT materia, max(calificacion), max(idAcreditacion), cursando, max(ingresoCursado), historial.idMateria FROM materias, historial 
                    where historial.idMateria = materias.id 
                    and usuario = '$usuario'
                    and materias.semestre = 7
                    group by historial.idMateria";
$ifo7 = mysql_query($sqlInfoMaterias7, $cn->Conectarse());
$contadorInfo7 = 0;
while ($rsInfo7 = mysql_fetch_array($ifo7)) {
//    if ($rsInfo7[1] < 70) {
//        $materiasColores7[$contadorInfo7] = "#F5A9A9";
//    } else if ($rsInfo7[1] > 69) {
//        $materiasColores7[$contadorInfo7] = "#64FE2E";
//    }
    $infoMaterias7[$contadorInfo7] = $rsInfo7[1];
    if ($rsInfo7["2"] == 1) {
//        $repeticion7[$contadorInfo7] = "*";
        $repeticion7[$contadorInfo7] = "$rsInfo7[4]|cn|$rsInfo7[1]";
        $materiasColores7[$contadorInfo7] = "#64FE2E";
    }
    if ($rsInfo7["2"] == 2) {
//        $repeticion7[$contadorInfo7] = "**";
        $repeticion7[$contadorInfo7] = "$rsInfo7[4]|cr|$rsInfo7[1]";
        $materiasColores7[$contadorInfo7] = "#FF9E00";
    }
    if ($rsInfo7["2"] == 3) {
//        $repeticion7[$contadorInfo7] = "***";
        $repeticion7[$contadorInfo7] = "$rsInfo7[4]|ce|$rsInfo7[1]";
        $materiasColores7[$contadorInfo7] = "#FFC1AE";
    }
    $contadorInfo7++;
}

//-----------------------8Semestre----------------------------


$materias8;
$sql8 = "SELECT * FROM materias WHERE semestre =8";
$contador8 = 0;
$datos8 = mysql_query($sql8, $cn->Conectarse());
while ($rs8 = mysql_fetch_array($datos8)) {
    $materias8[$contador8] = utf8_encode($rs8["2"]);
    $creditos8[$contador8] = utf8_encode($rs8[4]);
    $tiempos8[$contador8] = $rs8[3];
    $contador8++;
}
$infoMaterias8;
$materiasColores8;
$repeticion8;
$sqlInfoMaterias8 = "SELECT materia, max(calificacion), max(idAcreditacion), cursando, max(ingresoCursado), historial.idMateria FROM materias, historial 
                    where historial.idMateria = materias.id 
                    and usuario = '$usuario'
                    and materias.semestre = 8
                    group by historial.idMateria";
$ifo8 = mysql_query($sqlInfoMaterias8, $cn->Conectarse());
$contadorInfo8 = 0;
while ($rsInfo8 = mysql_fetch_array($ifo8)) {
//    if ($rsInfo8[1] < 70) {
//        $materiasColores8[$contadorInfo8] = "#F5A9A9";
//    } else if ($rsInfo8[1] > 69) {
//        $materiasColores8[$contadorInfo8] = "#64FE2E";
//    }
    $infoMaterias8[$contadorInfo8] = $rsInfo8[1];
    if ($rsInfo8["2"] == 1) {
        $repeticion8[$contadorInfo8] = "*";
        $repeticion8[$contadorInfo8] = "$rsInfo8[4]|cn|$rsInfo8[1]";
        $materiasColores8[$contadorInfo8] = "#64FE2E";
    }
    if ($rsInfo8["2"] == 2) {
        $repeticion8[$contadorInfo8] = "$rsInfo8[4]|cr|$rsInfo8[1]";
//        $repeticion8[$contadorInfo8] = "**";
        $materiasColores8[$contadorInfo8] = "#FF9E00";
    }
    if ($rsInfo8["2"] == 3) {
//        $repeticion8[$contadorInfo8] = "***";
        $repeticion8[$contadorInfo8] = "$rsInfo8[4]|ce|$rsInfo8[1]";
        $materiasColores8[$contadorInfo8] = "#FFC1AE";
    }
    $contadorInfo8++;
}
?>
