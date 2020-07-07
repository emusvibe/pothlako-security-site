	<?php include('dbConnection.php');?>

<div class="panel panel-default col-md-12 " >
    
        <?php $id=$_REQUEST['id'];?>
    	<?php
$query = mysqli_query($con,"SELECT * FROM ps_leaves  where leave_id= '$id'  ") or die(mysql_error());
         
//        $query = mysqli_query($con,"select * from ps_leaves  JOIN employees ON ps_leaves.photo = employees.photo  
//LEFT JOIN employees ON ps_employee_leaves.photo = employees.photo  LEFT JOIN employees ON  ps_employee_leaves.firstname = employees.firstname         
//LEFT JOIN employees ON ps_employee_leaves.lastname = employees.lastname 
// LEFT JOIN post ON ps_employee_leaves.emplsite = post.post_id              
// where employee_id= '$id'") or die(mysql_error());emplname
	while ($row = mysqli_fetch_assoc($query)) {
		$id = $row['leave_id'];
                
                
		?>
                 <div class="form-group">
		</div>
    <!--<div class=" col-md-6 " >-->
        <!--<img class="img-circle" src="<?php // echo $row['photo']; ?>" height="250" width="250" alt="Employee Photo">-->
               <!--<img class="img-circle" src="<?php // echo $row['photo']; ?>" height="50" width="50">-->
        <!--</div>-->
        <div class=" col-md-12"  >
        <form class="form-horizontal" action="update_account.php" method="post" name="form" >
                <input type="hidden" name="new" value="1" />
                <input name="id" type="hidden" value="<?php echo $row['leave_id'];?>" />
				<div class="well bs-component">
                  <div class="form-group">
                    <label class="col-sm-5 control-label"></label>
                    <div class="col-sm-4">
                         <input name="emplname" type="hidden" value="<?php echo $row['emplname'];?>" />
                      <h2><?php echo $row['emplname']; ?></h2>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-5 control-label">Employee No :</label>
                    <div class="col-sm-5">
                    <input name="emplnumber" type="hidden" value="<?php echo $row['emplnumber'];?>" />
                      <?php echo $row['emplnumber'];?>
                    
                  </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-5 control-label">Employement Date :</label>
                    <div class="col-sm-5">
                    <input name="empldate" type="hidden" value="<?php echo $row['empldate'];?>" />
                      <?php echo $row['empldate'];?>
                    
                  </div>
                  </div>                  
                  <div class="form-group">
                    <label class="col-sm-5 control-label">Leave Start Date :</label>
                    <div class="col-sm-5">
                    <input name="leaveSdate" type="hidden" value="<?php echo $row['leaveSdate'];?>" />
                      <?php echo $row['leaveSdate'];?>
                    
                  </div>
                  </div>                  
                   <div class="form-group">
                    <label class="col-sm-5 control-label">Leave End Date :</label>
                    <div class="col-sm-5">
                    <input name="leaveEdate" type="hidden" value="<?php echo $row['leaveEdate'];?>" />
                      <?php echo $row['leaveEdate'];?>
                    
                  </div>
                  </div>                  
                  <div class="form-group">
                    <label class="col-sm-5 control-label">Days Taken :</label>
                    <div class="col-sm-5">
                    <input name="days_taken" type="hidden" value="<?php echo $row['days_taken'];?>" />
                      <?php echo $row['days_taken'];?>
                    
                  </div>
                  </div>    
                  <div class="form-group">
                    <label class="col-sm-5 control-label">Days Paid :</label>
                    <div class="col-sm-5">
                    <input name="days_paid" type="hidden" value="<?php echo $row['days_paid'];?>" />
                      <?php echo $row['days_paid'];?>
                    
                  </div>
                  </div>                   
                   <div class="form-group">
                    <label class="col-sm-5 control-label">Days UnPaid :</label>
                    <div class="col-sm-5">
                    <input name="days_unpaid" type="hidden" value="<?php echo $row['days_unpaid'];?>" />
                      <?php echo $row['days_unpaid'];?>
                    
                  </div>
                  </div>                  
                  <div class="form-group">
                    <label class="col-sm-5 control-label">Contact No. :</label>
                    <div class="col-sm-5">
                    <input name="emplcontact" type="hidden" value="<?php echo $row['emplcontact'];?>" />
                      <?php echo $row['emplcontact'];?>
                    
                  </div>
                  </div>                   
                  <div class="form-group">
                    <label class="col-sm-5 control-label">E-Mail :</label>
                    <div class="col-sm-5">
                    <input name="emplemail" type="hidden" value="<?php echo $row['emplemail'];?>" />
                      <?php echo $row['emplemail'];?>
                    
                  </div>
                  </div>                   
                   <div class="form-group">
                    <label class="col-sm-5 control-label">Address During Leave :</label>
                    <div class="col-sm-5">
                    <input name="address_during" type="hidden" value="<?php echo $row['address_during'];?>" />
                      <?php echo $row['address_during'];?>
                    
                  </div>
                  </div>                  
                  <div class="form-group">
                    <label class="col-sm-5 control-label">Posted At :</label>
                    <div class="col-sm-5">
                    <input name="emplsite" type="hidden" value="<?php echo $row['emplsite'];?>" />
                      <?php echo $row['emplsite'];?>
                    
                  </div>
                  </div>   
                  <div class="form-group">
                    <label class="col-sm-5 control-label">Reason For Leave :</label>
                    <div class="col-sm-5">
                    <input name="reason" type="hidden" value="<?php echo $row['reason'];?>" />
                      <?php echo $row['reason'];?>
                    
                  </div>
                  </div>                     
                  <div class="form-group">
                    <label class="col-sm-5 control-label">Aditional Info :</label>
                    <div class="col-sm-5">
                    <input name="message" type="hidden" value="<?php echo $row['message'];?>" />
                      <?php echo $row['message'];?>
                    
                  </div>
                  </div>                     
                  <div class="form-group">
                    <label class="col-sm-5 control-label">Leave Type :</label>
                    <div class="col-sm-5">
                    <input name="leave_type" type="hidden" value="<?php echo $row['leave_type'];?>" />
                      <?php echo $row['leave_type'];?>
                    
                  </div>
                  </div>                    
                   <div class="form-group">
                    <label class="col-sm-5 control-label">Status :</label>
                    <div class="col-sm-5" style="color: red">
                    <input name="leave_status" type="hidden" value="<?php echo $row['leave_status'];?>" />
                    <b>  <?php echo $row['leave_status'];?></b>
                    
                  </div>
                  </div>                   
                   <div class="form-group">
                    <label class="col-sm-5 control-label">Area Manager :</label>
                    <div class="col-sm-5">
                    <input type="text" name="area_manager" class="form-control" value="<?php echo $row['area_manager'];?>" required="required">
                    
                  </div>
                  </div>                   
                    <div class="form-group">
                    <label class="col-sm-5 control-label">Casual / Reliever :</label>
                    <div class="col-sm-5">
                    <input type="text" name="casual_reliever" class="form-control" value="<?php echo $row['casual_reliever'];?>" required="required">
                   
                  </div>
                  </div>                  
                  <div class="form-group">
                    <label class="col-sm-5 control-label">Manager Comment :</label>
                    <div class="col-sm-8">
                    <input type="multi-text" name="comment" class="form-control" value="<?php echo $row['comment'];?>" required="required">
                    
                  </div>
                  </div>                   
                    <div class="form-group">
                    <label class="col-sm-5 control-label">Apply Date :</label>
                    <div class="col-sm-4">
                    <input name="apply_date" type="hidden" value="<?php echo $row['apply_date'];?>" />
                      <?php echo $row['apply_date'];?>
                    
                  </div>
                  </div>                   
               

				  <br><br>
                  <div class="form-group">
                    <label class="col-sm-5 control-label"></label>
                    <div class="col-sm-4">
                      <input type="submit" name="submit" value="Update" class="btn btn-danger">
                      <!--<a href="view_leave_application.php "class="btn btn-primary">Cancel</a>-->
                    </div>
                  </div>
              </form>
       
		</div>
		

     <?php } ?>  



     
       