<?php include('header_dashboard.php'); ?>
<?php include('session.php'); ?>
    <body>
		<?php include('payroll_staff_navbar.php'); ?>
        <div class="container-fluid">
            <div class="row-fluid">
				<?php include('salaries_sidebar.php'); ?>
				<div class="span3" id="adduser">
				<?php // include('add_employees.php'); ?>		   			
				</div>
                <div class="span8" id="">
                     <div class="row-fluid">
                        <!-- block -->
                        <div  id="block_bg" class="block">
<!--                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left">Leave Applications List</div>
                            </div>-->
                            <div class="block-content collapse in">
								<div class="span12" id="studentTableDiv">
									<?php include('salaries_table.php'); ?>
                                </div>
                            </div>
                        </div>
                        <!-- /block -->
                    </div>
<?php // include('add_employees.php');?>

                </div>
            </div>
		<?php include('footer.php'); ?>
        </div>
		<?php include('script.php'); ?>
    </body>

</html>