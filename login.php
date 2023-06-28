<?php
$errors = array();
include("conectare.php");
session_start();
if (isset($_POST['buton2'])) {


    $client_email = $_POST['email'];
    $client_parola = $_POST['parola'];
    $client_rol;


    if (empty($client_email)) {
        array_push($errors, "Emailul este obligatoriu");
    }
    if (empty($client_parola)) {
        array_push($errors, "Parola este obligatorie");
    }

    if (count($errors) == 0) {
        $password = md5($client_parola);
        $query = "SELECT * FROM users WHERE  email='$client_email'    AND parola='$password'";
        $results = mysqli_query($mysqli, $query);
        $row = mysqli_fetch_array($results);
        if (mysqli_num_rows($results) == 1 && $row["rol"] == "client") {
            $_SESSION['nume'] = "Bine ai venit:&nbsp;&nbsp;" . $row['nume'] . " ! ";
            $_SESSION['id'] =  $row['user_id'];
            if (isset($_SESSION['nume'])) {
                header('location: product.php');
            }
        } else {
            array_push($errors, "Wrong username/password combination");
        }
        if (mysqli_num_rows($results) == 1 && $row["rol"] == "admin") {
            $_SESSION['nume'] =  $row['nume'];

            if (isset($_SESSION['nume'])) {
                header('location: admin/dashboard_admin.php');
            }
        } else {
            array_push($errors, "Wrong username/password combination");
        }
        if (mysqli_num_rows($results) == 1 && $row["rol"] == "angajat") {
            $_SESSION['nume'] =  $row['nume'];
            if (isset($_SESSION['nume'])) {
                header('location: angajati/dashboard_angajat.php');
            }
        } else {
            array_push($errors, "Wrong username/password combination");
        }
    }
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
            <div class="box">

                <center>
                    <h2>Acces cont</h2>

                </center>
                <form action="login.php" method="post">
                    <?php include('errors.php'); ?>

                    <div class="grup-form">

                        <label>Email</label>
                        <br>
                        <input type="email" class="form-control" name="email" require>
                        <br>
                    </div>
                    <div class="grup-form">
                        <label>Parola</label>
                        <br>
                        <input type="password" class="form-control" name="parola" require>
                        <br>
                    </div>
                    <br>
                    <br>
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary" name="buton2">Acces cont</button>
                    </div>
                    <br>
                    <center>
                        <p> Daca nu aveti un cont va putet inregistra</p><a href="register.php">Inregistrare</a>
                    </center>
                </form>
            </div>
        </div>
    </div>
    <?php
    include("includes/footer.php");
    ?>
    <script src="js/jquery-331.min.js"></script>
    <script src="js/bootstrap-337.min.js"></script>
</div>
</body>

</html>