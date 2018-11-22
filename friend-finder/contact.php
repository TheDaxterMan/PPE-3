<?php
	session_start();
	include "bdd.inc.php";
	include "login.inc.php";
?>
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from thunder-team.com/friend-finder/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 08 Nov 2018 14:00:55 GMT -->
<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="This is social network html5 template available in themeforest......" />
		<meta name="keywords" content="Social Network, Social Media, Make Friends, Newsfeed, Profile Page" />
		<meta name="robots" content="index, follow" />
		<title>My Timeline | This is My Coolest Profile</title>

		<script src='https://www.google.com/recaptcha/api.js%27%3E'></script>

    <!-- Stylesheets
    ================================================= -->
		<link rel="stylesheet" href="css/bootstrap.min.css" />
		<link rel="stylesheet" href="css/style.css" />
		<link rel="stylesheet" href="css/ionicons.min.css" />
    <link rel="stylesheet" href="css/font-awesome.min.css" />

    <!--Google Font-->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,400i,700,700i" rel="stylesheet">

    <!--Favicon-->
    <link rel="shortcut icon" type="image/png" href="images/fav.png"/>
	</head>
  <body>

    <!-- Header
    ================================================= -->
    <?php include "menu.php" ?>;
    <!--Header End-->

    <div class="google-maps">
      <div id="map" class="map contact-map"></div>
    </div>
    <div id="page-contents">
    	<div class="container">
    		<div class="row">
    			<div class="col-md-10 col-md-offset-1">
            <div class="contact-us">
            	<div class="row">
            		<div class="col-md-8 col-sm-7">
                  <h4 class="grey">Leave a Message</h4>
                  <form class="contact-form">
                    <div class="form-group">
                      <i class="icon ion-person"></i>
                      <input id="contact-name" type="text" name="name" class="form-control" placeholder="Enter your name *" required="required" data-error="Name is required.">
                    </div>
                    <div class="form-group">
                      <i class="icon ion-email"></i>
                      <input id="contact-email" type="text" name="email" class="form-control" placeholder="Enter your email *" required="required" data-error="Email is required.">
                    </div>
                    <div class="form-group">
                      <i class="icon ion-android-call"></i>
                      <input id="contact-phone" type="text" name="phone" class="form-control" placeholder="Enter your phone *" required="required" data-error="Phone is required.">
                    </div>
                    <div class="form-group">
                      <textarea id="form-message" name="message" class="form-control" placeholder="Leave a message for us *" rows="4" required="required" data-error="Please,leave us a message."></textarea>
                    </div>
										<div class="g-recaptcha" data-sitekey="6LfQfnwUAAAAAMiTmuUcHcQdPNhcm3V__BFjO_hp">

                                        <?php

                                        if(isset($_POST['submit']) && !empty($_POST['submit'])):
                                             if(isset($_POST['g-recaptcha-response']) && !empty($_POST['g-recaptcha-response'])):
                                                 //your site secret key
                                                 $secret = '6LfQfnwUAAAAAEI6bxFRBuCP9xYB0lIUQnmg0Akw';
                                                 //get verify response data
                                                 $verifyResponse = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret='.$secret.'&response='.$_POST['g-recaptcha-response']);
                                                 $responseData = json_decode($verifyResponse);
                                                 if($responseData->success):
                                                     //contact form submission code

                                                        $errMsg = 'Robot verification failed, please try again.';
                                                    endif;
                                                else:
                                                    $errMsg = 'Please click on the reCAPTCHA box.';
                                                endif;
                                            else:
                                                $errMsg = '';
                                                $succMsg = '';
                                            endif;
                                             ?>

                    </div>
										<input id="contactez-nous" name="boutoncontact" class="btn-primary" placeholder="Envoyer" type="submit" action="contactez-nous.php" value="Envoyer un mail" method="post"/>
                  </form>

                </div>
            		<div class="col-md-4 col-sm-5">
                  <h4 class="grey">Reach Us</h4>
                  <div class="reach"><span class="phone-icon"><i class="icon ion-android-call"></i></span><p>+1 (234) 222 0754</p></div>
                  <div class="reach"><span class="phone-icon"><i class="icon ion-email"></i></span><p>info@thunder-team.com</p></div>
                  <div class="reach"><span class="phone-icon"><i class="icon ion-ios-location"></i></span><p>228 Park Ave S NY, USA</p></div>
                  <ul class="list-inline social-icons">
                    <li><a href="#"><i class="icon ion-social-facebook"></i></a></li>
                    <li><a href="#"><i class="icon ion-social-twitter"></i></a></li>
                    <li><a href="#"><i class="icon ion-social-googleplus"></i></a></li>
                    <li><a href="#"><i class="icon ion-social-pinterest"></i></a></li>
                    <li><a href="#"><i class="icon ion-social-linkedin"></i></a></li>
                  </ul>
                </div>
            	</div>
            </div>
          </div>
    		</div>
    	</div>
    </div>
		<?php
		include "footer.php";
		 ?>

  </body>

<!-- Mirrored from thunder-team.com/friend-finder/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 08 Nov 2018 14:00:55 GMT -->
</html>
