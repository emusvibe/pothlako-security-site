<div class="span3" id="sidebar">
    <img id="avatar" class="img-polaroid" src="../admin/<?php echo $row['photo']; ?>">
	<?php include('staff_count.php'); ?>
	<ul class="nav nav-list bs-docs-sidenav nav-collapse collapse">
             <li class=""><a href="dasboard_payroll_staff.php"><i class="icon-chevron-right"></i><i class="fa fa-group"></i>&nbsp;My Dashboard</a></li>
	<li class=""><a tabindex="-1" href="payroll_staff_profile.php"><i class="icon-user"></i> Profile</a></li> 
               
		<?php
//                $message_query = mysqli_query($con,"select * from payroll_notification where hr_read='' ")or die(mysql_error());
//                $count_message = mysqli_num_rows($message_query);
                ?>
<!--                 <li class=""><a href="operations_staff_notification.php"><i class="icon-chevron-right"></i><i class="icon-info-sign"></i>&nbsp;Notification
			<?php if($count_message == '0'){
				}else{ ?>
                         &nbsp;&nbsp;&nbsp;&nbsp;<span class="fa fa-bell  " style="color: red"><?php echo $count_message; ?></span>
				<?php } ?>
		</a></li>-->
               
                 <?php
                $message_query = mysqli_query($con,"select * from ps_leaves where leave_status='pending' ")or die(mysql_error());
                $count_message = mysqli_num_rows($message_query);
                ?>
                <li class=""><a href="leave_applications.php"><i class="icon-chevron-right"></i><i class="fa fa-bed"></i>&nbsp;Leave Applications
                    <?php if($count_message == '0'){
				}else{ ?>
					&nbsp;&nbsp;&nbsp;&nbsp;<span class="fa fa-bell  " style="color: red"><?php echo $count_message; ?></span>
				<?php } ?>
                    </a></li>  
                
                  <?php
                $message_query = mysqli_query($con,"select * from message where reciever_id = '$session_id' and message_status != 'read' ")or die(mysql_error());
                $count_message = mysqli_num_rows($message_query);
                ?>
                    <li class="active"><a href="requisition_message_controlroom.php"><i class="icon-chevron-right"></i><i class="fa fa-suitcase"></i>&nbsp;Requisitions
                                    <?php if($count_message == '0'){
				}else{ ?>
					&nbsp;<span class="badge badge-important"><?php echo $count_message; ?></span>
				<?php } ?>
                    </a></li>
                    <li class=""><a href="salaries.php"><i class="icon-chevron-right"></i><i class="fa fa-money"></i>&nbsp;Salaries </a></li> 
		<!--<li class=""><a href="#"><i class="icon-chevron-right"></i><i class="fa fa-warning"></i>&nbsp;Hearings </a></li>--> 
		<!--<li class=""><a href="#"><i class="icon-chevron-right"></i><i class="fa fa-dot-circle-o"></i>&nbsp;CCMA</a></li>-->   
		<li class=""><a href="#"><i class="icon-chevron-right"></i><i class="icon-plus-sign"></i>&nbsp;Time Sheet</a></li> 
		<!--<li class=""><a href="#"><i class="icon-chevron-right"></i><i class="icon-plus-sign"></i>&nbsp;Duty Roster</a></li>-->
                <!--<li class=""><a href="incident_report.php"><i class="icon-chevron-right"></i><i class="icon-list"></i>&nbsp;Incident Reports</a></li>-->
		
                <li class=""><a tabindex="-1" href="logout.php"><i class="fa fa-sign-out"></i>&nbsp;Logout</a></li>
	</ul>
	<?php // include('search_other_class.php'); ?>	
</div>

