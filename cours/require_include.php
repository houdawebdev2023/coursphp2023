<?php

//exo1 pdf5:

include "fonctionsReq.php";
// if (ouiOuNon("Voulez vous faire une addition ? ")) {
//     $nb1 = (float)readline("entrez un premier nombre : ");
//     $nb2 = (float)readline("entrez un deuxième nombre : ");
//     echo addition($nb1, $nb2);
// } else {
//     echo "Vous avez refusé de faire une addition.\nAurevoir !!!";
// }

//exo 2 pdf5:


//exo3 pdf5:


//exo4 pdf5:
if(ouiOuNon("voulez-vous faire une addition?")){
    $nb1 = (float)readline("entrez un premier nombre : ");
    $nb2 = (float)readline("entrez un deuxième nombre : ");
    if (is_numeric($nb1, $nb2));
        echo addition($nb1, $nb2);

}else{
    echo "vous avez refusé de faire une addition. \n Au revoir !!!";
}




?>