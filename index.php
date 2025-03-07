<?php
include 'connect.php';
if (isset($_POST['submit'])) {

    $title = $_POST['title'];
    $director = $_POST['director'];
    $year = $_POST['year'];
    $category = $_POST['category'];

    // Insert query

    $sql = "insert into `seriescrud` (title, director, year, category) 
    values ('$title', '$director', '$year', '$category')";

    $result = mysqli_query($con, $sql);
    if ($result) {
        header('location:read.php');
    } else {
        die(mysqli_error($con));
    }
}
?>

<!doctype html>
<html lang="sv">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Projekt: Bibliotek</title>
    <style>
        #myHeader {
            background-color: lightblue;
            color: black;
            padding: 5px;
            text-align: left;
        }

        div {
            border: 1px solid #4CAF50;
        }
    </style>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>

<body>

    <div class="container my-5">
        <form method="post">
            <h4 id="myHeader">MY MOVIE STORAGE</h4>


            <h5>Choose a category</h5>

            <input type="radio" name="category" value="thriller">Thriller </br>

            <input type="radio" name="category" value="romantic">Romantic </br>

            <input type="radio" name="category" value="swedish">Swedish </br>

            <input type="radio" name="category" value="Animated">Animated </br>

            <input type="radio" name="category" value="comedy">Comedy </br>
            </br>
            <label class="form-label">Title</label>
            <input type="text" class="form-control" placeholder=" " name="title" autocomplete="off">
            <label class="form-label">Director</label>
            <input type="text" class="form-control" placeholder=" " name="director" autocomplete="off">
            <label class="form-label">Year</label>
            <input type="text" class="form-control" placeholder=" " name="year" autocomplete="off">

            <button class="btn btn-dark btn-lg my-2" name="submit">Store</button>


        </form>


    </div>



</body>

</html>