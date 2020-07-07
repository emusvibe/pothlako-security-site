<?php
include('dbConnection.php');
$id = $_POST['id'];
mysqli_query($con,"delete from teacher_class_student where teacher_class_student_id = '$id'")or die(mysql_error());
?>

