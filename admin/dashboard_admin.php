<?php
include_once 'conectare.php';
$sql1 = "SELECT * FROM order_detail";
$results = mysqli_query($mysqli, $sql1);
$value = mysqli_num_rows($results);

$sql2 = "SELECT
users.nume,
users.prenume,
  produse.produs_nume,
 order_detail.cantitate,
orders.telefon,
orders.adresa,
orders.judet,
orders.tara
FROM produse 
 
JOIN order_detail
  ON produse.produs_id = order_detail.produs_id 
JOIN orders
  ON  (orders.orders_id = order_detail.orders_id AND orders.adresa IS NOT NULL )
JOIN users
  ON users.user_id = orders.user_id";
$results2 = mysqli_query($mysqli, $sql2);
$value2 = mysqli_num_rows($results2);

$sql3 = "SELECT
users.nume,
users.prenume,
  produse.produs_nume,
 order_detail.cantitate,
orders.telefon,
orders.programare  
FROM produse 
 
JOIN order_detail
  ON produse.produs_id = order_detail.produs_id 
JOIN orders
  ON  (orders.orders_id = order_detail.orders_id AND orders.programare>0 AND orders.programare>=NOW())
JOIN users
  ON users.user_id = orders.user_id";
$results3 = mysqli_query($mysqli, $sql3);
$value3 = mysqli_num_rows($results3);

$sql4 = "SELECT * FROM produse";
$results4 = mysqli_query($mysqli, $sql4);
$value4 = mysqli_num_rows($results4);

$sql5 = "SELECT * FROM users";
$results5 = mysqli_query($mysqli, $sql5);
$value5 = mysqli_num_rows($results5);

$sql6 = "SELECT * FROM produse WHERE stoc=0";
$results6 = mysqli_query($mysqli, $sql6);
$value6 = mysqli_num_rows($results6);


?>
<?php
include("includes/header.php");
?>
<div id="content">
    <div class="container">
        <div class="col-md-12">

            <ul class="breadcrumb">
                <li>
                    <a href="dashboard_admin.php">Dashboard </a>

                </li>
                <li></li>
            </ul>
        </div>
        <div class="col-md-3">
            <?php
            include("includes/sidebar.php");
            ?>
        </div>
        <div class="col-md-9">
            <div class="box">

                <center>
                    <h1 style="color:red"><b>Dashboard Administrator</b></h1>
                    <p class="text-muted">

                    </p>


                </center>







            </div>
            <div class="col-md-4">
                <div class="panel panel-default sidebar-menu panel-primary">
                    <div class="panel-heading">
                        <he class="panel-title"><b>
                                <center>Numarul total al <br>comenzilor</center>
                            </b></he>

                    </div>
                    <div class="panel-body">
                        <center><b>
                                <h1 style="color: #FFA500; font-size: 70px;font-weight: 900;"><?php printf(" %d\n", $value); ?></h1>
                            </b></center>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="panel panel-default panel-primary">
                    <div class="panel-heading">
                        <he class="panel-title"><b>
                                <center>Numarul monedelor comandate pentru livrare</center>
                            </b></he>
                    </div>
                    <div class="panel-body">
                        <center><b>
                                <h1 style="color: #40E0D0; font-size: 70px;font-weight: 700;"><?php printf(" %d\n", $value2); ?></h1>
                            </b></center>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="panel panel-default sidebar-menu panel-primary">
                    <div class="panel-heading ">
                        <he class="panel-title"><b>
                                <center>Numarul monedelor rezervate in magazin</center>
                            </b></he>
                    </div>
                    <div class="panel-body">
                        <center><b>
                                <h1 style="color: #9ACD32; font-size: 70px;font-weight: 900;"><?php printf(" %d\n", $value3); ?></h1>
                            </b></center>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="panel panel-default sidebar-menu panel-primary">
                    <div class="panel-heading">
                        <he class="panel-title"><b>
                                <center>Numarul total al produselor din magazin</center>
                            </b></he>

                    </div>
                    <div class="panel-body">
                        <center><b>
                                <h1 style="color:#00008B; font-size: 70px;font-weight: 900;"><?php printf(" %d\n", $value4); ?></h1>
                            </b></center>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="panel panel-default panel-primary">
                    <div class="panel-heading">
                        <he class="panel-title"><b>
                                <center>Numarul total al <br>userilor</center>
                            </b></he>
                    </div>
                    <div class="panel-body">
                        <center><b>
                                <h1 style="color: #D87093 ;font-size: 70px;font-weight: 700;"><?php printf(" %d\n", $value5); ?></h1>
                            </b></center>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="panel panel-default sidebar-menu panel-primary">
                    <div class="panel-heading ">
                        <he class="panel-title"><b>
                                <center>Numarul monedelor cu stocul epuizat</center>
                            </b></he>
                    </div>
                    <div class="panel-body">
                        <center><b>
                                <h1 style="color: #FF4500; font-size: 70px;font-weight: 900;"><?php printf(" %d\n", $value6); ?></h1>
                            </b></center>
                    </div>
                </div>
            </div>



        </div>
    </div>


    <script src="js/jquery-331.min.js"></script>
    <script src="js/bootstrap-337.min.js"></script>
</div>
</body>

</html>