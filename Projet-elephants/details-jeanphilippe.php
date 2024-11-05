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
        <img class="pic" src="img/krasso1.jpg" alt="">
    </div>

    <div class="info-player">
        <h2 class="name">Jean-Philippe <br>KRASSO</h2>
        <br>
        <p class="description">Jean-Philippe Krasso, né le 17 juillet 1997 à Stuttgart<br>
            (Allemagne), est un footballeur international ivoirien qui<br>
            évolue au poste d'avant-centre au Paris FC.</p>

        <br>
        <br>
        <p class="description">En septembre 2022, il est sélectionné par Jean-Louis <br> Gasset      sélectionneur des Éléphants de Côte d'Ivoire<br>
            pour deux matchs amicaux contre le Togo et la Guinée. <br> Il inscrit son premier but contre les Comores en mars 2023. <br> Le 28 décembre 2023, <br> il est retenu dans la liste des vingt-sept joueurs ivoiriens<br>
            sélectionnés par Jean-Louis Gasset pour disputer <br>la Coupe d'Afrique des nations 2023.
        </p>


    </div>

</div>

<!-- Deuxieme section -->
<div class="secondsection-player">

    <div class="palmares">
        <h3 class="titre-palmares">MATCHES AVEC <br> LA COTE D'IVOIRE</h3>
        <p class="nbr">07</p>
        <p class="saison">SAISON 2024/2025 <span>07</span></p>
    </div>

    <div class="palmares">
        <h3 class="titre-palmares">BUTS AVEC LA <br>COTE D'IVOIRE</h3>
        <p class="nbr">02</p>
        <p class="saison">SAISON 2024/2025<span>02</span></p>
    </div>

    <div class="palmares">
        <h3 class="titre-palmares">PASSES DECISIVES AVEC <br> LA COTE D'IVOIRE</h3>
        <p class="nbr">01</p>
        <p class="saison">SAISON 2024/2025 <span>01</span></p>
    </div>

</div>

<!-- Troisieme section -->

<h2 class="newstitle">DERNIERES INFOS</h2>

<div class="thirdsection-player">

    <div class="image-container">
        <img src="img/krasso2.jpg" alt="Image krasso" class="imgplayer">
        <div class="overlay">
            <h2 class="overlay-text">1ERE ET 2E JOURNÉE ÉLIM CAN 2025: JEAN-PHILIPPE KRASSO LE SUPER HÉROS DES ÉLÉPHANTS.</h2>
        </div>
    </div>

    <div class="image-container">
        <img src="img/krasso3.jpg" alt="Image krasso" class="imgplayer">
        <div class="overlay">
            <h2 class="overlay-text">Jean Philippe Krasso : « Si j’ai pu marquer face à la Zambie, c’est parce que… »</h2>
        </div>
    </div>

    <div class="image-container">
        <img src="img/krasso4.jpg" alt="Image krasso" class="imgplayer">
        <div class="overlay">
            <h2 class="overlay-text">Paris FC mercato : Jean-Philippe Krasso, le gros coup du club de la capitale.</h2>
        </div>
    </div>

</div>

<!-- Carouselle -->
<div class="fourthsection-player">
    <swiper-container class="mySwiper" slides-per-view="3" centered-slides="true" space-between="30" pagination="true"
        pagination-type="fraction" navigation="true" style="margin-top: 40px;margin-bottom:40px;">
        <swiper-slide>
            <a href="img/kra1.jpg" data-fancybox data-caption="Can 2023 // Ivoirien">
                <img src="img/kra1.jpg" alt="">
            </a>

        </swiper-slide>

        <swiper-slide>
            <a href="img/kra2.jpg" data-fancybox data-caption="Can 2023 // Ivoirien">
                <img src="img/kra2.jpg" alt="">
            </a>

        </swiper-slide>

        <swiper-slide>
            <a href="img/kra3.jpg" data-fancybox data-caption="Can 2023 // Ivoirien">
                <img src="img/kra3.jpg" alt="">
            </a>

        </swiper-slide>

        <swiper-slide>
            <a href="img/kra4.jpg" data-fancybox data-caption="Can 2023 // Ivoirien">
                <img src="img/kra4.jpg" alt="">
            </a>

        </swiper-slide>

        <swiper-slide>
            <a href="img/kra5.png" data-fancybox data-caption="Can 2023 // Ivoirien">
                <img src="img/kra5.png" alt="">
            </a>

        </swiper-slide>

        <swiper-slide>
            <a href="img/kra6.jpg" data-fancybox data-caption="Can 2023 // Ivoirien">
                <img src="img/kra6.jpg" alt="">
            </a>

        </swiper-slide>

    </swiper-container>
</div>
<!-- footer -->


<?php include 'footer.php' ?>

<!-- Javascript -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-element-bundle.min.js"></script>

<script src="js/script.js"></script>