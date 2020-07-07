<?php  include('header.php'); ?>
<?php  include('session.php'); ?>
    <body>
		<?php include('navbar.php'); ?>
        <div class="container-fluid">
            <div class="row-fluid">
					<?php include('sidebar_dashboard.php'); ?>
                <!--/span-->
                <div class="span9" id="content">
						<div class="row-fluid"></div>
						
                    <div class="row-fluid">
            
                        <!-- block -->
                        <div id="block_bg" class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left">Data Stats</div>
                            </div>
                            <div class="block-content collapse in">
							        <div class="span12">
						
								<?php 
								$query_reg_admin_staff = mysqli_query($con,"select * from operations_staff ")or die(mysql_error());
								$count_reg_admin_staff = mysqli_num_rows($query_reg_admin_staff);
								?>
								
                                <div class="span3">
                                    <div class="chart" data-percent="<?php echo $count_reg_admin_staff; ?>"><?php echo $count_reg_admin_staff; ?></div>
                                    <div class="chart-bottom-heading"><strong>Operations Staff</strong>

                                    </div>
                                </div>
								
								<?php 
								$query_admin_staff = mysqli_query($con,"select * from admin_staff")or die(mysql_error());
								$count_admin_staff = mysqli_num_rows($query_admin_staff);
								?>
								
								
                                <div class="span3">
                                    <div class="chart" data-percent="<?php echo $count_admin_staff; ?>"><?php echo $count_admin_staff ?></div>
                                    <div class="chart-bottom-heading"><strong>HR Staff</strong>

                                    </div>
                                </div>
				
                                                                    
                                                                <?php 
								$query_payroll_staff = mysqli_query($con,"select * from payroll_staff ")or die(mysql_error());
								$count_payroll_staff = mysqli_num_rows($query_payroll_staff);
								?>
								
                                <div class="span3">
                                    <div class="chart" data-percent="<?php echo $count_payroll_staff ?>"><?php echo $count_payroll_staff ?></div>
                                    <div class="chart-bottom-heading"><strong>Payroll Staff</strong>

                                    </div>
                                </div>
								
								
								<?php 
								$query_guards = mysqli_query($con,"select * from guards")or die(mysql_error());
								$count_guards = mysqli_num_rows($query_guards);
								?>
								
                                <div class="span3">
                                    <div class="chart" data-percent="<?php echo $count_guards ?>"><?php echo $count_guards ?></div>
                                    <div class="chart-bottom-heading"><strong>Guards / Employees</strong>

                                    </div>
                                </div>
								
								
								
								
							
								
								<?php 
								$query_post = mysqli_query($con,"select * from post")or die(mysql_error());
								$count_post = mysqli_num_rows($query_post);
								?>
								
                                <div class="span3">
                                    <div class="chart" data-percent="<?php echo $count_post; ?>"><?php echo $count_post; ?></div>
                                    <div class="chart-bottom-heading"><strong>Post / Clients</strong>

                                    </div>
                                </div>
								
								
								<?php 
//								$query_file = mysqli_query($con,"select * from files")or die(mysql_error());
//								$count_file = mysqli_num_rows($query_file);
								?>
								
<!--                                <div class="span3">
                                    <div class="chart" data-percent="<?php // echo $count_file; ?>"><?php // echo $count_file; ?></div>
                                    <div class="chart-bottom-heading"><strong>Downloadable File</strong>

                                    </div>
                                </div>-->
								
								
								<?php 
//								$query_subject = mysqli_query($con,"select * from subject")or die(mysql_error());
//								$count_subject = mysqli_num_rows($query_subject);
								?>
								
<!--                                <div class="span3">
                                    <div class="chart" data-percent="<?php // echo $count_subject; ?>"><?php // echo $count_subject; ?></div>
                                    <div class="chart-bottom-heading"><strong>Subjects</strong>

                                    </div>
                                </div>   -->
						
						
                            </div>
                        </div>
                        <!-- /block -->
						
                    </div>
                    </div>
                
                
                 
                 
                </div>
            </div>
    
         <?php include('footer.php'); ?>
        </div>
	<?php include('script.php'); ?>
    </body>

    
    
</html>