<?php
$title = "Les éléphants | jonathan bamba";
?>
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
<img class="pic" src="img/nouveau/bamba.jpg" alt="">
</div>

<div class="info-player">
<h2 class="name">Jonathan <br> Bamba</h2>
<br>
<p class="description">Jonathan Bamba, né le 26 mars 1996 à Alfortville (Val-de-Marne), <br> est un footballeur international ivoirien qui évolue au poste <br>d'ailier gauche au Celta de Vigo.</p>
                      
<br>
<br>
<p class="description">
Attaquant polyvalent, évoluant principalement sur l'aile gauche durant sa carrière,  <br>Jonathan Bamba utilise sa capacité d'accélération <br>afin de se projeter en 1 contre 1 ou de distiller des passes décisives. <br>
Le 28 décembre 2023, il est retenu dans la liste des vingt-sept <br>joueurs ivoiriens sélectionnés par Jean-Louis Gasset pour disputer  <br>la Coupe d'Afrique des nations 2023.
</p>

</div>

</div>

<!-- Deuxieme section -->
<div class="secondsection-player">

<div class="palmares">
<h3 class="titre-palmares">MATCHES AVEC <br> LA COTE D'IVOIRE</h3>
<p class="nbr">08</p>
<p class="saison">SAISON 2024/2025 <span>00</span></p>
</div>

<div class="palmares">
<h3 class="titre-palmares">BUTS AVEC  LA <br>COTE D'IVOIRE</h3>
<p class="nbr">02</p>
<p class="saison">SAISON 2023/2024<span>02</span></p>
</div>

<div class="palmares">
<h3 class="titre-palmares">PASSES DECISIVES AVEC <br> LA COTE D'IVOIRE</h3>
<p class="nbr">02</p>
<p class="saison">SAISON 2022/2023 <span>04</span></p>
</div>

</div>

<!-- Troisieme section -->

<h2 class="newstitle">DERNIERES INFOS</h2>

 <div class="thirdsection-player">

<div class="image-container">
        <img src="img/bamba.jpg" alt="Image seko fofana" class="imgplayer">
        <div class="overlay">
            <h2 class="overlay-text">Le Celta Vigo officialise la signature de Jonathan Bamba..</h2>
        </div>
    </div>

    <div class="image-container">
        <img src="img/bamb1.webp" alt="Image seko fofana" class="imgplayer">
        <div class="overlay">
            <h2 class="overlay-text">Titulaire indiscutable la saison passée sous les ordres de Paulo Fonseca, l’Ivoirien sort d’une campagne à 6 buts et 7 passes décisives en 34 matchs. </h2>
        </div>
    </div>

    <div class="image-container">
        <img src="img/bamb2.jpg" alt="Image seko fofana" class="imgplayer">
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
          <a href="img/bamb4.jpg" data-fancybox = "gallery"data-caption="Can 2023 // Ivoirien">
              <img style="max-width: 300px; height:300px" src="img/bamb4.jpg" alt="">
          </a>
         
      </swiper-slide>

      <swiper-slide>
          <a href="img/bamb6.webp" data-fancybox = "gallery"data-caption="Can 2023 // Ivoirien">
              <img style="max-width: 300px; height:300px" src="img/bamb6.webp" alt="">
          </a>
          
      </swiper-slide>

      <swiper-slide>
          <a href="img/badra3.webp" data-fancybox = "gallery"data-caption="Can 2023 // Ivoirien">
              <img style="max-width: 300px; height:300px" src="img/bamb3.jpg" alt="">
          </a>

      </swiper-slide>

      <swiper-slide>
          <a href="img/bamb5.webp.crdownload" data-fancybox = "gallery"data-caption="Can 2023 // Ivoirien">
              <img style="max-width: 300px; height:300px" src="img/bamb5.webp.crdownload" alt="">
          </a>
   
      </swiper-slide>

      <swiper-slide>
          <a href="img/bamba.jpg" data-fancybox = "gallery"data-caption="Can 2023 // Ivoirien">
              <img style="max-width: 300px; height:300px" src="img/bamba.jpg" alt="">
          </a>

      </swiper-slide>

      <swiper-slide>
          <a href="img/bamb2.jpg" data-fancybox = "gallery"data-caption="Can 2023 // Ivoirien">
              <img style="max-width: 300px; height:300px" src="img/bamb2.jpg" alt="">
          </a>

      </swiper-slide>

  </swiper-container>
  </div>

<?php include 'footer.php' ?>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-element-bundle.min.js"></script>

<script src="js/script.js"></script>