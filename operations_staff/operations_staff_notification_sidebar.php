<div class="span3" id="sidebar">
	<img id="avatar" class="img-polaroid" src="../admin/<?php echo $row['photo']; ?>">
	<?php include('staff_count.php'); ?>
	<ul class="nav nav-list bs-docs-sidenav nav-collapse collapse">
		<li class=""><a href="dasboard_operations_staff.php"><i class="icon-chevron-right"></i><i class="fa fa-group"></i>&nbsp;My Dashboard</a></li>
		<li class="active"><a href="operations_staff_notification.php"><i class="icon-chevron-right"></i><i class="icon-info-sign"></i>&nbsp;Notification
			<?php if($not_read == '0'){
				}else{ ?>
					<span class="badge badge-important"><?php echo $not_read; ?></span>
				<?php } ?>
		</a></li>
		<li class=""><a href="#"><i class="icon-chevron-right"></i><i class="fa fa-envelope-o"></i>&nbsp;To Add</a></li> 
		<li class=""><a href="#"><i class="icon-chevron-right"></i><i class="fa fa-suitcase"></i>&nbsp;To Add</a></li> 
		<li class=""><a href="#"><i class="icon-chevron-right"></i><i class="icon-plus-sign"></i>&nbsp;To Add </a></li> 
		<li class=""><a href="#"><i class="icon-chevron-right"></i><i class="icon-plus-sign"></i>&nbsp;To Add</a></li> 
		<li class=""><a href="#"><i class="icon-chevron-right"></i><i class="icon-plus-sign"></i>&nbsp;To Add</a></li>
		<li class=""><a href="#"><i class="icon-chevron-right"></i><i class="icon-list"></i>&nbsp;To Add</a></li>
	<?php include('search_other_class.php'); ?>	
</div>

