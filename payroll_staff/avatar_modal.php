<!-- Modal -->
<div id="myModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-header">
		<button type="button" class="close" data-dismiss="modal" aria-hidden="false">x</button>
		<h3 id="myModalLabel">Change Avatar</h3>
	</div>
		<div class="modal-body">
					<form method="post" action="staff_avatar.php" enctype="multipart/form-data">
							<center>	
								<div class="control-group">
								<div class="controls">
									<input name="image" class="input-file uniform_on" id="fileInput" type="file" required>
								</div>
								</div>
							</center>			
					
		</div>
					<div class="modal-footer">
						<button class="btn" data-dismiss="modal" aria-hidden="true"><i class="icon-remove icon-large"></i> Close</button>
						<button class="btn btn-info" name="change"><i class="icon-save icon-large"></i> Save</button>
					</div>
					</form>
</div>
<!-- end  Modal -->


<!--<div id="myModal" class="modal hide fade">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
      <div class="modal-header" style="background-color: #035888; color: #fff;">
        <h3 class="panel-title"><center><span class="glyphicon glyphicon-picture"></span> Profile Picture</center></h3>
      </div>
      <div class="modal-body">
          <form method="post" action="?dashboard" class="form" enctype="multipart/form-data">
              <div class="form-group">
                  <label for="image"><span class="glyphicon glyphicon-picture"></span> Profile Picture:</label>
                  <input type="file" accept="image/*" id="image" name="image" class="form-control" placeholder="Profile Picture" autofocus required/>
              </div>
              <div class="form-group">
                  <center><img id="displayImg" src="../vclass/uploads/images/<?php echo $dp[2]; ?>" style="width: 150px; height: auto"/></center>
              </div>
              <div class="form-group">
                  <center><button type="submit" class="btn btn-xs btn-success br" name="uploadImg"><span class="glyphicon glyphicon-cloud-upload"></span> Upload</button></center>
              </div>
          </form>
      </div>
    </div>
  </div>
</div>-->