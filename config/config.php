<?php
$server = "localhost";
$username = "root";
$password = "root";
$dbname = "fprofy";
$port = "8889";

$connection = mysqli_connect($server, $username, $password, $dbname, $port);

if(!$connection){
die("Дещо пішло не так :(");
}

?>
