<?php
	session_start();
	require_once('login.inc.php');
	include "bdd.inc.php";
	include "login.inc.php";
	include "info.php";
	include "class_diplome.php";
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
                  <h4 class="grey"><i class="icon ion-ios-book-outline"></i>Ajout diplômes</h4>
                  <div class="line"></div>
                  <p>Ajouter un diplôme</p>
                  <div class="line"></div>
                </div>
                <div class="edit-block">
                  <form action="ajout_modif_diplome.php" method="post" class="form-inline">
                    <div class="row">
                      <div class="form-group col-xs-12">
                        <label for="diplome">Diplôme</label>
												<input type="text" class="form-control input-group-lg" id="diplome" name="diplome" placeholder="Nom du diplôme">
                      </div>
                    </div>
                    <div class="row">
                      <div class="form-group col-xs-12">
                        <label for="lib">Libellé du diplôme</label>
												<textarea id="lib" class="form-control input-group-lg" name="lib" title="Entrez un libellé" placeholder="Libellé du diplôme" rows="8" cols="80"></textarea>
                      </div>
                    </div>
										<input type="submit" class="btn btn-primary" name="enregistrerd" value="Enregistrer">
                  </form>
                </div>

								<?php
								if (isset($_POST['modif']))
								{
									$id_diplome=$_POST['choix_diplome'];
									
									$undiplome = new diplome ('','','','');
									
									$undiplome -> affiche_diplome($undiplome, $conn);
									
								?>
								<div class="block-title">
									<h4 class="grey"><i class="icon ion-ios-book-outline"></i>Modifier diplômes</h4>
									<div class="line"></div>
									<p>Modifier un diplôme</p>
									<div class="line"></div>
								</div>
								<div class="edit-block">
									<form action="ajout_modif_diplome.php" method="post" class="form-inline">
										<div class="row">
											<div class="form-group col-xs-12">
												<label for="diplome">Diplôme</label>
												<input type="text" class="form-control input-group-lg" id="diplome" name="nom_diplome" placeholder="Nom du diplôme"  value="<?php echo $res['nom_diplome'] ?>">
											</div>
										</div>
										<div class="row">
											<div class="form-group col-xs-12">
												<label for="lib">Libellé du diplôme</label>
												<textarea id="lib" class="form-control input-group-lg" name="lib_diplome" title="Entrez un libellé" placeholder="Libellé du diplôme" rows="8" cols="80"><?php echo $res['lib_diplome'] ?></textarea>
											</div>
										</div>
										<input type="hidden" name="id_diplome" value="<?php echo $id_diplome ?>">
										<input type="submit" class="btn btn-primary" name="modifierd" value="Enregistrer">
									</form>
								</div>
								<?php
								}
								if (isset($_POST['suppr']))
								{
									$id_diplome=$_POST['choix_diplome'];


								}
								else
								{
								?>
								<div class="block-title">
									<h4 class="grey"><i class="icon ion-ios-book-outline"></i>Modifier diplômes</h4>
									<div class="line"></div>
									<p>Modifier/Supprimer un diplôme</p>
									<div class="line"></div>
								</div>
								<div class="edit-block">
									<form action="modif_diplome.php" method="post" class="form-inline">
										<div class="row">
											<div class="form-group col-xs-12">
												<label>Choisir le diplôme</label>
												<select class="form-control input-group-lg" id="diplome" name="choix_diplome">
													<option value="diplome" disabled selected>Choisir un diplôme</option>
													<?php
													$sql="SELECT * FROM diplome";
													$req = $conn -> query($sql)or die($conn->errorInfo());
													while ($res=$req->fetch())
													{
													?>
														<option value="<?php echo $res['id_diplome'] ?>"><?php echo $res['nom_diplome']?></option>
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
