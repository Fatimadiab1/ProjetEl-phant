<?php include 'header.php' ?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>Document</title>
  <style>
    *{
    margin: 0;
    padding: 0;
    
}
.terrain{
    background-image: url('img/squad2.jpg');
    background-size: 1200px;
    margin: auto;
    background-repeat: no-repeat;
    width: 80%;
    height: 1000px;
    font-family:Arial, Helvetica, sans-serif;
    font-size: 20px;
}
.ba{
    background-image: url('img/2015.png');
    background-size: cover;
    background-repeat: no-repeat;
    height: 350px;
    
   position: relative;
  
    
}

    button{
      padding-left: 18px;
      padding-right: 18px;
      padding-top: 8px;
      padding-bottom: 8px;
      margin: 20px;
    }
    h1{
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
    a{
        text-decoration: none;
        color: black;

    }
    a:hover{
        color: white;
    }

    .btn {
    transition: transform 0.2s; /* Animation lors du hover */
}

.btn:hover {
    transform: scale(1.1); /* Agrandissement au survol */
}


.grid-container {
            display: grid;
            grid-template-columns: repeat(2, 1fr); /* 2 colonnes pour les petits écrans */
            gap: 50px; 
        }

        @media (min-width: 768px) {
            .grid-container {
                grid-template-columns: repeat(3, 1fr); /* 3 colonnes pour les écrans moyens */
            }
        }

        @media (min-width: 992px) {
            .grid-container {
                grid-template-columns: repeat(4, 1fr); /* 4 colonnes pour les grands écrans */
            }
        }

        .grid-container a {
          text-decoration: none;
          color: orangered;
        }
        .grid-container a:hover{
          color: gray;

        }
  </style>
</head>
<body>

  <div class="ba">
      <h2 style="text-align: center;color:orangered ;padding-top:50px ; font-size:45px"><b>Joueurs </b></h2>
    <h1>EQUIPE</h1>
  </div>

   
  
  <div  class="buttom" style="display: flex; justify-content: space-evenly; ">

    <button><b>GARDIENS</b></button>
    <button><b>DEFENSEURS</b></button>
    <button><b>MILLIEUX</b></button>
    <button><b>ATTAQUANTS</b></button>
  </div>
  
</div>

  
<h2 style="font-size: 50px; font-weight:bold; color:orangered; text-align:center">XI de depart</h1>

  <div class="terrain">
   <!-- /* partie gardien */ -->
     <div class="gardien" style=" display: flex; justify-content: center; padding-top: 30px; padding-top: 30px;">
      <div class="">
        <img src="img/maillot.png" alt="" style="height: 100px; width: 140px; ">
      <p style="text-align: center;"><a href=""style="text-decoration: none;"><b>Y.FOFANA</b></a></p>
      </div>
     </div>


    <div class="defenseur" style="display: flex;justify-content: space-around; padding-top: 55px;">

      <div class="">
        <img src="img/maillot.png" alt="" style="height: 100px; width: 140px; ">
      <p style="text-align: center;"><a href="details-serge.php" style="text-decoration: none;"><b>AURIER</b></a></p>
      </div>

      <div class="">
        <img src="img/maillot.png" alt="" style="height: 100px; width: 140px; ">
      <p style="text-align: center;"><a href="" style="text-decoration: none;"><b>NDICKA</b></a></p>
      </div>

      <div class="">
        <img src="img/maillot.png" alt="" style="height: 100px; width: 140px; ">
      <p style="text-align: center;"><a href="" style="text-decoration: none;"><b>KOSSOUNOU</b></a></p>
      </div>

      <div class="">
        <img src="img/maillot.png" alt="" style="height: 100px; width: 140px; ">
      <p style="text-align: center;"><a href="" style="text-decoration: none;"><b>KONAN</b></a></p>
      </div>

    </div>


    <div class="mdf" style="display: flex; justify-content: center; padding-top: 55px;">
      <div class="">
        <img src="img/maillot.png" alt="" style="height: 100px; width: 140px; ">
      <p style="text-align: center;"><a href="" style="text-decoration: none;"><b>SERI</b></a></p>
      </div>

    </div>


    <div class="center" style="display: flex;justify-content: space-evenly;">
        <div class="">
        <img src="img/maillot.png" alt="" style="height: 100px; width: 140px; ">
        <p style="text-align: center;"><a href="details-seko.php" style="text-decoration: none;"><b>S.FOFANA</b></a></p>
        </div>

        <div class="">
          <img src="img/maillot.png" alt="" style="height: 100px; width: 140px; ">
        <p style="text-align: center;"><a href="" style="text-decoration: none;"><b>SANGARE</b></a></p>
        </div>
    </div>

 
    <div class="center" style="display: flex;justify-content: space-around; padding-top: 25px; text-align: center;">
      <div class="">
      <img src="img/maillot.png" alt="" style="height: 100px; width: 140px; ">
      <p style="text-align: center;"><a href="details-simon.php" style="text-decoration: none;"><b>ADINGRA</b></a></p>
      </div>

      <div class="">
        <img src="img/maillot.png" alt="" style="height: 180px; width: 140px;  padding-top: 75px;">
      <p style="text-align: center;"><a href="" style="text-decoration: none;"><b>KRASSO</b></a></p>
      </div>

      <div class="">
        <img src="img/maillot.png" alt="" style="height: 100px; width: 140px; ">
      <p style="text-align: center;"><a href="" style="text-decoration: none;"><b>DIAKITE</b></a></p>
      </div>
      
  </div>

  </div>
</body>
</html>

<?php include 'footer.php' ?>