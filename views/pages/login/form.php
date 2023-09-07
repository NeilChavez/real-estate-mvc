<?php if (!empty($errors)) {
  foreach ($errors as $error) :
?>
    <p class="error"><?php echo $error ?></p>
<?php
  endforeach;
} ?>

<form method="POST">
    <br>
    <br>
    <input type="text" name="username" placeholder="username">
    <br>
    <input type="password" name="password" placeholder="password">
    <br>
    <button >login</button>
  </form>