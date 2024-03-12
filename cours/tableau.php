<?php
//  $animal = [chien,chat,éléphant,tortue];
//  $element1 = $animal[1];
//  $element2 = $animal[3];
//  echo "le premier élément est : " . $elelment1 . "le deuxième élélment est: " . $elelment2;



// $tab2dim=["James", "Bond", "M", "7/7/2007", ["Lundi", "Mardi", "Mercredi", "Jeudi", "Vendredi", "Samedi", "Dimanche"], "London"];

// echo "Nom: " . $tab2dim[1] . "<br>Prénom: ". $tab2dim[0] . "<br>Sexe: ". $tab2dim[2] . "<br>date de naissance: " . $tab2dim[3] . "<br>ville: " . $tab2dim[5] . "<br>
// hier: " . $tab2dim[4][2];  

// exo1: pdf2 page3
$users = [
    'firstname' => 'Lara',
    'lastname' => 'Croft',
    'gender' => 'F',
    'dateOfBirth' => "23/10/1995",
    'notes' => [18,13,5,10,9],
    'city'=> 'London'
];

// $users['lastname']="Elric";
// $users['notes'][4]=17;

// echo "Nom: " . $users['lastname'] . "<br> Prénom: " . $users['firstname'] . "<br> cinquième note: " . $users['notes'][4];

$users2 = [
    'firstname' => 'Antonio',
    'lastname' => 'Banderas',
    'gender' => 'M',
    'dateOfBirth' => "30/10/1958",
    'notes' => [18,13,5,10,9],
    'city'=> 'London',
    'jourDeSemaine'=> ["lundi", "mardi", "mercredi", "jeudi", "vendredi", "Samedi", "Dimanche"],
];

$moy = ($users2['note'][0] + $users2['note'][1] + $users2['note'][2] + $users2['note'][3] + $users2['note'][4])/5;
echo $users2['lastname'] . "<br>" . $users2['firstname'] . "<br>" . $moy . "<br>" . $users2["jourDeSemaine"][4];

// exo3pdf2

$users2['joursDeSemaine'][7]="néant";



?>