	<div class="navbar navbar-fixed-top navbar-inverse">
           <div class="navbar-inner">
               <div class="container-fluid">
					<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"> <span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</a>
                   <a class="brand" href="#"><img src="../admin/images/logo_lil.png" alt=""/>&nbsp;&nbsp;&nbsp;Pothlako Security Services:&nbsp;&nbsp;&nbsp;Human Resource Department</a>
							<div class="nav-collapse collapse">
								<ul class="nav pull-right">
                                                            <?php $query= mysqli_query($con,"select * from admin_staff where staff_id = '$session_id'")or die(mysql_error());
                                                    $row = mysqli_fetch_array($query);
                                    ?>
                                    <li class="dropdown">
                                            <a href="#" role="button" class="dropdown-toggle" data-toggle="dropdown"> <i class="fa fa-user icon-large"></i><?php echo '</span>&nbsp;&nbsp;&nbsp;&nbsp;Hello,</span>&nbsp;&nbsp;'. $row['firstname']." ".$row['lastname'];  ?> </a>
                                                            <ul class="dropdown-menu">
<!--                                                                   <i class="caret"></i>-->
<!--                                                                           <li>  
                                                                               <a href="change_password_teacher.php"><i class="icon-circle"></i> Change Password</a>
                                                                            <a tabindex="-1" href="#myModal" data-toggle="modal"><i class="icon-picture"></i> Change Avatar</a>
                                                                            <a tabindex="-1" href="profile_teacher.php"><i class="icon-user"></i> Profile</a>
                                                                    </li>
                                                                    <li class="divider"></li>
                                                                    <li><a tabindex="-1" href="logout.php"><i class="icon-signout"></i>&nbsp;Logout</a></li>-->
                                                            </ul>
                                    </li>
								</ul>
							</div>
                   <!--/.nav-collapse -->
               </div>
           </div>
</div>
<?php include('avatar_modal.php'); ?>		