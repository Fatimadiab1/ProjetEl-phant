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
}

.image-container img {
    width: 100%;
    border-radius: 15px;
}

.text-container {
    background-color: #FFFFFF; 
    padding: 20px;
    color: #FF3E00; 
    font-size: 1rem;
    line-height: 1.6;
    text-align: left;
}

</style>


<div class="about-container">
    <h1 class="title">À PROPOS</h1>
    <div class="image-container">
        <img src="img/ci1.jpg" alt="Africa Cup Celebration">
    </div>
    <div class="text-container">
        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry...</p>
        <p>It is a long established fact that a reader will be distracted by the readable content...</p>
    </div>
</div>



<?php include 'footer.php' ?>