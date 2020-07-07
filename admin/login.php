<?php
		include_once 'dbConnection.php';
                $ref=@$_GET['q'];
		session_start();
		$username = $_POST['username'];
		$password = $_POST['password'];
		$query = mysqli_query($con,"SELECT * FROM admin_users WHERE username='$username' AND password='$password'")or die(mysqli_error());
		$count = mysqli_num_rows($query);
		$row = mysqli_fetch_array($query);


		if ($count > 0){
		
		$_SESSION['id']=$row['user_id'];
		header('location:dashboard.php?q=0');
//                header('location:dashboard.php');
		echo 'true admin';
		
		mysqli_query($con,"insert into user_log (username,login_date,user_id)values('$username',NOW(),".$row['user_id'].")")or die(mysqli_error());
		 }else{ 
		header("location: access_denied.html$ref?w=Warning : Access denied");
                 echo 'false';
              
                }		
?>





<?php
//include_once 'dbConnection.php';
//$ref=@$_GET['q'];
//$email = $_POST['uname'];
//$password = $_POST['password'];
//
//$email = stripslashes($email);
//$email = addslashes($email);
//$password = stripslashes($password); 
//$password = addslashes($password);
//$result = mysqli_query($con,"SELECT email FROM admin WHERE email = '$email' and password = '$password'") or die('Error Database connection failed');
//$count=mysqli_num_rows($result);
//if($count==1){
//session_start();
//if(isset($_SESSION['email'])){
//session_unset();}
//$_SESSION["name"] = 'Admin';
//$_SESSION["key"] ='cheda89';
//$_SESSION["email"] = $email;
//header("location:adminDashboad.php?q=0");
//}
//else header("location:$ref?w=Warning : Access denied");
?>