<?php
include('dbConnection.php');
        
               if(isset($_POST['save']))
{
               $id = $_GET['id'];
               $first_name = $_POST['first_name'];
               $middle_name = $_POST['middle_name'];
               $last_name = $_POST['last_name'];
               $birthdate = $_POST['birthdate'];
               $gender = $_POST['gender'];
               
               $employee_number = $_POST['employee_number'];
               $employment_date = $_POST['employment_date'];
               $department = $_POST['department'];
               
               $contact_number = $_POST['contact_number'];
               $address = $_POST['address'];
              $position = $_POST['position'];
               $currentYear= date('Y-M-D');
               $age=$_POST['age'];
                              
               
               $email_address = $_POST['email_address'];
               $staff_type = $_POST['staff_type'];
               $path    = '../admin/uploads/photos/';
                $photos = $path. $_FILES['employee_photo']['name']; 
                $filename = $_FILES['employee_photo']['tmp_name'];
               $post_id = $_POST['post_id'];
               (move_uploaded_file($filename,$photos));
               
              $sql =  mysqli_query($con,"update employees set firstname= '$first_name', middlename= '$middle_name',lastname= '$last_name',birthdate= '$birthdate',age= '$age',gender= '$gender',employee_number= '$employee_number',
                                                        employment_date= '$employment_date',department= '$department',contact_number= '$contact_number',address= '$address',position= '$position',email_address= '$email_address',
                                                        staff_type= '$staff_type',photo= '$photos',post_id= '$post_id' where employee_id='$id'") or die(mysql_error());
    }     ?> 
      <?php          if ($sql)
  {
    ?>
    <script>
      alert('Employee Account successfully updated.');
      window.location.href='employees.php.php';
    </script>
    <?php 
  }
  else
  {
    echo "Invalid Entry";
}
