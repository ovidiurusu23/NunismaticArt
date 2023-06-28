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
                    <h1>Inregistrarile actorilor</h1>
                </center><br><br>



                <div class="table-responsive">
                    <table class="table">
                        <tr>
                            <th>Nume</th>
                            <th>Prenume</th>
                            <th>Email</th>
                            <th>Parola</th>
                            <th>Rol</th>
                            <th>Data inregistrare</th>
                            <th>Update</th>
                            <th>Delete</th>
                        </tr>
                        <?php
                        include_once 'conectare.php';
                        $sql = "SELECT * FROM users ";
                        $results = mysqli_query($mysqli, $sql);
                        if (!$results) {
                            die("Invalid query");
                        }

                        while ($row = mysqli_fetch_array($results)) {

                            echo " <tr>
                                          <td>" . $row['nume'] . "</td>
                                         <td>" . $row['prenume'] . "</td>
                                          <td>" . $row['email'] . "</td>
                                         <td>" . $row['parola'] . "</td>
                                         <td>" . $row['rol'] . "</td>
                                         <td>" . $row['create_at'] . "</td>
                                        <td><a  href='modificare_user.php?id=$row[user_id]'><button type='button' class='btn btn-danger'>Update</button></a></td>
                                         <td><a href='delete_user.php?id=$row[user_id]'><button type='button' class='btn btn-danger'>Delete</button></a></a></td>
       
                                       </tr>";
                        }

                        ?>

                    </table>
                </div>
                <div class="form-row bt-sef">
                    <center><a href="insert_users.php"><button type="button" class="btn btn-danger">Creare user</button></a></center>
                </div>










            </div>



        </div>
    </div>


    <script src="js/jquery-331.min.js"></script>
    <script src="js/bootstrap-337.min.js"></script>
</div>
</body>

</html>