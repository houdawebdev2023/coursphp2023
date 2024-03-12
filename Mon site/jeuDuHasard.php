<?php
$title="jeu du Hasard";
$nav="jeuDuHasard";
$numeroGagnant = rand(0, 10);
    require "header.php";
    ?>
   <h1>Jeu du Hasard </h1>
   <?php
if (isset($_GET['nombre'])) :
    if ($_GET['nombre'] <= 10 && $_GET['nombre'] >= 0) :
        if ($_GET['nombre'] > $numeroGagnant) : ?>
            Votre nombre est trop grand !
        <?php elseif ($_GET['nombre'] < $numeroGagnant) : ?>
            Votre nombre est trop petit !
        <?php else : ?>
            Vous avez bien trouver le bon nombre <?php echo $numeroGagnant; ?>
        <?php endif;
    else : ?>
        Erreur, introduisez un nombre entre 0 et 10 compris
<?php endif;
endif; ?>

<form action="/coursphp/jeuDuHasard.php" method='GET'>
    <input type="number" name="nombre" placeholder="Entre 0 et 10">
    <button class="btn btn-success" type="submit">Deviner</button>
</form>
<?php
        require "footer.php";
        ?>