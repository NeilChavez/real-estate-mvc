<h2>Update a property</h2>

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
include "form_update.php";
?>