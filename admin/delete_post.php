<?php
include('dbConnection.php');
if (isset($_POST['delete_post'])){
$id=$_POST['selector'];
$N = count($id);
for($i=0; $i < $N; $i++)
{
	$result = mysqli_query($con,"DELETE FROM post where post_id='$id[$i]'");
}
header("location: post.php");
}
?>