<?php
include_once 'conectare.php';
$id = $_GET['id'];

if (isset($_POST['btn1'])) {
  $nume = $_POST['nume'];
  $pret = $_POST['pret'];
  $poza = $_POST['poza'];
  $descriere = $_POST['descriere'];
  $rol = $_POST['categorie'];
  $stoc = $_POST['stoc'];



  $sql = "UPDATE produse SET produs_nume='$nume', produs_pret='$pret', produs_img='$poza', produs_descriere='$descriere',cat_id='$rol', stoc='$stoc' WHERE produs_id='$id'";

  if (mysqli_query($mysqli, $sql)) {
    echo "Data update";
    echo ("<script>window.location='vizualizare_produse.php'</script>");
  };
}
$sql = "SELECT * FROM produse WHERE produs_id='$id' ";
$results = mysqli_query($mysqli, $sql);
$row = mysqli_fetch_array($results);
$nume = $row['produs_nume'];
$pret = $row['produs_pret'];
$poza = $row['produs_img'];
$descriere = $row['produs_descriere'];
$rol = $row['cat_id'];
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
          <h1 style="color:red"><b>Dashboard Administrator</b></h1>
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
                    <h3 class="">Modificati produsul</h3>
                  </b>
                </center>
                <div class="form-group" style="width: 80%; margin: 0 auto">
                  <label for="nume">Introduceti numele produsului:</label>
                  <input type="text" class="form-control" name="nume" value="<?php echo $nume ?>" />
                </div>
                <br />
                <div class="form-group" style="width: 80%; margin: 0 auto">
                  <label for="pret">Introduceti pretul produsului:</label>
                  <input type="number" class="form-control" name="pret" value="<?php echo $pret ?>">
                </div>
                <br />
                <div class="form-group" style="width: 80%; margin: 0 auto">
                  <label for="poza">Introduceti poza produsului:</label>
                  <input type="file" class="form-control" name="poza" value="\admin\product_images">
                </div>
                <br />
                <div class="form-group" style="width: 80%; margin: 0 auto">
                  <label for="descriere">Introduceti descrierea produsului:</label>
                  <textarea type="text" class="form-control" name="descriere" rows="10"><?php echo $descriere ?></textarea>
                </div>
                <br />
                <div class="form-group" style="width: 80%; margin: 0 auto">
                  <label for="categorie">Introduceti categoria produsului:</label>
                  <select class="form-control" name="categorie" value="<?php echo $rol ?>">
                    <option value="<?php switch ($rol) {
                                      case 9:
                                        echo "colectii";
                                        break;
                                      case 7:
                                        echo "argint";
                                        break;
                                      case 1:
                                        echo "aur";
                                      case 8:
                                        echo "aliaj";
                                        break;
                                    } ?>"><?php switch ($rol) {
                                            case 9:
                                              echo "colectii";
                                              break;
                                            case 7:
                                              echo "argint";
                                              break;
                                            case 1:
                                              echo "aur";
                                            case 8:
                                              echo "aliaj";
                                              break;
                                          } ?></option>
                    <option value="1">aur</option>
                    <option value="7">argint</option>
                    <option value="8">aliaj</option>
                    <option value="9">colectii</option>


                  </select>
                </div>
                <br />
                <div class="form-group" style="width: 80%; margin: 0 auto">
                  <label for="stoc">Introduceti stocul produsului:</label>
                  <input type="number" class="form-control" name="stoc" value="<?php echo $stoc ?>">
                </div>
                <br />


                <div class="form-row">
                  <center><button type="submit" style="width: 30%;" class=" btn btn-primary" name="btn1">Modificare produs</button></center>
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