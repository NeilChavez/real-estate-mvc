<?php 

function debugger($var){
  echo '<pre>';
  var_dump($var);
  echo '</pre>'; 
  exit;
}
function mapMessageCodeToResult($entry)
{
  switch ($entry) {
    case 1: {
        return CREATE_SUCCESS;
      }
    case 2: {
        return UPDATED_SUCCESS;
      }
    case 3: {
        return DELETED_SUCCESS;
      }
    default: {
        return "No Message was implemented to the case inserted";
      }
  }
}
?>