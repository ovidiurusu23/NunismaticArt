<?php
include 'conectare.php';

$id = $_GET['id'];

if (isset($_POST['btn1'])) {
	$nume = $_POST['nume'];
	$prenume = $_POST['prenume'];
	$email = $_POST['email'];
	$parola = $_POST['parola'];
	$rol = $_POST['rol'];




	$sql = "UPDATE users SET nume='$nume', prenume='$prenume', email='$email', parola='$parola',rol ='$rol' WHERE user_id='$id'";


	if (mysqli_query($mysqli, $sql)) {
		echo "Data update";
		echo ("<script>window.location='vizualizare_user.php'</script>");
	};
}


$id = $_GET['id'];
$sql = "SELECT * FROM users WHERE user_id='$id' ";
$results = mysqli_query($mysqli, $sql);
$row = mysqli_fetch_array($results);
$nume = $row['nume'];
$prenume = $row['prenume'];
$email = $row['email'];
$parola = $row['parola'];
$rol = $row['rol'];

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
										<h3 class="">Modificați datele utilizatorului</h3>
									</b>
								</center>
								<div class="form-group" style="width: 80%; margin: 0 auto">
									<label for="nume">Introduceti numele:</label>
									<input type="text" class="form-control" name="nume" value="<?php echo $nume ?>" />
								</div>
								<br />
								<div class="form-group" style="width: 80%; margin: 0 auto">
									<label for="prenume">Introduceti prenumele:</label>
									<input type="text" class="form-control" name="prenume" value="<?php echo $prenume ?>">
								</div>
								<br />
								<div class="form-group" style="width: 80%; margin: 0 auto">
									<label for="email">Introduceti emailul:</label>
									<input type="email" class="form-control" name="email" value="<?php echo $email ?>">
								</div>
								<br />
								<div class="form-group" style="width: 80%; margin: 0 auto">
									<label for="parola">Introduceti parola:</label>
									<input type="text" class="form-control" name="parola" value="<?php echo $parola ?>">

								</div>
								<br />
								<div class="form-group" style="width: 80%; margin: 0 auto">
									<label for="rol">Introduceti rolul:</label>
									<select class="form-control" name="rol" value="<?php echo $rol ?>">
										<option value="<?php echo $rol ?>"><?php echo $rol ?></option>
										<option value="admin">admin</option>
										<option value="angajat">angajat</option>
										<option value="client">client</option>


									</select>
								</div>
								<br />


								<div class="form-row">
									<center><button type="submit" style="width: 30%;" class=" btn btn-primary" name="btn1">Modificare date user</button></center>
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