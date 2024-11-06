<?php
$title = "Les éléphants | À propos";
?>

<?php include 'header.php' ?>


<style>
    * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    font-family: Arial, sans-serif;
    background-color: #04340E; 
    color: #333;
}

.about-container {
    max-width: 800px;
    margin: 0 auto;
    text-align: center;
    padding: 20px;
}

.title {
    color: #FF5722; 
    font-size: 2.5rem;
    font-weight: bold;
    margin-bottom: 20px;
}

.image-container {
    width: 100%;
    margin-bottom: 20px;
    height: 900px;
    background-color: #FFFFFF;
    border-top-left-radius: 50px;
    border-top-right-radius: 50px;
}

.image-container img {
    width: 100%;
    border-radius: 25px;
}

.text-container {
    background-color: #FFFFFF; 
    padding: 20px;
    color: #FF3E00; 
    font-size: 1rem;
    line-height: 1.6;
    text-align: left;
    height: 300px;
}

</style>


<div class="about-container">
    <h1 class="title">À PROPOS</h1>
    <div class="image-container">
        <img src="img/ci22.png" alt="Africa Cup Celebration">
        <div class="text-container">
            <p>L'équipe de Côte d'Ivoire de football est la sélection de joueurs ivoiriens
            représentant le pays lors des compétitions internationales de football masculin,
            sous l'égide de la Fédération ivoirienne de football (FIF).
            La Côte d'Ivoire a remporté à trois reprises la Coupe d'Afrique des nations (CAN), 
            en 1992, 2015 et en 2024. Elle compte en 2019 23 qualifications pour
            la phase finale de la compétition continentale (seule l'Égypte a fait mieux) et 
            huit podiums. « Les Éléphants » est le surnom de l'équipe nationale2. Ils ont 
            participé par ailleurs à trois phases finales de la Coupe du monde, en 2006, 
            2010 et 2014, sans jamais franchir le premier tour.</p>

            <p>La Côte d'Ivoire a remporté à trois reprises la Coupe d'Afrique des nations (CAN),
             en 1992, 2015 et en 2024. Elle compte en 2019 23 qualifications pour la phase finale
             de la compétition continentale (seule l'Égypte a fait mieux) et huit podiums. « Les Éléphants » est le surnom
             de l'équipe nationale2. Ils ont participé par ailleurs à trois phases finales de la Coupe du monde,
             en 2006, 2010 et 2014, sans jamais franchir le premier tour.</p>
        </div>
    </div>
    
</div>



<?php include 'footer.php' ?>