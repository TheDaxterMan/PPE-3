<?php
	session_start();
	require_once('login.inc.php');
	include "bdd.inc.php";
	include "login.inc.php";
	include "info.php";


?>
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from thunder-team.com/friend-finder/edit-profile-basic.php by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 08 Nov 2018 14:00:55 GMT -->
<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="This is social network html5 template available in themeforest......" />
		<meta name="keywords" content="Social Network, Social Media, Make Friends, Newsfeed, Profile Page" />
		<meta name="robots" content="index, follow" />
		<title>Edit Profile | Edit Profile Page</title>

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

    <script>
        var loadFile = function(event,preview) {
            var output = document.getElementById(preview);
            output.src = URL.createObjectURL(event.target.files[0]);
        };
    </script>
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
                  <li><a href="timeline.php">Profil</a></li>
                  <li><a href="timeline-about.php" class="active">A propos</a></li>
                  <li><a href="timeline-album.php">Album</a></li>
                  <li><a href="timeline-friends.php">Amis</a></li>
                </ul>
                <ul class="follow-me list-inline">
                  <li>1,299 people following her</li>
                  <li><button class="btn-primary">Ajouter en Ami</button></li>
                </ul>
              </div>
            </div>
          </div><!--Timeline Menu for Large Screens End-->

          <!--Timeline Menu for Small Screens-->
          <div class="navbar-mobile hidden-lg hidden-md">
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
              <h4><?php echo $prenom,' ',$nom; ?></h4>
              <p class="text-muted">Creative Director</p>
            </div>
            <div class="mobile-menu">
              <ul class="list-inline">
								<li><a href="timeline.php">Profil</a></li>
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
              	<li><i class="icon ion-ios-briefcase-outline"></i><a href="edit-profile-work-edu.php">Education et travail</a></li>
              	<li><i class="icon ion-ios-heart-outline"></i><a href="edit-profile-interests.php">Centres d'intérêts</a></li>
                <li><i class="icon ion-ios-settings"></i><a href="edit-profile-settings.php">Paramètres du Compte</a></li>
              	<li><i class="icon ion-ios-locked-outline"></i><a href="edit-profile-password.php">Changer de Mot de passe</a></li>
								<li class="active"><i class="icon ion-ios-contact"></i><a href="edit-profile-image.php">Changer d'image de profil</a></li>
              </ul>
            </div>
            <div class="col-md-7">

              <!-- Basic Information
              ================================================= -->
              <div class="edit-profile-container">
                <div class="block-title">
                  <h4 class="grey"><i class="icon ion-android-checkmark-circle"></i>Modifier l'image de profil'</h4>
                  <div class="line"></div>
                  <p>Blablabla écrire un truc ici</p>
                  <div class="line"></div>
                </div>
                <div class="edit-block">
                  <form enctype="multipart/form-data" name="basic-info" id="basic-info" action="photo.php" method="post" class="form-inline">

                    <div class="row">
                      <div class="form-group col-xs-12">
                        <label for="fichier">Nouvelle Image de profil</label>
                        <input id="tel" class="form-control input-group-lg" type="file" name="photo" accept="image/*" onchange="loadFile(event,'output')" required/>
                        <img id="output" width="300" height="300" />
                      </div>
                    </div>

										<input type="hidden" name="id" value="1">
										<input class="btn btn-primary" type="submit" name="valider" value="Sauvegarder les modifications">
                  </form>
                </div>
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

<!-- Mirrored from thunder-team.com/friend-finder/edit-profile-basic.php by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 08 Nov 2018 14:00:55 GMT -->
</html>
