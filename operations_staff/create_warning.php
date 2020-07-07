<div class="span12" id="">
	<div class="row-fluid">
	
				      <!-- block -->
                        <div class="block">
                            <div class="navbar navbar-inner block-header">
                                <div id="" class="muted pull-left"><h4><i class="icon-pencil"></i> OVERVIEW</h4></div>
                            
                            </div>
                           
                            <div class="block-content collapse in">
                                <div class="span12">
 <p class="">Use of this form is to document verbal communication with employees / officers about work performance issues, behavior
problems or incidents when company policies have been violated</p>
<form method="post" id="send_message">

    <div class="control-group col-sm-6">
        <label for="lb_incident">Employee Name and Surname:</label>
                    <input type="text" class="form-control" id="title">
    </div>
    <div class="control-group col-sm-3">
        <label for="lb_incident">Employee Number:</label>
                    <input type="text" class="form-control" id="title">
    </div>                
                                                                   
  <div class="control-group col-sm-3">
        <label for="lb_incident">Date:</label>
        <input type="text" class="form-control" id="title">
     </div>  
    
   <div class="control-group col-sm-12">
                    <label for="lb_incident">BRIEF OVERVIEW OF ISSUE:</label>
                    <textarea type="multi-text" class="form-control" id="title"></textarea>
   </div>
    <div class="control-group col-sm-6">
                    <label for="lb_incident">IS THIS THE FIRST TIME VERBAL COUNSELING HAS BEEN CONDUCTED:</label>
                    <select name="security_Experience" size="1"  required="">
                            <option value=""></option>
                            <option value="Yes">Yes</option>
                            <option value="No">No</option>
                            </select>
     </div>               
             
    <div class="control-group col-sm-6">
                    <label for="lb_incident">IF NO, WAS THE PREVIOUS VERBAL COUNSELING FOR THE SAME ISSUE:</label>
                    <select name="security_Experience" size="1"  required="">
                            <option value=""></option>
                            <option value="Yes">Yes</option>
                            <option value="No">No</option>
                            </select>
     </div> 
    <div class="control-group col-sm-6">
                    <label for="lb_incident">IF YES, IS DOCUMENTATION OF PREVIOUS COMMUNICATION ATTACHED:</label>
                    <select name="security_Experience" size="1"  required="">
                            <option value=""></option>
                            <option value="Yes">Yes</option>
                            <option value="No">No</option>
                            </select>
     </div> 
    
    
    
    

    <div class="control-group col-sm-12">
                    <label for="lb_incident">SUMMARY OF COMMUNICATION WITH EMPLOYEE:</label> 
                   <textarea type="multi-text" class="form-control" id="title"></textarea>  
                                                               
      </div> 
  
    <div class="control-group col-sm-12">
                    <label for="lb_incident">EMPLOYEE IS EXPECTED TO DO THE FOLLOWING:</label> 
                   <textarea type="multi-text" class="form-control" id="title"></textarea>  
                                                             
      </div>
   
    <div class="control-group col-sm-12">
                    <label for="lb_incident">WHAT OTHERS WILL DO TO SUPPORT THIS:</label> 
                   <textarea type="multi-text" class="form-control" id="title"></textarea>  
     </div>                                                             
   
  
    <div class="control-group col-sm-12">
                    <label for="lb_incident">ADDITIONAL TRAINING OR DEVELOPMENT:</label> 
                   <textarea type="multi-text" class="form-control" id="title"></textarea>  
     </div>                                                             
      <div class="control-group col-sm-12">              
    <label for="lb_incident">FOLLOW UP COMMUNICATION WITH EMPLOYEE:</label></div> 
     <div class="control-group col-sm-12">
    
    
     <div class="col-sm-3">
    <label for="lb_incident">DATE:</label>
     <input type="text" class="form-control" id="title"> 
       </div>             
    <div class="col-sm-3">
    <label for="lb_incident">COMMENTS:</label>
     <input type="text" class="form-control" id="title"> 
       </div>  
    <div class="col-sm-3">
    <label for="lb_incident">BY:</label>
     <input type="text" class="form-control" id="title"> 
       </div>  
    <div class="col-sm-2">
    <label for="lb_incident">COMPLETED:</label>
    <select name="security_Experience" size="1"  required="">
                            <option value=""></option>
                            <option value="Yes">Yes</option>
                            <option value="No">No</option>
                            </select> 
       </div>  

        </div>              
     <div class="control-group col-sm-12">              
    <label for="lb_incident">MANAGER / SUPERVISOR:</label></div> 
     <div class="control-group col-sm-12">
    
    
     <div class="col-sm-3">
    <label for="lb_incident">NAME:</label>
     <input type="text" class="form-control" id="title"> 
       </div>             
    <div class="col-sm-3">
    <label for="lb_incident">SURNAME:</label>
     <input type="text" class="form-control" id="title"> 
       </div>  
    <div class="col-sm-3">
    <label for="lb_incident">SIGN:</label>
     <input type="text" class="form-control" id="title"> 
       </div>  
    <div class="col-sm-2">
    <label for="lb_incident">COMPLETED:</label>
    <select name="security_Experience" size="1"  required="">
                            <option value=""></option>
                            <option value="Yes">Yes</option>
                            <option value="No">No</option>
                            </select> 
       </div>  

        </div>                
<!--                                                                    <div class="control-group">
                <label>Title:</label>
<div class="controls">
<select name="teacher_id"  class="chzn-select" required>
<option></option>-->
                <?php
//                $query = mysqli_query($con,"select * from teacher order by firstname");
//                while($row = mysqli_fetch_array($query)){

                ?>

                <!--<option value="<?php echo $row['teacher_id']; ?>"><?php echo $row['firstname']; ?> <?php echo $row['lastname']; ?> </option>-->

                <?php // } ?>
<!--</select>

</div>
</div>-->
										
<!--<div class="control-group">
<label>Details:</label>
<div class="controls">
<textarea name="my_message" class="my_message" required></textarea>
</div>
</div>-->
<div class="control-group col-sm-12">
<div class="controls">
<button  class="btn btn-info"><i class="fa fa-save"></i> Save </button>

</div>
</div>
                                </form>

						
								
							
								
								
										<script>
			jQuery(document).ready(function(){
			jQuery("#send_message").submit(function(e){
					e.preventDefault();
					var formData = jQuery(this).serialize();
					$.ajax({
						type: "POST",
						url: "send_message.php",
						data: formData,
						success: function(html){
						
						$.jGrowl("Incident Successfully Saved", { header: 'Incident Saved' });
						var delay = 2000;
							setTimeout(function(){ window.location = 'incident_report.php'  }, delay);  
						
						
						}
						
					});
					return false;
				});
			});
			</script>
			
			
								
								
								
								</div>
                            </div>
                        </div>
                        <!-- /block -->
						

	</div>
</div>