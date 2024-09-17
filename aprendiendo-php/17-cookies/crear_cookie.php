<?php 

setcookie("micookie","valor en texto");


setcookie("unyear","valor de 365 días", time() + 365*24*60*60 );

?>

<a href="ver_cookies.php">Ver cookies</a>
