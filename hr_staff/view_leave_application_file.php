	<?php include('dbConnection.php');?>

<div class="panel panel-default col-md-12 " >
    
        <?php $id=$_REQUEST['id'];?>
    	<?php
//        where employee_id= '$get_id'
//	$query = mysqli_query($con,"select * from employees where employee_number= ps_employee_leaves.emplnumber") or die(mysql_error());
         
        $query = mysqli_query($con,"select * from ps_employee_leaves 
             
 where leave_id= '$id'") or die(mysql_error());
	while ($row = mysqli_fetch_assoc($query)) {
		$id = $row['leave_id'];
		?>
                 <div class="form-group">
		</div>
    <!--<div class=" col-md-6 " >-->
        <!--<img class="img-circle" src="<?php echo $row['photo']; ?>" height="250" width="250" alt="Employee Photo">-->
               <!--<img class="img-circle" src="<?php // echo $row['photo']; ?>" height="50" width="50">-->
        <!--</div>-->
	<div class=" col-md-6" >	
        <div class="form-group">	
                <!--Name:&nbsp; &nbsp;--> 
                <h2 class=""></B><?php echo $row['firstname'] . "&nbsp;" . $row['lastname']; ?><B></h2>
		</div>
        <div class="form-group">
		<b>Employee No.:</b>&nbsp; &nbsp; <?php echo $row['emplnumber'];?>
		</div>
        <div class="form-group">
		<b>Employement Date:</b>&nbsp; &nbsp; <?php echo $row['empldate'];?>
		</div>
        <div class="form-group">
		<b>Leave Start Date:</b>&nbsp; &nbsp; <?php echo $row['leaveSdate'];?>
		</div>
            <div class="form-group">
		<b>Leave End Date:</b>&nbsp; &nbsp; <?php echo $row['leaveEdate'];?>
		</div>
        <div class="form-group">
		<b>Days Taken:</b>&nbsp; &nbsp; <?php echo $row['days_taken'];?>
		</div>
            <div class="form-group">
		<b>Days Paid:</b>&nbsp; &nbsp; <?php echo $row['days_paid'];?>
		</div>
            <div class="form-group">
		<b>Days UnPaid:</b>&nbsp; &nbsp; <?php echo $row['days_unpaid'];?>
		</div>
        <div class="form-group">
		<b>Contact:</b>&nbsp; &nbsp; <?php echo $row['emplcontact'];?>
		</div>
        <div class="form-group">
		<b>E-Mail:</b> &nbsp; &nbsp;<?php echo $row['emplemail'];?>
		</div>
        <div class="form-group">
		<b>Address During Leave:</b> &nbsp; &nbsp; <?php echo $row['address_during'];?>
		</div>
            <div class="form-group">
		<b>Posted At:</b>&nbsp; &nbsp; <?php echo $row['emplsite'];?>
		</div>
		<div class="form-group">
		<b>Reason For Leave:</b>&nbsp; &nbsp; <?php echo $row['reason'];?>
		</div>   
		<div class="form-group">
		<b>Aditional Info:</b>&nbsp; &nbsp; <?php echo $row['message'];?>
		</div>
		<div class="form-group">
		<b>Leave Type:</b> &nbsp; &nbsp;<?php echo $row['leave_type'];?>
		</div>
		<div class="form-group">
		<b>Status:</b>&nbsp; &nbsp; <?php echo $row['leave_status'];?>
		</div>
		<div class="form-group">
		<b>Area Manager</b>&nbsp; &nbsp; <?php echo $row['area_manager'];?>
		</div>
            <div class="form-group">
		<b>Casual / Reliever</b>&nbsp; &nbsp; <?php echo $row['casual_reliever'];?>
		</div>
		<div class="form-group">
                    <b>Manager Comment</b>&nbsp; &nbsp; <?php echo $row['comment'];?>
		</div>
		<div class="form-group">
                    <b>Apply Date:</b>&nbsp; &nbsp; <?php echo $row['apply_date'];?>
		</div>
		</div>
		</div>

<td ><label class="col-sm-5 control-label">Change Status</label>
                    <!--<a href="#edit_guards.php<?php echo '?id='.$id; ?>" class="btn btn-success"><i class="icon-folder-open"></i> </a>-->
                <form action="change_script.php" method="POST">
				<input type="hidden" class="span4" name="id" value="<?php echo $id; ?>">
				<select name="status" size="1" style="width:40%">
						<option value="Pending">Pending</option>
						<option value="Approved">Approved</option>
						<option value="Disapproved">Disapproved</option>
				</select>
				<button type="submit" name="submit" class="btn btn-success"><i class="fa fa-save"></i>&nbsp;Save</button>
			</form>
                </td>

     <?php } ?>  