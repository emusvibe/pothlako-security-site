<?php
include('dbConnection.php');
if (isset($_POST['delete_event'])){
$get_id = $_POST['get_id'];
$id = $_POST['id'];
mysqli_query($con,"delete from event where event_id = '$id'")or die(mysql_error());
?>
<script>
window.location = 'class_calendar.php<?php echo '?id='.$get_id; ?>';
</script>
<?php
}
?>