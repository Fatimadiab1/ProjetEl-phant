<?php
$title = "Les éléphants | Ghislain Konan";
?>

<?php include 'header.php' ?>


<!-- background en dessous de la nav -->
<div class="background-player">
</div>


<!-- Titre de la position des joueurs  -->
<div class="position-player">
<h1 class="titre-position">defenseur</h1>
</div>


<!-- Premiere section  -->
<div class="firstsection-player">

<div class="picture-player">
<img class="pic" src="img/konan1.jpeg" alt="">
</div>

<div class="info-player">
<h2 class="name">Ghislain <br> Konan</h2>

<br>
<p class="description">
     Konan, né le 27 décembre 1995 à Abidjan en Côte d'Ivoire,
   <br>
    est un footballeur international ivoirien qui 
    évolue au poste <br> d'arrière gauche à Al-Fayha FC, en prêt d'Al-Nassr FC
    
    .</p>
<p class="description">

    Ghislain Konan reçoit sa première sélection en équipe <br> de Côte d'Ivoire le 4 juin 2017, <br>
    en amical contre les Pays-Bas. Les Ivoiriens s'inclinent sur le lourd score de 5-0.<br>
    Il dispute ensuite lors de cette même année deux matchs rentrant dans <br> le cadre des éliminatoires 
    du mondial 2018,
    contre le Mali et le Maroc


</p>

</div>

</div>

<!-- Deuxieme section -->
<div class="secondsection-player">

<div class="palmares">
<h3 class="titre-palmares">MATCHES AVEC <br> LA COTE D'IVOIRE</h3>
<p class="nbr">42</p>
<p class="saison">SAISON 2024/2025 <span>06</span></p>
</div>

<div class="palmares">
<h3 class="titre-palmares">BUTS AVEC  LA <br>COTE D'IVOIRE</h3>
<p class="nbr">00</p>
<p class="saison">SAISON 2024/2025<span>00</span></p>
</div>

<div class="palmares">
<h3 class="titre-palmares">PASSES DECISIVES AVEC <br> LA COTE D'IVOIRE</h3>
<p class="nbr">05</p>
<p class="saison">SAISON 2024/2025 <span> 05</span></p>
</div>

</div>

<!-- Troisieme section -->

<h2 class="newstitle">DERNIERES INFOS</h2>

 <div class="thirdsection-player">
 
<div class="image-container">
        <img src="img/konan1.jpeg" alt="Image seko fofana" class="imgplayer">
        <div class="overlay">
            <h2 class="overlay-text"> 
            Konan participe à sa première compétition internationale lors 
            de la Coupe d'Afrique des nations 2021 au Cameroun, les ivoiriens seront éliminés 
            en huitièmes-de-finales par l'Égypte aux tirs-au-but
            </h2>
        </div>
    </div>

    <div class="image-container">
        <img src="img/konan7.jpeg" alt="Image seko fofana" class="imgplayer">
        <div class="overlay">
            <h2 class="overlay-text">Un choix qui va lui 
                permettre de vivre une CAN à domicile sous les couleurs des Éléphants. 
                Il devrait faire l'unanimité dans une défense de Côte d'Ivoire en pleine rénovation.
             </h2>
        </div>
    </div>

    <div class="image-container">
        <img src="img/konan3.jpeg" alt="Image ndicka" class="imgplayer">
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
          <a href="img/konan1.jpeg" data-fancybox = "gallery"data-caption="Can 2023 // Ivoirien">
              <img src="img/konan1.jpeg" alt="">
          </a>
         
      </swiper-slide>

      <swiper-slide>
          <a href="img/konan2.jpeg" data-fancybox = "gallery"data-caption="Can 2023 // Ivoirien">
              <img src="img/konan2.jpeg" alt="">
          </a>
          
      </swiper-slide>

      <swiper-slide>
          <a href="img/konan3.jpeg" data-fancybox = "gallery"data-caption="Can 2023 // Ivoirien">
              <img src="img/konan3.jpeg" alt="">
          </a>

      </swiper-slide>

      <swiper-slide>
          <a href="img/konan5.jpeg" data-fancybox = "gallery"data-caption="Can 2023 // Ivoirien">
              <img src="img/konan5.jpeg" alt="">
          </a>
   
      </swiper-slide>

      <swiper-slide>
          <a href="img/konan6.jpeg" data-fancybox = "gallery"data-caption="Can 2023 // Ivoirien">
              <img src="img/konan6.jpeg" alt="">
          </a>

      </swiper-slide>

      <swiper-slide>
          <a href="img/konan7.jpeg" data-fancybox = "gallery"data-caption="Can 2023 // Ivoirien">
              <img src="img/konan7.jpeg" alt="">
          </a>

      </swiper-slide>

  </swiper-container>
  </div>
<!-- footer -->
  <?php include 'footer.php' ?>


  <!-- Javascript -->
  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-element-bundle.min.js"></script>

  <script src="js/script.js"></script>