<?php
include('dbConnection.php');
$get_id = $_GET['id'];
mysqli_query($con,"update admin_staff set staff_stat = 'Deactivated' where staff_id = '$get_id'");
header('location:admin_staff.php');
?>