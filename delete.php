<?php
include 'connect.php';
$id=$_GET['deleteid'];
//echo $id;
$sql="delete from `seriescrud` where id=$id";
$result=mysqli_query($con, $sql);
if ($result){
    echo "Data deleted successfully";
    //header('location:read.php');
}else 
    die(mysqli_error("Error" + $con));
