<?php
include_once 'conectare.php';
if (isset($_POST['btn1'])) {
  $nume = $_POST['nume'];
  $prenume = $_POST['prenume'];
  $email = $_POST['email'];
  $parola = $_POST['parola'];
  $rol = $_POST['rol'];



  $sql = "INSERT INTO users(nume,prenume,email,parola,rol) VALUES('$username','$prenume','$email','$parola','$rol')";
  $results = mysqli_query($mysqli, $sql);
  if (isset($result)) {
    echo '<script>alert("User inserat")</script>';
    echo '<script>window.location="vizualizare_user.php"</script>';
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
              <form action="insert_users.php" method="post"><br>
                <center>
                  <b>
                    <h3 class="">Inserati un</h3>
                  </b>
                </center>
                <div class="form-group" style="width: 80%; margin: 0 auto">
                  <label for="nume">Introduceti numele:</label>
                  <input type="text" class="form-control" name="nume" />
                </div>
                <br />
                <div class="form-group" style="width: 80%; margin: 0 auto">
                  <label for="prenume">Introduceti prenumele:</label>
                  <input type="text" class="form-control" name="prenume">
                </div>
                <br />
                <div class="form-group" style="width: 80%; margin: 0 auto">
                  <label for="email">Introduceti emailul:</label>
                  <input type="email" class="form-control" name="email">
                </div>
                <br />
                <div class="form-group" style="width: 80%; margin: 0 auto">
                  <label for="parola">Introduceti parola:</label>
                  <input type="text" class="form-control" name="parola">
                </div>
                <br />
                <div class="form-group" style="width: 80%; margin: 0 auto">
                  <label for="rol">Introduceti rolul:</label>
                  <select class="form-control" name="rol">
                    <option value="admin">admin</option>
                    <option value="angajat">angajat</option>
                    <option value="client">client</option>


                  </select>
                </div>
                <br />


                <div class="form-row">
                  <center><button type="submit" style="width: 30%;" class=" btn btn-primary" name="btn1">Inserare user</button></center>
                  <br>

                  <center><a href="vizualizare_user.php"><button type="button" style="width: 30%;" class="btn btn-success">Inapoi la tabel</button></a></center>
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