<?php
$title = "Les éléphants | Lazare Amani";
?>
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
        <img class="pic" src="img/nouveau/lazare.jpg" alt="">
    </div>

    <div class="info-player">
        <h2 class="name">Lazare <br> Amani</h2>
        <br>
        <p class="description">Jean Thierry Lazare Amani (né le 7 mars 1998) <br>est un footballeur professionnel ivoirien qui joue pour le club belge de Pro League Union Saint-Gilloise. </p>
        <br>
        <br>
        <p class="description">
            Milieu de terrain talentueux de l'Union Saint-Gilloise en Belgique<br>
            Lazare a récemment fait ses débuts pour la Côte d'Ivoire<br>
            impressionnant dès sa première apparition en Coupe d’Afrique des Nations (CAN) 2023. <br>
            il montre une progression impressionnante et attire l’attention sur la scène <br>
            Actuellement, Lazare joue un rôle clé dans l’équipe nationale et a été <br>
            sélectionné pour renforcer les Éléphants lors de la CAN en 2024.
        </p>

    </div>

</div>

<!-- Deuxieme section -->
<div class="secondsection-player">

    <div class="palmares">
        <h3 class="titre-palmares">MATCHES AVEC <br> LA COTE D'IVOIRE</h3>
        <p class="nbr">15</p>
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
        <img src="img/lazare_amani1.jpg" alt="Image seko fofana" class="imgplayer">
        <div class="overlay">
            <h2 class="overlay-text"> Amani fait l'objet de rumeurs de transfert en ce moment. Après une saison prometteuse, plusieurs sources indiquent qu'il pourrait quitter le club.</h2>
        </div>
    </div>

    <div class="image-container">
        <img src="img/lazare_amani3.jpg" alt="Image seko fofana" class="imgplayer">
        <div class="overlay">
            <h2 class="overlay-text">Ce changement pourrait intervenir suite aux mouvements internes de l'Union Saint-Gilloise, tels que le transfert de Cameron Puertas.</h2>
        </div>
    </div>

    <div class="image-container">
        <img src="img/lazare_amani5.jpg" alt="Image seko fofana" class="imgplayer">
        <div class="overlay">
            <h2 class="overlay-text">Son retour en équipe nationale a eu un impact positif, renforçant l'équipe et inspirant ses coéquipiers pendant la compétition.</h2>
        </div>
    </div>

</div>

<!-- Carouselle -->
<div class="fourthsection-player">
    <swiper-container class="mySwiper" slides-per-view="3" centered-slides="true" space-between="30" pagination="true"
        pagination-type="fraction" navigation="true" style="margin-top: 40px;margin-bottom:40px;">
        <swiper-slide>
            <a href="img/lazare_amani.png" data-fancybox = "gallery"data-caption="Can 2023 // Ivoirien">
                <img style="max-width: 300px; height:300px"src="img/lazare_amani.png" alt="">
            </a>

        </swiper-slide>

        <swiper-slide>
            <a href="img/lazare_amani1.jpg" data-fancybox = "gallery"data-caption="Can 2023 // Ivoirien">
                <img style="max-width: 300px; height:300px" src="img/lazare_amani1.jpg" alt="">
            </a>

        </swiper-slide>

        <swiper-slide>
            <a href="img/lazare_amani3.jpg" data-fancybox = "gallery"data-caption="Can 2023 // Ivoirien">
                <img style="max-width: 300px; height:300px" src="img/lazare_amani3.jpg" alt="">
            </a>

        </swiper-slide>

        <swiper-slide>
            <a href="img/lazare_amani5.jpg" data-fancybox = "gallery"data-caption="Can 2023 // Ivoirien">
                <img style="max-width: 300px; height:300px" src="img/lazare_amani5.jpg" alt="">
            </a>

        </swiper-slide>

        <swiper-slide>
            <a href="img/ouss_dio1.png" data-fancybox = "gallery"data-caption="Can 2023 // Ivoirien">
                <img style="max-width: 300px; height:300px" src="img/ouss_dio1.png" alt="">
            </a>

        </swiper-slide>

        <swiper-slide>
            <a href="img/lazare_amani6.jpg" data-fancybox = "gallery"data-caption="Can 2023 // Ivoirien">
                <img style="max-width: 300px; height:300px" src="img/lazare_amani6.jpg" alt="">
            </a>

        </swiper-slide>

    </swiper-container>
</div>
<!-- footer -->
<?php include 'footer.php' ?>


<!-- Javascript -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-element-bundle.min.js"></script>

<script src="js/script.js"></script>