<?php include('dbConnection.php'); ?>
<?php
$id = $_POST['id'];
mysqli_query($con,"delete from teacher_class_announcements where teacher_class_announcements_id = '$id'")or die(mysql_error());
mysqli_query($con,"delete from teacher_class_announcements where teacher_class_announcements_id = '$id'")or die(mysql_error());
?>

