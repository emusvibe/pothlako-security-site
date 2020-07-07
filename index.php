<!DOCTYPE html>
<html lang="en">
    <?php include('dbConnection.php'); ?>
<head>
    
  <meta http-equiv="content-type" content="text/html;charset=UTF-8" />      
    <meta charset="utf-8">
        <!-- Responsive Meta -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- IE Compatibility -->
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <!-- Meta Description -->
        <meta name="description" content="...">

        <!-- Page title -->
         <title>Pothlako | Security Services</title>

        
        <!-- <link rel="shortcut icon" href="icons/favicon.ico"> -->

        <link href="https://fonts.googleapis.com/css?family=Saira" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=microgrammaDBolExt" rel="stylesheet">
 <!-- Font Awesome Stylesheet -->
 <link href="css/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
        <!-- Bootstrap Stylesheet -->
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <!-- Lightbox Stylesheet -->
        <link rel='stylesheet' href='css/jquery.fancybox.min.css'/>
        <!-- Animate.CSS Stylesheet -->
        <link rel='stylesheet' href='css/animate.css'/>
        <!-- Custom Stylesheet -->
        <!--<link rel='stylesheet' href='css/style.default.css'/>-->
        <link href="css/my_style.css" rel="stylesheet" type="text/css"/>
        <link href="css/datepicker/datepicker3.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>


        <!--=============== Navbar ===============-->
        <nav class="main-navbar">

            <div class="main-navbar-header">
                <div class="container d-flex justify-content-between align-items-center">
                    <!-- Navbar Brand -->
                    <a href="#login.html" class="navbar-brand">
                        <h3 >PS <span  class="ellipsis"></span></h3>
                        <img src="img/call.png" alt=""/>
                    </a>

                    <!-- Open Menu Btn -->
                    <button id="navbar-open">
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                    </button>
                </div>
            </div>

            <!-- Navbar Menu Holder -->
            <div class="navbar-outer">
                <div class="navbar-inner d-flex justify-content-center align-items-center">
                    <a id="close-btn" href="#">
                        <img src="img/close.svg" alt="close" class="img-fluid">
                    </a>

                     <!-- Navbar Menu -->
                    <ul class="navbar-menu list-unstyled text-center">
                        <li>
                            <a href="#home">Home</a>
                        </li>
                        <li>
                            <a href="#about">About</a>
                        </li>
                        <li>
                            <a href="#services">Services</a>
                        </li>
                        <li>
                            <a href="#resume">Recruitment</a>
                        </li>
                        <li>
                            <a href="#gallery">Gallery</a>
                        </li>
                        <li>
                            <a href="#contact">Contact</a>
                        </li>
                        <li>
                            <a href="#leave">Leave Application</a>
                        </li>
                    </ul>
                </div>

            </div>
        </nav>
        <!--=============== End Navbar ===============-->

        <!-- BLOCK HOME -->

                    <div id="home" class="content_diver home  " title="home" onmouseover="this.title='';" >
                        <div id="top_slider" class="slider_page  top_slider" align="center">
                            <div style="  z-index :99;position: absolute;   overflow: hidden; width:100%; top:0px; bottom:0px;"  >
                                <canvas id="demo-canvas"  ></canvas>
                            </div>
                            <div class="container d-flex align-items-center">

                <div class="heading">
                    <!--<p class="wow fadeInUp">Hello, I'm</p>-->
                    <h1 class="wow fadeInUp" data-wow-delay="0.3s">POTHLAKO SECURITY<span style="opacity: 0.8;" class="ellipsis"></span></h1>
                    <h2 class="wow fadeInUp" data-wow-delay="0.6s">SERVICES</h2>
                    <ul class="social list-unstyled list-inline wow fadeInUp text-center" data-wow-delay="0.9s">
                        <li class="list-inline-item">
                            <a href="#" title="Facebook"><i class="fa fa-facebook"></i></a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#" title="Twitter"><i class="fa fa-twitter"></i></a>
                        </li>
