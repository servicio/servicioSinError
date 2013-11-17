<?php
include'../clases/usuario.php';
include '../Dao/daoServicio.php';
$guardar=new usuario();
$dao=new daoServicio();
$contrasenia=$_GET["contrasenia"];
$confirmar=$_GET["confirmar"];
$email=$_GET["Email"];
$confirmarEmail=$_GET["confirmarEmail"];
        
if ($contrasenia==$confirmar  ) {
   if($email==$confirmarEmail){
       $guardar ->setUsuario($_GET["usuario"]);
$guardar ->setPass($_GET["contrasenia"]);
$guardar ->setNombres($_GET["nombres"]);
$guardar ->setApellidoPaterno($_GET["ApellidoPaterno"]);
$guardar ->setApellidoMaterno($_GET["ApellidoMaterno"]);
$guardar ->setEmail($_GET["Email"]);

$dao ->guardarRegistroDatos($guardar);

  ?>
<script language="javascript">
alert("vientos");

</script>
<?php
        header ("Location:plantilla.php"); 
   } 
   else{
        ?>
<script language="javascript">
alert("Estas mal pendejo");
</script>
<?php
   }



}
else{
   ?>
<script language="javascript">
alert("Estas remal pendejo");
</script>
<?php
}
?>
