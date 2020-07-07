<div class="span3" id="">
	<div class="row-fluid">
	
				      <!-- block -->
                        <div class="block">
                            <div class="navbar navbar-inner block-header">
                                <div id="" class="muted pull-left"><h4><i class="icon-pencil"></i> Create Incident</h4></div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12">

<form method="post" id="send_message">

   
                    <label for="lb_incident">Incident Title:</label>
                    <input type="text" class="form-control" id="title" name="name" required = "">
                                                                   
  
                    <label for="lb_incident">OB No.:</label>
                    <input type="text" class="form-control" id="title" name="ob" required = "">
                                                                  
  
                    <label for="lb_incident">Date:</label>
                    <input type="date" class="form-control" id="datepicker" name="date" required = "">
   
                    <label for="lb_incident">Time:</label>
                    <input type="time" class="form-control" id="timepicker" name="time" required = "">
                                                          
                    <label for="lb_incident">Location:</label>
                    <input type="text" class="form-control" id="title" name="location1" required = "">                                                
                                                                    
                    <label for="lb_incident">Reporting Officer:</label>
                    <input type="text" class="form-control" id="title" name="officer" required = "">  
                    
                    <label for="lb_incident">Location:</label>
                    <input type="text" class="form-control" id="title" name="location2" required = ""> 
                    <div class="control-group">
                    <label>Details:</label>
                    <textarea name="my_message" class="my_message" required></textarea>
                    </div>
                    
                     <div class="control-group">
                     <label>Upload Image1:</label>
                     <input type="file" name="id_doc"  class="input-file uniform_on" id="fileInput"  required="">
                     <input type="hidden" name="MAX_FILE_SIZE" value="1000000" />
                    
                    <label>Upload Image2:</label>
                    <input type="file" name="id_doc"  class="input-file uniform_on" id="fileInput"  required="">
                     <input type="hidden" name="MAX_FILE_SIZE" value="1000000" />
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
										

<div class="control-group">
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