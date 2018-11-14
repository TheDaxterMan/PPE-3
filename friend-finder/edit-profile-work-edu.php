<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from thunder-team.com/friend-finder/edit-profile-work-edu.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 08 Nov 2018 14:00:55 GMT -->
<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="This is social network html5 template available in themeforest......" />
		<meta name="keywords" content="Social Network, Social Media, Make Friends, Newsfeed, Profile Page" />
		<meta name="robots" content="index, follow" />
		<title>Edit Profile | Work and Education</title>

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

    <div class="container">

      <!-- Timeline
      ================================================= -->
      <div class="timeline">
        <div class="timeline-cover">

          <!--Timeline Menu for Large Screens-->
          <div class="timeline-nav-bar hidden-sm hidden-xs">
            <div class="row">
              <div class="col-md-3">
                <div class="profile-info">
                  <img src="images/users/user-1.jpg" alt="" class="img-responsive profile-photo" />
                  <h3>Sarah Cruiz</h3>
                  <p class="text-muted">Creative Director</p>
                </div>
              </div>
              <div class="col-md-9">
                <ul class="list-inline profile-menu">
                  <li><a href="timeline.php">Publications</a></li>
                  <li><a href="timeline-about.php" class="active">A propos</a></li>
                  <li><a href="timeline-album.php">Album</a></li>
                  <li><a href="timeline-friends.php">Amis</a></li>
                </ul>
                <ul class="follow-me list-inline">
                  <li>1,299 pecnots la suivent</li>
                  <li><button class="btn-primary">Ajouter en ami</button></li>
                </ul>
              </div>
            </div>
          </div><!--Timeline Menu for Large Screens End-->

          <!--Timeline Menu for Small Screens-->
          <div class="navbar-mobile hidden-lg hidden-md">
            <div class="profile-info">
              <img src="images/users/user-1.jpg" alt="" class="img-responsive profile-photo" />
              <h4>Sarah Cruiz</h4>
              <p class="text-muted">Creative Director</p>
            </div>
            <div class="mobile-menu">
              <ul class="list-inline">
                <li><a href="timeline.php">Publications</a></li>
                <li><a href="timeline-about.php" class="active">A propos</a></li>
                <li><a href="timeline-album.php">Album</a></li>
                <li><a href="timeline-friends.html">Amis</a></li>
              </ul>
              <button class="btn-primary">Ajouter en ami</button>
            </div>
          </div><!--Timeline Menu for Small Screens End-->

        </div>
        <div id="page-contents">
          <div class="row">
            <div class="col-md-3">

              <!--Edit Profile Menu-->
              <ul class="edit-menu">
              	<li><i class="icon ion-ios-information-outline"></i><a href="edit-profile-basic.php">Informations basiques</a></li>
              	<li class="active"><i class="icon ion-ios-briefcase-outline"></i><a href="edit-profile-work-edu.php">Education et travail</a></li>
              	<li><i class="icon ion-ios-heart-outline"></i><a href="edit-profile-interests.php">Centres d'intérêts</a></li>
                <li><i class="icon ion-ios-settings"></i><a href="edit-profile-settings.php">Paramètres du compte</a></li>
              	<li><i class="icon ion-ios-locked-outline"></i><a href="edit-profile-password.php">Changer de mot de passe</a></li>
              </ul>
            </div>
            <div class="col-md-7">

              <!-- Edit Work and Education
              ================================================= -->
              <div class="edit-profile-container">
                <div class="block-title">
                  <h4 class="grey"><i class="icon ion-ios-book-outline"></i>Mon éducation</h4>
                  <div class="line"></div>
                  <p>blabla blabla mettre un truc ici</p>
                  <div class="line"></div>
                </div>
                <div class="edit-block">
                  <form name="education" id="education" class="form-inline">
                    <div class="row">
                      <div class="form-group col-xs-12">
                        <label for="school">Mon université</label>
                        <input id="school" class="form-control input-group-lg" type="text" name="school" title="Entrez l'école" placeholder="Mon école" value="Harvard Unversity" />
                      </div>
                    </div>
                    <div class="row">
                      <div class="form-group col-xs-6">
                        <label for="date-from">De</label>
                        <input id="date-from" class="form-control input-group-lg" type="text" name="date" title="Entrez une date" placeholder="de" value="2012" />
                      </div>
                      <div class="form-group col-xs-6">
                        <label for="date-to" class="">A</label>
                        <input id="date-to" class="form-control input-group-lg" type="text" name="date" title="Entrez une date" placeholder="a" value="2016" />
                      </div>
                    </div>
                    <div class="row">
                      <div class="form-group col-xs-12">
                        <label for="edu-description">Description</label>
                        <textarea id="edu-description" name="description" class="form-control" placeholder="Racontez votre formation" rows="4" cols="400">Blablabla je raconte ma vie</textarea>
                      </div>
                    </div>
                    <div class="row">
                      <div class="form-group col-xs-12">
                        <label for="graduate">Diplômé ? -</label>
                        <input id="graduate" type="checkbox" name="graduate" value="graduate" checked> Oui!!
                      </div>
                    </div>
                    <button class="btn btn-primary">Sauvegarder les modifications</button>
                  </form>
                </div>
                <div class="block-title">
                  <h4 class="grey"><i class="icon ion-ios-briefcase-outline"></i>Experience professionelle</h4>
                  <div class="line"></div>
                  <p>Mon expérience pro</p>
                  <div class="line"></div>
                </div>
                <div class="edit-block">
                  <form name="work" id="work" class="form-inline">
                    <div class="row">
                      <div class="form-group col-xs-12">
                        <label for="company">Entreprise</label>
                        <input id="company" class="form-control input-group-lg" type="text" name="company" title="Entrez une entreprise" placeholder="Nom de l'entreprise" value="Envato Inc" />
                      </div>
                    </div>
                    <div class="row">
                      <div class="form-group col-xs-12">
                        <label for="designation">Designation</label>
                        <input id="designation" class="form-control input-group-lg" type="text" name="designation" title="Enter designation" placeholder="designation name" value="Exclusive Author" />
                      </div>
                    </div>
                    <div class="row">
                      <div class="form-group col-xs-6">
                        <label for="from-date">De</label>
                        <input id="from-date" class="form-control input-group-lg" type="text" name="date" title="Entrez une date" placeholder="de" value="2016" />
                      </div>
                      <div class="form-group col-xs-6">
                        <label for="to-date" class="">A</label>
                        <input id="to-date" class="form-control input-group-lg" type="text" name="date" title="Entrez une date" placeholder="a" value="Present" />
                      </div>
                    </div>
                    <div class="row">
                      <div class="form-group col-xs-12">
                        <label for="work-city">Ville</label>
                        <input id="work-city" class="form-control input-group-lg" type="text" name="city" title="Entrez une ville" placeholder="Ville" value="Melbourne"/>
                      </div>
                    </div>
                    <div class="row">
                      <div class="form-group col-xs-12">
                        <label for="work-description">Description</label>
                        <textarea id="work-description" name="description" class="form-control" placeholder="Décrire votre travail" rows="4" cols="400">blabla mon travail</textarea>
                      </div>
                    </div>
                    <button class="btn btn-primary">Sauvegarder les changements</button>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>


    <!-- Footer
    ================================================= -->
    <footer id="footer">
      <div class="container">
      	<div class="row">
          <div class="footer-wrapper">
            <div class="col-md-3 col-sm-3">
              <a href="#"><img src="images/logo-black.png" alt="" class="footer-logo" /></a>
              <ul class="list-inline social-icons">
              	<li><a href="#"><i class="icon ion-social-facebook"></i></a></li>
              	<li><a href="#"><i class="icon ion-social-twitter"></i></a></li>
              	<li><a href="#"><i class="icon ion-social-googleplus"></i></a></li>
              	<li><a href="#"><i class="icon ion-social-pinterest"></i></a></li>
              	<li><a href="#"><i class="icon ion-social-linkedin"></i></a></li>
              </ul>
            </div>
            <div class="col-md-2 col-sm-2">
              <h5>For individuals</h5>
              <ul class="footer-links">
                <li><a href="#">Signup</a></li>
                <li><a href="#">login</a></li>
                <li><a href="#">Explore</a></li>
                <li><a href="#">Finder app</a></li>
                <li><a href="#">Features</a></li>
                <li><a href="#">Language settings</a></li>
              </ul>
            </div>
            <div class="col-md-2 col-sm-2">
              <h5>For businesses</h5>
              <ul class="footer-links">
                <li><a href="#">Business signup</a></li>
                <li><a href="#">Business login</a></li>
                <li><a href="#">Benefits</a></li>
                <li><a href="#">Resources</a></li>
                <li><a href="#">Advertise</a></li>
                <li><a href="#">Setup</a></li>
              </ul>
            </div>
            <div class="col-md-2 col-sm-2">
              <h5>About</h5>
              <ul class="footer-links">
                <li><a href="#">About us</a></li>
                <li><a href="#">Contact us</a></li>
                <li><a href="#">Privacy Policy</a></li>
                <li><a href="#">Terms</a></li>
                <li><a href="#">Help</a></li>
              </ul>
            </div>
            <div class="col-md-3 col-sm-3">
              <h5>Contact Us</h5>
              <ul class="contact">
                <li><i class="icon ion-ios-telephone-outline"></i>+1 (234) 222 0754</li>
                <li><i class="icon ion-ios-email-outline"></i>info@thunder-team.com</li>
                <li><i class="icon ion-ios-location-outline"></i>228 Park Ave S NY, USA</li>
              </ul>
            </div>
          </div>
      	</div>
      </div>
      <div class="copyright">
        <p>Thunder Team � 2016. All rights reserved</p>
      </div>
		</footer>

    <!--preloader-->
    <div id="spinner-wrapper">
      <div class="spinner"></div>
    </div>

    <!-- Scripts
    ================================================= -->
    <script src="js/jquery-3.1.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.sticky-kit.min.js"></script>
    <script src="js/jquery.scrollbar.min.js"></script>
    <script src="js/script.js"></script>

  </body>

<!-- Mirrored from thunder-team.com/friend-finder/edit-profile-work-edu.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 08 Nov 2018 14:00:55 GMT -->
</html>
