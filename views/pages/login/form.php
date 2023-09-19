<section class="section login ">

  <h2>Login as Admin</h2>
  <?php if (!empty($errors)) {
    foreach ($errors as $error) :
  ?>
      <p class="text-error text-center"><?php echo $error ?></p>
  <?php
    endforeach;
  } ?>

  <div class="flex justify-center align-items-center container-xs">


    <form method="POST" class="form login">
      <div class="inputs-wrapper flex column gap-2">
        <input type="text" name="username" placeholder="username">
        <input type="password" name="password" placeholder="password">
        <button class="btn-m btn-blue">login</button>
      </div>
    </form>
  </div>
</section>