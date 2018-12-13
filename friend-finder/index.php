<?php
	session_start();
	include "bdd.inc.php";
?>
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

		<?php
		include "bdd.inc.php";
		 ?>

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
    <!--Header End-->

    <!-- Landing Page Contents
    ================================================= -->
    <div id="lp-register">
    	<div class="container wrapper">
        <div class="row">
        	<div class="col-sm-5">
            <div class="intro-texts">
            	<h1 class="text-white">Faites vous des amis !!!</h1>
            	<p>ViaBahuet est un réseau social permettant aux élèves, anciens élèves et entreprises de communiquer entre eux. <br> <br>Rejoignez nous dès maintenant !</p>
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
                  <form name="registration_form" id='registration_form' action="enregistrer.php" method="post" class="form-inline">
                    <div class="row">
                      <div class="form-group col-xs-6">
                        <label for="prenom" class="sr-only">Prénom</label>
                        <input id="prenom" class="form-control input-group-lg" type="text" name="prenom" title="Entrez votre prénom" placeholder="Prénom" required/>
                      </div>
                      <div class="form-group col-xs-6">
                        <label for="nom" class="sr-only">Nom</label>
                        <input id="nom" class="form-control input-group-lg" type="text" name="nom" title="Entrez votre nom" placeholder="Nom" required/>
                      </div>
                    </div>
                    <div class="row">
                      <div class="form-group col-xs-12">
                        <label for="email" class="sr-only">Email</label>
                        <input id="email" class="form-control input-group-lg" type="email" name="email" title="Entrez votre Email" placeholder="Votre Email" required/>
                      </div>
                    </div>
                    <div class="row">
											<div class="form-group col-xs-12">
                        <label for="ident" class="sr-only">Identifiant</label>
                        <input id="ident" class="form-control input-group-lg" type="text" name="ident" title="Entrez votre identifiant" placeholder="Identifiant" required/>
                      </div>
                    </div>
										<div class="row">
											<div class="form-group col-xs-12">
												<label for="password" class="sr-only">Mot de passe</label>
												<input id="password" class="form-control input-group-lg" type="password" name="mdp" title="Entrez votre mot de passe" placeholder="Mot de passe" required/>
											</div>
											<div class="form-group col-xs-12">
												<label for="password2" class="sr-only">Confirmer Mot de passe</label>
												<input id="password2" class="form-control input-group-lg" type="password" name="mdp2" title="Confirmez votre mot de passe" placeholder="Confirmer Mot de passe" required/>
											</div>
										</div>
										<div class="form-group gender" id="domaine">
											<label class="radio-inline">
												<input type="radio" name="radio1" onclick="cacherDomaine" value="Elève">Elève
											</label>
											<label class="radio-inline">
												<input type="radio" name="radio1" onclick="cacherDomaine" value="Entreprise">Entreprise
											</label>
										</div>
										<div class="row" id="domaine">
                      <div>
                        <select class="form-control" name="entreprise">
													<option value="entreprise" type="domaine" onclick="cacherDomaine" disabled selected>Domaine d'activité</option>
													<?php


													?>
													<script>

													function cacherDomaine() {

													  var x = document.getElementById("domaine");
													  if (x.style.display === "none") {
													      x.style.display = "block";
													  } else {
													      x.style.display = "none";
													  }
													}

													</script>

													<?php
													$sql="SELECT * FROM activite_entreprise";
													$req = $conn -> query($sql)or die($conn->errorInfo());
													while ($res=$req->fetch())
													{
														?>
															<option value="<?php echo $res['id_activite'] ?>"><?php echo $res['lib_activite']?></option>
													<?php
													}
													?>
                        </select>
                      </div>
										</div>
										<p><a href="#login" data-toggle="tab">Déjà un compte ?</a></p>
										<input class="btn btn-primary" type="submit" name="enregistrer" value="Enregistrez vous maintenant">
                  </form><!--Register Now Form Ends-->
                </div><!--Registration Form Contents Ends-->

                <!--Login-->
                <div class="tab-pane" id="login">
                  <h3>Se connecter</h3>
                  <p class="text-muted">Connectez vous à votre compte</p>

                  <!--Login Form-->
                  <form name="Login_form" id='Login_form' action="login.php" method="post">
                     <div class="row">
                      <div class="form-group col-xs-12">
                        <label for="login" class="sr-only">Identifiant</label>
                        <input id="login" class="form-control input-group-lg" type="text" name="login" title="Entrez votre identifiant" placeholder="Votre identifiant" required/>
                      </div>
                    </div>
                    <div class="row">
                      <div class="form-group col-xs-12">
                        <label for="mdp" class="sr-only">Mot de passe</label>
                        <input id="mdp" class="form-control input-group-lg" type="password" name="mdp" title="Entrez votre mot de passe" placeholder="Mot de passe" required/>
                      </div>
                    </div>
										<div class="form-group gender">
											<label class="radio-inline" id="date">
												<input type="radio" name="radio" value="Elève" required>Elève
											</label>
											<label class="radio-inline" id="date">
												<input type="radio" name="radio" value="Entreprise" required>Entreprise
											</label>
										</div>
										<input class="btn btn-primary" type="submit" name="connexion" value="Connectez vous">
                  </form><!--Login Form Ends-->
                  <p><a href="#">Mot de passe oublié ?</a></p>
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
