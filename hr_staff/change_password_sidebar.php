<div class="span3" id="sidebar">
	<img id="avatar" class="img-polaroid" src="../admin/<?php echo $row['photo']; ?>">
	<?php include('staff_count.php'); ?>
	<ul class="nav nav-list bs-docs-sidenav nav-collapse collapse">
		<li class=""><a href="dasboard_staff.php"><i class="icon-chevron-right"></i><i class="fa fa-group"></i>&nbsp;My Dashboard</a></li>
		<?php
                $message_query = mysqli_query($con,"select * from hr_notification where hr_read='' ")or die(mysql_error());
                $count_message = mysqli_num_rows($message_query);
                ?>
                <li class=""><a href="hr_notification.php"><i class="icon-chevron-right"></i><i class="icon-info-sign"></i>&nbsp;Notification
			<?php if($count_message == '0'){
				}else{ ?>
					&nbsp;&nbsp;&nbsp;&nbsp;<span class="fa fa-bell  " style="color: red"><?php echo $count_message; ?></span>
				<?php } ?>
		</a></li>
		 <li class=""><a tabindex="-1" href="profile_staff.php"><i class="icon-user"></i> Profile</a></li>
                  <li class="active"><a href="change_password_staff.php"><i class="fa fa-lock"></i> Change Password</a></li>
<!--		<li class=""><a href="#"><i class="icon-chevron-right"></i><i class="fa fa-suitcase"></i>&nbsp;To Add</a></li> 
		<li class=""><a href="#"><i class="icon-chevron-right"></i><i class="icon-plus-sign"></i>&nbsp;To Add </a></li> 
		<li class=""><a href="#"><i class="icon-chevron-right"></i><i class="icon-plus-sign"></i>&nbsp;To Add</a></li> 
		<li class=""><a href="#"><i class="icon-chevron-right"></i><i class="icon-plus-sign"></i>&nbsp;To Add</a></li>
		<li class=""><a href="#"><i class="icon-chevron-right"></i><i class="icon-list"></i>&nbsp;To Add</a></li>-->
	</ul>
	<?php // include('search_other_class.php'); ?>	
</div>

