   <div class="row-fluid">
       <a href="guards.php" class="btn btn-info"><i class="icon-plus-sign icon-large"></i> Add Employee</a>
                        <!-- block -->
                        <div class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left">Add Employee</div>
                            </div>
                            <div class="block-content collapse in">
							<?php
							$query = mysqli_query($con,"select * from guards LEFT JOIN post ON post.post_id = guards.post_id where guard_id = '$get_id'")or die(mysql_error());
							$row = mysqli_fetch_array($query);
							?>
                                <div class="span12">
								<form method="post">
								
								        <div class="control-group">
                                   
                                          <div class="controls">
                                            <select  name="cys" class="" required>
                                             	<option value="<?php echo $row['class_id']; ?>"><?php echo $row['post_name']; ?></option>
											<?php
											$cys_query = mysqli_query($con,"select * from post order by post_name");
											while($cys_row = mysqli_fetch_array($cys_query)){
											
											?>
											<option value="<?php echo $cys_row['post_id']; ?>"><?php echo $cys_row['post_name']; ?></option>
											<?php } ?>
                                            </select>
                                          </div>
                                        </div>
								
										<div class="control-group">
                                          <div class="controls">
                                            <input name="un" value="<?php echo $row['username']; ?>" class="input focused" id="focusedInput" type="text" placeholder = "ID Number" required>
                                          </div>
                                        </div>
										
										<div class="control-group">
                                          <div class="controls">
                                            <input name="fn"  value="<?php echo $row['firstname']; ?>"  class="input focused" id="focusedInput" type="text" placeholder = "Firstname" required>
                                          </div>
                                        </div>
										
										<div class="control-group">
                                          <div class="controls">
                                            <input  name="ln"  value="<?php echo $row['lastname']; ?>" class="input focused" id="focusedInput" type="text" placeholder = "Lastname" required>
                                          </div>
                                        </div>
								
										
											<div class="control-group">
                                          <div class="controls">
												<button name="update" class="btn btn-success"><i class="fa fa-save icon-large"></i> Save</button>

                                          </div>
                                        </div>
                                </form>
								</div>
                            </div>
                        </div>
                        <!-- /block -->
                    </div>
					
					
		
	      <?php
                            if (isset($_POST['update'])) {
                               
                                $un = $_POST['un'];
                                $fn = $_POST['fn'];
                                $ln = $_POST['ln'];
                                $cys = $_POST['cys'];
                      

								mysqli_query($con,"update guards set username = '$un' , firstname ='$fn' , lastname = '$ln' , post_id = '$cys' where guard_id = '$get_id' ")or die(mysql_error());

								?>
 
								<script>
								window.location = "guards.php"; 
								</script>

                       <?php     }  ?>
	