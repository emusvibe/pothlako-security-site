<?php
include('dbConnection.php');
$id = $_POST['id'];
$get_id = $_POST['get_id'];
mysqli_query($con,"delete from assignment where assignment_id = '$id' ")or die(mysql_error());
?>
<script>
	window.location = 'assignment.php<?php echo '?id='.$get_id; ?>'
</script>