<?php
		include_once 'dbConnection.php';
		$ref=@$_GET['q'];
                session_start();
		$username = $_POST['username'];
		$password = $_POST['password'];

                /* teacher */
		$query_teacher = mysqli_query($con,"SELECT * FROM admin_staff WHERE username='$username'AND password='$password' AND staff_status ='Registered'")or die(mysql_error());
		$num_row_teacher = mysqli_num_rows($query_teacher);
		$row_teacher = mysqli_fetch_array($query_teacher);
		if( $num_row_teacher > 0 ) { 
                $_SESSION['id']=$row_teacher['staff_id'];
                header('location:dasboard_staff.php?q=0');
		echo 'true staff';
              
		 }else{ 
		 
                 header('location: access_denied.html$ref?w=Warning : Access denied');
                 echo 'false';
		}	
				
		?>
