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
		<h3>Modification d'un lieu d'exposition</h3>
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
				$ville=$ligne->code_ville;
				$jdf=$ligne->jour_fermeture;
				echo '
				<form method="POST" action="action_modifier.php">
				<fieldset>
				<legend>Effectuez vos modifications</legend><br>
				Nom du lieu :<input type="text" name="nom" required autofocus style="margin-left: 45px;" value="'.$nom.'"><br><br>
				Adresse :<input type="text" name="addr" style="margin-left: 69px;" required value="'.$addr.'"><br><br>
				Ville :
				<input type="radio" name="ville" value=1 ';
				if($ville == 1) echo 'checked';
				echo ' style="margin-left: 89px;">Angers
				<input type="radio" name="ville" value=2 ';
				if($ville == 2) echo 'checked';
				echo '>Cholet
				<input type="radio" name="ville" value=3 ';
				if($ville == 3) echo 'checked';
				echo '>Saumur
				<br><br>
				Jour de fermeture :
				<select name="jdf">
				<option';
				if($jdf == "Lundi") echo ' selected';
				echo'>Lundi</option>
				<option';
				if($jdf == "Mardi") echo ' selected';
				echo'>Mardi</option>
				<option';
				if($jdf == "Mercredi") echo ' selected';
				echo'>Mercredi</option>
				<option';
				if($jdf == "Jeudi") echo ' selected';
				echo'>Jeudi</option>
				<option';
				if($jdf == "Vendredi") echo ' selected';
				echo'>Vendredi</option>
				<option';
				if($jdf == "Samedi") echo ' selected';
				echo'>Samedi</option>
				<option';
				if($jdf == "Dimanche") echo ' selected';
				echo'>Dimanche</option>
				</select>
				<br>
				</fieldset>
				<br>
				<input type="text" value='.$num.' name="num" hidden>
				<input type="submit" value="Modifier">
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
