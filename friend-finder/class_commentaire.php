<?php

include 'bdd.inc.php';

	/* ---------------------- */
	/* DEBUT class commentaire */
	/* ---------------------- */

class commentaire
{
		/* ---------------------- */
		/* class commentaire Variables */
		/* ---------------------- */

		Private $id_commentaire;
		Private $nom_commentaire;
    Private $etat_commentaire;

		/* ---------------------- */
		/* class commentaire Constructeur */
		/* ---------------------- */

			Public function commentaire ( $id_comm, $nom_comm, $etat_comm)
			{
				$this -> id_commentaire = $id_comm;
				$this -> nom_commentaire = $nom_comm;
				$this -> etat_commentaire = $etat_comm;
			}

			/* ---------------------- */
			/* fonction commentaire getalldata */
			/* ---------------------- */

			public function getallcomm()
			{
				$data = $this->id_commentaire;
				$data = $data.$this->nom_commentaire;
				$data = $data.$this->etat_commentaire;
				return $data;
			}

			/* ---------------------- */
			/* class commentaire GET */
			/* ---------------------- */

			Public function get_id_commentaire ()
			{
				return $this-> id_commentaire;
			}

			Public function get_nom_commentaire ()
			{
				return $this-> nom_commentaire;
			}

			Public function  get_etat_commentaire ()
			{
				return $this-> etat_commentaire;
			}

			/* ---------------------- */
			/* class commentaire SET */
			/* ---------------------- */

			Public function set_nom_commentaire ($nom_comm)
			{
				 $this-> nom_commentaire = $nom_comm;
			}

			Public function set_etat_commentaire($etat_comm)
			{
				 $this-> etat_commentaire = $etat_comm;
			}

			/* ---------------------- */
			/* class commentaire fonctions publiques */
			/* ---------------------- */
			Public function ajout_commentaire ($objet, $conn)
				{
					$id_comm = $objet->get_id_commentaire();
					$nom_comm = $objet->get_nom_commentaire();
					$etat_comm = $objet->get_etat_commentaire();

					print $SQL = " INSERT INTO commentaire values (NULL, '$nom_comm', '$mdp_comm', '0', '1')";
					$Req = $conn -> query ($SQL) or die (' Erreur ajout commentaire ');
				}

				Public function modif_commentaire ($objet, $conn)
				{
					$id_comm = $objet->get_id_commentaire();
					$nom_comm = $objet->get_nom_commentaire();
					$etat_comm = $objet->get_etat_commentaire();

					print $SQL = "UPDATE commentaire SET nom_commentaire = '$nom_comm', prenom_commentaire  = '$prenom_comm',
					tel_commentaire = '$tel_comm', email_commentaire = '$email_comm', rue_commentaire = '$rue_comm', ville_commentaire = '$ville_comm',
					cp_commentaire = '$cp_comm', mdp_commentaire = '$mdp_comm' etat_utilisateur='$etat_util' WHERE id_commentaire = '$id_comm'";
				 	$Req = $conn -> query ($SQL) or die (' Erreur modification commentaire ');
				}

				Public function affiche_commentaire_total($objet, $conn)
				{

					$id_comm = $objet->get_id_commentaire();
					$nom_comm = $objet->get_nom_commentaire();
					$etat_comm = $objet->get_etat_commentaire();

					print $SQL = " SELECT *  From commentaire WHERE id_commentaire = '$id_comm'";
					$Req = $conn -> query ($SQL) or die (' Erreur affichage commentaire ');
					Return $Res = $Req -> fetch ();

				}

				Public function suppr_commentaire ($objet, $conn)
				{
					$id_comm = $objet->get_id_commentaire();
					$nom_comm = $objet->get_nom_commentaire();
          $etat_comm = $objet->get_etat_commentaire();

					print $SQL = " DELETE FROM commentaire WHERE id_commentaire ='$id_comm'";
					$Req = $conn -> query ($SQL) or die (' Erreur suppression commentaire ');
				}

				Public function suppr_fictive($objet, $conn)
				{
					$id_comm = $objet->get_id_commentaire();
					$nom_comm = $objet->get_nom_commentaire();
          $etat_comm = $objet->get_etat_commentaire();

					print $SQL = "UPDATE commentaire SET etat_commentaire=1";
				 	$Req = $conn -> query ($SQL) or die (' Erreur suppression commentaire ');
				}

				Public function rajout_suppr_fictive($objet, $conn)
				{
					$id_comm = $objet->get_id_commentaire();
					$nom_comm = $objet->get_nom_commentaire();
          $etat_comm = $objet->get_etat_commentaire();

					print $SQL = "UPDATE commentaire SET etat_commentaire='0'";
				 	$Req = $conn -> query ($SQL) or die (' Erreur rajout commentaire ');
				}
}
	/* ---------------------- */
	/* FIN class commentaire */
	/* ---------------------- */

?>
