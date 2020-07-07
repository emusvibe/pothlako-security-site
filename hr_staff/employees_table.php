	<?php include('dbConnection.php'); ?>
	<form action="delete_employee.php" method="post">
	<table cellpadding="0" cellspacing="0" border="0" class="table" id="example">
	<!--<a data-toggle="modal" href="#guards_delete" id="delete"  class="btn btn-danger" name=""><i class="icon-trash icon-large"></i></a>-->
	<div class="pull-right">
			    <ul class="nav nav-pills">
				<li class="active">
					<a href="employees.php">All</a>
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
				        <th>photo</th>
					<th>Names</th>
					<th>Employee Number</th>
                                        <th>Department</th>
                                        <th>Position</th>
                                        <th>Post / Client</th> 
                                        <th>Contact Number</th>
                                        <th>Employee Type</th>
                                        <th>Edit</th>                           
					<th>View</th>
                                        
		</tr>
		</thead>
		<tbody>
			
		<?php
	$query = mysqli_query($con,"select * from employees LEFT JOIN post ON employees.post_id = post.post_id ORDER BY employees.employee_id DESC") or die(mysql_error());
	while ($row = mysqli_fetch_array($query)) {
		$id = $row['employee_id'];
		?>
	
		<tr>
		<td width="30">
		<input id="optionsCheckbox" class="uniform_on" name="selector[]" type="checkbox" value="<?php echo $id; ?>">
		</td>
                <td width="40"><img class="img-circle" src="<?php echo $row['photo']; ?>" height="50" width="50"></td>
		<td><?php echo $row['firstname'] . "&nbsp; &nbsp; " . $row['lastname']; ?></td> 
		<td><?php echo $row['employee_number']; ?></td> 
                <td><?php echo $row['department']; ?></td>
	         <td><?php echo $row['position']; ?></td> 
		<td width="100"><?php echo $row['post_name']; ?></td> 
	        <td width="100"><?php echo $row['contact_number']; ?></td> 
                <td width="100"><?php echo $row['staff_type']; ?></td> 
                <td width="30"><a href="edit_employee.php<?php echo '?id='.$id; ?>" class="btn btn-success"><i class="icon-pencil"></i> </a></td>
		<td width="30"><a href="view_employee.php<?php echo '?id='.$id; ?>" class="btn btn-success"><i class="icon-folder-open"></i> </a></td>

		</tr>
	<?php } ?>    
	
		</tbody>
	</table>
	</form>

      
         