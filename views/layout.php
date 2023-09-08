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
        <h1 class="logo"><?php echo PAGE_TITLE ?></h1>
      </a>
      <div class="menu" id="menu">
        <ul class="list">
          <li class="list-item">
            <a href="#" class="list-link current">Properties</a>
          </li>
          <li class="list-item">
            <a href="#" class="list-link">About Us</a>
          </li>
          <li class="list-item">
            <a href="#" class="list-link">Blog</a>
          </li>
          <li class="list-item">
            <a href="#" class="list-link">Contact Us</a>
          </li>
          <li class="list-item">
            <a href="#" class="list-link">Contact</a>
          </li>

          <?php
          $condition = true;
          // if (isset($_SESSION)) {
          if ($condition) {
          ?>
            <li class="list-item">
              <a href="<?php echo ROUTE_ADMIN ?>" class="list-link">
                Admin dashboard
              </a>
            </li>
            <li class="list-item">
              <a href="<?php echo ROUTE_LOGOUT ?>" class="list-link btn-sm btn-blue">Logout</a>
            </li>

          <?php
          } ?>

        </ul>
      </div>
      <div class="list list-right flex flex-row gap">
        <div class="hamburger" id="hamburger-1">
          <span class="line"></span>
          <span class="line"></span>
          <span class="line"></span>
        </div>
      </div>
    </nav>
  </header>


  <?php echo $content ?>

  <footer>this is a footer</footer>

  <script src="/src/js/index.js" type="module"></script>
</body>

</html>