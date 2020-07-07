<?php
include('dbConnection.php');
$id = $_POST['id'];
mysqli_query($con,"delete from files where file_id = '$id' ")or die(mysql_error());
?>
