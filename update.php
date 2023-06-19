<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>K-popper</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link href="style.css" rel="stylesheet">
</head>

<body>

    <?php
    require("db_connection.php");
    $id = $_GET['id'];

    $sql = "SELECT * FROM song WHERE id = $id";

    $query = mysqli_query($conn, $sql);

    $data = mysqli_fetch_assoc($query);

    ?>

    <form method="POST">

        <input type="hidden" name="songId" value="<?php echo $data['id']; ?>" required>
        <label>Song Name: </label>
        <input type="text" name="songName" value="<?php echo $data['song_name']; ?>" required><br>
        <label>Artist Name: </label>
        <input type="text" name="artistName" value="<?php echo $data['artist_name']; ?>" required><br>
        <label>Type: </label>
        <select name="type" required>
            <option value="" <?php if ($data['type'] == '') echo 'selected'; ?> disabled>type:</option>
            <option value="Girl Group" <?php if ($data['type'] == 'Girl Group') echo 'selected'; ?>>Girl Group</option>
            <option value="Boy Group" <?php if ($data['type'] == 'Boy Group') echo 'selected'; ?>>Boy Group</option>
            <option value="Mixed Group" <?php if ($data['type'] == 'Mixed Group') echo 'selected'; ?>>Mixed Group</option>
            <option value="Solo" <?php if ($data['type'] == 'Solo') echo 'selected'; ?>>Solo</option>
        </select>

        <button name="updateBtn">Update</button>
    </form>

    <?php
    if (isset($_POST['updateBtn'])) {

        $songName = $_POST['songName'];
        $artistName = $_POST['artistName'];
        $type = $_POST['type'];
        $songId = $_POST['songId'];

        require("db_connection.php");
        $updatesql = "UPDATE song SET song_name = '$songName', artist_name = '$artistName', type = '$type' WHERE id = '$songId'";

        if (mysqli_query($conn, $updatesql)) {
            header("location:index.php");
        }
    }
    ?>

</body>

</html>