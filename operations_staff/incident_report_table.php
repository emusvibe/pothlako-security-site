	<?php include('dbConnection.php'); ?>
	<form action="delete_guards.php" method="post">
	<table cellpadding="0" cellspacing="0" border="0" class="table table-bordered " id="example">
	<a data-toggle="modal" href="#guards_delete" id="delete"  class="btn btn-danger" name=""><i class="icon-trash icon-large"></i></a>
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
				
					<th>Incident</th>
					<th>O.B No:</th>			
                                        <th>Incident Date</th>
                                        <th>Incident Time</th> 
                                        <th>Incident log Date</th>
                                        <th>Status</th>
                                        <th>View</th>                                
<!--					<th>Change Status</th>-->
		</tr>
		</thead>
		<tbody>
			
		<?php
	$query = mysqli_query($con,"SELECT * FROM `incidents` ORDER BY `Incident Date` DESC") or die(mysql_error());
	while ($row = mysqli_fetch_array($query)) {
		$id = $row['incident_id'];
		?>
	
		<tr>
		<td width="30">
		<input id="optionsCheckbox" class="uniform_on" name="selector[]" type="checkbox" value="<?php echo $id; ?>">
		</td>
	
		<td><?php echo $row['Incident'] ; ?></td> 
		<td><?php echo $row['O.B No']; ?></td> 
	         <td><?php echo $row['Incident Date']; ?></td> 
		<!--<td width="100"><?php // echo $row['id_doc']; ?></td>--> 
	         <td><?php echo $row['Incident Time']; ?></td> 
                 <td><?php echo $row['Incident log Date']; ?></td>
                 <td><?php echo $row['Status']; ?></td>
                 <td width="30"><a href="view_leave_application.php<?php echo '?id='.$id; ?>" class="btn btn-success"><i class="icon-folder-open"></i> </a></td>
<!--		<td >
                    <a href="#edit_guards.php<?php echo '?id='.$id; ?>" class="btn btn-success"><i class="icon-folder-open"></i> </a>
                <form action="change_script.php" method="POST">
				<input type="hidden" class="form-control" placeholder="ID" name="id" required ="true" value="<?php echo $outid;?>">
				<select name="status" size="1" style="width:40%">
						<option value="Pending">Pending</option>
						<option value="Approved">Approved</option>
						<option value="Disapproved">Disapproved</option>
				</select>
				<button type="submit" name="submit" class="btn btn-success"><i class="fa fa-save"></i>&nbsp;Save</button>
			</form>
                </td>-->
	
		</tr>
	<?php } ?>    
	
		</tbody>
	</table>
	</form>


