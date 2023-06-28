<?php
include("includes/header.php");
?>
<div id="content">
  <div class="container">
    <div class="col-md-12">
      <div class="box">


        <center>
          <h1 style="color:red"><b>Dashboard Angajati</b></h1>
        </center>



      </div>
    </div>

    <div class="col-md-12">

      <div class="box">
        <center>
          <h1>Vizualizare livrari produse</h1>
        </center><br><br>



        <div class="table-responsive">
          <table class="table">
            <tr>
              <th>Nume</th>
              <th>Prenume</th>
              <th>Produs</th>
              <th>Cantitate</th>
              <th>Telefon</th>
              <th>Adresa</th>
              <th>Judet</th>
              <th>Tara</th>

            </tr>
            <?php
            include_once 'conectare.php';
            $sql = "SELECT
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
              ON users.user_id = orders.user_id;
            ";

            $results = mysqli_query($mysqli, $sql);
            if (!$results) {
              die("Invalid query");
            }

            while ($row = mysqli_fetch_array($results)) {

              echo " <tr>
                                          <td>" . $row['nume'] . "</td>
                                         <td>" . $row['prenume'] . "</td>
                                          <td>" . $row['produs_nume'] . "</td>
                                         <td>" . $row['cantitate'] . "</td>
                                         <td>" . $row['telefon'] . "</td>
                                         <td>" . $row['adresa'] . "</td>
                                         <td>" . $row['judet'] . "</td>
                                         <td>" . $row['tara'] . "</td>
                                       </tr>";
            }

            ?>
          </table>
        </div>
      </div>
    </div>
  </div>
  <script src="js/jquery-331.min.js"></script>
  <script src="js/bootstrap-337.min.js"></script>
</div>
</body>

</html>