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
                <div class="span8" id="">
                     <div class="row-fluid">
                        <!-- block -->
                        <div  id="block_bg" class="block">
                            <div class="navbar navbar-inner block-header">
                                 <div class="form-group">
		</div>
                                <img class="pull-left" src="../img/pothlako1.png" alt="" width="120" height="120" />&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;
                                <div class="muted pull-right"><h3><b>Employee File</b></h3></div>
                               
                            </div>
                            <div class="block-content collapse in">
								<div class="span12 col-sm-8" id="studentTableDiv">
									<?php include('view_employee_file.php'); ?>
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