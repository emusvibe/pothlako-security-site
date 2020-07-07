<?php include('header_dashboard.php'); ?>
<?php include('session.php'); ?>
    <body>
		<?php include('navbar_operations_staff.php'); ?>
        <div class="container-fluid">
            <div class="row-fluid">
				<?php include('incident_report_sidebar.php'); ?>
				<div class="" id="adduser">
				<?php include('create_incident.php'); ?>		   			
				</div>
                <div class="span6" id="">
                     <div class="row-fluid">
                        <!-- block -->
                        <div  id="block_bg" class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left">All Incidents List</div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12" id="studentTableDiv">

                                        <?php include('incident_report_table.php'); ?>
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