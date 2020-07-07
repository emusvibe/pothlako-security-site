   <div class="row-fluid">
       <a href="post.php" class="btn btn-info"><i class="icon-plus-sign icon-large"></i> Add Client</a>
                        <!-- block -->
                        <div class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left">Edit Class</div>
                            </div>
							<?php
							$query = mysqli_query($con,"select * from post where post_id = '$get_id'")or die(mysql_error());
							$row = mysqli_fetch_array($query);
							?>
                            <div class="block-content collapse in">
                                <div class="span12">
								<form method="post">
										<div class="control-group">
                                          <div class="controls">
                                            <input name="post_name" value="<?php echo $row['post_name']; ?>" class="input focused" id="focusedInput" type="text" placeholder = "Post Name" required>
                                          </div>
                                        </div>
										
									
											<div class="control-group">
                                          <div class="controls">
												<button name="update" class="btn btn-success"><i class="fa fa-save icon-large"></i> Save</button>

                                          </div>
                                        </div>
                                </form>
								</div>
                            </div>
                        </div>
                        <!-- /block -->
                    </div><?php
if (isset($_POST['update'])){
$post_name = $_POST['post_name'];

mysqli_query($con,"update post set post_name = '$post_name' where post_id = '$get_id' ")or die(mysql_error());
?>

<script>
window.location = "post.php";
</script>
<?php

}
?>