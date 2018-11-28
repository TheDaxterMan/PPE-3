<?php
	session_start();
	include "bdd.inc.php";
<<<<<<< HEAD
	include "login.inc.php";

	///////////////////////////////////////////////////////////////////////////////
	/*									        	E L E V E																			 */
	///////////////////////////////////////////////////////////////////////////////
			if ($_SESSION['profil']=="eleve")
			{
				$sql="SELECT * FROM utilisateur";
				$req = $conn -> query($sql)or die($conn->errorInfo());
				$res=$req->fetch();
				$nom=$res['nom_utilisateur'];
				$prenom=$res['prenom_utilisateur'];
			}
	///////////////////////////////////////////////////////////////////////////////
	/*												E N T R E P R I S E																*/
	///////////////////////////////////////////////////////////////////////////////
			if ($_SESSION['profil']=="entreprise")
			{
				$sql="SELECT * FROM entreprise";
				$req = $conn -> query($sql)or die($conn->errorInfo());
				$res=$req->fetch();
				$nom=$res['nom_responsable'];
				$prenom=$res['prenom_responsable'];
			}
=======
	include "info.php";
>>>>>>> 58724f46e67bcd5892123c0d2aea8026ee87ce6e
?>
<!DOCTYPE php>
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

            <!-- Post Content
            ================================================= -->
            <div class="post-content">
              <img src="images/post-images/1.jpg" alt="post-image" class="img-responsive post-image" />
              <div class="post-container">
                <img src="images/users/user-5.jpg" alt="user" class="profile-photo-md pull-left" />
                <div class="post-detail">
                  <div class="user-info">
                    <h5><a href="timeline.php" class="profile-link">Personne random</a> <span class="following">Suivre</span></h5>
                    <p class="text-muted">A publié une photo il y a - minutes</p>
                  </div>
                  <div class="reaction">
                    <a class="btn text-green"><i class="icon ion-thumbsup"></i> 13</a>
                    <a class="btn text-red"><i class="fa fa-thumbs-down"></i> 0</a>
                  </div>
                  <div class="line-divider"></div>
                  <div class="post-text">
                    <p>Blablabla<i class="em em-fu"></i> <i class="em em-anguished"></i> <i class="em em-anguished"></i></p>
                  </div>
                  <div class="line-divider"></div>
                  <div class="post-comment">
                    <img src="images/users/user-11.jpg" alt="" class="profile-photo-sm" />
                    <p><a href="timeline.php" class="profile-link">Personne random 2</a><i class="em em-laughing"></i>Blablabla</p>
                  </div>
                  <div class="post-comment">
                    <img src="images/users/user-4.jpg" alt="" class="profile-photo-sm" />
                    <p><a href="timeline.php" class="profile-link">Personne random 3</a>Blablabla</p>
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

            <!-- Post Content
            ================================================= -->
            <div class="post-content">
               <video class="post-video" controls> <source src="videos/8.mp4" type="video/mp4"> </video>
              <div class="post-container">
                <img src="images/users/user-3.jpg" alt="user" class="profile-photo-md pull-left" />
                <div class="post-detail">
                  <div class="user-info">
                    <h5><a href="timeline.php" class="profile-link">Sophia Lee</a> <span class="following">following</span></h5>
                    <p class="text-muted">Updated her status about 33 mins ago</p>
                  </div>
                  <div class="reaction">
                    <a class="btn text-green"><i class="icon ion-thumbsup"></i> 75</a>
                    <a class="btn text-red"><i class="fa fa-thumbs-down"></i> 8</a>
                  </div>
                  <div class="line-divider"></div>
                  <div class="post-text">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                  </div>
                  <div class="line-divider"></div>
                   <div class="post-comment">
                    <img src="images/users/user-14.jpg" alt="" class="profile-photo-sm" />
                    <p><a href="timeline.php" class="profile-link">Olivia </a> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. <i class="em em-anguished"></i> Ut enim ad minim veniam, quis nostrud </p>
                  </div>
                  <div class="post-comment">
                    <img src="images/users/user-<?php echo $_SESSION['id'],$_SESSION['photo']; ?>" alt="" class="profile-photo-sm" />
                    <p><a href="timeline.php" class="profile-link">Sarah</a> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                  </div>
                  <div class="post-comment">
                    <img src="images/users/user-2.jpg" alt="" class="profile-photo-sm" />
                    <p><a href="timeline.php" class="profile-link">Linda</a> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
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

            <!-- Post Content
            ================================================= -->
            <div class="post-content">
              <div class="post-container">
                <img src="images/users/user-2.jpg" alt="user" class="profile-photo-md pull-left" />
                <div class="post-detail">
                  <div class="user-info">
                    <h5><a href="timeline.php" class="profile-link">Linda Lohan</a> <span class="following">following</span></h5>
                    <p class="text-muted">Published a photo about 1 hour ago</p>
                  </div>
                  <div class="reaction">
                    <a class="btn text-green"><i class="icon ion-thumbsup"></i> 23</a>
                    <a class="btn text-red"><i class="fa fa-thumbs-down"></i> 4</a>
                  </div>
                  <div class="line-divider"></div>
                  <div class="post-text">
                    <p><i class="em em-thumbsup"></i> <i class="em em-thumbsup"></i> Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?</p>
                  </div>
                  <div class="line-divider"></div>
                  <div class="post-comment">
                    <img src="images/users/user-12.jpg" alt="" class="profile-photo-sm" />
                    <p><a href="timeline.php" class="profile-link">Cris </a> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam <i class="em em-muscle"></i></p>
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

            <!-- Post Content
            ================================================= -->
            <div class="post-content">
              <img src="images/post-images/2.jpg" alt="post-image" class="img-responsive post-image" />
              <div class="post-container">
                <img src="images/users/user-4.jpg" alt="user" class="profile-photo-md pull-left" />
                <div class="post-detail">
                  <div class="user-info">
                    <h5><a href="timeline.php" class="profile-link">John Doe</a> <span class="following">following</span></h5>
                    <p class="text-muted">Published a photo about 2 hour ago</p>
                  </div>
                  <div class="reaction">
                    <a class="btn text-green"><i class="icon ion-thumbsup"></i> 39</a>
                    <a class="btn text-red"><i class="fa fa-thumbs-down"></i> 2</a>
                  </div>
                  <div class="line-divider"></div>
                  <div class="post-text">
                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt</p>
                  </div>
                  <div class="line-divider"></div>
                  <div class="post-comment">
                    <img src="images/users/user-13.jpg" alt="" class="profile-photo-sm" />
                    <p><a href="timeline.php" class="profile-link">Brian </a>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. </p>
                  </div>
                  <div class="post-comment">
                    <img src="images/users/user-8.jpg" alt="" class="profile-photo-sm" />
                    <p><a href="timeline.php" class="profile-link">Richard</a> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
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

            <!-- Post Content
            ================================================= -->
            <div class="post-content">
              <div class="google-maps">
                <div id="map" class="map"></div>
              </div>
              <div class="post-container">
                <img src="images/users/user-3.jpg" alt="user" class="profile-photo-md pull-left" />
                <div class="post-detail">
                  <div class="user-info">
                    <h5><a href="timeline.php" class="profile-link">Sophia Lee</a> <span class="following">following</span></h5>
                    <p class="text-muted"><i class="icon ion-ios-location"></i> Went to Niagara Falls today</p>
                  </div>
                  <div class="reaction">
                    <a class="btn text-green"><i class="icon ion-thumbsup"></i> 17</a>
                    <a class="btn text-red"><i class="fa fa-thumbs-down"></i> 0</a>
                  </div>
                  <div class="line-divider"></div>
                  <div class="post-text">
                    <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio.</p>
                  </div>
                  <div class="line-divider"></div>
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
                    <p><a href="timeline.php" class="profile-link">Sarah </a>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. <i class="em em-blush"></i> <i class="em em-blush"></i> </p>
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
