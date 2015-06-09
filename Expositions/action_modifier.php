<?php
$num_lieu=$_POST["num"];
$nom_lieu='"'.$_POST["nom"].'"';
$adresse_lieu='"'.$_POST["addr"].'"';
$code_ville=$_POST["ville"];
$jour_fermeture='"'.$_POST["jdf"].'"';
include("connexion_base.php");
$id_connexion=connexion();
if ($id_connexion->connect_errno ==0) 
	{ 
	$requete = "UPDATE t_lieux SET nom_lieu=$nom_lieu, adresse_lieu=$adresse_lieu, code_ville=$code_ville, jour_fermeture=$jour_fermeture WHERE num_lieu=$num_lieu;";
	$resultat = $id_connexion->query($requete);
	header("Location: indexmodifier.php");
	}
?>
