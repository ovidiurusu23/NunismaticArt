<?php
session_start();
include("includes/header.php");
?>
<div class="container" id="slider">

    <div class="col-md-12">

        <div class="carousel slide" id="myCarousel" data-ride="carousel">

            <ol class="carousel-indicators">

                <li class="active" data-target="#myCarousel" data-slide-to="0"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
                <li data-target="#myCarousel" data-slide-to="3"></li>

            </ol>

            <div class="carousel-inner ">

                <div class="item active">

                    <img src="admin/admin_images/111.jpg" alt="Slider Image 1">
                    <div class="carousel-caption">
                        <b>
                            <h1 id="texte" style="color:#efffff; text-shadow: 3px 3px 5px #000000;letter-spacing: 7px;font-family: Marck Script, cursive;">„Banii nu sunt singurul răspuns, dar fac diferenţa” – Barack Obama</h1>
                        </b><br><br><br><br><br><br><br>
                    </div>

                </div>

                <div class="item">

                    <img src="admin/admin_images/222.jpg" alt="Slider Image 2">
                    <div class="carousel-caption ">
                        <b>
                            <h1 id="texte" style="color:#efffff; text-shadow: 3px 3px 5px #000000;letter-spacing: 7px;font-family: Marck Script, cursive;">„Un om înţelept trebuia să aibă banii în cap, nu în mână” – Jonathan Swift</h1>
                        </b><br><br><br><br><br><br><br>
                    </div>
                </div>
                <div class="item">
                    <img src="admin/admin_images/333.jpg" alt="Slider Image 3">
                    <div class="carousel-caption">
                        <b>
                            <h1 id="texte" style="color: #efffff; text-shadow: 3px 3px 5px #000000;letter-spacing: 7px;font-family: Marck Script, cursive;">„Banul vorbeşte în limba înţeleasă de toate naţiunile” – Aphra Behn</h1>
                        </b><br><br><br><br><br><br><br>
                    </div>
                </div>
                <div class="item">
                    <img src="admin/admin_images/444.jpg" alt="Slider Image 4">
                    <div class="carousel-caption">
                        <b>
                            <h1 id="texte" style="color:#efffff; text-shadow: 3px 3px 5px #000000;letter-spacing: 7px;font-family: Marck Script, cursive;">„Banii înseamnă putere, iar puterea îţi oferă posibilitatea de alegere.” – Sam Rockwell</h1>
                        </b><br><br><br><br><br><br><br>
                    </div>
                </div>
            </div>
            <a href="#myCarousel" class="left carousel-control" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a href="#myCarousel" class="right carousel-control" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
</div>
<?php
include("includes/footer.php");
?>
<script src="js/jquery-331.min.js"></script>
<script src="js/bootstrap-337.min.js"></script>
</body>

</html>