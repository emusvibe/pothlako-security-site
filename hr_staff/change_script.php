<?php
	error_reporting(0);
	require_once("dbConnection.php");
	if(isset($_POST['submit']))
	{
	   $id=$_REQUEST['id'];	
            $id = $_POST['id'];
                
		$id = mysqli_real_escape_string($con,$id);
		$id = strip_tags($id);
                       
                        
                $status = $_POST['status'];
		$status = mysqli_real_escape_string($con,$status);
		$status = strip_tags($status);

		$sql = mysqli_query($con,"UPDATE ps_employee_leaves SET leave_status='{$status}' WHERE leave_id='{$id}'");
               $sql = mysqli_query($con,"UPDATE ps_leaves SET leave_status='{$status}' WHERE leave_id='$id'");
       if ($sql)
  {
    ?>
    <script>
      alert('Account successfully updated.');
      window.location.href='leave_applications.php';
    </script>
    <?php 
  }
  else
  {
    echo "Invalid Entry";
  }  
		}
?>






