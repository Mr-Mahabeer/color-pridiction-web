<?php

$servername = "https://remotemysql.com/";
$username = "tJJPWbfdfz";
$password = "yN6Dz3nfnv";
$dbname = "tJJPWbfdfz";

$conn = mysqli_connect($servername,$username,$password,$dbname);

if($conn);

else
{
die("connection failed because".mysqli_connect_error());
}




?>
