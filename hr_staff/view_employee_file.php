	<?php include('dbConnection.php');?>

<div class="panel panel-default col-md-12 " >
    
        <?php $id=$_REQUEST['id'];?>
    	<?php
//        where employee_id= '$get_id'
//	$query = mysqli_query($con,"select * from employees  LEFT JOIN post ON employees.post_id = post.post_id ") or die(mysql_error());
         
        $query = mysqli_query($con,"select * from employees  LEFT JOIN post ON employees.post_id = post.post_id where employee_id= '$id'") or die(mysql_error());
	while ($row = mysqli_fetch_assoc($query)) {
		$id = $row['employee_id'];
		?>
                 <div class="form-group">
		</div>
    <div class=" col-md-6 " >
        <img class="img-circle" src="<?php echo $row['photo']; ?>" height="250" width="250" alt="Employee Photo">
               <!--<img class="img-circle" src="<?php // echo $row['photo']; ?>" height="50" width="50">-->
        </div>
	<div class=" col-md-6" >	
        <div class="form-group">	
                <!--Name:&nbsp; &nbsp;--> 
                <h2 class=""></B><?php echo $row['firstname'] . "&nbsp;" . $row['lastname']; ?><B></h2>
		</div>
        <div class="form-group">
		<b>Employee No.:</b>&nbsp; &nbsp; <?php echo $row['employee_number'];?>
		</div>
        <div class="form-group">
		<b>Gender:</b>&nbsp; &nbsp; <?php echo $row['gender'];?>
		</div>
        <div class="form-group">
		<b>Age:</b>&nbsp; &nbsp; <?php echo $row['age'];?>
		</div>
        <div class="form-group">
		<b>Position:</b>&nbsp; &nbsp; <?php echo $row['position'];?>
		</div>
        <div class="form-group">
		<b>Contact:</b>&nbsp; &nbsp; <?php echo $row['contact_number'];?>
		</div>
        <div class="form-group">
		<b>E-Mail:</b> &nbsp; &nbsp;<?php echo $row['email_address'];?>
		</div>
        <div class="form-group">
		<b>Staff_Type:</b> &nbsp; &nbsp; <?php echo $row['staff_type'];?>
		</div>
            <div class="form-group">
		<b>Posted At:</b>&nbsp; &nbsp; <?php echo $row['post_name'];?>
		</div>
<!--		<div class="form-group">
		<b>Povince:</b>&nbsp; &nbsp; <?php echo $row['photo'];?>
		</div>   -->
<!--		<div class="form-group">
		<b>Firearm Trained:</b>&nbsp; &nbsp; <?php echo $row['firearm'];?>
		</div>-->
<!--		<div class="form-group">
		<b>PSIRA Registration No.:</b> &nbsp; &nbsp;<?php echo $row['sira_Number'];?>
		</div>-->
<!--		<div class="form-group">
		<b>Grade Obtained:</b>&nbsp; &nbsp; <?php echo $row['sira_grade'];?>
		</div>-->
<!--		<div class="form-group">
		<b>Prepared to work anywhere?</b>&nbsp; &nbsp; <?php echo $row['can_work_Anywhere'];?>
		</div>
		<div class="form-group">
		<b>Prepared to work any Shift?</b>&nbsp; &nbsp; <?php echo $row['can_work_AnyShift'];?>
		</div>
		<div class="form-group">
                    <b>Salary Required per month?</b>&nbsp; &nbsp; <?php echo $row['salary_Required'];?>
		</div>
		<div class="form-group">
                    <b>PRE-EMPLOYMENT TEST</b>&nbsp; &nbsp; <?php echo $row['incidentReport'];?>
		</div>-->
		</div>
		</div>

     <?php } ?>  