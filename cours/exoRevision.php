<?php
//exo1:
// $user1="Julien";
// $user2="Houda";
// $user3="Cherifa";
// $user4="Khalid";
// $user5="Hiba";
// $user6="Alaa";
// $user7="Hamza";
// $user8="Aya";
// $user9="Hawa";
// $user10="Agnes";

// echo $user1 . "\n";
// echo $user2 . "\n";
// echo $user3 . "\n";
// echo $user4 . "\n";
// echo $user5 . "\n";
// echo $user6 . "\n";
// echo $user7 . "\n";
// echo $user8 . "\n";
// echo $user9 . "\n";
// echo $user10 . "\n";


// exo2:
// $utilisateurs=["Julien","Houda","Hiba","Cherifa","Khalid","Alaa","Aya","Hamza","Hawa","Agnes"];

// for($i=0; $i<sizeof ($utilisateurs); $i++){

//     if($i==0){
//         echo $utilisateurs[$i];
//     }else{
//         echo ",".$utilisateurs[$i];
//     }
// }

// exo3:
// $nombre=readline("veuillez introduire un nombre: ");

// if(is_numeric ($nombre)){
//     if($nombre %2==0){
//     echo "Le nombre introduit est paire";
//     }else
//         echo "Le nombre introduit est impaire" ;  
// }else{
//     echo "Vous n'avez pas introduit un nombre";
// }


// exo4:

$quitter=readline("ecrivez le \"quitter\" pour arrêter");
$mot=[];
while($quitter!="quitter"){
    $quitter =$mot;
    $quitter=readline("ecrivez le \"quitter\" pour arrêter");

}



















?>