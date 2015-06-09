<!DOCTYPE html>

<html lang="fr">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
	<title>
		Maintenance de la table t_lieux
	</title>
	<!-- La feuille de styles "base.css" doit être appelée en premier. -->
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
		<?php
		session_start();
		if (isset($_SESSION['validuser']))
		{
			echo '
			<h3>Ajouter un nouveau lieu d\'expositions</h3><br>
			<form method="POST" action="action_ajouter.php">
			<fieldset>
			<legend>La saisie de tous les champs est obligatoire</legend><br>
			Nom du lieu :<input type="text" name="nom" required autofocus style="margin-left: 45px;"><br><br>
			Adresse :<input type="text" name="addr" style="margin-left: 70px;" required><br><br>
			Ville :
			<input type="radio" name="ville" value=1 checked style="margin-left: 89px;">Angers
			<input type="radio" name="ville" value=2>Cholet
			<input type="radio" name="ville" value=3>Saumur
			<br><br>
			Jour de fermeture :
			<select name="jdf">
			<option>Lundi</option>
			<option>Mardi</option>
			<option>Mercredi</option>
			<option>Jeudi</option>
			<option>Vendredi</option>
			<option>Samedi</option>
			<option>Dimanche</option>
			</select>
			<br>
			</fieldset>
			<br>
			<input type="submit" value="Ajouter">
			<input type="reset" value="Annuler">
			</form>';
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
