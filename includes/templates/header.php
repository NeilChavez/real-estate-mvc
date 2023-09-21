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
            <a href="<?php echo ROUTE_ABOUT_US ?>" class="list-link">About Us</a>
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