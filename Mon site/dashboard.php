<?php
// Attention on reprend la session ouverte
session_start();
$title = "Dashboard";
$nav = "dashboard";
$_SESSION['connected'] = true;
require "header.php";
require "functions/authentification.php";
if(!$_SESSION['connected']){
    //redirection
    header('Location: /coursphp/login.php');
}

?>
<h1 align="center">Bienvenue <?php echo $_SESSION['pseudo'];?> dans votre Dashboard</h1>
<p>Voici le contenu de dashboard</p>
<?php
require "footer.php";
?>