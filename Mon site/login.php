<?php
// Attention on reprend la session ouverte
$title = "Login";
$nav = "login";
require "header.php";


$erreur = null;
if (!empty($_POST['pseudo']) || !empty($_POST['password'])) :
    if ($_POST['pseudo'] === "Julien" && $_POST['password'] === "12345") :
        session_start();
        $_SESSION['pseudo']=$_POST['pseudo'];
        $_SESSION['connected'] = true;
        header('Location: /coursphp/dashboard.php');
        
    else :
        $erreur = "Identifiants incorrects !";
    endif;
endif;

if ($erreur) : ?>
    <div class="alert alert-danger">
        <?php echo $erreur ?>
    </div>
<?php endif;
?>



<div class="m-5">
    <h1>Login</h1>

    <form action="/coursphp/login.php" method="POST">
        <input type="text" name="pseudo" placeholder="Votre Login">
        <br><br>
        <input type="password" name="password" placeholder="Votre mot de passe">
        <br><br>
        <button class="btn btn-secondary" type="submit">Se connecter</button>
    </form>
</div>

<?php
require "footer.php";
?>