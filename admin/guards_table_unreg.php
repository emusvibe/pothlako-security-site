	<?php include('dbConnection.php'); ?>
	<form action="delete_guards.php" method="post">
	<table cellpadding="0" cellspacing="0" border="0" class="table" id="example">
	<a data-toggle="modal" href="#guards_delete" id="delete"  class="btn btn-danger" name=""><i class="icon-trash icon-large"></i></a>
	<div class="pull-right">
			    <ul class="nav nav-pills">
				<li class="">
                                    <a href="guards.php">All</a>
				</li>
				<li class="active">
					<a href="unreg_guards.php">Unregistered</a>
				</li>
				<li class="">
				<a href="reg_guards.php">Registered</a>
				</li>
				</ul>
	</div>
	<?php include('modal_delete.php'); ?>
		<thead>
		<tr>
					<th></th>
				
					<th>Name</th>
					<th>Employee Number</th>
			
					<th>Post / Client</th>
					<th></th>
		</tr>
		</thead>
		<tbody>
			
		<?php
	$query = mysqli_query($con,"select * from guards LEFT JOIN post ON guards.post_id = post.post_id where status = 'Unregistered' ORDER BY guards.guard_id DESC") or die(mysql_error());
	while ($row = mysqli_fetch_array($query)) {
		$id = $row['guard_id'];
		?>
	
		<tr>
		<td width="30">
		<input id="optionsCheckbox" class="uniform_on" name="selector[]" type="checkbox" value="<?php echo $id; ?>">
		</td>
	
		<td><?php echo $row['firstname'] . " " . $row['lastname']; ?></td> 
		<td><?php echo $row['username']; ?></td> 
	
		<td width="100"><?php echo $row['post_name']; ?></td> 
	
                <td width="30"><a href="edit_guards.php<?php echo '?id='.$id; ?>" class="btn btn-success"><i class="icon-pencil"></i> </a></td>
	
		</tr>
	<?php } ?>    
	
		</tbody>
	</table>
	</form>