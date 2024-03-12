<?php
    // $mot=(int)readline("Entrez un nombre (entrez 0 pour arrêter) : ");
    // while($nombre !== 0){
    //     echo "Voici votre nombre : ". $nombre . "\n";
    //     $nombre=(int)readline("Entrez un nombre (entrez 0 pour arrêter) : ");
    // }


    // $nombre=(int)readline("Entrez un nombre entre 0 et 10 pour gagner un lot : ");
    // $numeroGagnant = rand(0,10);
    // while($nombre !== $numeroGagnant){
    //     echo "Mauvais numéro, vous n'avez pas gagné !". "\n";
    //     $nombre=(int)readline("Retentez votre chance, entrez un nombre à nouveau : "); 
    // }
    // echo "Bravo !!! \nVous avez enfin trouvé le numéro gagnant ! \nC'était le numéro ". $numeroGagnant;

    // $mot=readline("Entrez un mot (entrez \"stop\" pour arrêter) : ");
    // while($mot !== 0){
    //     echo "Voici votre mot$mot : ". $mot . "\n";
    //     $mot=readline("Entrez un mot$mot (entrez \"stop\" pour arrêter) : ");
    // }

    // boucle Pour(For)
    // for ($i = 0; $i < 10; $i++) {
    //     echo $i . "<br>";
    // }

    // $users = [
    //     'firstname' => 'Lara',
    //     'lastname' => 'Croft',
    //     'gender' => 'F',
    //     'dateOfBirth' => "23/10/1995",
    //     'city'=> 'London'
    // ];



    //exo1 pdf3 boucles for
// $jours = ["Lundi", "Mardi", "Mercredi", "Jeudi", "Vendredi", "Samedi", "Dimanche"];
// for ($i = 0; $i < sizeof($jours); $i++) {
//     echo $jours[$i] . " ";
// }

// //avec boucle while
// $jours = ["Lundi", "Mardi", "Mercredi", "Jeudi", "Vendredi", "Samedi", "Dimanche"];
// $i = 0;
// while ($i < sizeof($jours)) {
//     echo $jours[$i] . " ";
//     $i++;
// }

    //exo2 pdf3
    // $mois = ["Janvier", "Février", "Mars", "Avril", "Mai", "Juin", "Juillet", "Août", "Septembre", "Octobre", "Novembre", "Décembre"];

    // for($i=1;$i<sizeof($mois); $i+=2) {
    //     echo $mois[$i]. " ";
    // }

    //exo3 pdf3
    // $nombre = [11,18,99,17,65220,6485,78,97,48,2,112];
    
    // for($i=0; $i<sizeof($nombre); $i++){

    //     if($nombre[$i] %2===0)
        
    //         echo $nombre[$i]. "est pair <br> ";   
        
    // }

    //exo1 FOREACH pdf3:
    // $mois = ["Janvier", "Février", "Mars", "Avril", "Mai", "Juin", "Juillet", "Août", "Septembre", "Octobre", "Novembre", "Décembre"];

    // foreach ($mois as $element){
    //     if ($element=="Décembre"){
    //         echo $element." ";
    //     }else
    //     echo $element. "_";
    // }
    
    
    //exo2 FOREACH pdf3:

// $notes = [18, 13, 5, 9, 10];
// foreach ($notes as $note) {
//     if ($note >= 10) {
//         if ($note == 10) {
//             echo "Tu as eu tout pile la moitié " . $note . "/20 <br>";
//         } else {
//             echo "Tu as réussi avec la note de " . $note . "/20 <br>";
//         }
//     } else {
//         echo "Tu as raté avec la note de " . $note . "/20 <br>";
//     }
// }

//meilleur version parcequ'on ne se repete pas avec les notes sur 20 
// $notes = [18, 13, 5, 9, 10];
// foreach ($notes as $note) {
//     if ($note >= 10) {
//         if ($note == 10) {
//             echo "Tu as eu tout pile la moitié ";
//         } else {
//             echo "Tu as réussi avec la note de ";
//         }
//     } else {
//         echo "Tu as raté avec la note de ";
//     }
//     echo $note . "/20 <br>";
// }

    // exo1 difficil TGV

$mot = readline("Entrez un mot (entrez \"stop\" pour arrêter) : ");
while ($mot !== "stop") {
    echo "Voici votre mot : " . $mot . "\n";
    $mot = readline("Entrez un nouveau mot ou entrez \"stop\" pour arrêter: ");
}
    

    

    


    










?>