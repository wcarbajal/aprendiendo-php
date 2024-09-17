<?php 
/*

*/

session_start();
//variable local
$variable_normal = "Esto es una variable normal";


//variable de sesión
$_SESSION['variable_sesion'] = "Session activa";




echo  $variable_normal. "<br>";
echo $_SESSION['variable_sesion'];

