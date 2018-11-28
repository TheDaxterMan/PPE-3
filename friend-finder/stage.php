<?php
	session_start();
	include "bdd.inc.php";
	include "login.inc.php";
	include "info.php";


	///////////////////////////////////////////////////////////////////////////////
	/*												E N T R E P R I S E																*/
	///////////////////////////////////////////////////////////////////////////////
			if ($_SESSION['profil']=="entreprise")
			{
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
									<img src="images/users/entreprise/user-<?php echo $_SESSION['id'],$_SESSION['photo']; ?>" alt="" class="img-responsive profile-photo" />
                  <h3><?php echo $prenom,' ',$nom; ?></h3>
                  <p class="text-muted">Creative Director</p>
                </div>
              </div>
            </div>
          </div><!--Timeline Menu for Large Screens End-->

          <!--Timeline Menu for Small Screens-->
          <div class="navbar-mobile hidden-lg hidden-md">
            <div class="profile-info">
							<img src="images/users/entreprise/user-<?php echo $_SESSION['id'],$_SESSION['photo']; ?>" alt="" class="img-responsive profile-photo" />
              <h4><?php echo $prenom,' ',$nom; ?></h4>
              <p class="text-muted">Creative Director</p>
            </div>
          </div><!--Timeline Menu for Small Screens End-->

        </div>
        <div id="page-contents">
          <div class="row">
            <div class="col-md-3">

            </div>
            <div class="col-md-7">

              <!-- Basic Information
              ================================================= -->
              <div class="edit-profile-container">
                <div class="block-title">
                  <h4 class="grey"><i class="icon ion-android-checkmark-circle"></i>Créer une proposition de Stage/Emploi</h4>
                  <div class="line"></div>
                </div>
                <div class="edit-block">
                  <form name="stage" id="stage" action="traitement_stage.php" method="post" class="form-inline">

                    <div class="row">
                      <div class="form-group col-xs-12">
                        <label for="fichier">Nouvelle Demande</label>
                      </div>

											<div class="form-group gender">
												<label class="radio-inline">
													<input type="radio" name="radio" value="stage" required>Stage</label>
												<label class="radio-inline">
													<input type="radio" name="radio" value="emploi" required>Emploi</label>
											</div>
											<div class="row">
												<div class="form-group col-xs-12">Libellé</label>
													<input id="lib" class="form-control input-group-lg" type="text" name="lib" title="Libellé de la proposition" placeholder="Libellé de la proposition" required/>
												</div>
											</div>
											<div class="row">
												<div class="form-group col-xs-12">Description</label>
													<textarea name="desc" id="desc" cols="30" rows="10" class="form-control input-group-lg" placeholder="Description de la proposition" required></textarea>
												</div>
											</div>
                    </div>

										<input type="hidden" name="id" value="1">
										<input class="btn btn-primary" type="submit" name="valider" value="Envoyer la proposition">
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
<?php
	}
?>
