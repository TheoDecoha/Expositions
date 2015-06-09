<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="iso-8859-1"> 
	<title>Déconnexion</title>
	<link rel="stylesheet"  href="styles/base.css" >
	<link rel="stylesheet"  href="styles/modele04.css">
</head>
<body>
<div id="global">
	<header>
		<h1>
			<img src="picto/Tooweb.jpg">
			Angers et ses expositions
		</h1>
		<p class="sous-titre">
			<strong>Maintenance de la table t_lieux avec authentification</strong>	
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
	</nav><!-- #navigation -->
	<div id="contenu">
	<?php 
	session_start (); 
	unset ($_SESSION['validuser']); 
	session_destroy(); 
	?>  
	<h3>Session terminée</h3> 
	<h4 style="color:green;">Déconnexion  réussie</h4> 
	<a href="index.php"> Retour page pour vous identifier !</a>
	</div><!-- #contenu -->
	<footer>
		Retrouvez toutes les actualit&eacutes sur les expositions sur notre site :
		<a href="http://www.angers.fr/vie-pratique/culture/index.html">www.angers.fr</a>	
	</footer>
</div><!-- #global -->
</body>
</html>
