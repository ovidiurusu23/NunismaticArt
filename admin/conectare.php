<?php

$hostname = 'localhost';

$username = 'root';

$password = '';

$db = 'magazin';

$mysqli = new mysqli($hostname, $username, $password,$db);

if(!mysqli_connect_errno())
{
    

}
else
{
echo 'Nu se poate connecta';
exit();
}
?>