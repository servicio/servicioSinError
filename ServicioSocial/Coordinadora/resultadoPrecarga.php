<?php

 include '../DaoConnection/coneccion.php';
 include './plantillaEncabezado.php';
session_start();
?>
<style>
    #matricula{  
        text-transform: capitalize;  
    }  
    #nombre{  
        text-transform: capitalize;  
    }  
    #apellidoM{  
        text-transform: capitalize;  
    }  
    #apellidoP{  
        text-transform: capitalize;  
    }  
</style>

<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/> 
        <script type="text/javascript" src="../bootsTrap2/js/jquery.min.js"></script>
        <link rel="stylesheet" type="text/css" href="../bootsTrap2/css/bootstrap.css"/>
        <script src="../bootsTrap2/js/bootstrap.min.js"></script>



    </head> 

    <body style="background-color:  #e5e5e5">
    <center>
        <div style="width: 960px; background-color: white;">
            <?php
           
            $cn = new coneccion();
            $sql = "SELECT idMateria, count(idMateria) as prr FROM `precarga` group by idMateria";
            $datos = mysql_query($sql, $cn->Conectarse());
            ?><table BORDER=1>
                <th> materia </th><th> Alumnos Preinscritos</th>
                <?php
            While ($rs = mysql_fetch_array($datos)) {
                ?>
                <tr> <td><?php echo utf8_encode($rs["idMateria"]);?></td> <td><?php echo utf8_encode($rs["prr"]);?></td> 
            <?php
            
            }
             ?></tr>
            </table>
            <?php
            $cn->cerrarBd();
            ?>
        </div>
    </center>
</body> 
<?php include './plantillaFooter.php';?>
</html>
