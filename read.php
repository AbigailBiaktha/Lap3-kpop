<?php
require('connect.php');

$sql = "SELECT * FROM song";
$query = mysqli_query($conn, $sql);
$totalRow = mysqli_num_rows($query);

while ($row = mysqli_fetch_assoc($query)) {

    echo "
        <tr>
            <td>$row[song_name]</td>
            <td>$row[artist_name]</td>
            <td>$row[type]</td>
            <td>
                <a href='update.php?id=$row[id]'>Update</a> |
                <a href='delete.php?id=$row[id]'>Delete</a>
            </td>
        </tr>
        ";
}
