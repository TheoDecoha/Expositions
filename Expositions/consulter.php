<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="iso-8859-1"> 
	<title>Les expositions a Angers en 2013</title>
	<link rel="stylesheet"  href="styles/base.css" >
	<link rel="stylesheet"  href="styles/modele04.css">
</head>
<body>
<div id="global">
	<header>
		<h1>
			<img src="picto/Tooweb.jpg" />
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
	<h2>Nos lieux d'expositions</h2>
	
	<?php
    //Inclusion du fichier de connexion
    include ('connexion_base.php');
    //Connexion au serveur et à la base de données
    $id_connexion = connexion();
    //Si la connexion est ok
    if ($id_connexion->connect_errno==0)
	{
      //Requête pour récupérer les expositions
      $requete = 'select * from t_lieux';
      //Récupération du résultat de la requête dans $resultat
      $resultat = $id_connexion->query($requete);
	  $nbre = $resultat->num_rows;
	  echo '<h3>Nombre de lieux d\'expositions : '.$nbre.'</h3><br>';
      
	        //On traite chaque tuple de $resultat
	  echo '<table id="lieux">';
	  echo '<thead><tr><th>Num&eacutero</th><th>Nom</th><th>Code ville</th><th>Jour de fermeture</th></tr></thead>';
       while ($ligne=$resultat->fetch_object()) 
	  {
		echo '<tr><td>'.$ligne->num_lieu.'</td><td>'.$ligne->nom_lieu.'</td><td>'.$ligne->code_ville.'</td><td>'.$ligne->jour_fermeture.'</tr>';
	  }
	  echo '</table>';
	  }
	
  ?>
	</div><!-- #contenu -->
	<footer>
		Retrouvez toutes les actualit&eacutes sur les expositions sur notre site :
		<a href="http://www.angers.fr/vie-pratique/culture/index.html">www.angers.fr</a>	
	</footer>
</div><!-- #global -->
</body>
</html>
