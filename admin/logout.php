<?php
include_once 'dbConnection.php';
include('session.php');
mysqli_query($con,"update user_log set logout_Date = NOW() where user_id = '$session_id' ")or die(mysql_error());

 session_destroy();
header('location:../login.html'); 
?>