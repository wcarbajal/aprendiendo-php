
<?php ;

if(isset($_COOKIE['micookie'])){
  echo "La cookie 'micookie' existe y tiene el valor: ". $_COOKIE['micookie'];
} 
else{
  echo "La cookie 'micookie' no existe.";
}
 

?>