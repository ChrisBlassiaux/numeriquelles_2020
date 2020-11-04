<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="images/favicon.png">
    <title>Numeriqu'elles - Contact</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <header class="header">
      <div class="navbar">
        <div class="container-navbar">
          <h1>
            <a href="index.html">
              <img src="images/logo.png" alt="Logotype de numériqu'elles" class="logo">
            </a>
          </h1>
          <div class="contain-burger">
            <div class="burger-nav"></div>
          </div>
          <nav class="nav">
            <span class="section events-dropdown">
              <span class="section-title-events">
                Évènements
                <span class="fa fa-angle-down fa-2x"></span>
              </span> 
              <span class="events-cities">
                <a href="lille.html">Lille</a>
                <a href="maubeuge.html">Maubeuge</a>
                <a href="boulogne.html">Boulogne</a>
                <a href="lens.html">Lens</a>
              </span>
            </span>
            <a href="onisep.html" class="section">Préparation élèves onisep</a>
            <a href="ambassadors.html" class="section">Ambassadrices du numérique</a>
            <span class="section stages-dropdown">
              <span class="section-title-stages">
                <a href="internships.html">Stages</a> 
                <span class="fa fa-angle-down fa-2x"></span>
              </span>
              <span class="stages">
                <a href="https://lenord.fr/jcms/prd1_524489/stage-3-colonne-rechercher-un-stage">Site Département</a>
                <a href="https://www.monstageenligne.fr/">Site Onisep</a>
                <a href="https://www.monstagedetroisieme.fr/">Site Face Mel</a>
                <a href="https://stage3e.pasdecalais.fr/">Site Pas de Calais</a>
              </span>
            </span>
            
            <a href="contact.php" class="section active">Contact</a>
          </nav>  
        </div>
      </div>
      <div class="container-jumbotron">
        <div class="jumbotron jumbotron-8">
          <div class="presentation">
            <div class="text">
              <div class="container">
                <p class="name-city">Nous contacter</p>
              </div>
            </div>
            <div class="container">
              <a href="#discovery-event" class="btn btn-header">Découvrez l'évènement<i class="fa fa-angle-right"></i></a>
            </div> 
          </div>
        </div>
      </div>
    </header>

    <main class="main-form">
      <div class="container">
        <div class="container-title">
          <h2 class="title">Vous pouvez nous contacter : </h2>
          <div class="circles">
            &#11044
          </div>
        </div>
      <div class="form-full">
        <div class="form">
        <form id="contact-form" method="post" action="" role="form">
          <label for="firstname"></label>
          <input id="firstname" type="text" name="firstname"  placeholder="Votre prénom">
          <p class="comments"></p>
          <label for="name"></label>
          <input id="name" type="text" name="name"  placeholder="Votre Nom">
          <p class="comments"></p>
          <label for="email"></label>
          <input id="email" type="text" name="email"  placeholder="Votre Email">
          <p class="comments"></p>
          <label for="phone"></label>
          <input id="phone" type="text" name="phone"  placeholder="Votre Téléphone">
          <p class="comments"></p>
          <label for="message"></label>
          <textarea id="message" name="message"  placeholder="Votre Message" rows="4"></textarea>
          <p class="comments"></p>
          <div class="rgpd">
          <input type="checkbox" name="" id="">
          <p>J'accepte les termes et conditions et la politique de confidentialité</p>
        </div>
        <button type="submit" class="btn btn-primary">Envoyer<i class="fa fa-angle-right"></i></button>
        </form>
        </div>
      </div>
    </main>

    <footer class="footer">
      <div class="container">
        <div class="lists">
          <div class="list">
            <h4 class="title-list">Évènement numériqu'elles</h4>
            <ul>
              <li><a href="lille.html">Lille</a></li>
              <li><a href="maubeuge.html">Maubeuge</a></li>
              <li><a href="boulogne.html">Boulogne</a></li>
              <li><a href="lens.html">Lens</a></li>
            </ul>
          </div>
          <div class="list">
            <h4 class="title-list">Banques de stage</h4>
            <ul>
              <li><a href="https://lenord.fr/jcms/prd1_524489/stage-3-colonne-rechercher-un-stage ">Site département</a></li>
              <li><a href="https://www.monstageenligne.fr/">Site ONISEP</a></li>
              <li><a href="https://www.monstagedetroisieme.fr/">Site face MEL</a></li>
              <li><a href="https://stage3e.pasdecalais.fr/">Site Pas de Calais</a></li>
            </ul>
          </div>
          <div class="list">
            <h4 class="title-list">Autres rubriques</h4>
            <ul>
              <li><a href="onisep.html">Préparation élèves ONISEP</a></li>
              <li><a href="ambassadors.html">Ambassadrices du numérique</a></li>
              <li><a href="contact.php">Contact</a></li>
            </ul>
          </div>
          <div class="list">
            <h4 class="title-list">Autres informations</h4>
            <ul>
              <li><a href="presse.html">Revue de presse</a></li>
              <li><a href="news.html">Actualités</a></li>
              <li><a href="communication.html">Communication</a></li>
            </ul>
          </div>
         </div>
        </div>
      <div class="last">
        <a href="mentions-legales.html">Mentions légales</a>
        | © Copyright
      </div>
    </footer>
    
    <a href="#" title="Revenir en haut de page">
      <span class="back-to-top">
        <span class="fa fa-angle-up fa-2x"></span>
      </span>
    </a>
    
    <script src="js/nav.js"></script>
    <script src="js/contact.js"></script>
  </body>
</html>
