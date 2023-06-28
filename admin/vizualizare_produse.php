<?php
include("includes/header.php");
?>
<div id="content">
  <div class="container">
    <div class="col-md-12">
      <div class="box">


        <center>
          <h1 style="color:red"><b>Dashboard Administrator</b></h1>
        </center>



      </div>
    </div>

    <div class="col-md-12">
      <div class="box">
        <center>
          <h1>Produse magazin</h1>
        </center><br><br>



        <div class="table-responsive">
          <table class="table">
            <tr>
              <th>Nume</th>
              <th>Pret</th>
              <th>Imagine</th>
              <th>Descriere</th>
              <th>Categorie</th>
              <th>Stoc</th>
              <th>Data introducere</th>
              <th>Update</th>
              <th>Delete</th>
            </tr>
            <?php
            include_once 'conectare.php';
            $sql = "SELECT * FROM produse ";
            $results = mysqli_query($mysqli, $sql);
            if (!$results) {
              die("Invalid query");
            }

            while ($row = mysqli_fetch_array($results)) {

              echo " <tr>
                                          <td>" . $row['produs_nume'] . "</td>
                                         <td>" . $row['produs_pret'] . "</td>
                                          <td>" . $row['produs_img'] . "</td>
                                         <td>" . $row['produs_descriere'] . "</td>
                                         <td>" . $row['cat_id'] . "</td>
                                         <td>" . $row['stoc'] . "</td>
                                         <td>" . $row['product_time'] . "</td>
                                        <td><a  href='modificare_product.php?id=$row[produs_id]'><button type='button' class='btn btn-danger'>Update</button></a></td>
                                         <td><a href='delete_produs.php?id=$row[produs_id]'><button type='button' class='btn btn-danger'>Delete</button></a></a></td>
       
                                       </tr>";
            }

            ?>

          </table>
        </div>
        <div class="form-row bt-sef">
          <center><a href="insert_product.php"><button type="button" class="btn btn-danger">Creare produs</button></a></center>
        </div>










      </div>



    </div>
  </div>


  <script src="js/jquery-331.min.js"></script>
  <script src="js/bootstrap-337.min.js"></script>
</div>
</body>

</html>