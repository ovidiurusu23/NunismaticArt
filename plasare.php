<?php
session_start();
include("conectare.php");
$total = $_POST['total'];
$customer_id = $_SESSION['id'];
$adresa = $_POST['adresa'];
$oras = $_POST['oras'];
$judet = $_POST['judet'];
$tara = $_POST['tara'];
$cod_postal = $_POST['cod_postal'];
$nr_telefon = $_POST['nr_telefon'];


$query = "INSERT INTO orders (user_id, adresa, oras, judet, tara, cod_postal, telefon, total) 
  			  VALUES('$customer_id', '$adresa', '$oras', '$judet', '$tara', '$cod_postal', '$nr_telefon', '$total')";
mysqli_query($mysqli, $query);

$query2 = "SELECT orders_id FROM orders ORDER BY orders_id DESC limit 1";
$result = mysqli_query($mysqli, $query2);
$row = mysqli_fetch_array($result);
$orderid = $row['orders_id'];

foreach ($_SESSION['shopping_cart'] as $key => $value) {
  $proid = $value['item_id'];
  $item_quantity = $value['item_quantity'];

  $query3 = "INSERT INTO order_detail (orders_id, produs_id, cantitate) 
  			  VALUES('$orderid', '$proid', '$item_quantity')";
  mysqli_query($mysqli, $query3);
};

$sql = "SELECT produs_id, cantitate FROM order_detail";
$results = mysqli_query($mysqli, $sql);
while ($row = mysqli_fetch_assoc($results)) {
  $id = $row['produs_id'];
  $cantitate = $row['cantitate'];
  $sqli = "SELECT stoc FROM produse WHERE produs_id='$id'";
  $result = mysqli_query($mysqli, $sqli);
  $row2 = mysqli_fetch_array($result);
  $stoc = $row2['stoc'];
  $diferenta = $stoc - $cantitate;
  $sql2 = "UPDATE produse SET stoc='$diferenta' WHERE produs_id='$id'";
  $resultss = mysqli_query($mysqli, $sql2);
}
?>
<?php
include("includes/header.php");
?>
<div id="content">
  <div class="container">
    <div class="col-md-12">
      <ul class="breadcrumb">
        <li>
          <a href="index.php">Acasa</a>
        </li>
        <li>Acces cont</li>
      </ul>
    </div>
    <div class="col-md-3">
      <?php
      include("includes/sidebar.php");
      ?>
    </div>
    <div class="col-md-9">
      <h1 class="text-center text-primary"><b>Comanda a fost efectuată!</b></h1><br>
      <h3 class="text-center text-success">Produsele vor fi livrate la adresa: <?php echo "$adresa"; ?></h3><br>
      <h3 class="text-center text-success">Totalul de plata este: <?php echo "$total"; ?> Lei</h3><br>
      <h3 class="text-center text-success">Vă multumim pentru cumpărarea produselor noastre.</h3><br>
      <br>

      <center><a class="btn btn-primary" href="index.php">
          <i class="fa fa-arrow-left fa-lg"></i> Magazin</a></center><br><br>
    </div>
  </div>




</div>
</div>
<?php
include("includes/footer.php");
?>
<script src=" js/jquery-331.min.js"></script>
<script src="js/bootstrap-337.min.js"></script>

</body>

</html>