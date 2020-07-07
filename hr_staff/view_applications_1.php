	<?php include('dbConnection.php'); ?>
<?php $id=$_REQUEST['id'];?>
<div class="panel panel-default col-md-12" align="left">
    <div class="" >
    	<?php
	$query = mysqli_query($con,"select * from applicanttable where applicant_id= '$id' ORDER BY signupTime DESC") or die(mysql_error());
	while ($row = mysqli_fetch_array($query)) {
		$id = $row['applicant_id'];
                $floc1  = $row['id_doc'];
                $floc2  = $row['cv_doc'];
                $floc3  = $row['psira_doc'];
		?>
                 <div class="form-group">
		</div>
		<div class="form-group">	
                <B>Name:&nbsp; &nbsp; </B><?php echo $row['firstName'] . "&nbsp;" . $row['surName']; ?>
		</div>
        <div class="form-group">
		<b>ID No.:</b>&nbsp; &nbsp; <?php echo $row['id_Number'];?>
		</div>
         <div class="form-group">
		<b>ID Copy:</b> &nbsp; &nbsp;
	<a data-placement="top" title="Download" id="<?php echo $id; ?>download"  class="btn btn-primary btn-sm" href="<?php echo $row['id_doc']; ?>"><i class="fa fa-download"></i></a>
    </div>
        <div class="form-group">
		<b>Gender:</b>&nbsp; &nbsp; <?php echo $row['gender'];?>
		</div>
        <div class="form-group">
		<b>Age:</b>&nbsp; &nbsp; <?php echo $row['age'];?>
		</div>
        <div class="form-group">
		<b>Applying for:</b>&nbsp; &nbsp; <?php echo $row['position_applied_for'];?>
		</div>
         <div class="form-group">
		<b>CV Documents:</b> &nbsp; &nbsp;
	<a data-placement="top" title="Download" id="<?php echo $id; ?>download"  class="btn btn-primary btn-sm" href="<?php echo $row['cv_doc']; ?>"><i class="fa fa-download"></i></a>
    </div>
        <div class="form-group">
		<b>Contact:</b>&nbsp; &nbsp; <?php echo $row['mobile'];?>
		</div>
        <div class="form-group">
		<b>E-Mail:</b> &nbsp; &nbsp;<?php echo $row['emailAddress'];?>
		</div>
        <div class="form-group">
		<b>Address:</b> &nbsp; &nbsp; <?php echo $row['address'];?>
		</div>
            <div class="form-group">
		<b>City:</b>&nbsp; &nbsp; <?php echo $row['city'];?>
		</div>
		<div class="form-group">
		<b>Povince:</b>&nbsp; &nbsp; <?php echo $row['province'];?>
		</div>   
		<div class="form-group">
		<b>Firearm Trained:</b>&nbsp; &nbsp; <?php echo $row['firearm'];?>
		</div>
		<div class="form-group">
		<b>PSIRA Registration No.:</b> &nbsp; &nbsp;<?php echo $row['sira_Number'];?>
		</div>
        <div class="form-group">
		<b>PSIRA Certificate:</b> &nbsp; &nbsp;
	
        <a data-placement="top" title="Download" id="<?php echo $id; ?>download"  class="btn btn-primary btn-sm" href="<?php echo $row['psira_doc']; ?>"><i class="fa fa-download"></i></a>
   
            </div>
        <div class="form-group">
		<b>Grade Obtained:</b>&nbsp; &nbsp; <?php echo $row['sira_grade'];?>
		</div>
		<div class="form-group">
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
		</div>
		</div>
		</div>

     <?php } ?>  