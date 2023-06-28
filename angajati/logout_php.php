<?php
session_start();
session_destroy();
unset($_SESSION['nume']);
header('Location: ../index.php');
?>
