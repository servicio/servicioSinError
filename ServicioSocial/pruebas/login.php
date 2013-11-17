<?php 
session_start();
include('funciones.php');
$usser = htmlspecialchars($_POST['usser']);
$pass   = htmlspecialchars($_POST['pass']);

$query  = mysql_query('SELECT * FROM usuarios WHERE usuario="'.mysql_real_escape_string($usser).'" AND pass="'.mysql_real_escape_string($pass).'"') or die (mysql_error());

if($existe = mysql_fetch_array($query)){
	$_SESSION['log'] = 'si';
	$_SESSION['usuario'] = $usser; 
	echo json_encode($existe);
}else{
	echo json_encode(array('error' => true));
}
?>