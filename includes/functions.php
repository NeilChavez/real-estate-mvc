<?php 

function debugger($var){
  echo '<pre>';
  var_dump($var);
  echo '</pre>'; 
  exit;
}

?>