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
		<h2>Voici la liste de nos lieux d'expositions</h2>
		<?php
		session_start();
		if (isset($_SESSION['validuser'])) 
		{
			include("connexion_base.php");
			$id_connexion = connexion();
			if ($id_connexion->connect_errno ==0) 
			{ 
				$requete = "SELECT num_lieu, nom_lieu, code_ville, jour_fermeture FROM t_lieux";
				$resultat = $id_connexion->query($requete);
				$nbre = $resultat->num_rows;
				echo "<h3>Nombre de lieux d'expositions : $nbre</h3><br>";
				echo '<table><tbody><tr><th>Num&eacutero</th><th>Nom</th><th>Code ville</th><th>Jour de fermeture</th></tr>';
				while ($ligne=$resultat->fetch_object())
				{
					echo '<tr><td>'.$ligne->num_lieu.'</td><td>'.$ligne->nom_lieu.'</td><td>'.$ligne->code_ville.'</td><td>'.$ligne->jour_fermeture.'</td></tr>';
				}
				echo '</tbody></table><br>';
				echo '<a href="ajouter.php">Ajouter un lieu</a>';
			}
		}
		else 
		{
		echo "<h4 style='color:red'>Impossible d'ajouter un lieux d'expositions !<h4>";
		echo "<h4 style='color:red'>Vous n'êtes pas autorisé</h4>";
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
