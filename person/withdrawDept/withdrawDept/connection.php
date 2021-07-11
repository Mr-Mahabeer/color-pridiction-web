<?php

$servername = "localhost";
$username = "unz2wb5xd8i5";
$password = "Cracker@22";
$dbname = "orionclubs";

$conn = mysqli_connect($servername,$username,$password,$dbname);

if($conn);

else
{
die("connection failed because".mysqli_connect_error());
}




?>
