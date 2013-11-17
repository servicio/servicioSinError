<?php
 require_once ('../jpgraph/src/jpgraph.php');
 require_once ('../jpgraph/src/jpgraph_bar.php');
require_once ("../jpgraph/src/jpgraph_pie.php");
include '../DaoConnection/coneccion.php';
$cn= new coneccion();
        $sql = "select calificacion from historial where anio = 2013 and calificacion >= 70 ";
        $datos = mysql_query($sql, $cn->Conectarse());
        $aprobados = mysql_affected_rows();
        
        $cn->cerrarBd();
  $cn= new coneccion();
        $sql2 = "select calificacion from historial where anio = 2013 and calificacion < 70 ";
        $datos2 = mysql_query($sql2, $cn->Conectarse());
        $reprobados = mysql_affected_rows();
        $cn->cerrarBd();      


// Se define el array de valores y el array de la leyenda
// Creamos el grafico
$datos=array($aprobados,$reprobados);
$labels=array("aprobados","reprobados");

$grafico = new Graph(500, 400, 'auto');
$grafico->SetScale("textint");
$grafico->title->Set("Ejemplo de Grafica");
$grafico->xaxis->title->Set("trabajadores");
$grafico->xaxis->SetTickLabels($labels);
$grafico->yaxis->title->Set("Horas Trabajadas");
$barplot1 =new BarPlot($datos);

// Un gradiente Horizontal de morados
$barplot1->SetFillGradient("#BE81F7", "#E3CEF6", GRAD_HOR);
// 30 pixeles de ancho para cada barra
$barplot1->value->Show();
$barplot1->SetWidth(30);
$grafico->Add($barplot1);
$grafico->Stroke();
?>
