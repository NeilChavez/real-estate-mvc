<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- <link rel="stylesheet" href="/build/css/app.css"> -->
  <!-- <link rel="stylesheet" href="/src/css/style.css"> -->
  <link rel="stylesheet" href="/src/css/styles.css">
  <title>Document</title>
</head>

<body>


  <!-- Header -->

  <header class="header" id="header">
    <nav class="navbar container">


      <a href="<?php echo ROUTE_HOME ?>">
        <h2 class="logo">Real State</h2>
      </a>


      <div class="menu" id="menu">
        <!---->
        <ul class="list">
          <li class="list-item">
            <a href="#" class="list-link current">Home</a>
          </li>
          <li class="list-item">
            <a href="#" class="list-link">Categories</a>
          </li>
          <li class="list-item">
            <a href="#" class="list-link">News</a>
          </li>
          <li class="list-item">
            <a href="#" class="list-link">Membership</a>
          </li>
          <li class="list-item">
            <a href="#" class="list-link">Contact</a>
          </li>
          <li class="list-item screen-lg-hidden">
            <a href="#" class="list-link">Sign in</a>
          </li>
          <li class="list-item">
            <a href="#" class="list-link screen-lg-hidden">Sign up</a>
          </li>
        </ul>
      </div>
      <div class="list list-right">
        <!-- style="border: thick solid rgb(0, 255, 55)" -->




        <?php
        if (isset($_SESSION)) {

        ?>
          <a href="<?php echo ROUTE_LOGOUT ?>" class="list-link screen-sm-hidden">Logout</a>
        <?php
        } ?>

      </div>
    </nav>
  </header>





  
  <header>
    <h1>
      <a href="<?php echo ROUTE_HOME ?>">
        Real state
      </a>
    </h1>
    <?php
    if (isset($_SESSION)) {

    ?>
      <a href="<?php echo ROUTE_LOGOUT ?>">Logout</a>
    <?php
    }
    ?>
  </header>
  <a href="<?php echo ROUTE_ADMIN ?>">
    Admin dashboard
  </a>

  <?php echo $content ?>

  <footer>this is a footer</footer>

</body>

</html>