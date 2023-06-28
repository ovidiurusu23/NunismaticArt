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
                <li>Resetare parola</li>
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
                    <h2>Resetare parola</h2>
                    <p class="text-muted">
                        Daca aveti intrebari contactati-ne si noi va vom raspunde.
                    </p>
                </center>
                <form action="contul_meu.php" method="post">
                    <div class="grup-form">
                        <label>Parola veche</label>
                        <input type="password" class="form-control" name="parola" require>
                    </div>
                    <div class="grup-form">
                        <label>Parola noua</label>
                        <input type="password" class="form-control" name="parola" require>
                    </div>
                    <div class="grup-form">
                        <label>Comfirmare Parola</label>
                        <input type="password" class="form-control" name="confirmare_parola" require>
                    </div>
                    <br>
                    <br>
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary">Inregistrare</button>
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