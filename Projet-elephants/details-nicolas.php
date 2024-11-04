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
        <img class="pic" src="img/Haller4.jpg" alt="">
    </div>

    <div class="info-player">
        <h2 class="name">Nicolas <br>PEPE</h2>
        <br>
        <p class="description">Nicolas Pépé est un footballeur ivoirien, principalement connu pour son poste<br>
            d'ailier droit. Né le 29 mai 1995, il a débuté sa carrière en France avec le club <br>
            d'Angers avant de se faire remarquer à Lille, où il a réalisé des performances<br>
            impressionnantes en Ligue 1.</p>

        <br>
        <br>
        <p class="description">En 2019, ses performances lui ont valu un transfert<br>
            de haut niveau à Arsenal en Premier League anglaise. Connu pour sa vitesse,<br>
            son dribble et sa capacité à marquer des buts, Pépé est également un membre<br>
            actif de l'équipe nationale ivoirienne.
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
            <a href="img/hallercar1.jpg" data-fancybox data-caption="Can 2023 // Ivoirien">
                <img src="img/hallercar1.jpg" alt="">
            </a>

        </swiper-slide>

        <swiper-slide>
            <a href="img/hallercar2.jpg" data-fancybox data-caption="Can 2023 // Ivoirien">
                <img src="img/hallercar2.jpg" alt="">
            </a>

        </swiper-slide>

        <swiper-slide>
            <a href="img/hallercar3.jpg" data-fancybox data-caption="Can 2023 // Ivoirien">
                <img src="img/hallercar3.jpg" alt="">
            </a>

        </swiper-slide>

        <swiper-slide>
            <a href="img/hallercar4.jpg" data-fancybox data-caption="Can 2023 // Ivoirien">
                <img src="img/hallercar4.jpg" alt="">
            </a>

        </swiper-slide>

        <swiper-slide>
            <a href="img/hallercar5.jpg" data-fancybox data-caption="Can 2023 // Ivoirien">
                <img src="img/hallercar5.jpg" alt="">
            </a>

        </swiper-slide>

        <swiper-slide>
            <a href="img/hallercar6.jpg" data-fancybox data-caption="Can 2023 // Ivoirien">
                <img src="img/hallecar6.jpg" alt="">
            </a>

        </swiper-slide>

    </swiper-container>
</div>
<!-- footer -->


<?php include 'footer.php' ?>