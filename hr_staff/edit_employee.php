<?php include('header_dashboard.php'); ?>
<?php include('session.php'); 
//include('dbConnection.php');
?>
    <body>
		<?php include('navbar_staff.php'); ?>
        <div class="container-fluid">
            <div class="row-fluid">
				<?php include('employees_sidebar.php'); ?>
                <div class="span9" id="content">  

<div class="row-fluid">
                        <!-- block -->
                        <div class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left">Edit Employee</div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12">
                                    <!--id="add_employee"-->
                                    <?php
        $id=$_REQUEST['id'];
        $query = "SELECT * from employees where employee_id='$id'";
        $result = mysqli_query($con,$query) or die ( mysql_error());

        while ($row = mysqli_fetch_assoc($result))
        {

          ?>
                                    <form  method="post" enctype="multipart/form-data">
								
								        <div class="control-group">
                                   
                                          <div class="controls">
                                            <select  name="post_id" class="" required>
                                             	<option>Select Post</option>
											<?php
											$cys_query = mysqli_query($con,"select * from post order by post_name");
											while($cys_row = mysqli_fetch_array($cys_query)){
											
											?>
                                                                                         
											<option value="<?php echo $cys_row['post_id']; ?>"><?php echo $cys_row['post_name']; ?></option>
											<?php } ?>
                                            </select>
                                          </div>
                                        </div>
                                                                    

                                          <div class="form-group">
                                            <label>Employee No:</label>
                                            <input name="employee_number" class="form-control" value="<?php echo $row['employee_number'];?>" >
                                        </div>     
                                            <div class="form-group">
                                            <label>Last Name</label>
                                            
                                            <input class="form-control" value="<?php echo $row['lastname'];?>" name="last_name">
                                        </div>
                                        <div class="form-group">
                                            <label>First Name</label>
                                            <input class="form-control" value="<?php echo $row['firstname'];?>" name="first_name">
                                        </div>
                                        <div class="form-group">
                                            <label>Middle Name</label>
                                            <input class="form-control" value="<?php echo $row['middlename'];?>" name="middle_name">
                                        </div>
                                          <div class="form-group">
                                            <label>Gender</label>
                                            <select name="gender" class="form-control"  required>
                                              <option value="<?php echo $row['lastname'];?>"><?php echo $row['gender'];?></option>
                                              <option value="Male">Male</option>
                                              <option value="Female">Female</option>
                                              <!--<option value="Other">Other</option>-->
                                            </select>
                                        </div>
                                         <div class="form-group">
                                            <label>Date of Birth</label>
                                            <input type="text" class="form-control" value="<?php echo $row['birthdate'];?>" name="birthdate" style="width:30%">
                                        </div>
                                        <div class="form-group">
                                            <label>AGE</label>
                                            <input type="text" class="form-control" value="<?php echo $row['age'];?>" name="age" style="width:30%">
                                        </div>
                                         <div class="form-group">
                                            <label>Employment Date</label>
                                            <input type="text" class="form-control" value="<?php echo $row['employment_date'];?>" name="employment_date" style="width:30%">
                                        </div>
                                        <div class="form-group">
                                            <label>Position</label>
                                            <input class="form-control" value="<?php echo $row['position'];?>" name="position">
                                        </div>
                                         <div class="form-group">
                                            <label>Address</label>
                                            <input class="form-control" value="<?php echo $row['address'];?>" name="address">
                                        </div>                           
                                        <div class="form-group">
                                            <label>Contact</label>
                                            <input class="form-control" value="<?php echo $row['contact_number'];?>" name="contact_number">
                                        </div>
                                        <div class="form-group">
                                            <label>Email</label>
                                            <input class="form-control" type="email" value="<?php echo $row['email_address'];?>" name="email_address">
                                        </div>
                                        <div class="form-group">
                                            <label>Photo:</label>
                                            <input  type="file" name="employee_photo" class="input-file uniform_on" id="fileInput"  required="">
                                            <input type="hidden" name="MAX_FILE_SIZE" value="1000000" />
                                          
                                        </div>
                                        <div class="form-group">
                                            <label>Department:</label>
                                                <select name="department" size="1" style="width:44%" required="">
                                                <option value="<?php echo $row['department'];?>"><?php echo $row['department'];?></option> 
                                              <option value="Admin">Admin</option>
                                              <option value="Human Resource">Human Resource</option>
                                              <option value="Payroll">Payroll</option>
                                              <option value="Operations">Operations</option>
                                               <option value="ControlRoom">ControlRoom</option>
                                              <option value="Security Officer">Security Officer</option>
                                              <option value="Cleaner">Cleaner</option>
                                              <option value="IT">IT</option>
                                             
                                                </select>
                                            
                                        </div> 
                                         <div class="form-group">
                                            <label>Employee type:</label>
                                                <select name="staff_type" size="1" style="width:44%" required="">
                                                <option value="<?php echo $row['staff_type'];?>"><?php echo $row['staff_type'];?></option>
                                                <option value="Permanent">Permanent</option>
                                                <option value="Casual">Casual / Intern</option>
                                                </select>
                                            
                                        </div>                                    
                                         	
										
					<div class="control-group">
                                           <div class="controls">
                                               <button name="save"  class="btn btn-success"><i class="fa fa-save fa-lg">&nbsp;Save</i></button>

                                          </div>
                                        </div>
                                </form>
	  <?php
          }
            
        ?>    
                           
                                </div>
                            </div>
                        </div>
                       
                        <!-- /block -->
                    </div>

<!--<script>
   window.location = 'employees.php';
   </script>                  -->
         <?php
                        if(isset($_POST['save']))
{
//               $id = $_POST['id'];
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
               
                mysqli_query($con,"update employees set firstname= '$first_name', middlename= '$middle_name',lastname= '$last_name',birthdate= '$birthdate',age= '$age',gender= '$gender',employee_number= '$employee_number',
                                                        employment_date= '$employment_date',department= '$department',contact_number= '$contact_number',address= '$address',position= '$position',email_address= '$email_address',
                                                        staff_type= '$staff_type',photo= '$photos',post_id= '$post_id' where employee_id='$id'") or die(mysql_error());
      
         ?>   
    <script>
   window.location = 'employees.php';
   </script>                
      <?php     }  ?>                
//<script>
//jQuery(document).ready(function($){
//        $("#update_employee").submit(function(e){
//                e.preventDefault();
//                var _this = $(e.target);
//                var formData = $(this).serialize();
//                $.ajax({
//                        type: "POST",
//                        url: "update_employee.php",
//                        data: formData,
//                        success: function(html){
//                                $.jGrowl("Employee Successfully  Updated", { header: 'Employee Updated' });
//                                $('#studentTableDiv').load('employees.php', function(response){
//                                        $("#studentTableDiv").html(response);
//                                        $('#example').dataTable( {
//                                                "sDom": "<'row'<'span6'l><'span6'f>r>t<'row'<'span6'i><'span6'p>>",
//                                                "sPaginationType": "bootstrap",
//                                                "oLanguage": {
//                                                        "sLengthMenu": "_MENU_ records per page"
//                                                }
//                                        } );
//                                        $(_this).find(":input").val('');
//                                        $(_this).find('select option').attr('selected',false);
//                                        $(_this).find('select option:first').attr('selected',true);
//                                });
//                               
////				
//				
//                        }
//                });
//        });
//});
//</script>		

             </div>
            </div>
		<?php include('footer.php'); ?>
        </div>
		<?php include('script.php'); ?>
    </body>

</html>