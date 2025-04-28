<?php
  error_reporting(E_ALL);
  ini_set('display_errors',1);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Epic Adventure Gear</title>
  <link rel="stylesheet" href="styles.css">
  <link type="image/x-icon" sizes="16x16" rel="icon" href="../img/Untitled-2.svg">
</head>
<body>

  <?php include "../php/header.php"; ?>
  
  <main class="products-page">

  <h1>Our Products</h1>

    <?php
      include "../php/connectToDatabase.php";

      if (isset($_GET['category'])) {
        echo '<h2>Category: '.htmlspecialchars($_GET['category']).'</h2>';
        include "../php/displayOneCategoryItems.php";
      } else {
        echo '<h2>Product Categories</h2>';
        include "../php/displayListOfCategories.php";
      }
      mysqli_close($db);
    ?>

<p class="intro">
        Need help with what to buy? Check out our <a
            href="whatToBuy.php">product comparison page</a> to find what
        fits your needs!
    </p>
  </main>

  <?php include "../php/footer.php"; ?>
</body>
</html>
