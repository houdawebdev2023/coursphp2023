<?php
// sommeDe3Nombre(12, 1.6, 45);
// echo "<br>";

// $nb1 = 17;
// $nb2 = 64;
// //plus besoin de faire le calcule
// echo $nb1 + $nb2;
// echo "<br>";
// //on appelle juste la fonction somme
// sommeDe2Nombre($nb1, $nb2);
// echo "<br>";

// function sommeDe2Nombre($var1, $var2)
// {
//     echo $var1 + $var2;
// }
// function sommeDe3Nombre($num1, $num2, $num3)
// {
//     echo $num1 + $num2 + $num3;
// }


// $string = "Julien";
// hello($string);


// function hello($prenom)
// {
//     echo "Hello <b>" . $prenom . "</b>";
// }


// function hello()
// {
//     echo "hello wlorld!!!";
// }
// hello();

// exo1 pdf5

// function hello($prenom)
// {  
//     echo "hello <b>" . $prenom . "</b>!!!<br>";
// }

// hello("Julien");
// hello("Robert");
// hello("Sanja");
// hello("Ellen");
// hello("Shams");


// exo2 pdf5

// $tabPrenom = ["Julien", "Robert", "Sanja", "Ellen", "Shams", "Houda", "Luc", "Eva", "Amine"];
// foreach ($tabPrenom as $prenom) {
//     hello($prenom);
// }
// for ($i = 0; $i < sizeof($tabPrenom); $i++) {
//     hello($tabPrenom[$i]);
// }
// $cpt = 0;
// while ($cpt < sizeof($tabPrenom)) {
//     hello($tabPrenom[$cpt]);
//     $cpt++;
// }
// for ($i = 0; $i < 5; $i++) {
//     $prenom = readline("Introduisez un prenom : ");
//     hello($prenom);
// }



// exo3 pdf5:


// function hello2(string $prenom = null): string
// {
//     if ($prenom != null) {
//         return "Hello <b>" . $prenom . "</b> !!!<br>";
//     }
//     return "Hello <b>WORLD</b> !!!<br>";
// }

// version final

// function hello(string $prenom = "World !"): string
// {
//     return "Hello <b>" . $prenom . "</b> !!!<br>";
// }
// echo hello2();
// echo hello("Julien");



//exo 3 pdf5 
$prenom = readline("Entrez votre prénom : ");
echo helloName($prenom);
function helloName(string $name): string
{
    if ($name != null) {
        return "Hello " . $name;
    }
    return "Hello World !!!";
}
//version 2
function hello(string $prenom = null): string
{
    if ($prenom == null) {
        return "Hello World !!!";
    }
    return "Hello " . $prenom . " !!!";
}
$reponse = readline("Entrez votre prénom : ");
echo hello($reponse);

//exo 4 pdf5
function bienvenue(): string
{
    $prenom = readline("Veuillez introduire un prénom : ");
    $nom = readline("Veuillez introduire un nom : ");
    $mail = readline("Veuillez introduire un mail : ");
    $age = (int)readline("Veuillez introduire un age : ");
    return "Bienvenu " . $prenom . " " . $nom . "!!!\n" . "Vous avez " . $age . " ans\n" . "Voici votre email : " . $mail;
}
echo bienvenue();
//version 2
function bienvenue2(string $p, string $n, string $m, int $a): string
{
    return "Bienvenu " . $p . " " . $n . "!!!\n" . "Vous avez " . $a . " ans\n" . "Voici votre email : " . $m;
}
$prenom = readline("Veuillez introduire un prénom : ");
$nom = readline("Veuillez introduire un nom : ");
$mail = readline("Veuillez introduire un mail : ");
$age = (int)readline("Veuillez introduire un age : ");
echo bienvenue2($prenom, $nom, $mail, $age);




// exo5 pdf5:

$age=readline("Veuillez introduire votre âge: ");
echo adulte($age);

function adulte(int $a): string{
    if($a<18){
        return("vous êtes mineur");
    }

        return ("vous êtes majeur");
}



// exo6 pdf5:















?>