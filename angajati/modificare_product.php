<?php
include_once 'conectare.php';
$id = $_GET['id'];

if (isset($_POST['btn1'])) {

  $stoc = $_POST['stoc'];



  $sql = "UPDATE produse SET  stoc='$stoc' WHERE produs_id='$id'";

  if (mysqli_query($mysqli, $sql)) {
    echo "Data update";
    echo ("<script>window.location='modificare_stoc.php'</script>");
  };
}
$sql = "SELECT * FROM produse WHERE produs_id='$id' ";
$results = mysqli_query($mysqli, $sql);
$row = mysqli_fetch_array($results);
$stoc = $row['stoc'];
?>





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
        <section>
          <div class="box2">
            <div class="content_box2">
              <form action="" method="POST"><br>
                <center>
                  <b>
                    <h3 class="">Modificati stocul produsul</h3>
                  </b>
                </center>

                <br />
                <div class="form-group" style="width: 20%; margin: 0 auto">
                  <label for="stoc">Introduceti stocul produsului:</label>
                  <input type="number" class="form-control" name="stoc" value="<?php echo $stoc ?>">
                </div>
                <br />


                <div class="form-row">
                  <center><button type="submit" style="width: 30%;" class=" btn btn-primary" name="btn1">Modificare stoc produs</button></center>
                  <br>

                  <center><a href="modificare_stoc.php"><button type="button" style="width: 30%;" class="btn btn-success">Inapoi la tabel</button></a></center>
                </div>

              </form>



            </div>
          </div>
        </section>
      </div>
    </div>
  </div>
</div>
</body>

</html>