<!DOCTYPE html>

<html lang="fr">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
	<title>
		Maintenance de la table t_lieux
	</title>
	<!-- La feuille de styles "base.css" doit Ãªtre appelÃ©e en premier. -->
	<link rel="stylesheet" type="text/css" href="styles/base.css" media="all" />
	<link rel="stylesheet" type="text/css" href="styles/modele04.css" media="screen" />
</head>

<body>

<div id="global">

	<header>
		<h1>
			<img alt="" src="picto/tooweb.jpg" />
			Angers et ses expositions
		</h1>
		<p class="sous-titre">
			<strong>Maintenance de la table t_lieux,</strong>
			Avec authentification
		</p>
	</header><!-- #entete -->

	<nav>
		<ul>
			<li><a href="index.php">Connexion</a></li>
			<li><a href="indexajouter.php">Ajouter</a></li>
			<li><a href="indexmodifier.php">Modifier</a></li>
			<li><a href="indexsupprimer.php">Supprimer</a></li>
			<li><a href="consulter.php">Consulter</a></li>
		</ul>
	</nav>

	<div id="contenu">
		<h3>Suppression d'un lieu d'exposition</h3>
		<?php
		session_start();
		if (isset($_SESSION['validuser'])) 
		{
			$num=$_GET["numero"];
			include("connexion_base.php");
			$id_connexion = connexion();
			if ($id_connexion->connect_errno ==0) 
			{
				$requete = "SELECT nom_lieu, adresse_lieu, code_ville, jour_fermeture FROM t_lieux WHERE num_lieu=$num";
				$resultat = $id_connexion->query($requete);
				$ligne=$resultat->fetch_object();
				$nom=$ligne->nom_lieu;
				$addr=$ligne->adresse_lieu;
				if($ligne->code_ville == 1) $ville="Angers";
				if($ligne->code_ville == 2) $ville="Cholet";
				if($ligne->code_ville == 3) $ville="Saumur";
				$jdf=$ligne->jour_fermeture;
				echo '
				<form method="POST" action="action_supprimer.php">
				<fieldset>
				<legend>Caract&eacuteristiques du lieu &agrave supprimer</legend><br>
				Nom du lieu : '.$nom.' <br><br>
				Adresse : '.$addr.'<br><br>
				Ville :	'.$ville.'<br><br>
				Jour de fermeture :	'.$jdf.'<br>
				</fieldset>
				<br>
				<input type="text" value='.$num.' name="num" hidden>
				Si vous voulez vraiment supprimer ce lieu,
				<br>Cliquez sur le bouton supprimer<br>
				<input type="submit" value="Supprimer"><br><br>
				<a href="indexsupprimer.php">Retour &agrave la liste des lieux</a>
				</form>';
			}
		}
		?>
</p>
	</div><!-- #contenu -->
	<footer>
		Retrouver toutes les actualit&eacutes sur les expositions sur notre site : <a target="_blank" href="http://www.angers.fr">www.angers.fr</a>
	</footer>

</div><!-- #global -->

</body>
</html>

