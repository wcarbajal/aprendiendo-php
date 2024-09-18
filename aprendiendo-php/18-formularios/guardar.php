<?php 

if(isset($_POST["titulo"]) && isset($_POST["descripcion"])) {

  echo "El título es: ". $_POST["titulo"]. "<br>";
  echo "La descripción es: ". $_POST["descripcion"];

}else{
  echo "formulario incompleto";
}
;