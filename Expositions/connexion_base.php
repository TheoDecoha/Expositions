<?php
function connexion() 
{
$hote = 'localhost';
$utilisateur = 'root';
$mdp ='';
$base = 'bd_expositions';
// Connexion � la base de donn�es
  @$id_connexion = new mysqli($hote, $utilisateur, $mdp, $base);
   if ($id_connexion->connect_errno==0)
  {
  //Connexion r�ussie
  return $id_connexion;
  }
  else 
  { 
  // �chec de la connexion
  echo 'Connexion impossible � cette base de donn�es';
  return $id_connexion; 
  }
}
?>
