<?php 

if(isset($_GET["titulo"]) && isset($_GET["descripcion"])) {

  echo "El título es: ". $_GET["titulo"]. "<br>";
  echo "La descripción es: ". $_GET["descripcion"];

}else{
  echo "formulario incompleto";
}
;