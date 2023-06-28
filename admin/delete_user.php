<?php
include_once 'conectare.php';
$id = $_GET['id'];
$sql = "DELETE FROM users WHERE user_id=$id";
$result = mysqli_query($mysqli, $sql);
if (isset($result)) {
    echo '<script>alert("User sters")</script>';
    echo '<script>window.location="vizualizare_user.php"</script>';
};
