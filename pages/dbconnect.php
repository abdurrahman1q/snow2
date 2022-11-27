<?php
$servername = "sql305.ezyro.com";
$username = "ezyro_32967575";
$password = "@iamar64870@";
$database = "ezyro_32967575_book";



$conn= mysqli_connect($servername, $username, $password, $database);
if(!$conn){
    die("Error".mysqli_connect_error());

}