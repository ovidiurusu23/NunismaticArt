<?php
session_start();
$nume = '';

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
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Libre+Baskerville&display=swap" rel="stylesheet">
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
        <a href="dashboard_admin.php" class="btn btn btn-warning btn-sm pill">&#128073 Numismatic.Art &#128072</a>
        <p style="display: inline;font-size: 15px;">&nbsp;&nbsp;&nbsp;&nbsp;<b>Bine ai venit:
            <?php echo $nume ?> !
          </b></p>

      </div>
      <div class="col-md-6">
        <ul class="menu">
          <li>
            <a href="logout_php.php">
              <h5>Logout</h5>
            </a>
          </li>

        </ul>
      </div>
    </div>
  </div>
  <div id="navbar" class="navbar">
    <div class="container">
      <div class="padding-nav ">
        <ul class="nav navbar-nav navbar-right">

          <li>
            <a href="vizualizare_produse.php">Produse</a>
          </li>
          <li>
            <a href="vizualizare_user.php">Useri</a>
          </li>

          <li>
            <a href="vizualizare_programari.php">Programari</a>
          </li>
          <li>
            <a href="vizualizare_livrari.php">Comenzi</a>
          </li>


        </ul>
      </div>
    </div>
  </div>