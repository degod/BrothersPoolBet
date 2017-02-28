<?php

include_once('con_db.php');
$Fname = $_POST['nfname'];
$Lname = $_POST['nlname'];
$Address = $_POST['naddress'];
$City = $_POST['ncity'];
$Country = $_POST['ncountry'];
$Uname = $_POST['nuname'];
$Pass = $_POST['npass'];
$Email = $_POST['nemail'];
$birthDate = $_POST['nday'.'-'.'nmonth'.'-'.'nyear'];
$mobile = $_POST['nmobile'];

    $insert_query = "INSERT INTO regtbl VALUES('$Fname','$Lname','$Address','$City','$Country','$Uname',
			'$Pass','$Email','$birthDate','$mobile')";
    $res = mysqli_query($CONN, $insert_query);

    if ($res == 1) {
        echo 'REGISTRATION SUCCESSFUL';
    } else {
        echo 'NOT INSERTED';
    }
?>