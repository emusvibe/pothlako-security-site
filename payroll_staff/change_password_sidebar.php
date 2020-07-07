<div class="span3" id="sidebar">
	<img id="avatar" class="img-polaroid" src="../admin/<?php echo $row['photo']; ?>">
	<?php include('staff_count.php'); ?>
	<ul class="nav nav-list bs-docs-sidenav nav-collapse collapse">
            <li ><a href="dasboard_payroll_staff.php"><i class="icon-chevron-right"></i><i class="fa fa-group"></i>&nbsp;My Dashboard</a></li>
                <!--<li class=""><a tabindex="-1" href="profile_operations_staff.php"><i class="icon-user"></i> Profile</a></li>-->  
                <li class=""><a tabindex="-1" href="#myModal" data-toggle="modal"><i class="icon-picture"></i> Change Picture</a></li>
                <li class="active"><a href="change_password_operations_staff.php"><i class="fa fa-lock"></i> Change Password</a></li>
                <li class=""><a tabindex="-1" href="logout.php"><i class="fa fa-sign-out"></i>&nbsp;Logout</a></li>
	</ul>
	<?php // include('search_other_class.php'); ?>	
</div>

