<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <meta name="description" content="The Area and Perimeter program,in PHP" />
  <meta name="keywords" content="mths, icd2o" />
  <meta name="author" content="Shanea Jaromay" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="./css/style.css" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
  <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.blue_grey-blue.min.css" />
  <link rel="apple-touch-icon" sizes="180x180" href="./images/apple-touch-icon.png" />
  <link rel="icon" type="image/png" sizes="32x32" href="./images/favicon-32x32.png" />
  <link rel="icon" type="image/png" sizes="16x16" href="./images/favicon-16x16.png" />
  <link rel="manifest" href="./images/site.webmanifest" />
  <title>The Area and Perimeter Program, in PHP</title>
</head>

<body>
  <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
  <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
    <header class="mdl-layout__header">
      <div class="mdl-layout__header-row">
        <span class="mdl-layout-title">The dimensions of a rectangle are: 5 cm and 3 cm.</span>
      </div>
    </header>
    <main class="mdl-layout__content">
      <div class="right-image">
        <img src="./images/area_and_perimeter (1).png" alt="math image" />
      </div>
      <div class="page-content-php">
        <?php echo '<p>The area is: ' . (5 * 3) . 'cm²</p>'; ?>
        <?php echo '<p>The perimeter is: ' . (2 * 5 + 2 * 3) . 'cm</p>'; ?>
      </div>
      <br />
      <div class="page-content-answer">
        <a href="./index.php">Return ...</a>
      </div>
    </main>
  </div>
</body>

</html>