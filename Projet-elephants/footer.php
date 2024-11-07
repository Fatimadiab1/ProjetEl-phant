<footer class="footer-bg pt-4 pb-4">
  <div class="container">
    <div class="row">
      <div class="col-lg col">
        <h5 class="footer-text">LES ÉLÉPHANTS</h5>
        <ul class="list-unstyled footer-text">
          <li><a href="#">Equipe</a></li>
          <li><a href="#">Féminines</a></li>
          <li><a href="#">Basketball</a></li>
          <li><a href="#">Club</a></li>
          <li><a href="#">Fondation</a></li>
          <li><a href="#">Partenaires</a></li>
        </ul>
      </div>
      <div class="col-lg col">
        <h5 class="footer-text">SERVICES</h5>
        <ul class="list-unstyled footer-text">
          <li><a href="#">Mon compte</a></li>
          <li><a href="#">Boutique</a></li>
        </ul>
      </div>
      <div class="col-lg col">
        <h5 class="footer-text">LANGUES</h5>
        <ul class="list-unstyled footer-text">
          <li><a href="#">Français</a></li>
          <li><a href="#">English</a></li>
          <li><a href="#">Português</a></li>
          <li><a href="#">Español</a></li>
        </ul>
      </div>
      <div class="col-lg col">
        <h5 class="footer-text">AIDE</h5>
        <ul class="list-unstyled footer-text">
          <li><a href="#">Mentions légales</a></li>
          <li><a href="#">Données personnelles</a></li>
          <li><a href="#">Cookies</a></li>
          <li><a href="#">Centre d'aide</a></li>
        </ul>
      </div>
      <div class="col-lg col">
        <h5 class="footer-text">REJOIGNEZ-NOUS</h5>
        <div class="social-icons footer-text">
        <a href="https://www.facebook.com/federationivoiriennedefootball/?locale=fr_FR" target="_blank"><i class="fab fa-facebook-f"></i></a>
          <a href="https://www.instagram.com/fif.ci/?hl=fr" target="_blank"><i class="fab fa-instagram"></i></a>
          <a href="https://x.com/saedeciv"target="_blank"><i class="fab fa-twitter"></i></a>
          <a href="https://www.youtube.com/@fifci"target="_blank"><i class="fab fa-youtube"></i></a>
        </div>
        <div clas="footer-image"><img src="img/FIF_Co╠éte_d'Ivoire_logo.png" alt="Votre image"></div>
        
      </div>
    </div>
  </div>
</footer>


<script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/gsap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/gsap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/ScrollTrigger.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/ScrollToPlugin.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/MotionPathPlugin.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/TextPlugin.min.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.umd.js"></script>

<script>
  // use a script tag or an external JS file
  document.addEventListener("DOMContentLoaded", (event) => {
    gsap.registerPlugin(
      ScrollTrigger,
      ScrollToPlugin,
      MotionPathPlugin,
      TextPlugin
    );
    // gsap code here!
  });
</script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
  AOS.init();
</script>





<script>
  Fancybox.bind("[data-fancybox]", {
    // Your custom options
  });
</script>



<!-- Bouton revenir en haut de page  -->
<script>
  // Fonction d'affichage/masquage du bouton lors du défilement
  window.onscroll = function() {
    const backToTopBtn = document.getElementById("backToTopBtn");
    if (document.body.scrollTop > 200 || document.documentElement.scrollTop > 200) {
      backToTopBtn.classList.add("show");
      backToTopBtn.classList.remove("hide");
    } else {
      backToTopBtn.classList.add("hide");
      backToTopBtn.classList.remove("show");
    }
  };

  // Fonction de défilement en douceur vers le haut de la page
  function scrollToTop() {
    window.scrollTo({
      top: 0,
      behavior: "smooth"
    });
  }
</script>
<script>
  function toggleMenu() {
    const menu = document.getElementById("menu");
    menu.classList.toggle("show");
  }
</script>

</html>