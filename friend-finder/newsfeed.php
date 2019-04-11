<?php
	session_start();
	require_once('login.inc.php');
	include "bdd.inc.php";
	include "info.php";

	$sql="SELECT * FROM stage, entreprise, utilisateur
				WHERE entreprise.id_entreprise=stage.id_entreprise
				ORDER BY date_debut_stage, date_fin_stage ASC";
	$req = $conn -> query($sql)or die($conn->errorInfo());
	$req -> execute();




?>
<!DOCTYPE HTML>
<html lang="en">

<!-- Mirrored from thunder-team.com/friend-finder/newsfeed.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 08 Nov 2018 13:59:59 GMT -->
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="This is social network html5 template available in themeforest......" />
		<meta name="keywords" content="Social Network, Social Media, Make Friends, Newsfeed, Profile Page" />
		<meta name="robots" content="index, follow" />
		<title>Fil d'actualité | Regardez ce que font les autres</title>

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


    <div id="page-contents">
    	<div class="container">
    		<div class="row">

          <!-- Newsfeed Common Side Bar Left
          ================================================= -->
    			<div class="col-md-3 static">
            <div class="profile-card">
							<?php
							///////////////////////////////////////////////////////////////////////////////
							/*									        	E L E V E																			 */
							///////////////////////////////////////////////////////////////////////////////
									if ($_SESSION['profil']=="eleve")
									{
									?>
										<img src="images/users/utilisateur/user-<?php echo $_SESSION['id'],$_SESSION['photo']; ?>" alt="user" class="profile-photo" />
									<?php
									}
							///////////////////////////////////////////////////////////////////////////////
							/*												E N T R E P R I S E																*/
							///////////////////////////////////////////////////////////////////////////////
									if ($_SESSION['profil']=="entreprise")
									{
									?>
										<img src="images/users/entreprise/user-<?php echo $_SESSION['id'],$_SESSION['photo']; ?>" alt="user" class="profile-photo" />
									<?php
									}
							?>
            	<h5><a href="timeline.php" class="text-white"><?php echo $prenom,' ',$nom; ?></a></h5>
            	<a href="#" class="text-white"><i class="ion ion-android-person-add"></i> NOMBRE followers</a>
            </div><!--profile card ends-->
            <ul class="nav-news-feed">
              <li><i class="icon ion-ios-paper"></i><div><a href="newsfeed.php">Fil d'actualité</a></div></li>
              <li><i class="icon ion-ios-people"></i><div><a href="newsfeed-people-nearby.php">Autour de moi</a></div></li>
              <li><i class="icon ion-chatboxes"></i><div><a href="newsfeed-messages.php">Messages</a></div></li>
            </ul><!--news-feed links ends-->
          </div>
    			<div class="col-md-7">

            <!-- Post Create Box
            ================================================= -->
            <div class="create-post">
            	<div class="row">
            		<div class="col-md-7 col-sm-7">
                  <div class="form-group">
                  </div>
                </div>
            		<div class="col-md-5 col-sm-5">
                </div>
            	</div>
            </div><!-- Post Create Box End-->


						<?php
						while ($res=$req->fetch())
						{
							$dated =date("d-m-Y", strtotime($res['date_debut_stage']));
							$datef =date("d-m-Y", strtotime($res['date_fin_stage']));
							$date=date("d-m-Y");
							$filiere=$res['id_filiere'];
							if ($dated>=$date)
							{
						?>
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
									<!---<div class="reaction">
										<a class="btn text-green"><i class="icon ion-thumbsup"></i> 23</a>
										<a class="btn text-red"><i class="fa fa-thumbs-down"></i> 4</a>
									</div>--->
									<div class="line-divider"></div>
									<div class="post-text">
										<p><?php echo 'Du ',$dated,' au ',$datef;?></p>
										<p><?php echo $res['desc_stage'];?></p>
									</div>
									<div class="line-divider"></div>
									<?php
									if ($res['id_utilisateur'] != 1)
									{
									?>
										<div class="post-comment">
											<img src="images/users/utilisateur/user-<?php echo $res['id_utilisateur']; ?>" alt="" class="profile-photo-sm" />
											<p><a href="timeline.php" class="profile-link"><?php echo $res['prenom_utilisateur'],' ',$res['nom_utilisateur']; ?> </a><?php echo $res['commentaire'] ?></i></p>
										</div>
									<?php
									}
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
								</div>
							</div>
						</div>
						<?php
							}
						}
						?>



          <!-- Newsfeed Common Side Bar Right
          =================================================
          <?php include "recommendation.php" ?> -->

    <!-- Footer
    ================================================= -->
    <?php include "footer.php" ?>

  </body>

<!-- Mirrored from thunder-team.com/friend-finder/newsfeed.php by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 08 Nov 2018 14:00:01 GMT -->
</php>
