<?php include('header_dashboard.php'); ?>
<?php include('session.php'); ?>
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
                                <div class="muted pull-left">Add Employee</div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12">
                                    <!--id="add_employee"-->
								<form  method="post" action="save_employee.php" enctype="multipart/form-data">
								
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
                                            <input class="form-control" placeholder="Employee Number" name="employee_number">
                                        </div>     
                                            <div class="form-group">
                                            <label>Last Name</label>
                                            <input class="form-control" placeholder="Lastname" name="last_name">
                                        </div>
                                        <div class="form-group">
                                            <label>First Name</label>
                                            <input class="form-control" placeholder="Firstname" name="first_name">
                                        </div>
                                        <div class="form-group">
                                            <label>Middle Name</label>
                                            <input class="form-control" placeholder="Middlename" name="middle_name">
                                        </div>
                                          <div class="form-group">
                                            <label>Gender</label>
                                            <select name="gender" class="form-control" placeholder="Gender" required>
                                              <option value="">Gender</option>
                                              <option value="Male">Male</option>
                                              <option value="Female">Female</option>
                                              <!--<option value="Other">Other</option>-->
                                            </select>
                                        </div>
                                         <div class="form-group">
                                            <label>Date of Birth</label>
                                            <input type="date" class="form-control" placeholder="D.O.B" name="birthdate" style="width:30%">
                                        </div>
                                         <div class="form-group">
                                            <label>Employment Date</label>
                                            <input type="date" class="form-control" placeholder="Date of Employment" name="employment_date" style="width:30%">
                                        </div>
                                        <div class="form-group">
                                            <label>Position</label>
                                            <input class="form-control" placeholder="Position" name="position">
                                        </div>
                                         <div class="form-group">
                                            <label>Address</label>
                                            <input class="form-control" placeholder="Address" name="address">
                                        </div>                           
                                        <div class="form-group">
                                            <label>Contact</label>
                                            <input class="form-control" placeholder="Enter number" name="contact_number">
                                        </div>
                                        <div class="form-group">
                                            <label>Email</label>
                                            <input class="form-control" type="email" placeholder="i.e. info@pothlakosecurity.co.za" name="email_address">
                                        </div>
                                        <div class="form-group">
                                            <label>Photo:</label>
                                            <input  type="file" name="employee_photo" class="input-file uniform_on" id="fileInput"  required="">
                                            <input type="hidden" name="MAX_FILE_SIZE" value="1000000" />
                                          
                                        </div>
                                        <div class="form-group">
                                            <label>Department:</label>
                                                <select name="department" size="1" style="width:44%" required="">
                                                <option >Select Department</option> 
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
                                                <option >Select type</option>
                                                <option value="Permanent">Permanent</option>
                                                <option value="Casual">Casual / Intern</option>
                                                </select>
                                            
                                        </div>                                    
                                         	
										
					<div class="control-group">
                                           <div class="controls">
                                           <button name="save" class="btn btn-info"><i class="icon-plus-sign icon-large"></i></button>

                                          </div>
                                        </div>
                                </form>
								
                                
                           
                                </div>
                            </div>
                        </div>
                       
                        <!-- /block -->
                    </div>
					
<script>
jQuery(document).ready(function($){
        $("#add_employee").submit(function(e){
                e.preventDefault();
                var _this = $(e.target);
                var formData = $(this).serialize();
                $.ajax({
                        type: "POST",
                        url: "save_employee.php",
                        data: formData,
                        success: function(html){
                                $.jGrowl("Employee Successfully  Added", { header: 'Employee Added' });
                                $('#studentTableDiv').load('guards_table.php', function(response){
                                        $("#studentTableDiv").html(response);
                                        $('#example').dataTable( {
                                                "sDom": "<'row'<'span6'l><'span6'f>r>t<'row'<'span6'i><'span6'p>>",
                                                "sPaginationType": "bootstrap",
                                                "oLanguage": {
                                                        "sLengthMenu": "_MENU_ records per page"
                                                }
                                        } );
                                        $(_this).find(":input").val('');
                                        $(_this).find('select option').attr('selected',false);
                                        $(_this).find('select option:first').attr('selected',true);
                                });
                               
//				
				
                        }
                });
        });
});
</script>		

             </div>
            </div>
		<?php include('footer.php'); ?>
        </div>
		<?php include('script.php'); ?>
    </body>

</html>