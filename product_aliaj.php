<?php
session_start();
include("includes/header.php");
?>
<div id="content">
    <div class="container">
        <div class="col-md-12">
            <ul class="breadcrumb">
                <li>
                    <a href="index.php">Acasa</a>
                </li>
                <li>Produse</li>
                <li>Aliaj</li>
            </ul>
        </div>
        <div class="col-md-3">
            <?php
            include("includes/sidebar.php");
            ?>
        </div>
        <div class="col-md-9">


            <?php
            include("conectare.php");
            $result = mysqli_query($mysqli, "SELECT * FROM `produse` WHERE  cat_id='8'");
            while ($row = mysqli_fetch_assoc($result)) {
            ?>
                <div id='box'>
                    <center>
                        <div class='col-md-4 col-sm-6 center-responsive'>
                            <div class='ovidiu'>
                                <form method='POST' action='cart.php?action=add&id=<?php echo $row["produs_id"]; ?>'>
                                    <div class='image'><img src="<?php echo $row["produs_img"]; ?>" width='180' height='160' s /></div><br>
                                    <h4 class="text-info"><b><?php echo $row["produs_nume"]; ?></b></h4>


                                    <h4 class="text-danger"><b><?php echo $row["produs_pret"]; ?> Lei</b></h4>
                                    <br>
                                    <?php
                                    if ($row['stoc'] == 0 || $row['stoc'] < 0) {

                                        echo "<p style='letter-spacing: 2px; color: red'>Stoc insuficient</p>";
                                    } else {
                                        echo "<p style='letter-spacing: 2px; color: green'>În stoc</p>";
                                    }
                                    ?>

                                    <input type="hidden" name="hidden_name" value="<?php echo $row["produs_nume"]; ?>" />
                                    <input type="hidden" name="hidden_price" value="<?php echo $row["produs_pret"]; ?>" />
                                    <input type='number' name='quantity' value='1' class='form-control' style='width: 25%;margin-bottom: 30px;'>
                                    <input type='submit' name='add_to_cart' value='Cumpara' class='btn btn-success' ;>
                                    <a href='detalii.php?id=<?php echo $row["produs_id"]; ?>><button type=' button' class='btn btn-primary'>Detalii</button></a>
                                </form>
                            </div>
                        </div>
                    </center>
                </div> <?php
                    }
                        ?>


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