<!--                        <li class="list-inline-item">
                            <a href="#" title="Facebook"><i class="fa fa-behance"></i></a>
                        </li>-->
                        <li class="list-inline-item">
                            <a href="login.html" title="Admin"><i class="fa fa-sign-in"></i></a>
                            
                        </li>
                        <li class="list-inline-item">
                            <a href="#" title="Google Plus"><i class="fa fa-google-plus"></i></a>
                        </li>
                    </ul>
                </div>
               </div>
             </div>
            </div>
                  

        <!--=============== About Section ===============-->
        <section class="about" id="about">
            <?php // include('admin/dbConnection.php'); ?>
            <div class="container  text-justify">
                <h2 class="">COMPANY BACKGROUND</h2>

<?php
        $mission_query = mysqli_query($con,"select * from content where title  = 'COMPANY BACKGROUND' ")or die(mysql_error());
        $mission_row = mysqli_fetch_array($mission_query);
        echo $mission_row['content'];
?>
                
                
<h4>Service Provision:</h4>
We are totally committed to providing consistent, uncompromising professional and high standard, quality 
safety and security solutions that meets and surpasses the expectations of our clients who have delegated us to 
protect their interests.<br><br>

<h4>Employee Empowerment And Growth:</h4>
<!--Our focus is to grow, develop and empower previously disadvantaged individuals so that they become active participants in the 
socio-economic growth of the country. Our emphasis is the employment of women into managerial and supervisory levels and the upliftment 
of black people within the structures of the company.
By providing In-house training programmes, refresher and regular courses, we assure the client that the quality of the 
Security Officers deployed on their behalf do not compromise the safety and security or their interests.

Pothlako Cleaning Division provides waste management services that are unique and aimed at offering a one-point cleaning solution
to clients. Committed to providing hygienic and SABS approved quality waste management solutions.The division employs only women in all it’s 
Hierarchy.This is an empowerment initiative to create employment opportunities for women.

All employees are well trained and conversant in the waste management industry. We tap from the wide pool of
prospective workers that have been in the industry and unemployed.
Highly qualified employees are equipped with the necessary and required expertise, equipment and know-how
in executing the tasks.<br>
1. Integrated waste management solutions for Retail, Corporate, Industrial and Domestic.<br>
2. Cleaning.<br>
3. Hiring of cleaners on daily, weekly or monthly basis.<br>
4. Fumigation Services.<br>
5. Collection and Disposal of waste.-->

<?php
        $mission_query = mysqli_query($con,"select * from content where title  = 'Employee Empowerment And Growth' ")or die(mysql_error());
        $mission_row = mysqli_fetch_array($mission_query);
        echo $mission_row['content'];
?>

<!--<br><br>-->

<h4>PSIRA Legislation:</h4>
Adherence to all Government Legislation and complying with PSIRA regulations and procedures in the daily conduct of the 
business from training to engaging rofessionals that have a clear understanding of the security industry...<br>
<img src="img/psiralogo.jpg" style="width:25% "alt=""/><br><br>
                

<h4>Social Responsibility:</h4>
<!--As an emerging Black Company, our motto is to reinvest back into our communities at least 1% of our net profits through 
empowerment projects and initiatives. Our core focus is youth development programmes and we have identified informal settlements 
youths as beneficiaries.-->
<?php
        $mission_query = mysqli_query($con,"select * from content where title  = 'Social Responsibility' ")or die(mysql_error());
        $mission_row = mysqli_fetch_array($mission_query);
        echo $mission_row['content'];
?>
<!--<br><br>-->


<h4>Corporate Governance:</h4>
<!--All our Directors have the required and necessary PSIRA grading and are committed to a transparent governance process, taking into 
consideration that the business is managed according to generally accepted accounting principles and best management and corporate 
practice.-->
<?php
        $mission_query = mysqli_query($con,"select * from content where title  = 'Corporate Governance' ")or die(mysql_error());
        $mission_row = mysqli_fetch_array($mission_query);
        echo $mission_row['content'];
?>
<br><br>

<a href="#" class="btn btn-template" target="_blank">View Or Download Our Profile</a>

            </div>
</section>
        <!--=============== End About Section ===============-->

        <!--=============== Mission Section ===============-->
        <section class="skills gray-bg has-gradient-both" id="skills">
            <div class="container">
                <h2 class="has-ellipsis-left text-center">Our Mission and Vision</h2>

                <div class="row">
                   
                     <h4>MISSION STATEMENT</h4>
                            By providing a one-point yet integrated security solution that is of high quality with a back-up of well trained and motivated staff and hands on experienced management, Pothlako Security and Cleaning Services is on the cutting edge of ensuring maximum safety, security and protection of our clients property, people and infrastructure.

