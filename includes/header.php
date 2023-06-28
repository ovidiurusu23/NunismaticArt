<?php
$count = 0;
$nume = '';
if (isset($_SESSION["shopping_cart"])) {
  $count = count($_SESSION["shopping_cart"]);
}
if (isset($_SESSION['nume'])) {
  $nume = $_SESSION['nume'];
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>NumismaticArt</title>
  <link rel="stylesheet" href="font-awsome/css/font-awesome.min.css">
  <link rel="stylesheet" href="styles/bootstrap-337.min.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Marck+Script&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="style.css">
</head>

<body>

  <div id="top">
    <div class="container">
      <div class="col-md-6 offer">
        <a href="index.php" class="btn btn btn-warning btn-sm pill">&#128073 Numismatic.Art &#128072</a>

        <p style="display: inline;font-size: 15px;">&nbsp;&nbsp;&nbsp;&nbsp;
          <?php echo $nume ?>
        </p>
      </div>
      <div class="col-md-6">
        <ul class="menu">
          <li>
            <a href="logout_php.php">Logout</a>
          </li>
          <li>
            <a href="register.php">Inregistrare</a>
          </li>
          <li>
            <a href="cart.php">Coșul meu</a>
          </li>
          <li>
            <a href="resetare.php">Resetare parola</a>
          </li>
        </ul>
      </div>
    </div>
  </div>
  <div id="navbar" class="navbar navbar-default">
    <div class="container">
      <div class="navbar-header">
        </a>
        <button class="navbar-toggle" data-toggle="collapse" data-target="#navigation">
          <span class="sr-only">Toggle Navigation</span>
          <i class="fa fa-align-justify"></i>
        </button>
      </div>
      <div class="navbar-collapse collapse justify-content-between" id="navigation">
        <div class="padding-nav">
          <ul class="nav navbar-nav right">

            <li>
              <a href="index.php">Acasă</a>
            </li>
            <li>
              <a href="product.php">Produse</a>
            </li>

            <li>
              <a href="cart.php">Coș</a>
            </li>
            <li>
              <a href="contact.php">Contact</a>
            </li>
            <li>
              <a href="login.php">Login</a>
            </li>

          </ul>

        </div>

        <a href="cart.php" style="float:right;" class="btn navbar-btn btn-success">
          <i class="fa fa-shopping-cart"></i>
          Aveți <span style="color: red;">
            <b><i><?php echo $count ?></i><b>
          </span> produse în cos
        </a>

      </div>


    </div>

  </div>

  </div>