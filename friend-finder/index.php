<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from thunder-team.com/friend-finder/index-register.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 08 Nov 2018 13:59:59 GMT -->
<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="This is social network html5 template available in themeforest......" />
		<meta name="keywords" content="Social Network, Social Media, Make Friends, Newsfeed, Profile Page" />
		<meta name="robots" content="index, follow" />
		<title>ViaBahuet | Le réseau social</title>

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

    <!-- Landing Page Contents
    ================================================= -->
    <div id="lp-register">
    	<div class="container wrapper">
        <div class="row">
        	<div class="col-sm-5">
            <div class="intro-texts">
            	<h1 class="text-white">Faites vous des amis !!!</h1>
            	<p>ViaBahuet est un réseau social permettant aux élèves, anciens élèves et entreprises de communiquer. <br> <br>Rejoignez dès maintenant</p>
              <button class="btn btn-primary">En savoir plus</button>
            </div>
          </div>
        	<div class="col-sm-6 col-sm-offset-1">
            <div class="reg-form-container">

              <!-- Register/Login Tabs-->
              <div class="reg-options">
                <ul class="nav nav-tabs">
                  <li class="active"><a href="#register" data-toggle="tab">S'enregistrer</a></li>
                  <li><a href="#login" data-toggle="tab">Se connecter</a></li>
                </ul><!--Tabs End-->
              </div>

              <!--Registration Form Contents-->
              <div class="tab-content">
                <div class="tab-pane active" id="register">
                  <h3>Enregistrez vous maintenant !!!</h3>
                  <p class="text-muted">Veuillez remplir le formulaire ci-dessous</p>

                  <!--Register Form-->
                  <form name="registration_form" id='registration_form' class="form-inline">
                    <div class="row">
                      <div class="form-group col-xs-6">
                        <label for="firstname" class="sr-only">Prénom</label>
                        <input id="firstname" class="form-control input-group-lg" type="text" name="firstname" title="Entrez votre prénom" placeholder="Prénom"/>
                      </div>
                      <div class="form-group col-xs-6">
                        <label for="lastname" class="sr-only">Nom</label>
                        <input id="lastname" class="form-control input-group-lg" type="text" name="lastname" title="Entrez votre nom" placeholder="Nom"/>
                      </div>
                    </div>
                    <div class="row">
                      <div class="form-group col-xs-12">
                        <label for="email" class="sr-only">Email</label>
                        <input id="email" class="form-control input-group-lg" type="text" name="Email" title="Entrez votre Email" placeholder="Votre Email"/>
                      </div>
                    </div>
                    <div class="row">
											<div class="form-group col-xs-12">
                        <label for="ident" class="sr-only">Identifiant</label>
                        <input id="ident" class="form-control input-group-lg" type="text" name="ident" title="Entrez votre identifiant" placeholder="Identifiant"/>
                      </div>
                    </div>
										<div class="row">
											<div class="form-group col-xs-12">
												<label for="password" class="sr-only">Mot de passe</label>
												<input id="password" class="form-control input-group-lg" type="password" name="password" title="Entrez votre mot de passe" placeholder="Mot de passe"/>
											</div>
											<div class="form-group col-xs-12">
												<label for="password2" class="sr-only">Mot de passe</label>
												<input id="password2" class="form-control input-group-lg" type="password" name="password2" title="Confirmez votre mot de passe" placeholder="Confirmer Mot de passe"/>
											</div>
										</div>
                  </form><!--Register Now Form Ends-->
                  <p><a href="#login" data-toggle="tab">Déjà un compte ?</a></p>
                  <button class="btn btn-primary">Enregistrez vous maintenant</button>
                </div><!--Registration Form Contents Ends-->

                <!--Login-->
                <div class="tab-pane" id="login">
                  <h3>Se connecter</h3>
                  <p class="text-muted">Connectez vous à votre compte</p>

                  <!--Login Form-->
                  <form name="Login_form" id='Login_form'>
                     <div class="row">
                      <div class="form-group col-xs-12">
                        <label for="login" class="sr-only">Identifiant</label>
                        <input id="login" class="form-control input-group-lg" type="text" name="login" title="Entrez votre identifiant" placeholder="Votre identifiant"/>
                      </div>
                    </div>
                    <div class="row">
                      <div class="form-group col-xs-12">
                        <label for="my-password" class="sr-only">Mot de passe</label>
                        <input id="my-password" class="form-control input-group-lg" type="password" name="password" title="Entrez votre mot de passe" placeholder="Mot de passe"/>
                      </div>
                    </div>
                  </form><!--Login Form Ends-->
                  <p><a href="#">Mot de passe oublié ?</a></p>
                  <button class="btn btn-primary">Connectez vous</button>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-6 col-sm-offset-6">

            <!--Social Icons-->
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

    <!--preloader-->
    <div id="spinner-wrapper">
      <div class="spinner"></div>
    </div>


    <!-- Scripts
    ================================================= -->
    <script src="js/jquery-3.1.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.appear.min.js"></script>
		<script src="js/jquery.incremental-counter.js"></script>
    <script src="js/script.js"></script>

	</body>

<!-- Mirrored from thunder-team.com/friend-finder/index-register.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 08 Nov 2018 13:59:59 GMT -->
</html>
