<?php
include('dbConnection.php');
include('session.php');
if (isset($_POST['read'])){
$id=$_POST['selector'];
$N = count($id);
for($i=0; $i < $N; $i++)
{
	mysqli_query($con,"update hr_notification SET hr_read = 'yes'")or die(mysql_error());	
}
?>
<script>
window.location = 'hr_notification.php';
</script>
<?php
}
?>