<?php

$servername = "localhost";
$username = "q0uevmwzgsze";
$password = "Cracker@22";
$dbname = "oceanclubs";

$conn = mysqli_connect($servername,$username,$password,$dbname);

if($conn);

else
{
die("connection failed because".mysqli_connect_error());
}




?>
