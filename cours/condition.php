<?php
// $note = 16;
// if ($note > 10) {
//     echo "Bien joué vous avez réussi !";
// } else {
//     echo "C’est dommage, vous feriez mieux la prochaine fois";
// }

// //IF imbriqué
// if ($note >= 10) {
//     if ($note == 10){
//         echo "Vous avez tout juste la moyenne";
//     }else{
//         echo "Bien joué vous avez réussi !";
//     }
// }else{
//     echo "C’est dommage, vous feriez mieux la prochaine fois";
// }

// $age =10;

// $question=readline('Veuillez introduire votre âge');


// if($age>18){
//     echo"Vous êtes un adulte et vous avez ". $age. " ans.";


// } else if($age==18){
//     echo "Vous avez ". $age. " ans, bienvenue dans l'âge adulte.";

// }else{
//     echo "vous avez ". $age. " ans et n'êtes pas encore un adulte";
// }


// $gender= "F";

// $gender=readline('Entrez votre genre: (F, M ou X)');

// if($gender=="F"){
//     echo "Vous êtes une femme.";

// } else if($gender=="M") {
//     echo "Vous êtes un homme.";

// }else if($gender== "X"){
//     echo "Vous êtes un  autre.";
// }else {
//     echo "Vous n'êtes pas un humain";
// }


// $action = (int)readline("Entrez une action : ('1 : Attaquer, 2 : Defendre, 3 : Se soigner, 4 : Fuir, 5 : Ne rien faire) : ");
// if ($action === 1){
//     echo "Vous attaquez";
// }else if($action === 2){
//     echo "Vous défendez";
// }elseif($action === 3){
//     echo "Vous vous soignez";
// }elseif($action === 4){
//     echo "Vous fuyez";
// }elseif($action === 5){
//     echo "Vous ne faites rien";
// }else{
//     echo "Relancez le programme et Entrez une action 1,2,3,4 ou 5";
// }

$jour = (int)readline("Entrez un jour  (1 : Lundi, 2 : Mardi, 3 : Mercredi, 4 : Jeudi, 5 : Vendredi, 6 : Samedi, 7 : Dimanche): ");

switch($jour){
    case 1:
        echo "Nous sommes Lundi.";
        break;
    case 2:
        echo "Nous sommes Mardi.";
        break;
    case 3:
        echo "Nous sommes Mercredsi.";
        break;
    case 4:
        echo "Nous sommes Jeudi.";
        break;
    case 5:
        echo "Nous sommes Vendredi.";
        break;
    case 6:
        echo "Nous sommes Samedi.";
        break;
    case 7:
        echo "Nous sommes Dimanche.";
        break;
    default:
    echo "Relancez le programme et Entrez un jour 1,2,3,4,5,6 ou 7";
}





?>