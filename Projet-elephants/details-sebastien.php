<?php
$title = "Les éléphants | Sébastien HALLER";
?>
<?php include 'header.php' ?>


<!-- background en dessous de la nav -->
<div class="background-player">
</div>


<!-- Titre de la position des joueurs  -->
<div class="position-player">
    <h1 class="titre-position">ATTAQUANT</h1>
</div>


<!-- Premiere section  -->
<div class="firstsection-player">

    <div class="picture-player">
        <img class="pic" src="img/nouveau/haller.jpg" alt="">
    </div>

    <div class="info-player">
        <h2 class="name">Sébastien <br>HALLER</h2>
        <br>
        <p class="description">Sébastien Haller, né le 22 juin 1994 à Ris-Oranais (France), <br>
                               est un footballeur international ivoirien qui joue au poste <br>
                               d' attaquant au CD Leganés en prêt du Borussia Dortmund.</p>

        <br>
        <br>
        <p class="description">Le 11 février 2024, il inscrit le but victorieux <br>
        pour la Côte d’Ivoire dans les dix dernières minutes de la rencontre<br>
        lors de la finale de la Coupe d’Afrique des Nations 2023 face au Nigéria.
        </p>


    </div>

</div>

<!-- Deuxieme section -->
<div class="secondsection-player">

    <div class="palmares">
        <h3 class="titre-palmares">MATCHES AVEC <br> LA COTE D'IVOIRE</h3>
        <p class="nbr">14</p>
        <p class="saison">SAISON 2024/2025 <span>04</span></p>
    </div>

    <div class="palmares">
        <h3 class="titre-palmares">BUTS AVEC LA <br>COTE D'IVOIRE</h3>
        <p class="nbr">06</p>
        <p class="saison">SAISON 2024/2025<span>02</span></p>
    </div>

    <div class="palmares">
        <h3 class="titre-palmares">PASSES DECISIVES AVEC <br> LA COTE D'IVOIRE</h3>
        <p class="nbr">01</p>
        <p class="saison">SAISON 2024/2025 <span>00</span></p>
    </div>

</div>

<!-- Troisieme section -->

<h2 class="newstitle">DERNIERES INFOS</h2>

<div class="thirdsection-player">

    <div class="image-container">
        <img src="img/Haller1.jpg" alt="Image seko fofana" class="imgplayer">
        <div class="overlay">
            <h2 class="overlay-text">Sebastien Haller rejoint Leganés.</h2>
        </div>
    </div>

    <div class="image-container">
        <img src="img/Haller2.jpg" alt="Image seko fofana" class="imgplayer">
        <div class="overlay">
            <h2 class="overlay-text">OM : Sébastien Haller donne son avis sur Jean-Louis Gasset.</h2>
        </div>
    </div>

    <div class="image-container">
        <img src="img/Haller3.jpg" alt="Image seko fofana" class="imgplayer">
        <div class="overlay">
            <h2 class="overlay-text">Borussia Dortmund : Sébastien Haller lance déjà le choc final à Wembley.</h2>
        </div>
    </div>

</div>

<!-- Carouselle -->
<div class="fourthsection-player">
    <swiper-container class="mySwiper" slides-per-view="3" centered-slides="true" space-between="30" pagination="true"
        pagination-type="fraction" navigation="true" style="margin-top: 40px;margin-bottom:40px;">
        <swiper-slide>
            <a href="img/hallercar1.jpg" data-fancybox = "gallery"data-caption="Can 2023 // Ivoirien">
                <img style="max-width: 300px; height:300px"  src="img/hallercar1.jpg" alt="">
            </a>

        </swiper-slide>

        <swiper-slide>
            <a href="img/hallercar2.jpg" data-fancybox = "gallery"data-caption="Can 2023 // Ivoirien">
                <img style="max-width: 300px; height:300px"  src="img/hallercar2.jpg" alt="">
            </a>

        </swiper-slide>

        <swiper-slide>
            <a href="img/hallercar3.jpg" data-fancybox = "gallery"data-caption="Can 2023 // Ivoirien">
                <img style="max-width: 300px; height:300px"  src="img/hallercar3.jpg" alt="">
            </a>

        </swiper-slide>

        <swiper-slide>
            <a href="img/hallercar4.jpg" data-fancybox = "gallery"data-caption="Can 2023 // Ivoirien">
                <img style="max-width: 300px; height:300px" src="img/hallercar4.jpg" alt="">
            </a>

        </swiper-slide>

        <swiper-slide>
            <a href="img/hallercar5.jpg" data-fancybox = "gallery"data-caption="Can 2023 // Ivoirien">
                <img style="max-width: 300px; height:300px" src="img/hallercar5.jpg" alt="">
            </a>

        </swiper-slide>

        <swiper-slide>
            <a href="img/hallercar6.jpg" data-fancybox = "gallery"data-caption="Can 2023 // Ivoirien">
                <img style="max-width: 300px; height:300px"  src="img/hallercar6.jpg" alt="">
            </a>

        </swiper-slide>

    </swiper-container>
</div>
<!-- footer -->
<?php include 'footer.php' ?>

<!-- Javascript -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-element-bundle.min.js"></script>

<script src="js/script.js"></script>