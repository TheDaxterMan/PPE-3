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
								<script>
								//fonction pour cacher les emplois/stage (boutons radio) 
								function cacherDate() {

									var x = document.getElementById("date");
									if (x.style.display === "none") {
											x.style.display = "block";
									} else {
											x.style.display = "none";
									}
								}

								</script>

              </div>
              <div class="col-md-9">
                <ul class="list-inline profile-menu">
                  <li><a href="timeline.php">Chronologie</a></li>
                  <li><a href="timeline-about.php" class="active">A propos</a></li>
                  <li><a href="timeline-album.php">Album</a></li>
                  <li><a href="timeline-friends.php">Amis</a></li>
                </ul>
                <ul class="follow-me list-inline">
                  <li>1,299 pecnots</li>
                  <li><button class="btn-primary">Ajouter en ami</button></li>
                </ul>
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
            <div class="mobile-menu">
              <ul class="list-inline">
                <li><a href="timeline.php">Publications</a></li>
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
            <div class="col-md-3">

              <!--Edit Profile Menu-->
              <ul class="edit-menu">
              	<li><i class="icon ion-ios-information-outline"></i><a href="edit-profile-basic.php">Informations basiques</a></li>
              	<li class="active"><i class="icon ion-ios-briefcase-outline"></i><a href="edit-profile-work-edu.php">Education et travail</a></li>
              	<li><i class="icon ion-ios-heart-outline"></i><a href="edit-profile-interests.php">Centres d'intérêts</a></li>
                <li><i class="icon ion-ios-settings"></i><a href="edit-profile-settings.php">Paramètres du compte</a></li>
              	<li><i class="icon ion-ios-locked-outline"></i><a href="edit-profile-password.php">Changer de mot de passe</a></li>
              </ul>
            </div>
            <div class="col-md-7">

              <!-- Edit Work and Education
              ================================================= -->
              <div class="edit-profile-container">
                <div class="block-title">
                  <h4 class="grey"><i class="icon ion-ios-book-outline"></i>Mes diplômes</h4>
                  <div class="line"></div>
                  <p>Ajouter, modifier ou supprimer un diplôme</p>
                  <div class="line"></div>
                </div>
                <div class="edit-block">
                  <form action="work.php" method="post" class="form-inline">
                    <div class="row">
                      <div class="form-group col-xs-12">
                        <label>Mon diplôme</label>
												<select class="form-control input-group-lg" id="diplome" name="diplome">
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
                    <div class="row">
                      <div class="form-group col-xs-6">
                        <label for="annee">Année d'obtention du diplôme</label>
                        <input id="annee" class="form-control input-group-lg" type="number" min="1900" step="1" name="annee" title="Entrez une année" placeholder="Année d'obtention" />
                      </div>
                    </div>
										<input type="submit" class="btn btn-primary" name="enregistrerd" value="Enregistrer">
                  </form>
                </div>
                <div class="block-title">
                  <h4 class="grey"><i class="icon ion-ios-briefcase-outline"></i>Experience professionelle</h4>
                  <div class="line"></div>
                  <p>Mon expérience pro</p>
                  <div class="line"></div>
                </div>
                <div class="edit-block">
                  <form name="work" id="work" class="form-inline">
                    <div class="row">
                      <div class="form-group col-xs-12">
                        <label for="company">Entreprise</label>
                        <input id="company" class="form-control input-group-lg" type="text" name="company" title="Entrez une entreprise" placeholder="Nom de l'entreprise" />
                      </div>
                    </div>
                    <div class="row">
                      <div class="form-group col-xs-12">
                        <label for="lib">Libellé</label>
                        <input id="lib" class="form-control input-group-lg" type="text" name="lib" title="Entrez le libellé" placeholder="Libellé" />
                      </div>
                    </div>
                    <div class="row">
                      <div class="form-group col-xs-12">
                        <label for="desc">Description</label>
                        <input id="desc" class="form-control input-group-lg" type="text" name="desc" title="Entrez une description" placeholder="Description" />
                      </div>
                    </div>
										<div class="form-group gender">
											<label class="radio-inline">
												<input type="radio" name="prop" id="emploi" value="emploi" onclick="cacherDate()" required>Emploi</label>
											<label class="radio-inline">
												<input type="radio" name="prop" id="stage" value="stage" onclick="cacherDate()" required>Stage</label>
										</div>
										<div class="date" id="date">
											<div class="form-group col-xs-6">Date début</label>
												<input id="date1" class="form-control input-group-lg" type="date" name="dated" title="Date début stage" placeholder="Date début stage"/>
											</div>
											<div class="form-group col-xs-6">Date fin</label>
												<input id="date2" class="form-control input-group-lg" type="date" name="datef" title="Date fin stage" placeholder="Date fin stage"/>
											</div>
										</div>
                    <button class="btn btn-primary">Enregistrer</button>
                  </form>
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

<!-- Mirrored from thunder-team.com/friend-finder/edit-profile-work-edu.php by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 08 Nov 2018 14:00:55 GMT -->
</html>
