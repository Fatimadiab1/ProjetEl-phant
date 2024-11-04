<?php include 'header.php' ?>


<!-- background en dessous de la nav -->
<div class="background-player">
</div>


<!-- Titre de la position des joueurs  -->
<div class="position-player">
    <h1 class="titre-position">GARDIEN</h1>
</div>


<!-- Premiere section  -->
<div class="firstsection-player">

    <div class="picture-player">
        <img class="pic" src="img/yahia0.jpeg" alt="">
    </div>

    <div class="info-player">
        <h2 class="name">Yahia <br> FOFANA</h2>
        <br>
        <p class="description">Yahia Fofana, né le 21 août 2000 à Paris en France, est un <br> footballeur international ivoirien qui évolue au poste <br> de gardien de but à Angers SCO.</p>

        <br>
        <br>
        <p class="description">
            Yahia Fofana, gardien de but de l’équipe nationale ivoirienne et joueur d’Angers, <br>
            a participé activement à la CAN 2023, encouragée par un appel à mobilisation <br>
            des supporters pour soutenir les Éléphants lors de leur match décisif en quart <br>
            de finale contre le Mali. Malgré sa jeunesse, Fofana s'affirme comme un joueur <br>
            prometteur pour la Côte d’Ivoire, où il est apprécié pour son engagement et <br>
            son potentiel à devenir un gardien clé de la sélection.
        </p>


    </div>

</div>

<!-- Deuxieme section -->
<div class="secondsection-player">

    <div class="palmares">
        <h3 class="titre-palmares">MATCHES AVEC <br> LA COTE D'IVOIRE</h3>
        <p class="nbr">03</p>
        <p class="saison">SAISON 2024/2025 <span>00</span></p>
    </div>

    <div class="palmares">
        <h3 class="titre-palmares">BUTS AVEC LA <br>COTE D'IVOIRE</h3>
        <p class="nbr">00</p>
        <p class="saison">SAISON 2024/2025<span>00</span></p>
    </div>

    <div class="palmares">
        <h3 class="titre-palmares">PASSES DECISIVES AVEC <br> LA COTE D'IVOIRE</h3>
        <p class="nbr">00</p>
        <p class="saison">SAISON 2024/2025 <span>00</span></p>
    </div>

</div>

<!-- Troisieme section -->

<h2 class="newstitle">DERNIERES INFOS</h2>

<div class="thirdsection-player">

    <div class="image-container">
        <img src="img/yahia_0.jpg" alt="Image seko fofana" class="imgplayer">
        <div class="overlay">
            <h2 class="overlay-text">Yahia Fofana solide contre le RC Strasbourg</h2>
        </div>
    </div>

    <div class="image-container">
        <img src="img/yahia_1.webp" alt="Image seko fofana" class="imgplayer">
        <div class="overlay">
            <h2 class="overlay-text"> LE CHAMPION D'AFRIQUE YAHIA FOFANA EN LICE POUR LE TITRE DE MEILLEUR GARDIEN DE LIGUE 2 FRANÇAISE</h2>
        </div>
    </div>

    <div class="image-container">
        <img src="img/yahia_2.jpeg" alt="Image seko fofana" class="imgplayer">
        <div class="overlay">
            <h2 class="overlay-text">Eliminatoires Coupe du Monde 2026 : les Éléphants, sauvés par Yahia Fofana, concèdent le nul contre le Kenya</h2>
        </div>
    </div>

</div>

<!-- Carouselle -->
<div class="fourthsection-player">
    <swiper-container class="mySwiper" slides-per-view="3" centered-slides="true" space-between="30" pagination="true"
        pagination-type="fraction" navigation="true" style="margin-top: 40px;margin-bottom:40px;">
        <swiper-slide>
            <a href="img/yahia1.jpg" data-fancybox data-caption="Can 2023 // Ivoirien">
                <img src="img/yahia1.jpg" alt="">
            </a>

        </swiper-slide>

        <swiper-slide>
            <a href="img/yahia2.jpg" data-fancybox data-caption="Can 2023 // Ivoirien">
                <img src="img/yahia2.jpg" alt="">
            </a>

        </swiper-slide>

        <swiper-slide>
            <a href="img/yahia3.jpeg" data-fancybox data-caption="Can 2023 // Ivoirien">
                <img src="img/yahia3.jpeg" alt="">
            </a>

        </swiper-slide>

        <swiper-slide>
            <a href="img/yahia4.jpg" data-fancybox data-caption="Can 2023 // Ivoirien">
                <img src="img/yahia4.jpg" alt="">
            </a>

        </swiper-slide>

        <swiper-slide>
            <a href="img/yahia5.jpg" data-fancybox data-caption="Can 2023 // Ivoirien">
                <img src="img/yahia5.jpg" alt="">
            </a>

        </swiper-slide>

        <swiper-slide>
            <a href="img/yahia6.jpg" data-fancybox data-caption="Can 2023 // Ivoirien">
                <img src="img/yahia6.jpg" alt="">
            </a>

        </swiper-slide>

    </swiper-container>
</div>
<!-- footer -->
<?php include 'footer.php' ?>


<!-- Javascript -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-element-bundle.min.js"></script>

<script src="js/script.js"></script>