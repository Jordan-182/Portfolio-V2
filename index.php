<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="reset.css">
    <link rel="stylesheet" href="style.css">
    <script type="module" src="script.js"></script>
    <title>Jordan Pieton | Développeur Web</title>
</head>
<body>
    <header>
        <nav>
             <a href="#intro" class="nav-icon" aria-label="visit homepage" aria-current="page"></a>
             <div class="text-logo">
                <a href="#intro"><span>Jordan Pieton</span></a>                
             </div>
             <div class="main-navlinks">
                 <button class="hamburger" type="button" aria-label="Toggle navigation" aria-expanded="false">
                     <span></span>
                     <span></span>
                     <span></span>
                 </button>
                 <div class="navlinks-container">
                     <a href="#intro" aria-current="page" class="active">Accueil</a>
                     <a href="#about">A propos</a>
                     <a href="#projects">Projets</a>
                     <a href="#realisations">Réalisations</a>
                     <a href="#contact">Contact</a>
                     <img src="#" alt="Logo Jordan Pieton" class="mobile-nav-logo">
                </div>
             </div>
       </nav>
      </header>
      <main>
        <section class="intro" id="intro">
          <div class="intro--illustration">
            <img src="img/index.png" alt="illustration" height="500" width="500">
          </div>
          <div class="intro--text">
            <p>Hello World! Je m'appelle</p>
            <h1 class="intro--text--title">Jordan Pieton</h1>
            <h2 class="intro--text--subtitle">Développeur web junior autodidacte et passionné.</h2>
            <p>
              Je suis constamment à la recherche de nouvelles opportunités pour approfondir mes compétences, relever des défis techniques et contribuer 
              à des projets innovants. <br><br>Mon objectif est de rejoindre une équipe dynamique où je pourrai apprendre, évoluer, et mettre mes connaissances 
              au service de solutions modernes et performantes.
            </p>
            <div class="intro--text--links">
              <a href="https://www.linkedin.com/in/jordan-pieton-005946121/" target="_blank" class="cta--reverse"><i class="fa-brands fa-linkedin"></i> LinkedIn</a>
              <a href="#contact" class="cta"><i class="fa-solid fa-envelope"></i> Contactez moi !</a>
            </div>
          </div>
        </section>
        <section class="about" id="about"> 
          <div class="about--text">
            <h2 class="about--title">A propos de moi</h2>
            <p>
              Je suis Jordan, un passionné de technologie de 33ans en pleine transition professionnelle vers le 
              développement informatique, avec une passion particulière pour le développement front-end. <br><br>Mon parcours m'a amené à explorer 
              différentes voies, mais c'est dans le monde du code que je trouve ma véritable motivation et épanouissement. <br><br>
              Actuellement en auto-apprentissage, je m'immerge dans les langages fondamentaux du web : HTML, CSS et JavaScript. Ces derniers mois, 
              j'ai travaillé assidûment sur divers projets personnels, que vous pourrez découvrir dans la suite de ce portfolio. Chacun 
              de ces projets représente une étape de mon apprentissage et témoigne de mon engagement à maîtriser les compétences nécessaires pour 
              réussir dans le domaine du développement front-end.  <br><br>
              Mon objectif est clair : intégrer une formation spécialisée pour approfondir mes connaissances et acquérir un diplôme reconnu qui me 
              permettra d'accéder au marché du travail en tant que développeur web front-end. Je suis convaincu que la combinaison de ma passion 
              pour la technologie, ma détermination à apprendre et mon souci du détail font de moi un candidat idéal pour évoluer dans ce secteur 
              en constante évolution. <br><br>
              Ce portfolio est non seulement un reflet de mon travail actuel, mais aussi une vitrine de mon potentiel futur. J'espère que vous 
              prendrez plaisir à explorer mes projets et à suivre mon parcours de développement. N'hésitez pas à me contacter si vous souhaitez 
              en savoir plus sur mes compétences, mes projets ou mes aspirations professionnelles.
            </p>
          </div>
          <div class="about--illustration">
            <img src="img/about.png" alt="illustration" width="350" height="350">
          </div>
        </section>
        <section class="projects" id="projects">
          <h2 class="projects--title">Projets</h2>
          <article class="projects--container">
            <div class="projects--card">
              <img src="img/blink.png" alt="illustration projet" class="projects--card--img" width="280" height="auto">
              <h3 class="projects--card--name">Blink182-fr</h3>
              <p class="projects--card--description">"Blink-182-fr" est un site réalisé sur un groupe de musique. <br><br>Il s'agit du premier projet que j'ai développé dans le cadre de mon apprentissage du HTML et du CSS. <br><br> J'ai utilisé Tailwind pour me faciliter la mise en page et le responsive. <br><br>Il comporte un peu de JavaScript pour l'interactivité du menu "hamburger" sur les petits écrans.</p>
              <p class="projects--card--stack"><i class="fa-brands fa-html5"></i> <i class="fa-brands fa-css3-alt"></i> <i class="fa-brands fa-js"></i></p>
              <a href="https://blink-182-fr.web.app/" target="_blank" class="projects--card--btn">Visiter le site</a>
            </div>
            <div class="projects--card">
              <img src="img/lens.png" alt="illustration projet" class="projects--card--img" width="280" height="auto">
              <h3 class="projects--card--name">Lens Quiz</h3>
              <p class="projects--card--description">Dans le cadre de l'apprentissage du JavaScript, j'ai souhaité réaliser un jeu sous forme de quiz afin de pouvoir travailler sur de nombreux aspects du langage. <br><br> Ce quiz est basé sur l'histoire d'un club de football. <br><br>Le quiz propose 10 questions dans un ordre aléatoire avec 4 propositions de réponses chacune, puis un tableau qui récapitule les scores.</p>
              <p class="projects--card--stack"><i class="fa-brands fa-html5"></i> <i class="fa-brands fa-css3-alt"></i> <i class="fa-brands fa-js"></i></p>
              <a href="https://rclensquiz.web.app/" target="_blank" class="projects--card--btn">Visiter le site</a>
            </div>
            <div class="projects--card">
              <img src="img/meteo.png" alt="illustration projet" class="projects--card--img" width="280" height="auto">
              <h3 class="projects--card--name">Direct Meteo</h3>
              <p class="projects--card--description">Lorsque j'ai découvert le concept d'API, j'ai souhaité développer une application web météo afin de pratiquer les appels API et l'intégration des résultats obtenus dans le HTML. <br><br> L'application demande l'accord à l'utilisateur pour accéder à sa géolocalisation, mais l'utilisateur peut également rechercher la ville de son choix pour en obtenir la météo en temps réel.</p>
              <p class="projects--card--stack"><i class="fa-brands fa-html5"></i> <i class="fa-brands fa-css3-alt"></i> <i class="fa-brands fa-js"></i></p>
              <a href="https://direct-meteo.web.app/" target="_blank" class="projects--card--btn">Visiter le site</a>
            </div>
            <div class="projects--card">
              <img src="img/mars.png" alt="illustration projet" class="projects--card--img" width="280" height="auto">
              <h3 class="projects--card--name">Mars Pictures</h3>
              <p class="projects--card--description">Pour poursuivre la découverte des API, j'ai souhaité m'entraîner sur celle de la NASA. <br><br> J'ai donc conçu un site qui permet à l'utilisateur d'accéder aux photographies réalisées sur Mars par le robot Curiosity. <br><br>La recherche de photos s'effectue par date, il suffit de sélectionner une date pour que le site affiche l'ensemble des photos transmises par le robot à la date choisie.</p>
              <p class="projects--card--stack"><i class="fa-brands fa-html5"></i> <i class="fa-brands fa-css3-alt"></i> <i class="fa-brands fa-js"></i></p>
              <a href="https://mars-pictures.web.app/" target="_blank" class="projects--card--btn">Visiter le site</a>
            </div>
          </article>
        </section>
        <section class="realisations" id="realisations">
          <h2 class="realisations--title">Réalisation(s)</h2>
          <div class="realisations--card">
            <div class="realisations--text">
              <h3 class="realisations--name">Harmonie Intérieure</h3>
              <p class="realisations--description">J'ai eu le plaisir de créer le site vitrine d'une amie qui lance son activité de sophrologie. <br><br> Ce site a pour but de la faire connaitre à de nouveaux client et comporte une page pour présenter son parcours, puis une page présentant chacune des prestations qu'elle propose. <br><br>Le site propose également un formulaire de contact pour la contacter directement par mail et des liens vers la page de prise de rendez-vous sur Résalib.</p>
              <a href="#" class="realisations--btn">Visiter le site <br> (pas encore en ligne)</a>
            </div>
            <div class="realisations--illustrations">
              <img src="img/aphton.png" alt="illustration aphton" width="400" height="auto">
            </div>
          </div>
        </section>
        <section class="contact" id="contact">
          <h2 class="contact--title">Contactez moi !</h2>
          <div class="contact--container">
            <div class="contact--illustration">
              <img src="img/contact.png" alt="illustration" width="350" height="350">
              <div class="contact--links">
                <a href="https://www.linkedin.com/in/jordan-pieton-005946121/" target="_blank" class="contact--link--btn"><i class="fa-brands fa-linkedin"></i> LinkedIn</a>
                <a href="#" target="_blank" class="contact--link--btn"><i class="fa-brands fa-square-github"></i> Github</a>
              </div>
            </div>
            <div class="contact--form">
              <?php
              error_reporting(E_ALL);
              ini_set('display_errors', 1);
              
                if ($_SERVER["REQUEST_METHOD"] === "POST") {
                // Fonction pour nettoyer les données utilisateur
                function clean_input($data) {
                 return htmlspecialchars(stripslashes(trim($data)));
                }

                 // Récupération et nettoyage des données
                  $Name = clean_input($_POST['Name']);
                  $email = clean_input($_POST['Email']);
                  $subject = clean_input($_POST['Subject']);
                  $message = clean_input($_POST['Message']);

                // Validation des champs
                 if (empty($Name) || empty($subject) || !filter_var($email, FILTER_VALIDATE_EMAIL) || empty($message)) {
                  $response = array("status" => "error", "message" => "Erreur : Tous les champs requis doivent être correctement remplis.");
                } else {
                 // Adresse email sécurisée (non visible côté client)
                 $to = "contact@jordanpieton.fr";
                 $subject = "Nouveau message de $Name";
                 $body = "Nom : $Name\nEmail : $email\nMessage :\n$message";
                 $headers = "From: no-reply@jordanpieton.fr";

                 // Envoi de l'email
                  if (mail($to, $subject, $body, $headers)) {
                  $response = array("status" => "success", "message" => "Message envoyé avec succès.");
                  } else {
                 $response = array("status" => "error", "message" => "Erreur lors de l'envoi du message.");
                  }
                }
 
                 // Retourner la réponse au format JSON
                 header('Content-Type: application/json');
                 echo json_encode($response);
                 exit;
                }
              ?>

              <!-- Formulaire de contact -->
               <form id="contactForm" method="post">
                <label for="Name">Votre nom</label>
                <input type="text" name="Name" id="Name" autocomplete="name" required>
    
                <label for="Email">Votre e-mail</label>
                <input type="email" name="Email" id="Email" autocomplete="email" required>
    
                <label for="Subject">Objet</label>
                <input type="text" name="Subject" id="Subject" required>
    
                <label for="Message">Votre message</label>
                <textarea name="Message" id="Message" required></textarea>
    
                <button class="form--btn" type="submit">Envoyer</button>
             </form>

            <!-- Div pour afficher le message -->
             <div id="formMessage"></div>
            </div>
          </div>
        </section>
      </main>
      <footer class="footer" id="footer">
        <p>Jordan Pieton 2024</p>
        <p>Tous droits réservés</p>
        <a href="#">Mentions légales</a>
      </footer>
      <script src="form.js"></script>
</body>
</html>