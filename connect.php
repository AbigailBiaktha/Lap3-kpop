<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "kpop";

$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn) {
    echo "connection fail.." . mysqli_connect_error();
}
