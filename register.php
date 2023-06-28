<?php
$errors = array();
include("conectare.php");


if (isset($_POST['buton1'])) {
    // receive all input values from the form
    $client_nume = $_POST['nume'];
    $client_prenume = $_POST['prenume'];
    $client_email = $_POST['email'];
    $password_1 = $_POST['parola1'];
    $password_2 = $_POST['parola2'];
    $rol = "client";

    // form validation: ensure that the form is correctly filled ...
    // by adding (array_push()) corresponding error unto $errors array
    if (empty($client_nume)) {
        array_push($errors, "Numele este necesar");
    }
    if (empty($client_prenume)) {
        array_push($errors, "Prenumele este necesar");
    }
    if (empty($client_email)) {
        array_push($errors, "Emailul este necesar");
    }
    if (empty($password_1)) {
        array_push($errors, "Parola este necesara");
    }
    if ($password_1 != $password_2) {
        array_push($errors, "Cele 2 parole nu se potrivesc!");
    }
    // first check the database to make sure 
    // a user does not already exist with the same username and/or email
    $user_check_query = "SELECT * FROM users WHERE nume='$client_nume' OR email='$client_email' LIMIT 1";
    $result = mysqli_query($mysqli, $user_check_query);
    $user = mysqli_fetch_assoc($result);

    if ($user) { // if user exists
        if ($user['nume'] === $client_nume) {
            array_push($errors, "Acest nume mai există");
        }

        if ($user['email'] === $client_email) {
            array_push($errors, "Acest email mai există");
        }
    }

    // Finally, register user if there are no errors in the form
    if (count($errors) == 0) {
        $password = md5($password_1); //encrypt the password before saving in the database

        $query = "INSERT INTO users (nume, prenume, email, parola, rol) 
  			  VALUES('$client_nume', '$client_prenume', '$client_email', '$password', '$rol')";
        mysqli_query($mysqli, $query);
        $_SESSION['username'] = $username;
        $_SESSION['success'] = "You are now logged in";
        header('location: index.php');
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
                <li>Inregistrare</li>
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
                    <h2>Inregistrare cont</h2>

                </center>
                <form action="register.php" method="post">
                    <div class="grup-form">
                        <label>Nume</label>
                        <input type="text" class="form-control" name="nume" require>

                    </div>
                    <div class="grup-form">
                        <label>Prenume</label>
                        <input type="text" class="form-control" name="prenume" require>
                    </div>
                    <div class="grup-form">
                        <label>Email</label>
                        <input type="email" class="form-control" name="email" require>
                    </div>
                    <div class="grup-form">
                        <label>Parola</label>
                        <input type="password" class="form-control" name="parola1" require>
                    </div>
                    <div class="grup-form">
                        <label>Comfirmare Parola</label>
                        <input type="password" class="form-control" name="parola2" require>
                    </div>
                    <br>
                    <br>
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary" name="buton1">Inregistrare</button>
                    </div>
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