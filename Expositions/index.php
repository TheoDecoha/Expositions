<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="iso-8859-1"> 
	<title>Les expositions à Angers en 2013</title>
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
	<h2>Mise à jour et consultatation des lieux d'exposition</h2>
	
	<h4>Possibilités offertes:</h4>
	
	<ul>
	<li>Ajouter de nouveaux lieux d'expositions</li>
	<li>Effectuer des modifications sur les lieux</li>
	<li>Supprimer des lieux d'expositions</li>
	<li>Consulter les lieux d'expositions</li>
	</ul>
	

	
	<?php 
	//Ouvre une session 
	session_start (); 
	//Test si les variables sont définies 
	if (isset($_POST['login']) && isset ($_POST ['mdp'])) 
	{     
	if (($_POST['login'] == 'admin') &&($_POST['mdp'] == 'admin'))     
	{      
	//Création d'une variable de session      
	$_SESSION['validuser'] = $_POST['login'];    
	} 
	} 
	?> 
	 
	<?php  
	if (isset ($_SESSION['validuser']))   
	{    
	//L'utilisateur a une session ouverte    
	echo '<h4 style="color:green;">Accès autorisé à cette application<br/>';    
	echo '<a href="deconnexion.php"> Déconnexion </a><br/>';  
	}   
	else   
	{    
	//L'utilisateur n'a pas de session    
	//Formulaire d'ouverture de session    
	echo '<form  action="index.php" method="post">'; 
	echo '<h4>Vous devez vous identifier pour effectuer une mise à jour de la table t_lieux mais pas pour la consulter !</h4>';	
	echo '<h3>IDENTIFIEZ-VOUS!</h3>'; 
	echo '<fieldset>';    
	echo '<legend>Vous n\'êtes pas identifié</legend>';    
	echo '<table>';    
	echo '<tr><td>Login :</td>';    
	echo '<td><input type="text" name="login" autofocus></td></tr>';    
	echo '<tr><td>Mot de passe :</td>';    
	echo '<td><input type="password" name="mdp"></td></tr>';    
	echo '<tr><td colspan="2">';    
	echo '<input type="submit" value="Se connecter"></td></tr>';    
	echo '</table>';    
	echo '</fieldset>';    
	echo '</form>';  
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
