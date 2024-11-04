<?php include 'header.php' ?>


<!-- background en dessous de la nav -->
<div class="background-player">
</div>


<!-- Titre de la position des joueurs  -->
<div class="position-player">
    <h1 class="titre-position">Milieu</h1>
</div>


<!-- Premiere section  -->
<div class="firstsection-player">

    <div class="picture-player">
        <img class="pic" src="img/seri.jpg" alt="">
    </div>

    <div class="info-player">
        <h2 class="name">Jean Michael <br> Seri</h2>
        <br>
        <p class="description">Jean Michaël Seri, né le 19 juillet 1991 à Grand-Béréby en Côte d'Ivoire <br>est un footballeur professionnel ivoirien occupant le poste de milieu de terrain . </p>
        <br>
        <br>
        <p class="description">
            Il débute sa carrière professionnelle dans l'équipe de l'ASEC Mimosas en Côte d'Ivoire <br>
            avant de poursuivre son parcours en Europe, notamment au FC Porto, où il joue avec l'réserve<br>
            Après une période prometteuse au FC Paços de Ferreira au Portugal, il rejoint l'OGC Nice en 2015, <br>
            où il se distingue dans le championnat français, au point d'attirer l'intérêt des clubs européens comme le FC B <br>
        </p>

    </div>

</div>

<!-- Deuxieme section -->
<div class="secondsection-player">

    <div class="palmares">
        <h3 class="titre-palmares">MATCHES AVEC <br> LA COTE D'IVOIRE</h3>
        <p class="nbr">20</p>
        <p class="saison">SAISON 2024/2025 <span>14</span></p>
    </div>

    <div class="palmares">
        <h3 class="titre-palmares">BUTS AVEC LA <br>COTE D'IVOIRE</h3>
        <p class="nbr">00</p>
        <p class="saison">SAISON 2024/2025<span>00</span></p>
    </div>

    <div class="palmares">
        <h3 class="titre-palmares">PASSES DECISIVES AVEC <br> LA COTE D'IVOIRE</h3>
        <p class="nbr">05</p>
        <p class="saison">SAISON 2024/2025 <span>03</span></p>
    </div>

</div>

<!-- Troisieme section -->

<h2 class="newstitle">DERNIERES INFOS</h2>

<div class="thirdsection-player">

    <div class="image-container">
        <img src="img/seri1.jpg" alt="Image seko fofana" class="imgplayer">
        <div class="overlay">
            <h2 class="overlay-text">Jean-Michel Seri, après avoir quitté Hull City, a signé avec le club de la Pro League saoudienne Al-Orobah.</h2>
        </div>
    </div>

    <div class="image-container">
        <img src="img/seri2.jpg" alt="Image seko fofana" class="imgplayer">
        <div class="overlay">
            <h2 class="overlay-text">Depuis son transfert en août 2024, le milieu de terrain ivoirien a débuté six matches pour sa nouvelle équipe, jouant un rôle important au milieu de terrain</h2>
        </div>
    </div>

    <div class="image-container">
        <img src="img/seri3.jpg" alt="Image seko fofana" class="imgplayer">
        <div class="overlay">
            <h2 class="overlay-text">Les performances de Seri ont été remarquables, mais Al-Orobah a connu des montagnes russes de résultats,</h2>
        </div>
    </div>

</div>

<!-- Carouselle -->
<div class="fourthsection-player">
    <swiper-container class="mySwiper" slides-per-view="3" centered-slides="true" space-between="30" pagination="true"
        pagination-type="fraction" navigation="true" style="margin-top: 40px;margin-bottom:40px;">
        <swiper-slide>
            <a href="img/seri.jpg" data-fancybox data-caption="Can 2023 // Ivoirien">
                <img src="img/seri.jpg" alt="">
            </a>

        </swiper-slide>

        <swiper-slide>
            <a href="img/seri5.jpg" data-fancybox data-caption="Can 2023 // Ivoirien">
                <img src="img/seri5.jpg" alt="">
            </a>

        </swiper-slide>

        <swiper-slide>
            <a href="img/seri6.jpg" data-fancybox data-caption="Can 2023 // Ivoirien">
                <img src="img/seri6.jpg" alt="">
            </a>

        </swiper-slide>

        <swiper-slide>
            <a href="img/seri3.jpg" data-fancybox data-caption="Can 2023 // Ivoirien">
                <img src="img/seri3.jpg" alt="">
            </a>

        </swiper-slide>

        <swiper-slide>
            <a href="img/seri1.jpg" data-fancybox data-caption="Can 2023 // Ivoirien">
                <img src="img/seri1.jpg" alt="">
            </a>

        </swiper-slide>

        <swiper-slide>
            <a href="img/seri2.jpg" data-fancybox data-caption="Can 2023 // Ivoirien">
                <img src="img/seri2.jpg" alt="">
            </a>

        </swiper-slide>

    </swiper-container>
</div>
<!-- footer -->
<?php include 'footer.php' ?>


<!-- Javascript -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-element-bundle.min.js"></script>

<script src="js/script.js"></script>