<?php
	session_start();
	require_once('login.inc.php');
	include "bdd.inc.php";
	include "login.inc.php";
	include "info.php";
?>
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from thunder-team.com/friend-finder/edit-profile-work-edu.php by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 08 Nov 2018 14:00:55 GMT -->
<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="This is social network html5 template available in themeforest......" />
		<meta name="keywords" content="Social Network, Social Media, Make Friends, Newsfeed, Profile Page" />
		<meta name="robots" content="index, follow" />
		<title>Edit Profile | Work and Education</title>

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
              <h4>Sarah Cruiz</h4>
              <p class="text-muted">Creative Director</p>
            </div>
          </div><!--Timeline Menu for Small Screens End-->

        </div>
        <div id="page-contents">
          <div class="row">
            <div class="col-md-3">
            </div>
            <div class="col-md-7">

              <!-- Edit Work and Education
              ================================================= -->
              <div class="edit-profile-container">
                <div class="block-title">
                  <h4 class="grey"><i class="icon ion-ios-book-outline"></i>Ajout intérêts</h4>
                  <div class="line"></div>
                  <p>Ajouter un intêret</p>
                  <div class="line"></div>
                </div>
                <div class="edit-block">
                  <form action="ajout_modif_interet.php" method="post" class="form-inline">
                    <div class="row">
                      <div class="form-group col-xs-12">
                        <label for="interet">Intérêt</label>
												<input type="text" id="interet" class="form-control input-group-lg" name="interet" title="Entrez un interet" placeholder="Nom de l'intérêt">
                      </div>
                    </div>
                    <div class="row">
                      <div class="form-group col-xs-12">
                        <label for="img">Code Image de l'intérêt</label>
												<input type="text" id="img" class="form-control input-group-lg" name="img" title="Entrez une image" placeholder="Image de l'intérêt">
                      </div>
                    </div>
										<input type="submit" class="btn btn-primary" name="enregistreri" value="Enregistrer">
                  </form>
                </div>

								<?php
								if (isset($_POST['modif']))
								{
									$id_interet=$_POST['choix_interet'];

									$sql="SELECT * FROM centres_interets WHERE id_interet='$id_interet'";
									$req = $conn -> prepare($sql)or die($conn->errorInfo());
									$req -> execute();
									$res=$req->fetch();

									$img=$res['img_interet'];
								?>
								<div class="block-title">
									<h4 class="grey"><i class="icon ion-ios-book-outline"></i>Modifier intérêts</h4>
									<div class="line"></div>
									<p>Modifier un intérêt</p>
									<div class="line"></div>
								</div>
								<div class="edit-block">
									<form action="ajout_modif_interet.php" method="post" class="form-inline">
										<div class="row">
											<div class="form-group col-xs-12">
												<label for="lib">Libellé de l'intérêt</label>
												<input type="text" class="form-control input-group-lg" id="lib" name="lib_interet" title="Entrez un libellé" placeholder="Libellé de l'intérêt"  value="<?php echo $res['lib_interet'] ?>">
											</div>
										</div>
										<div class="row">
											<div class="form-group col-xs-12">
												<label for="img">Code Image de l'intérêt</label>
												<input type="text" class="form-control input-group-lg" id="img" name="img" placeholder="Code image interet"  value="<?php echo $res['img_interet'] ?>">
											</div>
										</div>
										<div class="row">
											<ul class="list-inline interests">
		                  	<li><a href="#"><i class="icon ion-<?php echo $img; ?>"></i><?php echo $res['lib_interet']; ?></a></li>
		                  </ul>
										</div>
										<input type="hidden" name="id_interet" value="<?php echo $id_interet ?>">
										<input type="submit" class="btn btn-primary" name="modifieri" value="Enregistrer">
									</form>
								</div>
								<?php
								}
								else
								{
								?>
								<div class="block-title">
									<h4 class="grey"><i class="icon ion-ios-book-outline"></i>Modifier diplômes</h4>
									<div class="line"></div>
									<p>Modifier/Supprimer un intêret</p>
									<div class="line"></div>
								</div>
								<div class="edit-block">
									<form action="modif_interet.php" method="post" class="form-inline">
										<div class="row">
											<div class="form-group col-xs-12">
												<label>Choisir un intêret</label>
												<select class="form-control input-group-lg" id="interet" name="choix_interet">
													<option value="interet" disabled selected>Choisir un intêret</option>
													<?php
													$sql="SELECT * FROM centres_interets";
													$req = $conn -> query($sql)or die($conn->errorInfo());
													while ($res=$req->fetch())
													{
													?>
														<option value="<?php echo $res['id_interet'] ?>"><?php echo $res['lib_interet']?></option>
													<?php
													}
													?>
												</select>
											</div>
										</div>
										<div class="form-group col-xs-6">
										<input type="submit" class="btn btn-primary" name="modif" value="Modifier">
										</div>
										<div class="form-group col-xs-6">
										<input type="submit" class="btn btn-primary" name="suppr" value="Supprimer">
										</div>
									</form>
								</div>
								<?php
								}
								?>
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

<!-- Mirrored from thunder-team.com/friend-finder/edit-profile-work-edu.php by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 08 Nov 2018 14:00:55 GMT -->
</html>
