<?php
$title = "Les éléphants | Accueil";
?>
<?php include 'header.php' ?>
<?php include 'entete.php' ?>
<?php include 'accueil-apropos.php' ?>

<div class="row">

    <?php include 'accueil-actualite.php' ?>

    <hr>
    <?php include 'accueil-historique.php' ?>

</div>

<?php
include 'accueil-carousel.php'
?>

<!-- Bouton retour en haut -->
<button onclick="scrollToTop()" id="backToTopBtn" title="Retour en haut">↑</button>
<?php include 'footer.php' ?>

