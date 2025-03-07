<?php
include 'connect.php';
$id = $_GET['updateid'];
$sql = "select * from `seriescrud` where id=$id";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_assoc($result);
$title = $row['title'];
$director = $row['director'];
$year = $row['year'];
$category = $row['category'];


if (isset($_POST['edit'])) {
    $title = $_POST['title'];
    $director = $_POST['director'];
    $year = $_POST['year'];
    $category = $_POST['category'];

    $sql = "update `seriescrud` set title='$title', director='$director', year= '$year', category='$category' where id='$id'";
    $result = mysqli_query($con, $sql);
    if ($result) {
        echo "Edited successfully";
        //header('location:read.php');
    } else {
        die(mysqli_error("Error" + $con));
    }
}
?>

<!doctype html>
<html lang="sv">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Edit data</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>

<body>

    <div class="container my-5">
        <form method="post">


            <legend>My movie storage:</legend>

            <div>
                <input type="radio" name="category" value="thriller">Thriller
            </div>
            <div>
                <input type="radio" name="category" value="romantic">Romantic
            </div>
            <div>
                <input type="radio" name="category" value="swedish">Swedish
            </div>
            <div>
                <input type="radio" name="category" value="Animated">Animated
            </div>
            <div>
                <input type="radio" name="category" value="comedy">Comedy
            </div></br>

            <div class="mb-3">
                <label class="form-label">Title</label>
                <input type="text" class="form-control" placeholder=" " name="title" value=<?php echo $title?>
                autocomplete="off">
            </div>

            <div class="mb-3">
                <label class="form-label">Director</label>
                <input type="text" class="form-control" placeholder=" " name="director" value=<?php echo $director?>
                autocomplete="off">
            </div>

            <div class="mb-3">
                <label class="form-label">Year</label>
                <input type="text" class="form-control" placeholder=" " name="year" value=<?php echo $year?>
                autocomplete="off">
            </div>
            <button class="btn btn-dark btn-lg my-2" name="edit">Edit</button>


        </form>


    </div>



</body>

</html>