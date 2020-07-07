   <div class="row-fluid">
                        <!-- block -->
                        <div class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left">Add Client / Post</div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12">
			<form method="post">
				<div class="control-group">
                                          <div class="controls">
                            <input name="post_name" class="input focused" id="focusedInput" type="text" placeholder = "Post Name" required>
                                          </div>
                                        </div>
									
								
					<div class="control-group">
                                          <div class="controls">
					<button name="save" class="btn btn-info"><i class="icon-plus-sign icon-large"></i></button>

                                          </div>
                                        </div>
                                </form>
								</div>
                            </div>
                        </div>
                        <!-- /block -->
                    </div><?php
if (isset($_POST['save'])){
$post_name = $_POST['post_name'];


$query = mysqli_query($con,"select * from post where post_name  =  '$post_name' ")or die(mysql_error());
$count = mysqli_num_rows($query);

if ($count > 0){ ?>
<script>
alert('Date Already Exist');
</script>
<?php
}else{
mysqli_query($con,"insert into post (post_name) values('$post_name')")or die(mysql_error());
?>
<script>
window.location = "post.php";
</script>
<?php
}
}
?>