We have made a pledge of integrity to hold the clients interest at the fore front by offering security solutions that are tailor made for you the client.

In the end as a 100% Black owned Company, our Mission is to empower previously disadvantaged individuals to actively participate in the protection and socio-economic growth of our country.

The organisational structure at Pothlako Security and Cleaning Services has
been arranged in such a way that the following requirements of the quality
management system can be addressed. <br> <br>
    
                    
                            <h4>VISION</h4>
                       Our vision is to grow Pothlako Security and Cleaning Services into a formidable company that is Client center and Employee focused with a view (aim) to deliver a service that is of the highest quality, thereby offering integrated safety and security solutions.     
                       <br> <br> <br>
                </div>
            </div>
        </section>
        <!--=============== End Mission Section ===============-->


        <!--=============== Services Section ===============-->
        <section class="services" id="services">
            <div class="container">
                <h2 class="has-ellipsis-left text-center">Our Services</h2>

                <div class="row">
                    <div class="col-lg-3 col-md-6 text-center">
                        <div class="items wow fadeInUp">
                            <div class="img">
                                <!--<img src="images/design.png" alt="GUARDING SERVICES">-->
                                <img src="img/guarding.jpg" alt=""/>
                            </div>
                            <h4>GUARDING SERVICES</h4>
                            <p>We offer guarding solutions from access control. 
                                Control Room Management, Paramilitary, 
                                Special Events, Retail, Commercial, 
                                Residential and Industrial Guarding.</p>
                            
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 text-center">
                        <div class="item wow fadeInUp" data-wow-delay="0.3s">
                            <div class="img">
                                <!--<img src="images/webdev2.png" alt="PATROLS">-->
                                <img src="img/patrols2.jpg" alt=""/>
                            </div>
                            <h4>PATROLS</h4>
                            <p>Patrolling services for premises. Special Events and Infrastructure.</p>
                        

                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 text-center">
                        <div class="item wow fadeInUp" data-wow-delay="0.6s">
                            <div class="img">
                                <!--<img src="images/mobile1.png" alt="ARMED REACTION">-->
                                <img src="img/banner6-small.jpg" alt=""/>
                            </div>
                            <h4>ARMED REACTION</h4>
                            <p>24 Hour armed response unit with direct communication to our control 
                                room and other emergency operators.</p>
                       
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 text-center">
                        <div class="item wow fadeInUp" data-wow-delay="0.9s">
                            <div class="img">
                                <!--<img src="images/marketing.png" alt="VIP PROTECTION">-->
                                <img src="img/vip protection.jpg" alt=""/>
                            </div>
                            <h4>VIP PROTECTION</h4>
                            <p>Protection services to high level Executives and Dignataries.</p>
                        
                        </div>
                    </div>
                    
                </div>
                <h4>TRAINING CENTER</h4>
With an increased demand from clients for quality service and professional execution of security services 
and guarding, Pothlako's priority is to offer excellent and effective training for our Security Officers.

Our security specialists, either armed or unarmed ensure a safe and secure environment for your Business, 
Resident,Event or any location were they are deployed. In addition to our Armed Reaction Services, we have a documented 
history of providing quality security services. We consider a absolute personal safety of all.
Pothlako Security Services provide a single point integrated safety and security solution to its clients.
Our core business encompasses the following.<br><br>

<h4>ELECTRONICS & IT</h4>
Pothlako provides the entire solution, including Planning, Design, and On-going Maintenace Provisionand Installation of the latest State 
of the Art electronic systems both for industrial and Residential usage.
Development os Security Technology Objectives
Evaluation of existing security systems with comprehensive report and recomendations
Control Room planning & installation<br>
Cellular SMS Alarm Systems<br>
Intercoms<br>
CCTV Products<br>
Automated Gates<br>
Electric Wall Fencing<br>
Security Doors<br>
Intruder Detection<br>
Perimiter Protection<br><br>

