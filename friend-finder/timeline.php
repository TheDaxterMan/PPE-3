<?php
	session_start();
	require_once('login.inc.php');
	include "bdd.inc.php";
	include "login.inc.php";
	include "info.php";

	$sql="SELECT * FROM stage, utilisateur, entreprise
				WHERE utilisateur.id_utilisateur=$id
				AND stage.id_utilisateur=utilisateur.id_utilisateur
				AND entreprise.id_entreprise=stage.id_entreprise
				ORDER BY date_debut_stage, date_fin_stage ASC";

	$req = $conn -> query($sql)or die($conn->errorInfo());
	$req -> execute();
?>
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from thunder-team.com/friend-finder/timeline.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 08 Nov 2018 14:00:45 GMT -->
<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="This is social network html5 template available in themeforest......" />
		<meta name="keywords" content="Social Network, Social Media, Make Friends, Newsfeed, Profile Page" />
		<meta name="robots" content="index, follow" />
		<title>Chronologie</title>

    <!-- Stylesheets
    ================================================= -->
		<link rel="stylesheet" href="css/bootstrap.min.css" />
		<link rel="stylesheet" href="css/style.css" />
		<link rel="stylesheet" href="css/ionicons.min.css" />
    <link rel="stylesheet" href="css/font-awesome.min.css" />
    <link href="css/emoji.css" rel="stylesheet">

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
                  <li><a href="timeline.php" class="active">Chronologie</a></li>
                  <li><a href="timeline-about.php">A propos</a></li>
                  <li><a href="timeline-album.php">Album</a></li>
                  <li><a href="timeline-friends.php">Amis</a></li>
                </ul>
                <ul class="follow-me list-inline">
                  <li>1,299 amis</li>
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
                <li><a href="timeline.php" class="active">Chronologie</a></li>
                <li><a href="timeline-about.php">A propos</a></li>
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

              <!-- Post Create Box
              ================================================= -->
              <div class="create-post">
                <div class="row">
                  <div class="col-md-5 col-sm-5">
                  </div>
                </div>
              </div><!-- Post Create Box End-->

              <!-- Post Content
              ================================================= -->
              <div class="post-content">

								<?php
								while ($res=$req->fetch())
								{
									$dated =date("d-m-Y", strtotime($res['date_debut_stage']));
									$datef =date("d-m-Y", strtotime($res['date_fin_stage']));
								?>
									<!--Post Date-->
	                <div class="post-date hidden-xs hidden-sm">
	                  <h5>Le</h5>
	                  <p class="text-grey"><?php echo $dated; ?></p>
	                </div><!--Post Date End-->

									<!-- Post Content
									================================================= -->
									<div class="post-content">
										<div class="post-container">
											<img src="images/users/entreprise/user-<?php echo $res['id_entreprise'];?>.jpg" alt="user" class="profile-photo-md pull-left" />
											<div class="post-detail">
												<div class="user-info">
													<h5><a href="timeline.php" class="profile-link"><?php echo $res['nom_entreprise'];?></a></h5>
													<p class="text-muted"><?php echo $res['lib_stage'];?></p>
													<p class="text-muted"><?php echo "Il y a tant de minutes / heures";?></p>
												</div>
	                    <div class="line-divider"></div>
											<div class="post-text">
												<p><?php echo 'Du ',$dated,' au ',$datef;?></p>
												<p><?php echo $res['desc_stage'];?></p>
											</div>
											<div class="line-divider"></div>
												<?php if ($res['commentaire']!='')
												{
												?>
													<div class="post-comment">
														<img src="images/users/utilisateur/user-<?php echo $res['id_utilisateur'],$res['photo_utilisateur']; ?>" alt="" class="profile-photo-sm" />
														<p><a href="timeline.php" class="profile-link"><?php echo $res['prenom_utilisateur'],' ',$res['nom_utilisateur'],' :'; ?> </a><?php echo ' ',$res['commentaire'] ?></i></p>
													</div>
												<?php
												}
												else
												{
												?>
												<div class="post-comment">
													<?php
													///////////////////////////////////////////////////////////////////////////////
													/*									        	E L E V E																			 */
													///////////////////////////////////////////////////////////////////////////////
															if ($_SESSION['profil']=="eleve")
															{
															?>
																<img src="images/users/utilisateur/user-<?php echo $_SESSION['id'],$_SESSION['photo']; ?>" alt="" class="profile-photo-sm" />
																<form action="commentaire.php" method="post">
																	<textarea class="form-control" name="commentaire" rows="8" cols="80" placeholder="Postez un commentaire"></textarea>
			&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
			&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
			&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
																	<input type="hidden" name="stage" value="<?php echo $res['id_stage']; ?>">
																	<input type="submit" class="btn-primary" name="envoi" value="Envoyer">
																</form>
															<?php
															}
															?>
													</div>
												<?php
												}
												?>
										</div>
									</div>
								</div
								<?php
								}
								?>

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

<!-- Mirrored from thunder-team.com/friend-finder/timeline.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 08 Nov 2018 14:00:50 GMT -->
</html>
