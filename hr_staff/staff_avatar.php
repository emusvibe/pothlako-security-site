 <?php
 include('dbConnection.php');
 include('session.php');
 
 
                            if (isset($_POST['change'])) {
                               

                                $image = addslashes(file_get_contents($_FILES['image']['tmp_name']));
                                $image_name = addslashes($_FILES['image']['name']);
                                $image_size = getimagesize($_FILES['image']['tmp_name']);

                                move_uploaded_file($_FILES["image"]["tmp_name"], "../admin/uploads/" . $_FILES["image"]["name"]);
                                $location = "uploads/" . $_FILES["image"]["name"];
								
								mysqli_query($con,"update  admin_staff set photo = '$location' where staff_id  = '$session_id' ")or die(mysql_error());
								
								?>
 
								<script>
								window.location = "dasboard_staff.php";  
								</script>

                       <?php     }  ?>