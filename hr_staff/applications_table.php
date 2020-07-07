	<?php include('dbConnection.php'); ?>
	<form action="delete_guards.php" method="post">
	<table cellpadding="0" cellspacing="0" border="0" class="table" id="example">
	<!--<a data-toggle="modal" href="#guards_delete" id="delete"  class="btn btn-danger" name=""><i class="icon-trash icon-large"></i></a>-->
	<div class="pull-right">
			    <ul class="nav nav-pills">
				<li class="active">
					<!--<a href="employees.php">All</a>-->
				</li>
<!--				<li class="">
					<a href="unreg_guards.php">Unregistered</a>
				</li>
				<li class="">
				<a href="reg_guards.php">Registered</a>
				</li>-->
				</ul>
	</div>
	<?php include('modal_delete.php'); ?>
		<thead>
		<tr>
					<th></th>
				
					<th>Name</th>
					<th>ID Number</th>			
                                        <th>Applying for Position</th>
                                        <!--<th>ID</th>--> 
                                        <!--<th></th>-->
                                        <th>Application Date</th>
                                                                               
					<th>View</th>
		</tr>
		</thead>
		<tbody>
			
		<?php
	$query = mysqli_query($con,"select * from applicanttable ORDER BY signupTime DESC") or die(mysql_error());
	while ($row = mysqli_fetch_array($query)) {
		$id = $row['applicant_id'];
		?>
	
		<tr>
		<td width="30">
		<!--<input id="optionsCheckbox" class="uniform_on" name="selector[]" type="checkbox" value="<?php echo $id; ?>">-->
		</td>
	
		<td><?php echo $row['firstName'] . "&nbsp; &nbsp; " . $row['surName']; ?></td> 
		<td><?php echo $row['id_Number']; ?></td> 
	         <td><?php echo $row['position_applied_for']; ?></td> 
		<!--<td width="100"><?php // echo $row['id_doc']; ?></td>--> 
	         <td><?php echo $row['signupTime']; ?></td> 
		<td width="30"><a href="view_applicant.php<?php echo '?id='.$id; ?>" class="btn btn-success"><i class="icon-folder-open"></i> </a></td>
	
		</tr>
	<?php } ?>    
	
		</tbody>
	</table>
	</form>



     