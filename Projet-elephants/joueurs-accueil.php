<?php
$title = "Les éléphants | joueurs";
?>
<?php include 'header.php' ?>



<style>
  * {
    margin: 0;
    padding: 0;

  }

  .terrain {
    background-image: url('img/squad2.jpg');
    background-size: 1200px;
    margin: auto;
    background-repeat: no-repeat;
    width: 80%;
    height: 1000px;
    font-family: Arial, Helvetica, sans-serif;
    font-size: 20px;
  }

  .ba {
    background-image: url('img/2015.png');
    background-size: cover;
    background-repeat: no-repeat;
    height: 350px;

    position: relative;


  }

  button {
    padding-left: 18px;
    padding-right: 18px;
    padding-top: 8px;
    padding-bottom: 8px;
    margin: 20px;
  }

  h1 {
    color: orangered;
    text-align: center;
    font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
    font-size: 45px;
    font-weight: bold;
    margin-bottom: 25px;
    border-radius: 50px 50px 0 0;
    background-color: rgb(255, 255, 255);
    position: relative;
    top: 185px;

  }

  a {
    text-decoration: none;
    color: black;

  }

  a:hover {
    color: white;
  }

  .btn {
    transition: transform 0.2s;
    /* Animation lors du hover */
  }

  .btn:hover {
    transform: scale(1.1);
    /* Agrandissement au survol */
  }


  .grid-container {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    /* 2 colonnes pour les petits écrans */
    gap: 50px;
  }

  @media (min-width: 768px) {
    .grid-container {
      grid-template-columns: repeat(3, 1fr);
      /* 3 colonnes pour les écrans moyens */
    }
  }

  @media (min-width: 992px) {
    .grid-container {
      grid-template-columns: repeat(4, 1fr);
      /* 4 colonnes pour les grands écrans */
    }
  }

  .grid-container a {
    text-decoration: none;
    color: orangered;
  }

  .grid-container a:hover {
    color: gray;

  }



  
  /* Bouton revenir en haut de page  */

  #backToTopBtn {
    width: 80px;
    position: fixed;
    bottom: 20px;
    right: 30px;
    z-index: 99;
    display: none;
    animation: fadeIn 0.5s;
    background-color: orangered;
    color: white;
    font-size: 24px;
    border: none;
    outline: none;
    cursor: pointer;
    /* padding: 15px; */
    border-radius: 200px;
    box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2);
    transition: background-color 0.3s, transform 0.3s ease;
}

/* #backToTopBtn:: */
#backToTopBtn:hover {
    background-color: #376a03;
    transform: scale(1.1);
}

@keyframes fadeIn {
    from { opacity: 0; }
    to { opacity: 1; }
}

@keyframes fadeOut {
    from { opacity: 1; }
    to { opacity: 0; }
}

#backToTopBtn.show {
    display: block;
    animation: fadeIn 0.5s;
    display: flex;
    align-items: center;
    justify-content: center;
}

#backToTopBtn.hide {
    animation: fadeOut 0.5s;
}
</style>


<div class="ba">
  <h2 style="text-align: center;color:orangered ;padding-top:50px ; font-size:45px"><b>Joueurs </b></h2>
  <h1>EQUIPE</h1>
</div>



<div class="containerr mt-5">
  <div class="text-center mb-4 d-flex flex-wrap justify-content-around" style="width: 100%;">
    <button class="btn btn-primary m-2" data-toggle="collapse" data-target="#section1" style="font-size: 18px;">ATTAQUANTS</button>
    <button class="btn btn-secondary m-2" data-toggle="collapse" data-target="#section2" style="font-size: 18px;">MILIEUX</button>
    <button class="btn btn-success m-2" data-toggle="collapse" data-target="#section3" style="font-size: 18px;">DÉFENSEURS</button>
    <button class="btn btn-danger m-2" data-toggle="collapse" data-target="#section4" style="font-size: 18px; ">GARDIENS</button>
  </div>




  <div class="containerr mt-3">
    <div class="grid-container">
      <div id="section1" class="collapse">
        <div class="card card-body mb-3">
          <ul class="list-unstyled text-center" style="color: orangered;">
            <li><a href="details-sebastien.php">S.HALLER</a></li>
            <li><a href="details-jeanphilippe.php">J.KRASSO</a></li>
            <li><a href="details-simon.php">S.ADINGRA</a></li>
            <li><a href="details-jeremie.php">J.BOGA</a></li>
            <li><a href="details-jonathan.php">J.BAMBA</a></li>
            <li><a href="details-nicolas.php">N.PEPE</a></li>
            <li><a href="details-karim.php">K.KONATE</a></li>
            <li><a href="details-max.php">M.GRADEL</a></li>
            <li><a href="details-oumar.php">O.DIAKITE</a></li>
            <li><a href="details-christian.php">K.CHRISTAN</a></li>
          </ul>
        </div>
      </div>

      <div id="section2" class="collapse">
        <div class="card card-body mb-3">
          <ul class="list-unstyled text-center" style="color: orangered;">
            <li><a href="details-seko.php">S.FOFANA</a></li>
            <li><a href="details-jeanmichael.php">J.SERI</a></li>
            <li><a href="details-idrissa.php">I.DOUMBIA</a></li>
            <li><a href="details-ibrahim.php">I.SANGARE</a></li>
            <li><a href="details-franck.php">F.KESSIE</a></li>
            <li><a href="details-lazare.php">L.AMANI</a></li>
          </ul>
        </div>
      </div>

      <div id="section3" class="collapse">
        <div class="card card-body mb-3">
          <ul class="list-unstyled text-center " style="color: orangered;">
            <li><a href="details-evan.php">E.N'DICKA</a></li>
            <li><a href="details-willy.php">W.BOLLY</a></li>
            <li><a href="details-odilon.php">O.KOSSONOU</a></li>
            <li><a href="details-ousmane.php">O.DIOMANDE</a></li>
            <li><a href="details-wilfried.php">W.SINGO</a></li>
            <li><a href="details-serge.php">S.AURIER</a></li>
            <li><a href="details-ghislain.php">G.KONAN</a></li>
            <li><a href="details-idrissa.php">I.DIALLO</a></li>
          </ul>
        </div>
      </div>

      <div id="section4" class="collapse">
        <div class="card card-body mb-3">
          <ul class="list-unstyled text-center ">
            <li><a href="details-yahia.php">Yahia FOFANA</a></li>
            <li><a href="details-badra.php">Badra ALI</a></li>
            <li><a href="details-charles.php">Charles FOLLY</a></li>

          </ul>
        </div>
      </div>
    </div>
  </div>

