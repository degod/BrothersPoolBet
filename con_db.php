<?php

$host = "localhost";
$user = "root";
$pass = "";
$db = "brotherspoolbet";
$CONN = mysqli_connect($host, $user, $pass, $db);

if(mysqli_connect_errno()){
   // echo 'Connection failed: ' .mysqli_error($CONN);
}else{
    // echo "Connected";
}


?>