<?php
require('connect.php');

if (isset($_POST['addBtn'])) {
    $artistName = $_POST['artistName'];
    $songName = $_POST['songName'];
    $type = $_POST['type'];

    $sql = "INSERT INTO song (song_name, artist_name, type) VALUES ('$songName', '$artistName', '$type')";

    if (mysqli_query($conn, $sql)) {
        echo "<p class='text-success'>added a song successfully!</p>";
    }
}
