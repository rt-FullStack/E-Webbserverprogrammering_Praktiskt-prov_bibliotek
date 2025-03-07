<?php
include 'connect.php';

?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Display data</title>

    <style>
        table,
        th,
        td {
            border: 1px solid black;
        }
    </style>

</head>

<body>

    <div class="container my-5">

        <table style="width:100%">
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Director</th>
                <th>Year</th>
                <th>Category</th>
                <th>Edit/Delete</th>
               
            </tr>

            <?php

            // select query

            $sql = "select * from `seriescrud`";
            $result = mysqli_query($con, $sql);

            while ($row = mysqli_fetch_assoc($result)) {

                $id = $row['id'];
                $title = $row['title'];
                $director = $row['director'];
                $year = $row['year'];
                $category = $row['category'];

                echo ' <tr>
        <th scope="row">' . $id . '</th>
        <td>' . $title . '</td>
        <td>' . $director . '</td>
        <td>' . $year . '</td>
        <td>' . $category . '</td>

        <td>
        <a href="edit.php?updateid=' . $id . '">Edit</a>
        <a href="delete.php?deleteid=' . $id . '">Delete</a>
        </td>
      </tr>';
            }

            ?>


        </table>

    </div>

</body>

</html>