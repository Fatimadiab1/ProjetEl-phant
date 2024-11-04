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
        <img class="pic" src="img/ADINGRA_SIMON_7.jpg.jpg" alt="">
    </div>

    <div class="info-player">
        <h2 class="name">Simon <br> Adingra</h2>
        <br>
        <p class="description">Simon Adingra, né le 1er janvier 2002 en Côte d'Ivoire,<br> est un footballeur ivoirien talentueux et polyvalent.<br> Simon joue actuellement pour le Brighton & Hove Albion,<br> en Premier League anglaise,<br> après un passage remarqué au FC Nordsjælland au Danemark.</p>
        <br>
     
        <p class="description">
            Lors de la Coupe d'Afrique des Nations (CAN) 2023 en Côte d'Ivoire,<br> Simon Adingra a démontré son talent en contribuant activement aux <br> performances de l’équipe ivoirienne. Sa capacité à créer des actions décisives<br> et à participer au jeu offensif a fait de lui un joueur clé. Bien que ses statistiques <br> exactes en termes de buts et de passes décisives lors de la CAN 2023 ne soient pas <br> confirmées ici, il a été salué pour son impact sur le terrain, <br>en aidant la Côte d'Ivoire à progresser dans le tournoi.
        </p>

    </div>

</div>

<!-- Deuxieme section -->
<div class="secondsection-player">

    <div class="palmares">
        <h3 class="titre-palmares">MATCHES AVEC <br> LA COTE D'IVOIRE</h3>
        <p class="nbr">16</p>
        <p class="saison">SAISON 2024/2025 <span>16</span></p>
    </div>

    <div class="palmares">
        <h3 class="titre-palmares">BUTS AVEC LA <br>COTE D'IVOIRE</h3>
        <p class="nbr">02</p>
        <p class="saison">SAISON 2024/2025<span>02</span></p>
    </div>

    <div class="palmares">
        <h3 class="titre-palmares">PASSES DECISIVES AVEC <br> LA COTE D'IVOIRE</h3>
        <p class="nbr">02</p>
        <p class="saison">SAISON 2024/2025 <span>02</span></p>
    </div>

</div>

<!-- Troisieme section -->

<h2 class="newstitle">DERNIERES INFOS</h2>

<div class="thirdsection-player">

    <div class="image-container">
        <img src="img/ADINGRA_SIMON_9.jpg" alt="Image Adingra" class="imgplayer">
        <div class="overlay">
            <h2 class="overlay-text">Succès à l'AFCON : Il a été nommé homme du match lors de la finale contre le Nigeria, où il a fourni les passes décisives pour les deux buts, permettant à son équipe de remporter son troisième titre AFCON</h2>
        </div>
    </div>

    <div class="image-container">
        <img src="img/Simon-Adingra-brighton.jpg" alt="Image Adingra" class="imgplayer">
        <div class="overlay">
            <h2 class="overlay-text"> Lors de la Coupe d'Afrique des Nations 2024, il a marqué des buts clés et a aidé la Côte d'Ivoire à atteindre les demi-finales.</h2>
        </div>
    </div>

    <div class="image-container">
        <img src="img/ADINGRA_SIMON_8.jpg.jpg" alt="Image Adingra" class="imgplayer">
        <div class="overlay">
            <h2 class="overlay-text">Éléphants : Simon Adingra, la nouvelle pépite ivoirienne: Il a été désigné « Homme du match » de la finale de la Can 2023. Simon Adingra a confirmé tout le bien qu’on disait de lui. </h2>
        </div>
    </div>

</div>

<!-- Carouselle -->
<div class="fourthsection-player">
    <swiper-container class="mySwiper" slides-per-view="3" centered-slides="true" space-between="30" pagination="true"
        pagination-type="fraction" navigation="true" style="margin-top: 40px;margin-bottom:40px;">
        <swiper-slide>
            <a href="img/ADINGRA_SIMON_2.JPG" data-fancybox data-caption="Adingra Simon">
                <img src="img/ADINGRA_SIMON_2.JPG" alt="">
            </a>

        </swiper-slide>

        <swiper-slide>
            <a href="img/ADINGRA_SIMON_3.JPG" data-fancybox data-caption="Adingra Simon">
                <img src="img/ADINGRA_SIMON_3.JPG" alt="">
            </a>

        </swiper-slide>

        <swiper-slide>
            <a href="img/ADINGRA_SIMON_5.jpg" data-fancybox data-caption="Adingra Simon">
                <img src="img/ADINGRA_SIMON_5.jpg" alt="">
            </a>

        </swiper-slide>

        <swiper-slide>
            <a href="img/ADINGRA_SIMON_10.jpg" data-fancybox data-caption="Adingra Simon">
                <img src="img/ADINGRA_SIMON_10.jpg" alt="">
            </a>

        </swiper-slide>

        <swiper-slide>
            <a href="img/Simon-Adingra11.jpg" data-fancybox data-caption="Adingra Simon">
                <img src="img/Simon-Adingra11.jpg" alt="">
            </a>

        </swiper-slide>

        <swiper-slide>
            <a href="img/Simon-Adingra12.jpg" data-fancybox data-caption="Adingra Simon">
                <img src="img/Simon-Adingra12.jpg" alt="">
            </a>

        </swiper-slide>

    </swiper-container>
</div>
<!-- footer -->
<?php include 'footer.php' ?>


<!-- Javascript -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-element-bundle.min.js"></script>

<script src="js/script.js"></script>