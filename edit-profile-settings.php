<?php
	session_start();
	include "bdd.inc.php";
	include "login.inc.php";
?>
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from thunder-team.com/friend-finder/edit-profile-settings.php by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 08 Nov 2018 14:00:55 GMT -->
<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="This is social network html5 template available in themeforest......" />
		<meta name="keywords" content="Social Network, Social Media, Make Friends, Newsfeed, Profile Page" />
		<meta name="robots" content="index, follow" />
		<title>Edit Profile | Account Settings</title>

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
                  <img src="images/users/user-<?php echo $_SESSION['id'],$_SESSION['photo']; ?>" alt="" class="img-responsive profile-photo" />
                  <h3>Sarah Cruiz</h3>
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
                <li><a href="timline.php">Timeline</a></li>
                <li><a href="timeline-about.php" class="active">About</a></li>
                <li><a href="timeline-album.php">Album</a></li>
                <li><a href="timeline-friends.php">Friends</a></li>
              </ul>
              <button class="btn-primary">Add Friend</button>
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
                <li class="active"><i class="icon ion-ios-settings"></i><a href="edit-profile-settings.php">Paramètres du compte</a></li>
              	<li><i class="icon ion-ios-locked-outline"></i><a href="edit-profile-password.php">Changer de Mot de passe</a></li>
              </ul>
            </div>
            <div class="col-md-7">

              <!-- Profile Settings
              ================================================= -->
              <div class="edit-profile-container">
                <div class="block-title">
                  <h4 class="grey"><i class="icon ion-ios-settings"></i>Paramètres du compte</h4>
                  <div class="line"></div>
                  <p>Blabla expliquer les trucs ici</p>
                  <div class="line"></div>
                </div>
                <div class="edit-block">
                  <div class="settings-block">
                    <div class="row">
                      <div class="col-sm-9">
                        <div class="switch-description">
                          <div><strong>Autoriser à me suivre</strong></div>
                          <p>Activer ceci permettra aux personnes de vous suivre</p>
                        </div>
                      </div>
                      <div class="col-sm-3">
                        <div class="toggle-switch">
                          <label class="switch">
                            <input type="checkbox" checked>
                            <span class="slider round"></span>
                          </label>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="line"></div>
                  <div class="settings-block">
                    <div class="row">
                      <div class="col-sm-9">
                        <div class="switch-description">
                          <div><strong>M'envoyer des notifications</strong></div>
                          <p>Envoi des notifications quand vous recevez un message</p>
                        </div>
                      </div>
                      <div class="col-sm-3">
                        <div class="toggle-switch">
                          <label class="switch">
                            <input type="checkbox" checked>
                            <span class="slider round"></span>
                          </label>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="line"></div>
                  <div class="settings-block">
                    <div class="row">
                      <div class="col-sm-9">
                        <div class="switch-description">
                          <div><strong>Message privés</strong></div>
                          <p>Envoi les messages sur votre portable</p>
                        </div>
                      </div>
                      <div class="col-sm-3">
                        <div class="toggle-switch">
                          <label class="switch">
                            <input type="checkbox">
                            <span class="slider round"></span>
                          </label>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="line"></div>
                  <div class="settings-block">
                    <div class="row">
                      <div class="col-sm-9">
                        <div class="switch-description">
                          <div><strong>Autoriser les tags</strong></div>
                          <p>Autorise mes amis à me taguer</p>
                        </div>
                      </div>
                      <div class="col-sm-3">
                        <div class="toggle-switch">
                          <label class="switch">
                            <input type="checkbox" checked>
                            <span class="slider round"></span>
                          </label>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="line"></div>
                  <div class="settings-block">
                    <div class="row">
                      <div class="col-sm-9">
                        <div class="switch-description">
                          <div><strong>Autoriser les sons</strong></div>
                          <p>Vous entendrez un son quand quelqu'un vous envoi un message privé</p>
                        </div>
                      </div>
                      <div class="col-sm-3">
                        <div class="toggle-switch">
                          <label class="switch">
                            <input type="checkbox" checked>
                            <span class="slider round"></span>
                          </label>
                        </div>
                      </div>
                    </div>
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

<!-- Mirrored from thunder-team.com/friend-finder/edit-profile-settings.php by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 08 Nov 2018 14:00:55 GMT -->
</html>