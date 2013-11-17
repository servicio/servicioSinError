<meta http-equiv="conten-type" content="text/html; charset=UTF-8" />
<?php
include '../DaoConnection/coneccion.php';
$cn = new coneccion();
$materia = $_GET["materia"];

$idmaterias = "SELECT id from materias where id= $materia";
$datosid = mysql_query($idmaterias, $cn->Conectarse());
While ($rs = mysql_fetch_array($datosid)) {
                          $idmateria = $rs["id"];     
                            }
    
   
                            $sql = "SELECT m.maestro FROM historial h, maestros m where h.idMateria = $id  and h.idMaestro =  m.id";
    $datos = mysql_query($sql, $cn->Conectarse());
                            While ($rs = mysql_fetch_array($datos)) {
                                ?>
                                <option value="<?php echo $rs["maestro"]; ?>"><?php echo $rs["maestro"] ?></option>
                                <?php
                            }
                            

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>
