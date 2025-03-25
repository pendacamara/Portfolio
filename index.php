<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio de Penda</title>
    <link rel="stylesheet" href="styles.css">
    <script src="animation.js"></script>

</head>
<body>
<header class="header">
    
    <nav class="navbar">
        <ul>
            <li><a href="#hero">Accueil</a></li>
            <li><a href="#projects">Projets</a></li>
            <li><a href="#skills">Compétences</a></li>
            <li><a href="#education">Expériences</a></li>
            <li><a href="#contact">Contact</a></li>
            <li><a href="#socials">socials</a></li>
            
        </ul>
    </nav>
</header>


<section id="hero" class="hero">
    <div class="content">
        <h1>Bienvenue, je suis Penda</h1>
        <p>Étudiante à EPITECH en quête de nouvelles opportunités. 
            Passionnée par le développement Web front-end avec 
            deux ans d'expérience.</p>
        <button class="btn-cv"><a href="images/moncv.pdf" download="CV">Télécharger mon CV</a></button>
    </div>
    <div class="profile-image">
        <img src="images/profile-image.jpg" alt="Penda">
    </div>
</section>


    <section id="projects" class="projects">
    <h2>Mes Projets</h2>
    <div class="project-list">
        <article class="project">
            <img src="images/tweeter.png" alt="Projet 1">
            <h3>TWEETER</h3>
            <p>Reproduction du réseau social<br>Utilisation de PHP<br>Base de données relationnelle
            </p>
        </article>
        <article class="project">
            <img src="images/puissance4.png" alt="Projet 2">
            <h3>PUISSANCE 4</h3>
            <p>Création d’une Interface de je
            jeu<br>Réalisation d’un système de jeu tour par tour en JS</p>
        </article>
        <article class="project">
            <img src="images/meetic.png" alt="Projet 3">
            <h3>MY MEETIC</h3>
            <p>Reproduction du site de rencontre<br>
            Utilisation de PHP</p>
        </article>
    </div>
</section>


<section id="skills" class="skills">
    <h2>Mes Compétences</h2>
    <div class="skills-list">
        <div class="skill">
            <img src="images/html.png" alt="HTML Logo">
            <h3>HTML</h3>
        </div>
        <div class="skill">
            <img src="images/css.png" alt="CSS Logo">
            <h3>CSS</h3>
        </div>
        <div class="skill">
            <img src="images/js.png" alt="JavaScript Logo">
            <h3>JS</h3>
        </div>
        <div class="skill">
            <img src="images/php.png" alt="PHP Logo">
            <h3>PHP</h3>
        </div>
        <div class="skill">
            <img src="images/sass.png" alt="SASS Logo">
            <h3>SASS</h3>
        </div>
    </div>
</section>


<section id="education" class="projects">
    <h2>Mes éxperience professionelle </h2>
    <div class="project-list">
        <article class="project">
            <img src="images/logo_action.png" alt="Projet 1">
            <h3>Action</h3>
            <p>Employée libre service chez action </p>
        </article>
        <article class="project">
            <img src="images/amazon.jpg" alt="Projet 2">
            <h3>Livraison</h3>
            <p>Livraison de colis amazon </p>
        </article>
        <article class="project">
            <img src="images/assistante.jpg" alt="Projet 3">
            <h3>Assistante dentaire </h3>
            <p>Cabinet Henry Mondor </p>
        </article>
    </div>
</section>


<section id="contact" class="contact">
    <h2>Contactez-moi</h2>
    <p>Vous avez envie d'échanger ou simplement une question ? Je suis disponible !</p>
    <form action="mailto:camarapendis@gmail.com" method="POST" enctype="text/plain">
        <div class="form-group">
            <input type="text" name="Nom" placeholder="Votre nom" required>
        </div> <div class="form-group">
            <input type="text" name="Prenom" placeholder="Votre prénom" required>
        </div>
        <div class="form-group">
            <input type="number" name="phone" placeholder="Votre uméro de téléphone" required>
        </div>
        <div class="form-group">
            <input type="email" name="email" placeholder="Votre email" required>
        </div>
        <div class="form-group">
            <textarea name="message" placeholder="Votre message......" required></textarea>
        </div>
        <button type="submit" class="btn-send">Envoyer</button>
    </form>
</section>





<footer>
<section id="socials" class="socials">
  <h2>Suivez-moi</h2>
  <div class="social-icons">
    <a href="https://www.instagram.com/penda.cmr/" target="_blank">
      <img src="images/instagram (6).png" alt="Instagram">
    </a>
    <a href="https://twitter.com/PendisCamara" target="_blank">
      <img src="images/twitter (1).png" alt="Twitter">
    </a>
    <a href="https://www.linkedin.com/in/penda-camara-3004a4282/" target="_blank">
      <img src="images/linkedin.png" alt="LinkedIn">
    </a>
    <a href="https://github.com/EpitechWebAcademiePromo2025" target="_blank">
      <img src="images/github.png" alt="GitHub">
    </a>
  </div>
  </footer>

</body>
</html>