<h4>CONTROL ROOM MANAGEMENT</h4>
A 24 hour control and operations center at our Head Office in Benoni is a central location for coordinating and monitoring field 
operations.<br><br>

<h4>NATIONAL KEY POINTS</h4>
Electronics and guarding of NKP's such as Airports, Ports, Borders, Legislature


            </div>
        </section>
        <!--=============== End Services Section ===============-->


        <!--=============== Recruitment section ===============-->
        <section class="resume" id="resume">
            <div class="container">

                <!-- Education Panel [Timeline Holder]-->
                <div class="timeline-holder education text-justify">
                    <h2 class="text-center wow fadeInUp">Recruitment</h2>
                    <h4 class="text-center wow fadeInUp">A well trained employee is a credit to our company and our clients.</h4>


This function is perhaps the most important of any good security program. It must be a highly structured program capable of achieving the desired results. Obviously, basing the anticipated wage rates at an attractive level helps a company attract and retain highly motivated dedicated personnel.
Some of our recruiting methods are quite innovative and work very well. In addition to this method, we contact qualified security training schools for candidates and possible placement of their graduates. The individuals from these sources are well trained and have made a personal commitment to the private security field. We have an ongoing rapport with the various administrators at these schools and they have provided us with highly qualified people in the past. Additionally, we maintain a relationship with law enforcement administrators at all of the local colleges, which have police science curriculum. They have proven to be very good employees.
 
Pothlako Security places great emphasis on hiring good people and providing them with the very best training available.
Our turnover ratio is one of the lowest in the security industry. We pay our personnel slightly more than most security companies, and we provide more training. We demand more from our officers, and we provide a stable work environment with the potential for additional training and advancement within our company.
We provide professional looking Uniforms and top quality state of the art Equipment to our personnel. Pothlako Security provides a full range of Performance Specific Training both as a requirement for employment and in addition to periodic refresher training and new information so that our personnel can perform their duties in a superior manner.

 All PS Guards will meet the following mandatory basic qualifications:
 Able to read, write, speak & understand English language proficiently
 Have no record of felony convictions
 Have no known history of alcohol or narcotics dependence or addiction
 Have no physical or mental defects which prohibit performing their duties
 Hold a South African Green citizenship ID book, or legally admitted foreign national status
 Past behavior shows their fitness for work
 Have a verifiable work record
 Character of honesty, truthfulness & personal integrity

                </div>


                <!-- Employment Panel [Timeline Holder]-->
                <div class="timeline-holder employment text-justify">
                    <h2 class="text-center wow fadeInUp">Pothlako Security Employment Screening Process</h2>
In the PS screening process, Guards are assessed on their motivation and ability to perform the mental and physical tasks required at any location.
All PS Guards will meet the following mandatory basic qualifications:

All applicants are screened using the following criteria:<br>
Employment History<br>
Military History<br>
Criminal Record<br>
Education<br>
Drug Screen<br>
Personal Ref<br>
Driving License & Record<br>
Character & Mental Stability<br>
Federal Immigration Status<br><br><br>


<a href="applicationForm.php" class="btn btn-template" target="_blank">Apply Online</a>
               
                </div>

            </div>
        </section>
        <!--=============== End Recruitment section ===============-->

    
        <!--=============== Gallery Section ===============-->
        <section class="gallery gray-bg has-gradient-both" id="gallery">
            <div class="container">
                <h2 class="has-ellipsis-left">Our Gallery</h2>

                <!-- Gallery Navigation -->
                <div class="gallery text-center">
                    <ul class="controls list-inline">
                        <li class="list-inline-item">
                            <div class="filter" data-filter="all">All</div>
                        </li>
                        <li class="list-inline-item">
                            <div class="filter" data-filter=".web-design">Guarding Services</div>
                        </li>
                        <li class="list-inline-item">
                            <div class="filter" data-filter=".ux-design">Armed Response</div>
                        </li>
                        <li class="list-inline-item">
                            <div class="filter" data-filter=".typography">Dog Handlers</div>
                        </li>
                    </ul>
