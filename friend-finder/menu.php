<?php
    if(isset($_GET['deconnexion']))
    {
       if($_GET['deconnexion']==true)
       {
          session_unset();
          header("location:index.php");
       }
    }
?>
<header id="header">
  <nav class="navbar navbar-default navbar-fixed-top menu">
    <div class="container">

      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="newsfeed.php"><img src="images/logo.png" alt="logo" /></a>
      </div>

      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav navbar-right main-menu">


          <li class="dropdown"><a href="newsfeed.php">Fil d'actualité</a></li>

          <li class="dropdown">
            <a href="#" class="dropdown-toggle pages" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Toutes les Pages <span><img src="images/down-arrow.png" alt="" /></span></a>
            <ul class="dropdown-menu page-list">
              <li><a href="stage.php">Création de stages/emplois</a></li>
              <li><a href="faq.php">FAQ Page</a></li>
              <li><a href="404.php">404 Not Found</a></li>
            </ul>
          </li>

          <li class="dropdown"><a href="contact.php">Contact</a></li>
          <?php
          if ($_SESSION['id']==1)
          {
            ?>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle pages" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Admin <span><img src="images/down-arrow.png" alt="" /></span></a>
              <ul class="dropdown-menu page-list">
                <li><a href="modif_diplome.php">Modification Diplôme</a></li>
                <li><a href="modif_filiere.php">Modification Filières</a></li>
                <li><a href="modif_interet.php">Modification Centres d'intêrets</a></li>
                <li><a href="modif_utilisateur.php">Modification des utilisateurs</a></li>
              </ul>
            </li>
            <?php
          }
          ?>

          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
              <?php
            ///////////////////////////////////////////////////////////////////////////////
            /*									        	E L E V E																			 */
            ///////////////////////////////////////////////////////////////////////////////
                if ($_SESSION['profil']=="eleve")
                {
                ?>
                  <img src="images/users/utilisateur/user-<?php echo $_SESSION['id'],$_SESSION['photo']; ?>" alt="user" class="profile-photo-nav" /></a>
                <?php
                }
            ///////////////////////////////////////////////////////////////////////////////
            /*												E N T R E P R I S E																*/
            ///////////////////////////////////////////////////////////////////////////////
                if ($_SESSION['profil']=="entreprise")
                {
                ?>
                  <img src="images/users/entreprise/user-<?php echo $_SESSION['id'],$_SESSION['photo']; ?>" alt="user" class="profile-photo-nav" /></a>
                <?php
                }
            ?>
            <ul class="dropdown-menu login">
              <li><a href="timeline.php">Profil</a></li>
              <li><a href="timeline-about.php">A propos de moi</a></li>
              <li><a href="timeline-friends.php">Amis</a></li>
              <li><a href="edit-profile-basic.php">Modifier mes Informations</a></li>
              <li><a href="edit-profile-work-edu.php">Modifier mon Travail</a></li>
              <li><a href="edit-profile-interests.php">Modifier mes centres d'intérêts</a></li>
              <li><a href="edit-profile-settings.php">Paramètres du compte</a></li>
              <li><a href="edit-profile-password.php">Changer de Mot de passe</a></li>
              <li><a href="edit-profile-image.php">Changer de photo de profil</a></li>
              <li><a href="newsfeed.php?deconnexion=true">Déconnexion</a></li>
            </ul>
          </li>
        </ul>
        <form class="navbar-form navbar-right hidden-sm">
          <div class="form-group">
            <i class="icon ion-android-search"></i>
            <input id="recherche" type="text" class="form-control" placeholder="Rechercher des amis">
          </div>
        </form>
      </div><!-- /.navbar-collapse -->
    </div><!-- /.container -->
  </nav>
</header>
