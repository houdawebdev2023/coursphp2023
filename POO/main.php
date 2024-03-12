<?php
// $date1= new DateTime();
// var_dump($date1);
require "Voiture.php"; 

$voiture = new Voiture();
// var_dump($maVoiture);

echo "Ma voiture est de couleur ". $voiture->obtenirCouleur(). "<br> Le poids est de ". $voiture->obtenirPoids()."Kg<br>et le prix est de ". $voiture->obtenirPrix()."euros<br>";

$voiture->changerCouleur("Rose");
$voiture->changerPoids(2400.0);
$voiture->changerPrix(9999);

echo "<br>J'ai changer la couleur de ma voiture qui est maintenant ".$voiture->obtenirCouleur()."<br>Le poids est maintenant de ".$voiture->obtenirPoids()."kg<br>Et le prix vaut maintenant ".$voiture->obtenirPrix()." euros";

