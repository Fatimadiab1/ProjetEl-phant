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
        <img class="pic" src="img/badra0.jpg" alt="">
    </div>

    <div class="info-player">
        <h2 class="name">Badra Ali <br> SANGARÉ</h2>
        <br>
        <p class="description">Badra Ali Sangaré (né le 30 mai 1986 à Bingerville en Côte d'Ivoire) est un<br>
            joueur de football international ivoirien, qui évolue au poste de gardien de but <br>
            aux Sekhukhune United.</p>

        <br>
        <br>
        <p class="description">
            Badra Ali Sangaré a été sélectionné pour la CAN 2023, organisée <br>
            en Côte d'Ivoire en 2024. Gardien pour Sekhukhune United en Afrique <br>
            du Sud, il apporte son expérience précieuse et son leadership aux <br>
            Éléphants ». Avec l'équipe nationale ivoirienne dirigée par Jean-Louis Gasset, <br>
            Sangaré jouera un rôle clé pour défendre la cage ivoirienne devant leur public, <br>
            ce qui est essentiel pour une équipe hôte visant la victoire.
        </p>


    </div>

</div>

<!-- Deuxieme section -->
<div class="secondsection-player">

    <div class="palmares">
        <h3 class="titre-palmares">MATCHES AVEC <br> LA COTE D'IVOIRE</h3>
        <p class="nbr">31</p>
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
        <img src="img/badra_0.jpeg" alt="Image badra ali" class="imgplayer">
        <div class="overlay">
            <h2 class="overlay-text">Côte d’Ivoire-Algérie: Beaumelle renouvelle sa confiance à Badra Ali</h2>
        </div>
    </div>

    <div class="image-container">
        <img src="img/badra3.webp" alt="Image badra ali" class="imgplayer">
        <div class="overlay">
            <h2 class="overlay-text"> Le gardien de but ivoirien, Sangaré Ali Badra, dément sa retraite internationale et met en garde.</h2>
        </div>
    </div>

    <div class="image-container">
        <img src="img/badra_1.webp" alt="Image badra ali" class="imgplayer">
        <div class="overlay">
            <h2 class="overlay-text">Badra Ali Sangaré rejoint un club de 1ère division en Afrique du Sud !</h2>
        </div>
    </div>

</div>

<!-- Carouselle -->
<div class="fourthsection-player">
    <swiper-container class="mySwiper" slides-per-view="3" centered-slides="true" space-between="30" pagination="true"
        pagination-type="fraction" navigation="true" style="margin-top: 40px;margin-bottom:40px;">
        <swiper-slide>
            <a href="img/badra1.png" data-fancybox data-caption="Can 2023 // Ivoirien">
                <img src="img/badra1.png" alt="">
            </a>

        </swiper-slide>

        <swiper-slide>
            <a href="img/badra2.jpeg" data-fancybox data-caption="Can 2023 // Ivoirien">
                <img src="img/badra2.jpeg" alt="">
            </a>

        </swiper-slide>

        <swiper-slide>
            <a href="img/badra3.webp" data-fancybox data-caption="Can 2023 // Ivoirien">
                <img src="img/badra3.webp" alt="">
            </a>

        </swiper-slide>

        <swiper-slide>
            <a href="img/badra4.png" data-fancybox data-caption="Can 2023 // Ivoirien">
                <img src="img/badra4.png" alt="">
            </a>

        </swiper-slide>





    </swiper-container>
</div>
<!-- footer -->
<?php include 'footer.php' ?>


<!-- Javascript -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-element-bundle.min.js"></script>

<script src="js/script.js"></script>