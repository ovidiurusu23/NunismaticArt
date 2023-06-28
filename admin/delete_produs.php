<?php
include_once 'conectare.php';
$id = $_GET['id'];
$sql = "DELETE FROM produse WHERE produs_id=$id";
$result = mysqli_query($mysqli, $sql);
if (isset($result)) {
  echo '<script>alert("Produs sters")</script>';
  echo '<script>window.location="vizualizare_produse.php"</script>';
};
