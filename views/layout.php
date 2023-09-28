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
  <link rel="shortcut icon" type="image/png" href="/images/icons/favicon.svg" />
  <link rel="stylesheet" type="text/css" href="/src/css/styles.css" />
  <title>Real Estate</title>
</head>

<body>


  <!-- Header -->

  <?php include __DIR__ . "/../includes/templates/header.php" ?>

  <main>
    <?php echo $content ?>
  </main>

  <?php include __DIR__ . "/../includes/templates/footer.php" ?>

  <script src="/src/js/index.js" defer type="module"></script>
</body>

</html>