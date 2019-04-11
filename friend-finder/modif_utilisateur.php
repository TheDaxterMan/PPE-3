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
              <h4>Profile</h4>
              <p class="text-muted"></p>
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
								<?php
								if (isset($_POST['entreprise']))
								{
									$_SESSION['choix']="entreprise";
								}
								if (isset($_POST['utilisateur']))
								{
									$_SESSION['choix']="utilisateur";
								}


								if ($_SESSION['choix']=="entreprise")
								{
									if (isset($_POST['modif_entreprise']))
									{
										$id=$_POST['choix_entreprise'];

										$sql="SELECT * FROM entreprise WHERE id_entreprise='$id'";
										$req = $conn -> prepare($sql)or die($conn->errorInfo());
										$req -> execute();
										$res=$req->fetch();
									?>
									<div class="block-title">
										<h4 class="grey"><i class="icon ion-ios-book-outline"></i>Modifier/supprimer une entreprise</h4>
										<div class="line"></div>
										<p>Modifier une entreprise</p>
										<div class="line"></div>
									</div>
									<div class="edit-block">
	                  <form name="basic-info" id="basic-info" action="modifier_utilisateur.php" method="post" class="form-inline">
	                    <div class="row">
	                      <div class="form-group col-xs-6">
	                        <label for="prenom">Prénom</label>
	                        <input id="prenom" class="form-control input-group-lg" type="text" name="prenom" title="Entrez votre prénom" placeholder="Prénom" value="<?php echo $res['prenom_responsable'];  ?>" />
	                      </div>
	                      <div class="form-group col-xs-6">
	                        <label for="nome" class="">Nom</label>
	                        <input id="nom" class="form-control input-group-lg" type="text" name="nom" title="Entrez votre nom de famille" placeholder="Nom de famille" value="<?php echo $res['nom_responsable']; ?>" />
	                      </div>
	                    </div>
	                    <div class="row">
	                      <div class="form-group col-xs-12">
	                        <label for="email">Email</label>
	                        <input id="email" class="form-control input-group-lg" type="text" name="mail" title="Entrez votre Email" placeholder="Mon Email" value="<?php echo $res['mail_entreprise']; ?>" />
	                      </div>
	                    </div>
											<div class="row">
												<div class="form-group col-xs-12">
													<label for="entr">Nom entreprise</label>
													<input id="entr" class="form-control input-group-lg" type="text" name="entr" title="Entrez votre nom d'entreprise" placeholder="Mon entreprise" value="<?php echo $res['nom_entreprise']; ?>" />
												</div>
											</div>
											<div class="row">
	                      <p class="custom-label"><strong>Adresse</strong></p>
	                      <div class="form-group col-sm-6 col-xs-12">
	                        <label for="rue" class="sr-only">Rue</label>
	                        <input id="rue" class="form-control" type="text" name="rue" title="Entrez votre rue" placeholder="Ma rue" value="<?php echo $res['rue_entreprise'];  ?>">
	                      </div>
												<div class="form-group col-sm-6 col-xs-12">
	                        <label for="ville" class="sr-only">Ville</label>
	                        <input id="ville" class="form-control" type="text" name="ville" title="Entrez votre ville" placeholder="Ma ville" value="<?php echo $res['ville_entreprise'];  ?>">
	                      </div>
												<div class="form-group col-sm-6 col-xs-12">
	                        <label for="cp" class="sr-only">Code Postal</label>
	                        <input id="cp" class="form-control" type="text" name="cp" title="Entrez votre Code Postal" placeholder="Mon Code Postal" value="<?php echo $res['cp_entreprise']; ?>">
	                      </div>
	                    </div>
											<input type="hidden" name="id" value="<?php echo $res['id_entreprise']; ?>">
											<input class="btn btn-primary" type="submit" name="valider_entreprise" value="Sauvegarder les modifications">
	                  </form>
	                </div>
									<?php
									}
									else
									{
										if (isset($_POST['suppr_entreprise']))
										{
											echo "SUPPR ENTREPRISE";

											$uneent = new entreprise ('','','','','','','','','','','','');

											$uneent -> suppr_fictive_ent ($uneent, $conn);

										}
										else
										{
									?>
									<div class="block-title">
										<h4 class="grey"><i class="icon ion-ios-book-outline"></i>Modifier/supprimer une entreprise</h4>
										<div class="line"></div>
										<p>Modifier/supprimer une entreprise</p>
										<div class="line"></div>
									</div>
									<div class="edit-block">
										<form action="modif_utilisateur.php" method="post" class="form-inline">
											<div class="row">
												<div class="form-group col-xs-12">
													<label>Choisir une entreprise</label>
													<select class="form-control input-group-lg" id="entreprise" name="choix_entreprise">
														<option value="entreprise" disabled selected>Choisir une entreprise</option>
														<?php
														$sql="SELECT * FROM entreprise";
														$req = $conn -> query($sql)or die($conn->errorInfo());
														while ($res=$req->fetch())
														{
														?>
															<option value="<?php echo $res['id_entreprise'] ?>"><?php echo $res['prenom_responsable'],' ',$res['nom_responsable']?></option>
														<?php
														}
														?>
													</select>
												</div>
											</div>
											<div class="form-group col-xs-6">
											<input type="submit" class="btn btn-primary" name="modif_entreprise" value="Modifier">
											</div>
											<div class="form-group col-xs-6">
											<input type="submit" class="btn btn-primary" name="suppr_entreprise" value="Supprimer">
											</div>
											<input class="btn btn-primary" type="submit" name="utilisateur" value="Passer aux utilisateurs">
										</form>
									</div>
									<?php
										}
									}
								}
								else
								{
									if ($_SESSION['choix']=="utilisateur")
									{
										if (isset($_POST['modif']))
										{
											$id=$_POST['choix_utilisateur'];

											$sql="SELECT * FROM utilisateur WHERE id_utilisateur='$id'";
											$req = $conn -> prepare($sql)or die($conn->errorInfo());
											$req -> execute();
											$res=$req->fetch();
										?>
										<div class="block-title">
											<h4 class="grey"><i class="icon ion-ios-book-outline"></i>Modifier/supprimer un utilisateur</h4>
											<div class="line"></div>
											<p>Modifier un utilisateur</p>
											<div class="line"></div>
										</div>
										<div class="edit-block">
											<form name="basic-info" id="basic-info" action="modifier_utilisateur.php" method="post" class="form-inline">
												<div class="row">
													<div class="form-group col-xs-6">
														<label for="prenom">Prénom</label>
														<input id="prenom" class="form-control input-group-lg" type="text" name="prenom" title="Entrez votre prénom" placeholder="Prénom" value="<?php echo $res['prenom_utilisateur'];  ?>" />
													</div>
													<div class="form-group col-xs-6">
														<label for="nome" class="">Nom</label>
														<input id="nom" class="form-control input-group-lg" type="text" name="nom" title="Entrez votre nom de famille" placeholder="Nom de famille" value="<?php echo $res['nom_utilisateur']; ?>" />
													</div>
												</div>
												<div class="row">
													<div class="form-group col-xs-12">
														<label for="email">Email</label>
														<input id="email" class="form-control input-group-lg" type="text" name="mail" title="Entrez votre Email" placeholder="Mon Email" value="<?php echo $res['email_utilisateur']; ?>" />
													</div>
												</div>
												<div class="row">
													<div class="form-group col-xs-12">
														<label for="tel">Téléphone</label>
														<input id="tel" class="form-control input-group-lg" type="text" name="tel" title="Entrez votre numéro de téléphone" placeholder="Mon téléphone" value="<?php echo $res['tel_utilisateur']; ?>" />
													</div>
												</div>
												<div class="row">
													<p class="custom-label"><strong>Adresse</strong></p>
													<div class="form-group col-sm-6 col-xs-12">
														<label for="rue" class="sr-only">Rue</label>
														<input id="rue" class="form-control" type="text" name="rue" title="Entrez votre rue" placeholder="Ma rue" value="<?php echo $res['rue_utilisateur'];  ?>">
													</div>
													<div class="form-group col-sm-6 col-xs-12">
														<label for="ville" class="sr-only">Ville</label>
														<input id="ville" class="form-control" type="text" name="ville" title="Entrez votre ville" placeholder="Ma ville" value="<?php echo $res['ville_utilisateur'];  ?>">
													</div>
													<div class="form-group col-sm-6 col-xs-12">
														<label for="cp" class="sr-only">Code Postal</label>
														<input id="cp" class="form-control" type="text" name="cp" title="Entrez votre Code Postal" placeholder="Mon Code Postal" value="<?php echo $res['cp_utilisateur']; ?>">
													</div>
													<div class="form-group col-xs-12">
														<label>Choisir une filière</label>
														<select class="form-control input-group-lg" id="filiere" name="choix_filiere">
															<option value="filiere" disabled selected>Choisir une filiere</option>
															<?php
															$sql="SELECT * FROM filiere";
															$req = $conn -> query($sql)or die($conn->errorInfo());
															while ($res=$req->fetch())
															{
															?>
																<option value="<?php echo $res['id_filiere'] ?>"><?php echo $res['lib_filiere']?></option>
															<?php
															}
															?>
														</select>
													</div>
												</div>
												<input type="hidden" name="id" value="<?php echo $id; ?>">
												<input class="btn btn-primary" type="submit" name="valider" value="Sauvegarder les modifications">
											</form>
										</div>
										<?php
										}
										else
										{
										?>
										<div class="block-title">
											<h4 class="grey"><i class="icon ion-ios-book-outline"></i>Modifier/supprimer un utilisateur</h4>
											<div class="line"></div>
											<p>Modifier/supprimer un utilisateur</p>
											<div class="line"></div>
										</div>
										<div class="edit-block">
											<form action="modif_utilisateur.php" method="post" class="form-inline">
												<div class="row">
													<div class="form-group col-xs-12">
														<label>Choisir un utilisateur</label>
														<select class="form-control input-group-lg" id="utilisateur" name="choix_utilisateur">
															<option value="utilisateur" disabled selected>Choisir un utilisateur</option>
															<?php
															$sql="SELECT * FROM utilisateur";
															$req = $conn -> query($sql)or die($conn->errorInfo());
															while ($res=$req->fetch())
															{
															?>
																<option value="<?php echo $res['id_utilisateur'] ?>"><?php echo $res['prenom_utilisateur'],' ',$res['nom_utilisateur']?></option>
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
												<input class="btn btn-primary" type="submit" name="entreprise" value="Passer aux entreprises">
											</form>
										</div>
										<?php
										}
									}
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
