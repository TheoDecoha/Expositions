<?php
function connexion() 
{
$hote = 'localhost';
$utilisateur = 'root';
$mdp ='';
$base = 'bd_expositions';
// Connexion à la base de données
  @$id_connexion = new mysqli($hote, $utilisateur, $mdp, $base);
   if ($id_connexion->connect_errno==0)
  {
  //Connexion réussie
  return $id_connexion;
  }
  else 
  { 
  // échec de la connexion
  echo 'Connexion impossible à cette base de données';
  return $id_connexion; 
  }
}
?>
