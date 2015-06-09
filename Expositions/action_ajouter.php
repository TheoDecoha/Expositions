<?php
$nom_lieu='"'.$_POST["nom"].'"';
$adresse_lieu='"'.$_POST["addr"].'"';
$code_ville=$_POST["ville"];
$jour_fermeture='"'.$_POST["jdf"].'"';
include("connexion_base.php");
$id_connexion=connexion();
if ($id_connexion->connect_errno ==0) 
	{ 
	$requete = "INSERT INTO t_lieux VALUES('', $nom_lieu, $adresse_lieu, $code_ville, $jour_fermeture);";
	$resultat = $id_connexion->query($requete);
	header("Location: indexajouter.php");
	}
?>
