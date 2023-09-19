<?php
if (!empty($errors)) {
  foreach ($errors as $error) :
?>
    <p class="error"><?php echo $error ?></p>
<?php
  endforeach;
}
?>
<?php
include "form-property.php"
?>