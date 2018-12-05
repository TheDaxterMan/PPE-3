<?php
	session_start();
	require_once('login.inc.php');
	include "bdd.inc.php";
	include "login.inc.php";
	include "info.php";
?>
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from thunder-team.com/friend-finder/edit-profile-password.php by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 08 Nov 2018 14:00:55 GMT -->
<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="This is social network html5 template available in themeforest......" />
		<meta name="keywords" content="Social Network, Social Media, Make Friends, Newsfeed, Profile Page" />
		<meta name="robots" content="index, follow" />
		<title>Editer le Profil | Changer de Mot de passe</title>

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
									<?php
									///////////////////////////////////////////////////////////////////////////////
									/*									        	E L E V E																			 */
									///////////////////////////////////////////////////////////////////////////////
											if ($_SESSION['profil']=="eleve")
											{
											?>
												<img src="images/users/utilisateur/user-<?php echo $_SESSION['id'],$_SESSION['photo']; ?>" alt="" class="img-responsive profile-photo" />
											<?php
											}
									///////////////////////////////////////////////////////////////////////////////
									/*												E N T R E P R I S E																*/
									///////////////////////////////////////////////////////////////////////////////
											if ($_SESSION['profil']=="entreprise")
											{
											?>
												<img src="images/users/entreprise/user-<?php echo $_SESSION['id'],$_SESSION['photo']; ?>" alt="" class="img-responsive profile-photo" />
											<?php
											}
									?>
									<h3><?php echo $prenom,' ',$nom; ?></h3>
                  <p class="text-muted">Creative Director</p>
                </div>
              </div>
              <div class="col-md-9">
                <ul class="list-inline profile-menu">
                  <li><a href="timeline.php">Timeline</a></li>
                  <li><a href="timeline-about.php" class="active">About</a></li>
                  <li><a href="timeline-album.php">Album</a></li>
                  <li><a href="timeline-friends.php">Friends</a></li>
                </ul>
                <ul class="follow-me list-inline">
                  <li>1,299 people following her</li>
                  <li><button class="btn-primary">Add Friend</button></li>
                </ul>
              </div>
            </div>
          </div><!--Timeline Menu for Large Screens End-->

          <!--Timeline Menu for Small Screens-->
          <div class="navbar-mobile hidden-lg hidden-md">
            <div class="profile-info">
              <img src="images/users/user-<?php echo $_SESSION['id'],$_SESSION['photo']; ?>" alt="" class="img-responsive profile-photo" />
              <h4>Sarah Cruiz</h4>
              <p class="text-muted">Creative Director</p>
            </div>
            <div class="mobile-menu">
              <ul class="list-inline">
                <li><a href="timline.php">Profil</a></li>
                <li><a href="timeline-about.php" class="active">A propos</a></li>
                <li><a href="timeline-album.php">Album</a></li>
                <li><a href="timeline-friends.php">Amis</a></li>
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
              	<li><i class="icon ion-ios-briefcase-outline"></i><a href="edit-profile-work-edu.php">Education et Travail</a></li>
              	<li><i class="icon ion-ios-heart-outline"></i><a href="edit-profile-interests.php">Centres d'intérêts</a></li>
                <li><i class="icon ion-ios-settings"></i><a href="edit-profile-settings.php">Paramètres du Compte</a></li>
              	<li class="active"><i class="icon ion-ios-locked-outline"></i><a href="edit-profile-password.php">Changer de Mot de passe</a></li>
              </ul>
            </div>
            <div class="col-md-7">

              <!-- Change Password
              ================================================= -->
              <div class="edit-profile-container">
                <div class="block-title">
                  <h4 class="grey"><i class="icon ion-ios-locked-outline"></i>Changer de Mot de passe</h4>
                  <div class="line"></div>
                  <p>blabla écrire un truc ici</p>
                  <div class="line"></div>
                </div>
                <div class="edit-block">
                  <form name="update-pass" id="education" action="mdp.php" method="post" class="form-inline">
                    <div class="row">
                      <div class="form-group col-xs-12">
                        <label for="mdp">Ancien mot de passe</label>
                        <input id="mdp" class="form-control input-group-lg" type="password" name="mdp" title="Entrez un mot de passe" placeholder="Ancien mot de passe"/>
                      </div>
                    </div>
                    <div class="row">
                      <div class="form-group col-xs-6">
                        <label>Nouveau mot de passe</label>
                        <input class="form-control input-group-lg" type="password" name="newmdp" title="Entrez votre nouveau mot de passe" placeholder="Nouveau mot de passe"/>
                      </div>
                      <div class="form-group col-xs-6">
                        <label>Confirmez le mot de passe</label>
                        <input class="form-control input-group-lg" type="password" name="newmdp2" title="Confirmez votre nouveau mot de passe" placeholder="Confirmez le mot de passe"/>
                      </div>
                    </div>
                    <p><a href="#">Mot de passe oublié ?</a></p>
										<input type="hidden" name="id" value="1">
										<input class="btn btn-primary" type="submit" name="modifmdp" value="Mettre à jour le mot de passe">
                  </form>
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

<!-- Mirrored from thunder-team.com/friend-finder/edit-profile-password.php by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 08 Nov 2018 14:00:55 GMT -->
</html>
