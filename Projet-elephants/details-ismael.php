<?php include 'header.php' ?>


<!-- background en dessous de la nav -->
<div class="background-player">
</div>


<!-- Titre de la position des joueurs  -->
<div class="position-player">
    <h1 class="titre-position">Defenseur</h1>
</div>


<!-- Premiere section  -->
<div class="firstsection-player">

    <div class="picture-player">
        <img class="pic" src="img/diallo.jpg" alt="">
    </div>

    <div class="info-player">
        <h2 class="name">Ismael <br> Diallo</h2>
        <br>
        <p class="description">Ismaël Jean Chester Diallo (né le 29 janvier 1997) <br>est un footballeur professionnel ivoirien qui joue au poste d'arrière gauche pour le club de la Ligue croate de football Hajduk Split. </p>
        <br>
        <br>
        <p class="description">
            Défenseur évoluant au club croate Hajduk Split, Ismaël a également<br>
            été une surprise dans la liste de Jean-Louis Gasset pour la CAN 2024<br>
            Avec 17 matchs joués et au moins une passe décisive en championnat <br>
            cette saison, il s’illustre par une bonne régularité dans ses performances défensives. <br>
        </p>

    </div>

</div>

<!-- Deuxieme section -->
<div class="secondsection-player">

    <div class="palmares">
        <h3 class="titre-palmares">MATCHES AVEC <br> LA COTE D'IVOIRE</h3>
        <p class="nbr">20</p>
        <p class="saison">SAISON 2024/2025 <span>11</span></p>
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
        <img src="img/diallo1.jpg" alt="Image seko fofana" class="imgplayer">
        <div class="overlay">
            <h2 class="overlay-text"> Ismaël Diallo, le défenseur ivoirien évoluant à Hajduk Split, connaît une saison mitigée en Croatie. Recruté en 2023 après avoir quitté le club français d'Ajaccio</h2>
        </div>
    </div>

    <div class="image-container">
        <img src="img/diallo2.jpg" alt="Image seko fofana" class="imgplayer">
        <div class="overlay">
            <h2 class="overlay-text">Il n'a pas pleinement répondu aux attentes du club de Split, malgré un contrat jusqu'en 2026. Le club envisageait même une séparation si une opportunité se présente.</h2>
        </div>
    </div>

    <div class="image-container">
        <img src="img/diallo.jpg" alt="Image seko fofana" class="imgplayer">
        <div class="overlay">
            <h2 class="overlay-text">Sur le plan statistique, Diallo a joué peu de matchs cette saison et n'a pas encore inscrit de mais ni fourni de passes décisives.</h2>
        </div>
    </div>

</div>

<!-- Carouselle -->
<div class="fourthsection-player">
    <swiper-container class="mySwiper" slides-per-view="3" centered-slides="true" space-between="30" pagination="true"
        pagination-type="fraction" navigation="true" style="margin-top: 40px;margin-bottom:40px;">
        <swiper-slide>
            <a href="img/diallo3.jpg" data-fancybox data-caption="Can 2023 // Ivoirien">
                <img src="img/diallo3.jpg" alt="">
            </a>

        </swiper-slide>

        <swiper-slide>
            <a href="img/diallo4.jpg" data-fancybox data-caption="Can 2023 // Ivoirien">
                <img src="img/diallo4.jpg" alt="">
            </a>

        </swiper-slide>

        <swiper-slide>
            <a href="img/diallo5.jpg" data-fancybox data-caption="Can 2023 // Ivoirien">
                <img src="img/diallo5.jpg" alt="">
            </a>

        </swiper-slide>

        <swiper-slide>
            <a href="img/diallo.jpg" data-fancybox data-caption="Can 2023 // Ivoirien">
                <img src="img/diallo.jpg" alt="">
            </a>

        </swiper-slide>

        <swiper-slide>
            <a href="img/diallo1.jpg" data-fancybox data-caption="Can 2023 // Ivoirien">
                <img src="img/diallo1.jpg" alt="">
            </a>

        </swiper-slide>

        <swiper-slide>
            <a href="img/lazare_amani6.jpg" data-fancybox data-caption="Can 2023 // Ivoirien">
                <img src="img/lazare_amani6.jpg" alt="">
            </a>

        </swiper-slide>

    </swiper-container>
</div>
<!-- footer -->
<?php include 'footer.php' ?>


<!-- Javascript -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-element-bundle.min.js"></script>

<script src="js/script.js"></script>