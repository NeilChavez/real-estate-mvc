<?php

if (!isset($_SESSION)) {
  session_start();
}

$auth = $_SESSION["login"] ?? null;

?>

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
        <h1 class="logo">
          <?php echo PAGE_TITLE ?>
        </h1>
      </a>
      <div>
        <div class="menu" id="menu">
          <ul class="list">
            <li class="list-item">
              <a href="<?php echo ROUTE_PROPERTIES ?>" class="list-link current">Properties</a>
            </li>
            <li class="list-item">
              <a href="#" class="list-link">About Us</a>
            </li>
            <li class="list-item">
              <a href="#" class="list-link">Contact Us</a>
            </li>
            <?php
            if ($auth) {
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
      </div>
    </nav>
  </header>

  <main>
    <?php echo $content ?>
  </main>

  <footer class="footer section">
    <div class="footer-container container d-grid">
      <div class="company-data flex">
        <a href="/">
          <h2 class="logo">Real State</h2>
        </a>
        <p class="company-description">
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere
          assumenda nulla sit amet consectetur adipisicing elit. Facere
          assumenda nulla
        </p>
        <ul class="list social-media">
          <img src="/images/icons/twitch-icon.svg" alt="twitch icon" class="icon">
          <img src="/images/icons/twitter-icon.svg" alt="twitter icon" class="icon">
          <img src="/images/icons/facebook-icon.svg" alt="facebook icon" class="icon">
        </ul>
      </div>
      <div class="list-footer-categories">
        <div>
          <h6 class="title footer-title">Categories</h6>
          <ul class="list footer-list">
            <li class="list-item">
              <a href="#" class="list-link">Simple Item</a>
            </li>
            <li class="list-item">
              <a href="#" class="list-link">Simple Item</a>
            </li>
            <li class="list-item">
              <a href="#" class="list-link">Simple Item</a>
            </li>
            <li class="list-item">
              <a href="#" class="list-link">Simple Item</a>
            </li>
          </ul>
        </div>

        <div>
          <h6 class="title footer-title">useful links</h6>
          <ul class="list footer-list">
            <li class="list-item">
              <a href="#" class="list-link">Simple Item</a>
            </li>
            <li class="list-item">
              <a href="#" class="list-link">Simple Item</a>
            </li>
            <li class="list-item">
              <a href="#" class="list-link">Simple Item</a>
            </li>
            <li class="list-item">
              <a href="#" class="list-link">Simple Item</a>
            </li>
          </ul>
        </div>

        <div>
          <h6 class="title footer-title">Company</h6>
          <ul class="list footer-list">
            <li class="list-item">
              <a href="#" class="list-link">Simple Item</a>
            </li>
            <li class="list-item">
              <a href="#" class="list-link">Simple Item</a>
            </li>
            <li class="list-item">
              <a href="#" class="list-link">Simple Item</a>
            </li>
            <li class="list-item">
              <a href="#" class="list-link">Simple Item</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <span class="copyright-notice">&copy; 2023 Real State. All rights reserved
    </span>
  </footer>

  <script src="/src/js/index.js" type="module"></script>
</body>

</html>