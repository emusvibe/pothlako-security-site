<?php include('header.php'); ?>
<?php include('session.php'); ?>
    <body>
		<?php include('navbar.php'); ?>
        <div class="container-fluid">
            <div class="row-fluid">
				<?php include('guards_sidebar.php'); ?>
				<div class="span3" id="adduser">
				<?php include('add_guards.php'); ?>		   			
				</div>
                <div class="span6" id="">
                     <div class="row-fluid">
                        <!-- block -->
                        <div  id="block_bg" class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left">Employee List</div>
                            </div>
                            <div class="block-content collapse in">
								<div class="span12" id="studentTableDiv">
									<?php include('guards_table_unreg.php'); ?>
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