</div>



<h2 style="font-size: 50px; font-weight:bold; color:orangered; text-align:center">XI de Depart</h1>

  <div class="terrain">
    <!-- /* partie gardien */ -->
    <div class="gardien" style=" display: flex; justify-content: center; padding-top: 30px; padding-top: 30px;">
      <div class="">
        <a href="details-yahia.php">
          <img src="img/maillot.png" alt="" style="height: 100px; width: 140px; ">
        </a>
        <p style="text-align: center;"><a href="details-yahia.php" style="text-decoration: none;"><b>Y.FOFANA</b></a></p>
      </div>
    </div>


    <div class="defenseur" style="display: flex;justify-content: space-around; padding-top: 55px;">

      <div class="">
        <a href="details-serge.php">
          <img src="img/maillot.png" alt="" style="height: 100px; width: 140px; ">
        </a>
        <p style="text-align: center;"><a href="details-serge.php" style="text-decoration: none;"><b>AURIER</b></a></p>
      </div>

      <div class="">
        <a href="details-evan.php">
          <img src="img/maillot.png" alt="" style="height: 100px; width: 140px; ">
        </a>
        <p style="text-align: center;"><a href="details-evan.php" style="text-decoration: none;"><b>NDICKA</b></a></p>
      </div>

      <div class="">
        <a href="details-odilon.php">
          <img src="img/maillot.png" alt="" style="height: 100px; width: 140px; ">
        </a>

        <p style="text-align: center;"><a href="details-odilon.php" style="text-decoration: none;"><b>KOSSOUNOU</b></a></p>
      </div>

      <div class="">
        <a href="details-ghislain.php">
          <img src="img/maillot.png" alt="" style="height: 100px; width: 140px; ">
        </a>
        <p style="text-align: center;"><a href="details-ghislain.php" style="text-decoration: none;"><b>KONAN</b></a></p>
      </div>

    </div>


    <div class="mdf" style="display: flex; justify-content: center; padding-top: 55px;">
      <div class="">
        <a href="details-jeanmichael.php">
          <img src="img/maillot.png" alt="" style="height: 100px; width: 140px; ">
        </a>
        <p style="text-align: center;"><a href="details-jeanmichael.php" style="text-decoration: none;"><b>SERI</b></a></p>
      </div>

    </div>


    <div class="center" style="display: flex;justify-content: space-evenly;">
      <div class="">
        <a href="details-seko.php">
          <img src="img/maillot.png" alt="" style="height: 100px; width: 140px; ">
        </a>
        <p style="text-align: center;"><a href="details-seko.php" style="text-decoration: none;"><b>S.FOFANA</b></a></p>
      </div>

      <div class="">
        <a href="details-ibrahim.php">
          <img src="img/maillot.png" alt="" style="height: 100px; width: 140px; ">
        </a>
        <p style="text-align: center;"><a href="details-ibrahim.php" style="text-decoration: none;"><b>SANGARE</b></a></p>
      </div>
    </div>


    <div class="center" style="display: flex;justify-content: space-around; padding-top: 25px; text-align: center;">
      <div class="">
        <a href="details-simon.php">
          <img src="img/maillot.png" alt="" style="height: 100px; width: 140px; ">
        </a>
        <p style="text-align: center;"><a href="details-simon.php" style="text-decoration: none;"><b>ADINGRA</b></a></p>
      </div>

      <div class="">
        <a href="details-jeanphilippe.php">
          <img src="img/maillot.png" alt="" style="height: 100px; width: 140px;  ">
        </a>
        <p style="text-align: center;"><a href="details-jeanphilippe.php" style="text-decoration: none;"><b>KRASSO</b></a></p>
      </div>

      <div class="">
        <a href="details-oumar.php">
          <img src="img/maillot.png" alt="" style="height: 100px; width: 140px; ">
        </a>
        <p style="text-align: center;"><a href="details-oumar.php" style="text-decoration: none;"><b>DIAKITE</b></a></p>
      </div>

    </div>

  </div>

  <!-- Bouton retour en haut -->
  <button onclick="scrollToTop()" id="backToTopBtn" title="Retour en haut">↑</button>

  <?php include 'footer.php' ?>