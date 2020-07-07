<?php
        $school_year_query = mysqli_query($con,"select * from data_year order by data_year DESC")or die(mysql_error());
        $school_year_query_row = mysqli_fetch_array($school_year_query);
        $school_year = $school_year_query_row['data_year'];
        ?>

<?php $query_yes = mysqli_query($con,"select * from staff_notification
LEFT JOIN notification_read_staff on staff_notification.staff_notification_id =  notification_read_staff.notification_id
where staff_id = '$session_id' 
")or die(mysql_error());
$count_no = mysqli_num_rows($query_yes);
?>
<?php $query = mysqli_query($con,"select * from staff_notification
LEFT JOIN staff_post on staff_post.staff_post_id = staff_notification.staff_post_id
LEFT JOIN guards on guards.guard_id = staff_notification.guard_id
LEFT JOIN post on staff_post.post_id = post.post_id
where staff_post.staff_id = '$session_id' 
")or die(mysql_error());
$count = mysqli_num_rows($query);
?>

<?php $not_read = $count -  $count_no; ?>