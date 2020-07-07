<?php
include('dbConnection.php');
        
               if(isset($_POST['save']))
{
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
               $age=$currentYear- $birthdate;
                              
               
               $email_address = $_POST['email_address'];
               $staff_type = $_POST['staff_type'];
               $path    = '../admin/uploads/photos/';
                $photos = $path. $_FILES['employee_photo']['name']; 
                $filename = $_FILES['employee_photo']['tmp_name'];
               $post_id = $_POST['post_id'];
               (move_uploaded_file($filename,$photos));
               
                mysqli_query($con,"insert into employees (firstname,middlename,lastname,birthdate,age,gender,employee_number,employment_date,department,contact_number,address,position,email_address,staff_type,photo,post_id)
		values ('$first_name','$middle_name','$last_name','$birthdate','$age','$gender','$employee_number','$employment_date','$department','$contact_number','$address','$position','$email_address','$staff_type','$photos','$post_id')                                    
		") or die(mysql_error());
     }
                ?>
<script>
   window.location = 'employees.php';
   </script>