<!-- end of Gallery Navigation -->
                    <!-- Gallery Items -->
                    <div id="gallery" class="row">
                        <div class="mix web-design col-lg-4 col-md-6">
                            <div class="item wow fadeInUp">
                                <a  href="images/gaurds.jpg" class="image" data-fancybox="gallery">
                                    <img src="images/gaurds.jpg" class="img-fluid" alt="...">
                                    <div class="overlay hidden-sm-down d-flex justify-content-center align-items-center">
                                        <div class="icon"></div>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="mix ux-design col-lg-4 col-md-6">
                            <div class="item wow fadeInUp" data-wow-delay="0.2s">
                                <a  href="images/armed response2.jpg" class="image" data-fancybox="gallery">
                                    <img src="images/armed response2.jpg" class="img-fluid" alt="...">
                                    <div class="overlay hidden-sm-down d-flex justify-content-center align-items-center">
                                        <div class="icon"></div>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="mix web-design col-lg-4 col-md-6">
                            <div class="item wow fadeInUp" data-wow-delay="0.4s">
                                <a  href="images/gaurds2.jpg" class="image" data-fancybox="gallery">
                                    <img src="images/gaurds2.jpg" class="img-fluid" alt="...">
                                    <div class="overlay hidden-sm-down d-flex justify-content-center align-items-center">
                                        <div class="icon"></div>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="mix typography col-lg-4 col-md-6">
                            <div class="item wow fadeInUp" data-wow-delay="0.6s">
                                <a  href="images/dogHandler1.jpg" class="image" data-fancybox="gallery">
                                    <img src="images/dogHandler1.jpg" class="img-fluid" alt="...">
                                    <div class="overlay hidden-sm-down d-flex justify-content-center align-items-center">
                                        <div class="icon"></div>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="mix ux-design col-lg-4 col-md-6">
                            <div class="item wow fadeInUp" data-wow-delay="0.8s">
                                <a  href="images/armed response.jpg" class="image" data-fancybox="gallery">
                                    <img src="images/armed response.jpg" class="img-fluid" alt="...">
                                    <div class="overlay hidden-sm-down d-flex justify-content-center align-items-center">
                                        <div class="icon"></div>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="mix web-design col-lg-4 col-md-6">
                            <div class="item wow fadeInUp" data-wow-delay="1s">
                                <a  href="images/gaurds3.jpg" class="image" data-fancybox="gallery">
                                    <img src="images/gaurds3.jpg" class="img-fluid" alt="...">
                                    <div class="overlay hidden-sm-down d-flex justify-content-center align-items-center">
                                        <div class="icon"></div>
                                    </div>
                                </a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>
        <!--=============== End Gallery Section ===============-->


        <!--=============== Contact Section ===============-->
        <section class="contact" id="contact">
            <div class="container">
                <h2 class="has-ellipsis-left text-center wow fadeInUp">Contact Us</h2>
                <p class="lead text-center wow fadeInUp" data-wow-delay="0.3s">Please kindly contact us should you have any inquiries or complaints.</p>

                <div class="form-holder">
                    <form action="https://formspree.io/info@pothlakosecurity.co.za" id="contact-form" method="POST">
                        <div class="row">
                            <div class="col-md-6 form-group">
                                <input type="text" name="username" id="username" class="form-control" required>
                                <label for="username">Enter your name</label>
                            </div>
                            <div class="col-md-6 form-group">
                                <input type="email" name="useremail" class="form-control" id="email" required>
                                <label for="email">Enter your email address</label>
                            </div>
                            <div class="col-md-12 form-group">
                                <input type="text" name="subject" class="form-control" id="subject" required>
                                <label for="subject">Subject</label>
                            </div>
                            <div class="col-md-12 form-group">
                                <textarea name="message" id="message" class="form-control" required></textarea>
                                <label for="message">How can we help you?</label>
                            </div>

                            <div class="col-md-12 form-group text-center no-margin-bottom ">
                                <input type="submit" class="btn btn-template" value="Send Your Message">
                                <input type="hidden" name="_next" value="index.html" />
                            </div>
                        </div>
                    </form>
                </div>

                <ul class="contact-details list-unstyled d-flex justify-content-center flex-column flex-md-row">
                    <li>
                        <div class="icon">
                            <i class="fa fa-envelope-o"></i>
                        </div>
                        <p><a href="#info@pothlakosecurity.co.za">info@pothlakosecurity.co.za</a></p>
                    </li>
                    <li>
                        <div class="icon">
                            <i class="fa fa-map-marker"></i>
                        </div>
                        <p> 
                        17 Railway Avenue,
                        Western Extension, 
                        Benoni, 1501
                        </p>
                        <p> 
                        North West Province 
                        Klerksdorp 
                        
                        </p>
                    </li>
                    <li>
                        <div class="icon">
                            <i class="fa fa-phone"></i>
                        </div>
                        <p><a href="tel:0114216363">Benoni (+27) 11 421 6363</a></p>
                        <p><a href="tel:0184624769">Klerksdorp (+27) 18 462 4769</a></p>
                    </li>
                </ul>
            </div>
        </section>
        <!--=============== End Contact Section ===============-->

              <!--=============== Leave section ===============-->
    
                <section class="contact" id="leave">
            <div class="container">
                <h2 class="has-ellipsis-left text-center wow fadeInUp">Leave Application</h2>
                <p class="lead text-center wow fadeInUp" data-wow-delay="0.3s"></p>
