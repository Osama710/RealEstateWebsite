<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "realestate";

$conn = mysqli_connect($servername, $username, $password, $database);
if (!$conn){
    die("Could not Connect My Sql: ". mysqli_error());
}
?>