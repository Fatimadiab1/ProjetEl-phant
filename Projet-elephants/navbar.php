<!-- HTML Structure -->
<div class="nav">
  <div class="cc"></div>
  <div class="image">
    <a href="index.php"><img src="img/OIP (6).png" alt="cost" /></a>
    <span>
      <h2 style="color: white">CÔTE D'IVOIRE</h2>
      <h4 class="elephants-title">Les Elephants</h4>
    </span>
  </div>
  <div class="bb"></div>

  <div class="link">
    <div class="log">
      <img src="img/OI.png" alt="" style="width: 100px;" />
      <img src="img/OIP.jpg" alt="" style="border-radius: 35px; width:100px; height:70px; margin:5px" />
    </div>
    <ul id="menu">
      <li><a href="index.php">Accueil</a></li>
      <li><a href="joueurs-accueil.php">Joueurs</a></li>
      <li><a href="apropos.php">A propos</a></li>
      <li><a href="historique.php">Historique</a></li>
    </ul>
    <button class="hamburger" onclick="toggleMenu()">☰</button>
  </div>
</div>

<style>

.nav {
  display: flex;
  justify-content: space-between;
  align-items: center;
  padding: 10px;
  background-color: orangered;
  position: relative;
}

.image {
  display: flex;
  align-items: center;
}

.elephants-title {
  font-size: 30px;
  color: orangered;
  position: relative;
  text-shadow: 1px 1px 0 white, -1px -1px 0 white, 1px -1px 0 white, -1px 1px 0 white;
}


.link ul {
  list-style: none;
  display: flex;
  gap: 15px;
  margin: 0;
}

.hamburger {
  display: none;
  background: none;
  border: none;
  font-size: 30px;
  color: white;
  cursor: pointer;
}

@media (max-width: 768px) {
  .link ul {
    display: none;
    flex-direction: column;
    position: absolute;
    top: 100%; 
    left: 0;
    background-color:orangered;
    width: 100%; 
    padding: 10px;
    border-radius: 0 0 5px 5px;
    box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2); 
    transition: all 0.3s ease;
  }

  .link ul.show {
    display: flex;
  }

  .link ul li {
    padding: 10px 0;
  }

  .link ul li a {
    color: white;
    text-decoration: none;
    font-size: 18px;
  }

  .hamburger {
    display: inline;
  }
}
</style>

<!-- Js -->
<script>
function toggleMenu() {
  const menu = document.getElementById("menu");
  menu.classList.toggle("show");
}
</script>
