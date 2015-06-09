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
		<h2>Voici la liste des lieux d'expositions que vous pouvez modifier</h2>
		<?php
		session_start();
		if (isset($_SESSION['validuser'])) 
		{
			include("connexion_base.php");
			$id_connexion = connexion();
			if ($id_connexion->connect_errno ==0) 
			{
				$requete = 'SELECT * FROM t_lieux';
				$resultat = $id_connexion->query($requete);
				$nbre = $resultat->num_rows;
				while ($ligne = $resultat->fetch_object())
				{
					$numero = $ligne->num_lieu;
					echo $numero.' - <a href="modifier.php?numero='.$numero.'">'.$ligne->nom_lieu.'</a><br><br>';
				}
			}
		}
		else 
		{
		echo "<h4 style='color:red'>Impossible de modifier un lieux d'expositions !<h4>";
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
