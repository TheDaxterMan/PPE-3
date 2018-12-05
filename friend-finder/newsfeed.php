<?php
	session_start();
	include "bdd.inc.php";
	include "info.php";

	$sql="SELECT * FROM stage, entreprise";
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
            <div id="chat-block">
              <div class="title">Amis en ligne</div>
              <ul class="online-users list-inline">
                <li><a href="newsfeed-messages.php" title="Linda Lohan"><img src="images/users/user-2.jpg" alt="user" class="img-responsive profile-photo" /><span class="online-dot"></span></a></li>
                <li><a href="newsfeed-messages.php" title="Sophia Lee"><img src="images/users/user-3.jpg" alt="user" class="img-responsive profile-photo" /><span class="online-dot"></span></a></li>
                <li><a href="newsfeed-messages.php" title="John Doe"><img src="images/users/user-4.jpg" alt="user" class="img-responsive profile-photo" /><span class="online-dot"></span></a></li>
                <li><a href="newsfeed-messages.php" title="Alexis Clark"><img src="images/users/user-5.jpg" alt="user" class="img-responsive profile-photo" /><span class="online-dot"></span></a></li>
                <li><a href="newsfeed-messages.php" title="James Carter"><img src="images/users/user-6.jpg" alt="user" class="img-responsive profile-photo" /><span class="online-dot"></span></a></li>
                <li><a href="newsfeed-messages.php" title="Robert Cook"><img src="images/users/user-7.jpg" alt="user" class="img-responsive profile-photo" /><span class="online-dot"></span></a></li>
                <li><a href="newsfeed-messages.php" title="Richard Bell"><img src="images/users/user-8.jpg" alt="user" class="img-responsive profile-photo" /><span class="online-dot"></span></a></li>
                <li><a href="newsfeed-messages.php" title="Anna Young"><img src="images/users/user-9.jpg" alt="user" class="img-responsive profile-photo" /><span class="online-dot"></span></a></li>
                <li><a href="newsfeed-messages.php" title="Julia Cox"><img src="images/users/user-10.jpg" alt="user" class="img-responsive profile-photo" /><span class="online-dot"></span></a></li>
              </ul>
            </div><!--chat block ends-->
          </div>
    			<div class="col-md-7">

            <!-- Post Create Box
            ================================================= -->
            <div class="create-post">
            	<div class="row">
            		<div class="col-md-7 col-sm-7">
                  <div class="form-group">
										<?php
										///////////////////////////////////////////////////////////////////////////////
										/*									        	E L E V E																			 */
										///////////////////////////////////////////////////////////////////////////////
												if ($_SESSION['profil']=="eleve")
												{
												?>
													<img src="images/users/utilisateur/user-<?php echo $_SESSION['id'],$_SESSION['photo']; ?>" alt="" class="profile-photo-md" />
													<textarea name="texts" id="exampleTextarea" cols="30" rows="1" class="form-control" placeholder="Ecrivez quelque chose"></textarea>
												<?php
												}
										///////////////////////////////////////////////////////////////////////////////
										/*												E N T R E P R I S E																*/
										///////////////////////////////////////////////////////////////////////////////
												if ($_SESSION['profil']=="entreprise")
												{
												?>
													<img src="images/users/entreprise/user-<?php echo $_SESSION['id'],$_SESSION['photo']; ?>" alt="" class="profile-photo-md" />
													<textarea name="texts" id="exampleTextarea" cols="30" rows="1" class="form-control" placeholder="MDR T UNE ENTREPRISE"></textarea>
												<?php
												}
										?>
                  </div>
                </div>
            		<div class="col-md-5 col-sm-5">
                  <div class="tools">
                    <ul class="publishing-tools list-inline">
                      <li><a href="#"><i class="ion-compose"></i></a></li>
                      <li><a href="#"><i class="ion-images"></i></a></li>
                      <li><a href="#"><i class="ion-ios-videocam"></i></a></li>
                      <li><a href="#"><i class="ion-map"></i></a></li>
                    </ul>
                    <button class="btn btn-primary pull-right">Publier</button>
                  </div>
                </div>
            	</div>
            </div><!-- Post Create Box End-->


						<?php
						while ($res=$req->fetch())
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
									</div>
									<!---<div class="reaction">
										<a class="btn text-green"><i class="icon ion-thumbsup"></i> 23</a>
										<a class="btn text-red"><i class="fa fa-thumbs-down"></i> 4</a>
									</div>--->
									<div class="line-divider"></div>
									<div class="post-text">
										<p><?php echo $res['desc_stage'];?></p>
									</div>
									<div class="line-divider"></div>
									<div class="post-comment">
										<img src="images/users/utilisateur/user-<?php echo $res['id_entreprise']; ?>" alt="" class="profile-photo-sm" />
										<p><a href="timeline.php" class="profile-link"><?php echo "nom personne via php ici"; ?> </a><?php $res['commentaire'] ?></i></p>
									</div>
									<div class="post-comment">
										<?php
										///////////////////////////////////////////////////////////////////////////////
										/*									        	E L E V E																			 */
										///////////////////////////////////////////////////////////////////////////////
												if ($_SESSION['profil']=="eleve")
												{
												?>
													<img src="images/users/utilisateur/user-<?php echo $_SESSION['id'],$_SESSION['photo']; ?>" alt="" class="profile-photo-sm" />
													<input type="text" class="form-control" placeholder="Postez un commentaire">
												<?php
												}
										?>
									</div>
								</div>
							</div>
						</div
						<?php
						}
						?>
            >


            <!-- Post Content
            ================================================= -->
            <div class="post-content">
              <img src="images/post-images/11.jpg" alt="" class="img-responsive post-image" />
              <div class="post-container">
                <img src="images/users/user-9.jpg" alt="user" class="profile-photo-md pull-left" />
                <div class="post-detail">
                  <div class="user-info">
                    <h5><a href="timeline.php" class="profile-link">Anna Young</a> <span class="following">following</span></h5>
                    <p class="text-muted">Published a photo about 4 hour ago</p>
                  </div>
                  <div class="reaction">
                    <a class="btn text-green"><i class="icon ion-thumbsup"></i> 2</a>
                    <a class="btn text-red"><i class="fa fa-thumbs-down"></i> 0</a>
                  </div>
                  <div class="line-divider"></div>
                  <div class="post-text">
                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit.</p>
                  </div>
                  <div class="line-divider"></div>
                  <div class="post-comment">
                    <img src="images/users/user-10.jpg" alt="" class="profile-photo-sm" />
                    <p><a href="timeline.php" class="profile-link">Julia </a>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga.</p>
                  </div>
                  <div class="post-comment">
										<?php
										///////////////////////////////////////////////////////////////////////////////
										/*									        	E L E V E																			 */
										///////////////////////////////////////////////////////////////////////////////
												if ($_SESSION['profil']=="eleve")
												{
												?>
													<img src="images/users/utilisateur/user-<?php echo $_SESSION['id'],$_SESSION['photo']; ?>" alt="" class="profile-photo-sm" />
												<?php
												}
										///////////////////////////////////////////////////////////////////////////////
										/*												E N T R E P R I S E																*/
										///////////////////////////////////////////////////////////////////////////////
												if ($_SESSION['profil']=="entreprise")
												{
												?>
													<img src="images/users/entreprise/user-<?php echo $_SESSION['id'],$_SESSION['photo']; ?>" alt="" class="profile-photo-sm" />
												<?php
												}
										?>
                    <input type="text" class="form-control" placeholder="Postez un commentaire">
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- Newsfeed Common Side Bar Right
          ================================================= -->
          <?php include "recommendation.php" ?>

    <!-- Footer
    ================================================= -->
    <?php include "footer.php" ?>

  </body>

<!-- Mirrored from thunder-team.com/friend-finder/newsfeed.php by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 08 Nov 2018 14:00:01 GMT -->
</php>
