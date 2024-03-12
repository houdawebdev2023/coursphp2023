<?php
exo1:

$user1="Houda";
$user2= "Hawa";
$user3="Julien";
$user4="Agnès";
$user5="Diane";
$user6="Inna";
$user7="Rose";
$user8="Clovis";
$user9="Hedi";
$user10="Amine";

echo $user1 . "\n"; 
echo $user2 . "\n"; 
echo $user3 . "\n"; 
echo $user4 . "\n"; 
echo $user5 . "\n"; 
echo $user6 . "\n"; 
echo $user7 . "\n"; 
echo $user8 . "\n"; 
echo $user9 . "\n"; 
echo $user10 . "\n";

// exo2:

$utilisateurs = ["Julien", "Mathieu", "Marc", "Jean", "Paul", "Elie", "Phillipe", "Jerome", "Clovis", "Tertulien"];
//echo implode(", ", $utilisateurs);
for ($i = 0; $i < sizeof($utilisateurs); $i++) {
    if ($i == 0) {
        echo $utilisateurs[$i];
    } else {
        echo ", " . $utilisateurs[$i];
    }
}

exo3:


$nombre =readline("Entrez un nombre : ");


if (is_numeric($nombre)) {
    
    if ($nombre % 2 == 0) {
        echo "Le nombre $nombre est pair.";
    } else {
        echo "Le nombre $nombre est impair.";
    }
} else {
    echo "Vous n'avez pas introduit un nombre.";
}

exo4:

$mot =readline("Entrez un mot (entrez \"quitter\" pour arrêter) : ");
while ($mot !== "quitter") {
    echo  $mot . "\n";
    $mot = readline("Entrez un mot (entrez \"quitter\" pour arrêter) : ");
}

$mot = readline("Entrez un mot (entrez \"quitter\" pour arrêter) : ");
$mots = [];
while ($mot !== "quitter") {
    $mots[] = $mot;
    $mot = readline("Entrez un nouveau mot ou entrez \"quitter\" pour arrêter) : ");
}
for ($i = 0; $i < sizeof($mots); $i++) {
    echo $mots[$i] . "\n";
}

exo5:

$mot = readline("Entrez un mot (entrez \"fin\" pour arrêter) : ");
$mots = [];
while ($mot !== "fin") {
    $mots[] = $mot;
    $mot = readline("Entrez un nouveau mot ou entrez \"fin\" pour arrêter) : ");
}
echo "Vous avez introduis " . sizeof($mots) . " mots ou nombres";


// exo6:

$montant = readline("Entrez un montant : ");
if ($montant < 100) {
    echo "Vous n'avez pas assez d'argent.\n";
} elseif ($montant > 200) {
    echo "Vous avez dépassé la limite.\n";
} else {
    echo "Vous avez bien introduit le montant " . $montant . " entre 100 et 200 euros.\n";
}


exo7:

$vari = readline("Veuillez introduire un nombre (1 : Bonjour, 2 : Aurevoir, 3 : Bien joué, 4 : Bonne nuit, 5 : À tantôt, 6 : Arrête un peu, 7 : 10 + 10 = 20) : ");
switch ($vari) {
    case 1:
        echo "Bonjour";
        break;
    case 2:
        echo "Aurevoir";
        break;
    case 3:
        echo "Bien joué";
        break;
    case 4:
        echo "Bonne nuit";
        break;
    case 5:
        echo "À tantôt";
        break;
    case 6:
        echo "Arrête un peu";
        break;
    case 7:
        echo "10 + 10 = 20";
        break;
    default:
        echo "La terre est carrée";
        break;
}

exo8:

$users =
    [
        [
            'firstname' => "Julia",
            'notes' => [50, 90, 87, 100, 91],
            'sexe' => "F"
        ],
        [
            'firstname' => "Julien",
            'notes' => [66, 30, 90, 77, 50],
            'sexe' => "M"
        ],
        [
            'firstname' => "Ana",
            'notes' => [55, 99, 76, 88, 45],
            'sexe' => "F"
        ],
        [
            'firstname' => "Vito",
            'notes' => [90, 90, 99, 100, 100],
            'sexe' => "M"
        ],
        [
            'firstname' => "Pierre",
            'notes' => [88, 95, 85, 95, 90],
            'sexe' => "M"
        ],

    ];
foreach ($users as $user) {
    if ($user["sexe"] == "M") {
        echo $user["firstname"] . " you are a " . $user["sexe"] . "\n" . str_repeat("-", 20) . "\n";
    }
}

// exo9:

foreach ($users as $user) {
    if ($user["sexe"] == "F") {
        echo $user["firstname"]  . ", note max => " . max($user["notes"]) . "/100 \n" . str_repeat("-", 26) . "\n";
    }
}

//exo10
foreach ($users as $user) {
    echo "Prénom : " . $user["firstname"] . "\n";
    echo "Tableau de notes inversé : \n[";
    foreach (array_reverse($user["notes"]) as $note) {
        echo $note . "/100 ";
    }
    echo "]\n";
}

exo11:

foreach ($users as $user) {
    echo $user["firstname"]  . ", moyenne => " . (array_sum($user["notes"]) / sizeof($user["notes"])) . "/100 \n";
}

exo12:

foreach ($users as $user) {
    echo "Prénom : " . $user["firstname"] . "\n";
    echo "Tableau de notes : [";
    foreach ($user["notes"] as $note) {
        echo $note . "/100 ";
    }
    echo "]\n";
    echo "Genre : " . $user["sexe"] . "\n \n";
}

// exo13:



































?>