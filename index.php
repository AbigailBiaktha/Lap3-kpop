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
<div class="container bg-white border-start border-end border-5 border-danger">
        <img src="image/gidle.jpg" width="100%" height="300px;">

        <h1 class="text-center border-danger fw-bold font-monospace">THE K-POP SONGS</h1>

        <h3 class="ms-3"><u>Enter a k-pop song that you like into the Database: </u></h3>
        <div class="mt-5 mx-5 pb-5 mb-3">
            <form method="POST">
                <div class="row">
                    <div class="col-4 ">
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control border border-dark" id="artistName" name="artistName" placeholder="" required>
                            <label for="artistName">Artist Name:</label>
                        </div>
                    </div>
                    <div class="col-4 ms-5">
                        <select class="form-select form-select-lg" aria-label="Default select example" name="type" required>
                            <option value="" selected disabled>type:</option>
                            <option value="Girl Group">Girl Group</option>
                            <option value="Boy Group">Boy Group</option>
                            <option value="Mixed Group">Mixed Group</option>
                            <option value="Solo">Solo</option>
                        </select>
                    </div>
                </div>

                <div class="row mt-5">
                    <div class="col-4 ">
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control border border-dark" id="songName" name="songName" placeholder="" required>
                            <label for="songName">Song Name:</label>
                        </div>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-6">
                        <p class="text-end">Click the button to add: </p>
                    </div>
                    <div class="col-4">
                        <button type="submit" class="btn btn-danger" name="addBtn">Add Song</button>

                    </div>
                </div>

            </form>
            <?php require('insertion.php'); ?>


        </div>




    </div>



    <table>

    </table>
    </div>


</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

</html>