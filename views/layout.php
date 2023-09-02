<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- <link rel="stylesheet" href="/build/css/app.css"> -->
  <link rel="stylesheet" href="/src/css/style.css">
  <title>Document</title>
</head>

<body>

  <header>
    <h1>
      <a href="<?php echo ROUTE_HOME ?>">
        Real state
      </a>
    </h1>
  </header>
  <a href="<?php echo ROUTE_ADMIN ?>">
    Admin dashboard
  </a>
  
  <?php echo $content ?>

  <footer>this is a footer</footer>

</body>

</html>