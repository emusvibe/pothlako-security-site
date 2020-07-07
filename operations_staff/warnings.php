<?php include('header_dashboard.php'); ?>
<?php include('session.php'); ?>
    <body>
		<?php include('navbar_operations_staff.php'); ?>
        <div class="container-fluid">
            <div class="row-fluid">
				<?php include('warnings_sidebar.php'); ?>
				<div class="" id="adduser">
				<?php // include('create_incident.php'); ?>		   			
				</div>
                <div class="span8" id="">
                     <div class="row-fluid">
                          <a href="#issued_warnings.php" class="btn btn-danger"><i class="icon-plus-sign icon-large"></i> Issue Written Warning</a>
                          <a href="#issued_warnings.php" class="btn btn-success pull-right"><i class="icon-folder-open icon-large"></i> View Issued Warnings</a>
                       
                          <!-- block -->
                        <div  id="block_bg" class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left" style="color: red"><h2><i class="fa fa-warning fa-lg"></i>&nbsp;ISSUE VERBAL WARNING</h2></div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12" id="studentTableDiv">
                                    <?php include('create_warning.php'); ?>
                                        <?php // include('warnings_table.php'); ?>
                                </div>
                            </div>
                        </div>
                        <!-- /block -->
                    </div>
<?php // include('create_incident.php');?>

                </div>
            </div>
		<?php include('footer.php'); ?>
        </div>
		<?php include('script.php'); ?>
    </body>

</html>