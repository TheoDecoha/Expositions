<?php
$num_lieu=$_POST["num"];
include("connexion_base.php");
$id_connexion=connexion();
if ($id_connexion->connect_errno ==0) 
	{ 
	$requete = "DELETE FROM t_lieux WHERE num_lieu=$num_lieu;";
	$resultat = $id_connexion->query($requete);
	header("Location: indexsupprimer.php");
	}
?>
