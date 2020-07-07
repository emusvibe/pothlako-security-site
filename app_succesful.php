<!DOCTYPE html>

<html>
    <head>
        <title>Pothlako | Security Services</title>
             <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="">
    <meta name="author" content="Francis Mahlava">
        <link href="css/bootstrap.min_4.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
                
        <!-- container -->
	<div class="container" align="center">
		<div class="row">
			<!-- Article content -->
                  
                        <section class="col-sm-12 maincontent"> <br><br><br><br>
				<h2> Application Submittion Successful</h2><br><br><br>
                                                                 				
 <img src="img/pothlako1.png" alt="pothlako security logo"/><br><br><br>

 <h3>
    We wish you all the best in your Application!. </h3>
<!--  <h3> 
    Check your Email to complete the registration</h3>-->
			</section> 
                        <?php 
        require_once('admin/send_mail.php');
//                        $reg_user = new USER();                
//        $emailAddress = $reg_user.$emailAddress;
        $msg = "
                <div class='alert alert-success' align='center'>
                        <button class='close' data-dismiss='alert'>&times;</button>
                        <strong>Congratulations!</strong>  Check your Email frequently should your application be successful an Email will be sent to you.
     
                        </div>
                        ";
                        echo $msg;  ?>
                        <br>
                        <a class="btn btn-primary btn-group-justified" href='index.php'>Go To Home Page</a><br><br>
		</div>
	</div>
	<!-- /container -->
        <script src="js/jquery.js" type="text/javascript"></script>
        <script src="../admin/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    </body>
</html>
