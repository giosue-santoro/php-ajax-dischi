<?php
require_once __DIR__ . '/database/database.php';
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="css/app.css">
  <script src="https://cdn.jsdelivr.net/npm/vue"></script>
  <script src="js/script.js" defer></script>
  <title>php-ajax-dischi</title>
</head>
<body>
  <div id="app">
    <header>
      <div class="container">
        <img src="img/logo.png" alt="logo" />
      </div>
    </header>

    <div class="cds-container container">
      <?php foreach ($dischi as $disco) { ?>
        
        <div class="cd">
          <img src="<?php echo $disco['poster'] ?>" alt="">
          <h3><?php echo $disco['title'] ?></h3>
          <span class="author"><?php echo $disco['author'] ?></span>
          <span class="year"><?php echo $disco['year'] ?></span>
        </div>

      <?php } ?>
    </div>
  </div>
</body>
</html>
