

<ul	 id="da-thumbs" class="da-thumbs">
    <?php $query = mysqli_query($con,"select * from staff_post
    LEFT JOIN post ON post.post_id = staff_post.post_id
    where staff_id = '$session_id' and data_year = '$school_year' ")or die(mysql_error());
    $count = mysqli_num_rows($query);

    if ($count > 0){
    while($row = mysqli_fetch_array($query)){
    $id = $row['staff_post_id'];

    ?>
            <li id="del<?php echo $id; ?>">
                    <a href="my_students.php<?php echo '?id='.$id; ?>">
                                    <img src ="<?php echo $row['../admin/uploads/thumbnails'] ?>" width="124" height="140" class="img-polaroid" alt="">
                            <div>
                            <span><p><?php echo $row['class_name']; ?></p></span>
                            </div>
                    </a>
                    <p class="class"><?php echo $row['class_name']; ?></p>
                    <p class="subject"><?php echo $row['subject_code']; ?></p>
                    <a href="#<?php echo $id; ?>" data-toggle="modal"><i class="icon-trash"></i> Remove</a>	

            </li>
    <?php include("delete_class_modal.php"); ?>
<?php } }else{ ?>
<div class="alert alert-info"><i class="icon-info-sign"></i> No Class Currently Added</div>
<?php  } ?>
</ul>