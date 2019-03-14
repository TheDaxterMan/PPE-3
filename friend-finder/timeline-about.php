<?php
	session_start();
	require_once('login.inc.php');
	include "bdd.inc.php";
	include "login.inc.php";
	include "info.php";

?>
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from thunder-team.com/friend-finder/timeline-about.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 08 Nov 2018 14:00:50 GMT -->
<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="This is social network html5 template available in themeforest......" />
		<meta name="keywords" content="Social Network, Social Media, Make Friends, Newsfeed, Profile Page" />
		<meta name="robots" content="index, follow" />
		<title>About Me | Learn Detail About Me</title>

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
                  <li><a href="timeline.php">Chronologie</a></li>
                  <li><a href="timeline-about.php" class="active">A propos</a></li>
                  <li><a href="timeline-album.php">Album</a></li>
                  <li><a href="timeline-friends.php">Amis</a></li>
                </ul>
                <ul class="follow-me list-inline">
                  <li><button class="btn-primary">Ajouter en ami</button></li>
                </ul>
              </div>
            </div>
          </div><!--Timeline Menu for Large Screens End-->

          <!--Timeline Menu for Small Screens-->
          <div class="navbar-mobile hidden-lg hidden-md">
            <div class="profile-info">
              <img src="images/users/user-<?php echo $_SESSION['id'],$_SESSION['photo']; ?>" alt="" class="img-responsive profile-photo" />
              <h4><?php echo $prenom,' ',$nom; ?></h4>
              <p class="text-muted">Creative Director</p>
            </div>
            <div class="mobile-menu">
              <ul class="list-inline">
                <li><a href="timline.php">Chronologie</a></li>
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
            <div class="col-md-3"></div>
            <div class="col-md-7">

              <!-- About
              ================================================= -->
              <div class="about-profile">
                <div class="about-content-block">
                  <h4 class="grey"><i class="ion-ios-information-outline icon-in-title"></i>A propos</h4>
                  <p>Ma description blabla bla</p>
                </div>
                <div class="about-content-block">
                  <h4 class="grey"><i class="ion-ios-briefcase-outline icon-in-title"></i>Experience professionnelle</h4>
                  <div class="organization">
										<?php
										include "exp_pro_emploi.php";
										while ($res=$req->fetch())
										{
											$lib=$res['lib_emploi'];
								      $desc=$res['desc_emploi'];
								      $date=date("d-m-Y", strtotime($res['date_crea']));
								      $entreprise=$res['id_entreprise'];
										?>
                    <img src="images/users/entreprise/user-<?php echo $entreprise?>.jpg" alt="" class="pull-left img-org" />
                    <div class="work-info">
                      <h5><?php echo $lib ?></h5>
                      <p><?php echo $desc ?> - <span class="text-grey">Le <?php echo $date; ?></span></p>
                    </div>
										<?php
										}
										?>
                  </div>
									<h4 class="grey"><i class="ion-ios-briefcase-outline icon-in-title"></i>Stages</h4>
									<div class="organization">
										<?php
										include "exp_pro_stage.php";
										while ($res=$req->fetch())
										{
										?>
                    <img src="images/users/entreprise/user-<?php echo $entreprise?>.jpg" alt="" class="pull-left img-org" />
                    <div class="work-info">
                      <h5><?php echo $libs ?></h5>
                      <p><?php echo $descs ?> - <span class="text-grey">Du <?php echo $dated ?> au <?php echo $datef ?></span></p>
                    </div>
										<?php
										}
										?>
                  </div>
                </div>
							<?php
							if ($rue!='' | $ville!='' | $cp!='')
							{
							?>
							<div class="about-content-block">
								<h4 class="grey"><i class="ion-ios-location-outline icon-in-title"></i>Adresse</h4>
								<p><?php echo $rue,' ',$cp,' ',$ville ?></p>
							</div>
							<?php
							}
							if ($_SESSION['profil']=="eleve")
							{
								$sql="SELECT * FROM utilisateur, centres_interets, interesse
								WHERE utilisateur.id_utilisateur=$id
								AND interesse.id_utilisateur=utilisateur.id_utilisateur
								AND centres_interets.id_interet=interesse.id_interet";
								$req = $conn -> query($sql)or die($conn->errorInfo());
								$req -> execute();
							?>
                <div class="about-content-block">
                  <h4 class="grey"><i class="ion-ios-heart-outline icon-in-title"></i>Centre d'intérêts</h4>
                  <ul class="interests list-inline">
										<?php
										while ($res=$req->fetch())
										{
										?>
                    <li><span class="int-icons" title="<?php echo $res['lib_interet'] ?>"><i class="icon <?php echo $res['img_interet']; ?>"></i></span></li>
										<?php
										}
										?>
                  </ul>
                </div>
								<?php
								}
								?>
                <div class="about-content-block">
                  <h4 class="grey"><i class="ion-ios-chatbubble-outline icon-in-title"></i>Langue</h4>
                    <ul>
                      <li><a href="#">Russe</a></li>
                      <li><a href="#">Anglais</a></li>
                    </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>


    <!-- Footer
    ================================================= -->
		<?php
		include "footer.php";
		 ?>

  </body>

<!-- Mirrored from thunder-team.com/friend-finder/timeline-about.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 08 Nov 2018 14:00:50 GMT -->
</html>
