<?php

$host = "localhost";
$username = "root";
$password = "";
$database = "rekodpekerja";

$conn = mysqli_connect($host,$username,$password,$database);

//connection to database
if (!$conn){
echo "no connection!";
}
?>