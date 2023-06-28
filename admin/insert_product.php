<?php
include_once 'conectare.php';
if (isset($_POST['btn1'])) {
  $nume = $_POST['nume'];
  $pret = $_POST['pret'];
  $poza = $_POST['poza'];
  $descriere = $_POST['descriere'];
  $rol = $_POST['categorie'];
  $stoc = $_POST['stoc'];



  $sql = "INSERT INTO produse(produs_nume,produs_pret,produs_img,produs_descriere,cat_id,stoc) VALUES('$nume','$pret','$poza','$descriere','$rol', '$stoc')";
  $results = mysqli_query($mysqli, $sql);
  if (isset($result)) {
    echo '<script>alert("Produs  inserat")</script>';
    echo '<script>window.location="vizualizare_produse.php"</script>';
  };
}
?>





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
        <section>
          <div class="box2">
            <div class="content_box2">
              <form action="insert_product.php" method="post"><br>
                <center>
                  <b>
                    <h3 class="">Inserati un produs</h3>
                  </b>
                </center>
                <div class="form-group" style="width: 80%; margin: 0 auto">
                  <label for="nume">Introduceti numele produsului:</label>
                  <input type="text" class="form-control" name="nume" />
                </div>
                <br />
                <div class="form-group" style="width: 80%; margin: 0 auto">
                  <label for="pret">Introduceti pretul produsului:</label>
                  <input type="number" class="form-control" name="pret">
                </div>
                <br />
                <div class="form-group" style="width: 80%; margin: 0 auto">
                  <label for="poza">Introduceti poza produsului:</label>
                  <input type="file" class="form-control" name="poza">
                </div>
                <br />
                <div class="form-group" style="width: 80%; margin: 0 auto">
                  <label for="descriere">Introduceti descrierea produsului:</label>
                  <textarea type="text" placeholder="GeeksforGeeks is the computer" class="form-control" name="descriere" rows="10"></textarea>
                </div>
                <br />
                <div class="form-group" style="width: 80%; margin: 0 auto">
                  <label for="categorie">Introduceti categoria produsului:</label>
                  <select class="form-control" name="categorie">
                    <option value="1">aur</option>
                    <option value="7">argint</option>
                    <option value="8">aliaj</option>
                    <option value="9">colectii</option>


                  </select>
                </div>
                <br />
                <div class="form-group" style="width: 80%; margin: 0 auto">
                  <label for="stoc">Introduceti stocul produsului:</label>
                  <input type="number" class="form-control" name="stoc">
                </div>
                <br />


                <div class="form-row">
                  <center><button type="submit" style="width: 30%;" class=" btn btn-primary" name="btn1">Inserare user</button></center>
                  <br>

                  <center><a href="vizualizare_produse.php"><button type="button" style="width: 30%;" class="btn btn-success">Inapoi la tabel</button></a></center>
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