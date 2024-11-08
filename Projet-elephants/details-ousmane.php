<?php
$title = "Les éléphants | Ousmane Diomande";
?>
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
<img class="pic" src="img/ouss_dio.jpg" alt="">
</div>

<div class="info-player">
<h2 class="name">Ousmane <br> Diomande</h2>
<br>
<p class="description">Ousmane Diomande, né le 4 décembre 2003 à Abidjan est un <br> footballeur international ivoirien qui évolue au poste <br> de defenseur à Sporting CP.</p>
<br>
<br>
<p class="description">
     Ousmane Diomandé s’impose cette saison comme un pilier de la défense <br>
     grâce à sa puissance et à sa régularité.Avec 13 matchs joués, 1 but et<br>
     1 passe décisive en championnat portugais pour la saison 2024/2025, <br>
     il montre une progression impressionnante et attire l’attention sur la scène <br>
     internationale. Sa sélection pour la CAN 2024 sous la direction de Jean-Louis Gasset  <br>
     témoigne de son impact et de son potentiel pour solidifier la défense ivoirienne.
</p>

</div>

</div>

<!-- Deuxieme section -->
<div class="secondsection-player">

<div class="palmares">
<h3 class="titre-palmares">MATCHES AVEC <br> LA COTE D'IVOIRE</h3>
<p class="nbr">07</p>
<p class="saison">SAISON 2024/2025 <span>02</span></p>
</div>

<div class="palmares">
<h3 class="titre-palmares">BUTS AVEC  LA <br>COTE D'IVOIRE</h3>
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
        <img src="img/ouss_dio1.png" alt="Image seko fofana" class="imgplayer">
        <div class="overlay">
            <h2 class="overlay-text">Arsenal a tenté de le recruter cet été avec une offre de 35 millions d'euros, mais le Sporting a refusé.</h2>
        </div>
    </div>

    <div class="image-container">
        <img src="img/ouss_dio2.jpg" alt="Image seko fofana" class="imgplayer">
        <div class="overlay">
            <h2 class="overlay-text">Arrivé au Sporting en provenance de Midtjylland pour 7,5 millions d'euros en janvier 2023, il est vite devenu un élément central de l'équipe.</h2>
        </div>
    </div>

    <div class="image-container">
        <img src="img/ouss_dio3.png" alt="Image seko fofana" class="imgplayer">
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
          <a href="img/ouss_dio4.jpg" data-fancybox = "gallery"data-caption="Can 2023 // Ivoirien">
              <img style="max-width: 300px; height:300px"  src="img/ouss_dio4.jpg" alt="">
          </a>
         
      </swiper-slide>

      <swiper-slide>
          <a href="img/ouss_dio6.jpg" data-fancybox = "gallery"data-caption="Can 2023 // Ivoirien">
              <img style="max-width: 300px; height:300px"  src="img/ouss_dio6.jpg" alt="">
          </a>
          
      </swiper-slide>

      <swiper-slide>
          <a href="img/ouss_dio3.png" data-fancybox = "gallery"data-caption="Can 2023 // Ivoirien">
              <img style="max-width: 300px; height:300px"  src="img/ouss_dio3.png" alt="">
          </a>

      </swiper-slide>

      <swiper-slide>
          <a href="img/ouss_dio1.png" data-fancybox = "gallery"data-caption="Can 2023 // Ivoirien">
              <img style="max-width: 300px; height:300px"  src="img/ouss_dio1.png" alt="">
          </a>
   
      </swiper-slide>

      <swiper-slide>
          <a href="img/ouss_dio1.png" data-fancybox = "gallery"data-caption="Can 2023 // Ivoirien">
              <img style="max-width: 300px; height:300px"  src="img/ouss_dio1.png" alt="">
          </a>

      </swiper-slide>

      <swiper-slide>
          <a href="img/ouss_dio.jpg" data-fancybox = "gallery"data-caption="Can 2023 // Ivoirien">
              <img style="max-width: 300px; height:300px"  src="img/ouss_dio.jpg" alt="">
          </a>

      </swiper-slide>

  </swiper-container>
  </div>
<!-- footer -->
  <?php include 'footer.php' ?>


  <!-- Javascript -->
  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-element-bundle.min.js"></script>

  <script src="js/script.js"></script>

