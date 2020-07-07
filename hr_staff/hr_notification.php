<?php include('header_dashboard.php'); ?>
<?php include('session.php'); ?>
    <body>
		<?php include('navbar_staff.php'); ?>
        <div class="container-fluid">
            <div class="row-fluid">
				<?php include('hr_notification_sidebar.php'); ?>
                <div class="span9" id="content">
                     <div class="row-fluid">
					    <!-- breadcrumb -->
					     <ul class="breadcrumb">
						<?php
						$school_year_query = mysqli_query($con,"select * from data_year order by data_year DESC")or die(mysql_error());
						$school_year_query_row = mysqli_fetch_array($school_year_query);
						$school_year = $school_year_query_row['data_year'];
						?>
							<li><a href="#"><b>HR</b></a><span class="divider"></span></li>
							<li><a href="#">Year: <?php echo $school_year_query_row['data_year']; ?></a><span class="divider">/</span></li>
							<li><a href="#"><b>Notification</b></a></li>
						</ul>
						 <!-- end breadcrumb -->
                        <!-- block -->
                        <div id="block_bg" class="block">
                            <div class="navbar navbar-inner block-header">
                                <div id="" class="muted pull-left"></div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12">

							<div class="pull-right">
							Check All <input type="checkbox"  name="selectAll" id="checkAll" />
								<script>
								$("#checkAll").click(function () {
									$('input:checkbox').not(this).prop('checked', this.checked);
								});
								</script>					
							</div>

  					<form id="domainTable" action="read_hr.php" method="post">
						<?php  
                                                $message_query = mysqli_query($con,"select * from hr_notification ")or die(mysql_error());
                                                $count_message = mysqli_num_rows($message_query);
                                                
                                                if($count_message == '0'){
								}else{  ?>
							<button id="delete"  class="btn btn-info" name="read"><i class="icon-check"></i> Read</button>
						
								<?php  }  ?>
				
					<?php $query = mysqli_query($con,"select * from hr_notification
					LEFT JOIN applicanttable on applicanttable.applicant_id = hr_notification.applicant_id
					 order by  hr_notification.date_of_notification ASC
					")or die(mysql_error());
					$count = mysqli_num_rows($query);
					while($row = mysqli_fetch_array($query)){
//					$assignment_id = $row['assignment_id'];
					$get_id = $row['applicant_id'];
					$id = $row['hr_notification_id'];
					
					
					$query_yes_read = mysqli_query($con,"select * from notification_read_staff where notification_id = '$id' and staff_id = '$session_id'")or die(mysql_error());
					$read_row = mysqli_fetch_array($query_yes_read);
					
					$yes = $read_row['guards_read']; 
				
					?>
									<div class="post"  id="del<?php echo $id; ?>">
										<?php  if ($yes == 'yes'){
										}else{ 
										?>
										  

										<input id=""  name="selector[]" type="checkbox" value="<?php echo $id; ?>">	
										<?php  } ?>	
											<strong><?php // echo $row['firstname']." ".$row['lastname'];  ?></strong>
											<?php echo $row['notification']; ?>
											<a href="<?php echo $row['link']; ?><?php echo '?id='.$get_id; ?>&<?php echo 'post_id='; ?>">
											<?php // echo $row['post_name']; ?> 
											<?php // echo $row['subject_code']; ?> 
									 
											</a>
										<hr>
										<div class="pull-right">
										<i class="icon-calendar"></i>&nbsp;<?php echo $row['date_of_notification']; ?> 
										</div>
											
									
											
											</div>
					<?php
					}
					?>

					
					</form>
						
                                </div>
                            </div>
                        </div>
                        <!-- /block -->
                    </div>


                </div>
			
            </div>
		<?php include('footer.php'); ?>
        </div>
		<?php include('script.php'); ?>
    </body>
</html>