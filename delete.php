<?php

require_once('connect.php');
$id = $_GET['id'];

$sql = " DELETE FROM song WHERE id = $id";

if (mysqli_query($conn, $sql)) {
    header("location:index.php");
} else {
    echo "Delete Fail";
};