<?php
$HOSTNAME="localhost";
$USERNAME='root';
$PASSWORD='';
$DATABaSE='crudseries';

$con=mysqli_connect($HOSTNAME,$USERNAME,$PASSWORD,$DATABaSE);

/*
if($con){
    echo "Connection lyckades!";
}else{
    die(mysqli_error("Error"+$con));
}

*/

if(!$con){
   die(mysqli_error("Error"+$con));
}