<ul class="leave-details list-unstyled d-flex justify-content-center flex-column flex-md-row">
                    <li>
                        <div class="icon">
                            <i class="fa fa-send-o"></i>&nbsp; <b>NB: </b>Annual Leave must be applied for 1 month in advance
                        </div>
                       
                    </li>
                 
                </ul>
                <div class="form-holder">
                    
                    <form action=app_script.php method="post" role="form" data-toggle="validator" id="leave-form">
                        <div class="row">
                            <div class="col-md-6 form-group">
                                <input type="text" name="emplname" id="emplname" class="form-control" required>
                                <label for="emplname">Enter Your Name and Surname</label>
                            </div>
                            <div class="col-md-6 form-group">
                                <input type="text" name="emplnumber" id="emplnumber" class="form-control" required>
                                <label for="emplnumber">Enter Company No:</label>
                            </div>
                            <div class="col-md-6 form-group">
                                <input type="text" name="emplcontact" id="emplcontact" class="form-control" required>
                                <label for="emplcontact">Enter Contact No:</label>
                            </div>
                           <div class="col-md-6 form-group">
                                <input type="email" name="emplemail" class="form-control" id="emplemail" required>
                                <label for="emplemail">Enter your email address</label>
                            </div>
                            <div class="col-md-6 form-group">
                                <input type="text" name="emplsite" id="emplsite" class="form-control" required>
                                <label for="emplsite">Enter Site</label>
                            </div>
                            <div class="col-md-6 form-group">
                                <label for="empldate">Employment Date</label>
                                <input type="date" class="form-control datepicker" name="empldate" id="empldate" required />
                            </div>
                            
                            <div class="col-md-6 form-group">
                                <select class="form-control" name="leave_type" id="leave_type" required>
                                        <option value=""></option>
                                        <option value="Annual Leave">Annual Leave</option>
                                        <option value="Advance Leave">Advance Leave</option>
                                        <option value="Family Leave">Family Res Leave</option>
                                        <option value="Sick Leave">Medical / Sick Leave</option>
                                        <option value="Maternity Leave">Maternity Leave</option>
                                        <option value="Leave Without Pay">Leave Without Pay</option>
                                </select>
                                <label for="leave_type">Leave Type</label>
                        </div>
                            <div class="col-md-12 form-group">
                                <input type="text" name="reason" class="form-control" id="reason" required>
                                <label for="reason">Reason For Leave</label>
                            </div>
                            <div class="col-md-6 form-group">
                                <label for="leaveSdate">Leave Start Date</label>
                                <input type="date" class="form-control datepicker" name="leaveSdate" id="leaveSdate" required />
                            </div>
                            <div class="col-md-6 form-group">
                                <label for="leaveEdate">Leave End Date</label>
                                <input type="date" class="form-control datepicker" name="leaveEdate" id="leaveEdate" required />
                            </div>
                            <div class="col-md-12 form-group">
                                <input type="text" name="days_taken" class="form-control" id="reason" required>
                                <label for="days_taken">Days to be Taken</label>
                            </div>
                            <div class="col-md-12 form-group">
                                <input type="text" name="days_paid" class="form-control" id="reason" required>
                                <label for="days_paid">Days Paid</label>
                            </div>
                            <div class="col-md-12 form-group">
                                <input type="text" name="days_unpaid" class="form-control" id="reason" required>
                                <label for="days_unpaid">Days UnPaid</label>
                            </div>
                            <div class="col-md-12 form-group">
                                <input type="text" name="address_during" class="form-control" id="reason" required>
                                <label for="address_during">Address During Leave Period</label>
                            </div>
                            <div class="col-md-12 form-group">
                                <textarea name="message2" id="message2" class="form-control" required></textarea>
                                <label for="message2">Additional Information</label>
                            </div>

                            <div class="col-md-12 form-group text-center no-margin-bottom ">
                                <input type="submit" name="btn-submit"class="btn btn-template" value="Apply for Leave">
                                <input type="hidden" name="_next" value="index.php" />
                            </div>
                        </div>
                    </form>
                </div>

                           
            </div>
        </section>
        <!--=============== End Leave section ===============-->


        <!--=============== Footer ===============-->
        <footer class="main-footer">
            <div class="container text-center">
                <div class="logo">
                    <h3><img src="img/new logo small.png" alt="" height="40" width="40"/>&nbsp;&nbsp;Pothlako Security <span class="ellipsis"></span></h3>
                </div>
                <ul class="social list-unstyled list-inline">
                    <li class="list-inline-item">
                        <a href="https://facebook.com/" title="Facebook"><img src="images/facebook.png" alt=""/></a>&nbsp;&nbsp;
                    </li>
                    <li class="list-inline-item">
                       <a href="https://twitter.com/" title="Twitter"><img src="images/twitter.png" alt=""/></a>&nbsp;&nbsp;
                    </li>
                    <li class="list-inline-item">
                        <a href="#" title="Google Plus"><img src="images/google-plus.png" alt=""/></a>&nbsp;&nbsp;
                    </li>
