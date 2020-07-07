   <div class="row-fluid">
                        <!-- block -->
                        <div class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left">Add Staff</div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12">
								<form method="post">
<!--										<label>Photo:</label>
										<div class="control-group">
                                          <div class="controls">
                                               <input class="input-file uniform_on" id="fileInput" type="file" required>
                                          </div>
                                        </div>		
						
									-->	
										
										  <div class="control-group">
											<label>Department:</label>
                                          <div class="controls">
                                            <select name="department"  class="" required>
                                             	<option></option>
                                    <?php
                                    $query = mysqli_query($con,"select * from department order by department_name");
                                    while($row = mysqli_fetch_array($query)){

                                    ?>
                                    <option value="<?php echo $row['department_id']; ?>"><?php echo $row['department_name']; ?></option>
                                    <?php } ?>
                                            </select>
                                          </div>
                                        </div>
										
										<div class="control-group">
                                          <div class="controls">
                                              <input class="input focused" name="firstname" id="focusedInput" type="text" placeholder = "Firstname" required>
                                          </div>
                                        </div>
										
										<div class="control-group">
                                          <div class="controls">
                                            <input class="input focused" name="lastname" id="focusedInput" type="text" placeholder = "Lastname" required>
                                          </div>
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
					
					
					    <?php
                            if (isset($_POST['save'])) {
                           
                                $firstname = $_POST['firstname'];
                                $lastname = $_POST['lastname'];
                                $department_id = $_POST['department'];
								
								
								$query = mysqli_query($con,"select * from payroll_staff where firstname = '$firstname' and lastname = '$lastname' ")or die(mysql_error());
								$count = mysqli_num_rows($query);
								
								if ($count > 0){ ?>
								<script>
								alert('Employee Data Already Exist');
								</script>
								<?php
								}else{

                                mysqli_query($con,"insert into payroll_staff (firstname,lastname,photo,department_id)
								values ('$firstname','$lastname','uploads/NO-IMAGE-AVAILABLE.jpg','$department_id')         
								") or die(mysql_error()); ?>
								<script>
							 	window.location = "payroll_staff.php"; 
								</script>
								<?php   }} ?>
						 
						 