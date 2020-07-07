<?php
include('dbConnection.php');
        
               $un = $_POST['un'];
               $fn = $_POST['fn'];
               $ln = $_POST['ln'];
               $post_id = $_POST['post_id'];

               mysqli_query($con,"insert into guards (username,firstname,lastname,photo,post_id,status)
		values ('$un','$fn','$ln','uploads/NO-IMAGE-AVAILABLE.jpg','$post_id','Unregistered')                                    
		") or die(mysql_error()); ?>
<?php    ?>