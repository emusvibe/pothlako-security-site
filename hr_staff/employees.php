<?php include('header_dashboard.php'); ?>
<?php include('session.php'); ?>
    <body>
		<?php include('navbar_staff.php'); ?>
        <div class="container-fluid">
            <div class="row-fluid">
				<?php include('employees_sidebar.php'); ?>
				<div class="span3" id="adduser">
				<?php // include('add_employees.php'); ?>		   			
				</div>
                <div class="span9" id="">
                     <div class="row-fluid">
                         <a href="add_employees.php" class="btn btn-info"><i class="icon-plus-sign icon-large"></i> Add Employee</a>
                        <!-- block -->
                        <div  id="block_bg" class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left">Employee List</div>
                            </div>
                            <div class="block-content collapse in">
								<div class="span12" id="studentTableDiv">
									<?php include('employees_table.php'); ?>
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