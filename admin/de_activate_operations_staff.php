<?php
include('dbConnection.php');
$get_id = $_GET['id'];
mysqli_query($con,"update operations_staff set operations_staff_stat = 'Deactivated' where operations_staff_id = '$get_id'");
header('location:operations_staff.php');
?>