<!--                    <li class="list-inline-item">
                        <a href="#" title="Facebook"><i class="fa fa-instagram"></i></a>
                    </li>-->
                    <li class="list-inline-item">
                        <a href="https://www.youtube.com/" title="Youtube"><img src="images/youtube.png" alt=""/></a>
                    </li>
                </ul>

                <div class="copyrights">
                    <p>Copyright &copy; Pothlako Security Services 2018. All rights reserved.</p>
                </div>
            </div>
        </footer>
        <!--=============== End Footer ===============-->


        <!--=============== Scroll To Top Button ===============-->
        <div id="scrollTop" class="text-center ellipsis">
            <i class="fa fa-angle-up"></i>
        </div>
        <!--=============== End Scroll To Top Button ===============-->


        <!--=============== Preloader ===============-->
        <div class="preloader">
            <div class="preloader-inner d-flex align-items-center justify-content-center">

                <div class="circle-big">
                    <div class="circle-small"></div>
                </div>

            </div>
        </div>
        <!--=============== End Preloader ===============-->




        <!-- Jquery CDN -->
        <script src="js/jquery.min.js"></script>
        <!-- Tether CDN [required for Bootstrap 4 tooltip]-->
        <script src="js/tether.min.js"></script>
        <!-- Bootstrap -->
        <script src='js/bootstrap.min.js'></script>
        <script src="css/datepicker/bootstrap-datepicker.js" type="text/javascript"></script>
        <!-- Mixitup -->
        <script src='js/mixitup.min.js'></script>
        <!-- FancyBox -->
        <script src='js/jquery.fancybox.min.js'></script>
        <!-- Counter Up -->
        <script src="js/waypoints.min.js"></script>
        <script src='js/jquery.counterup.min.js'></script>
        <!-- Smooth Scroll -->
        <script src='js/easyscroll.min.js'></script>
        <!-- WOW.Js -->
        <script src='js/wow.min.js'></script>
        <!-- jQuery Validator -->
        <script src='js/jquery.validate.min.js'></script>
        <!-- Custom Script -->
        <script src='js/script.js'></script>
        
        
    <script src="js/TweenLite.min.js"></script>
    <script src="js/EasePack.min.js"></script>
    <script src="js/demo-1.js"></script>

    </body>


</html>
