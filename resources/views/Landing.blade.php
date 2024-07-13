
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion de Projet Agile</title>
    <link rel="stylesheet" href="{{ asset('css/appp.css') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="./assets/asset.png">
</head>
<body>
    <header class="main-header">
      <div class="container">
        <div class="logo">
          <img src="./assets/logo.png" alt="Burger Hut Logo">
      </div>
          <nav>
              <ul>
                  <li><a href="#features">Fonctionnalités</a></li>
                  <li><a href="#how-it-works">Comment ça marche</a></li>
                  <li><a href="#testimonials">Témoignages</a></li>
                  <li><a href="#pricing">Tarifs</a></li>
                  <li><a href="#faq">FAQ</a></li>
                  <li><a href="#contact">Contact</a></li>
              </ul>
          </nav>
          <div class="auth-buttons">
             <a href="{{ url('/auth/login') }}"> <button class="sign-in">Se Connecter</button></a>
              <a href="{{ url('/register') }}"><button class="sign-up">S'inscrire</button></a>
          </div>
      </div>
  </header>
  
  <section class="hero">
    <section class="about dark-theme">
      <div class="about-content">
        <h1>Gérez vos tâches</h1>
        <p>Les tableaux, listes et cartes d'AgileApp vous permettent d'organiser et de prioriser vos projets de manière amusante, flexible et enrichissante.</p>
        <p>La méthodologie Agile est une approche de gestion de projet qui consiste à diviser un projet en phases et à mettre l'accent sur la collaboration et l'amélioration continue. Les équipes suivent un cycle planification-exécution-évaluation.</p>
        <div class="cta-buttons">
          <a href="{{ url('/login') }}"><button class="get-started">Commencer</button></a>
      </div>
      </div>
      <div class="about-image">
        <img src="./assets/f7e182d47ba44bc558a527eb7ad2410f.jpg" alt="About Image">
      </div>
    </section>
  </section>
  
  
  <section id="features">
    <div class="container">
        <h3>Fonctionnalités Principales</h3>
        <div class="features-list">
            <div class="feature">
                <h4>Sprint Planning</h4>
                <p>Planifiez vos sprints facilement et suivez leur progression.</p>
            </div>
            <div class="feature">
                <h4>Kanban Board</h4>
                <p>Utilisez des tableaux Kanban pour visualiser le flux de travail.</p>
            </div>
            <div class="feature">
                <h4>Collaboration</h4>
                <p>Travaillez en équipe avec des outils de collaboration intégrés.</p>
            </div>
        </div>
    </div>
  </section>
  
  <section class="menu">
    <div class="menu-items">
      <div class="menu-item">
        <img src="./assets/planification.jpg" alt="Burger 1">
        <h2>Planification Agile</h2>
        <p>Planifiez vos projets de manière agile avec des sprints, des user stories et des backlogs.</p>
      </div>
      <div class="menu-item">
        <img src="./assets/collaboration.jpg" alt="Burger 2">
        <h2>Collaboration d'Équipe</h2>
        <p>Collaborez efficacement avec votre équipe grâce aux tableaux partagés et aux commentaires.</p>
      </div>
      <div class="menu-item">
        <img src="./assets/suivis.jpg" alt="Burger 3">
        <h2>Suivi du Temps</h2>
        <p>Suivez le temps passé sur chaque tâche et optimisez votre productivité.</p>
      </div>
    </div>
  </section>
  
  <section class="gallery">
    <h2>Thèmes Agile</h2>
    <div class="image-grid">
      <div class="image-item">
        <img src="./assets/team-leader-managing-project_1262-21430.jpg" alt="Image 1">
      </div>
      <div class="image-item">
        <img src="./assets/Untitled-design.jpg" alt="Image 1">
      </div>
      <div class="image-item">
        <img src="./assets/kisspng-agile-software-development-scrum-computer-icons-ag-5afc42d5ddc678.9721919515264816219084.jpg" alt="Image 1">
      </div>
    </div>
  </section>
  
  <section id="how-it-works">
    <div class="container">
        <h3>Comment ça marche</h3>
        <div class="steps">
            <div class="step">
                <h4>1. Créez un projet</h4>
                <p>Commencez par créer un nouveau projet et invitez votre équipe.</p>
            </div>
            <div class="step">
                <h4>2. Planifiez vos sprints</h4>
                <p>Définissez les objectifs et planifiez les sprints.</p>
            </div>
            <div class="step">
                <h4>3. Suivez la progression</h4>
                <p>Utilisez les tableaux Kanban et les rapports pour suivre l'avancement.</p>
            </div>
        </div>
    </div>
  </section>
  
  <section id="testimonials">
    <div class="container">
        <h3>Témoignages</h3>
        <div class="testimonials-list">
            <div class="testimonial">
                <p>"Une application incroyable qui a transformé notre façon de travailler."</p>
                <h4>Jean Dupont</h4>
            </div>
            <div class="testimonial">
                <p>"Simple, efficace, et indispensable pour notre équipe."</p>
                <h4>Marie Martin</h4>
            </div>
        </div>
    </div>
  </section>
  
  <section class="contact" id="contact">
    <div class="contact-container">
      <h2>Contact Us</h2>
      <div class="contact-info">
        <div class="info-item">
          <i class="fas fa-map-marker-alt"></i>
          <p>Logbesou Douala</p>
        </div>
        <div class="info-item">
          <i class="fas fa-phone-alt"></i>
          <p>+237 697 05 61 76</p>
        </div>
        <div class="info-item">
          <i class="fas fa-envelope"></i>
          <p>essomezacharie@gmail.com</p>
        </div>
      </div>
      <form class="contact-form">
        <input type="text" name="name" placeholder="Your Name" required>
        <input type="email" name="email" placeholder="Your Email" required>
        <textarea name="message" placeholder="Your Message" rows="5" required></textarea>
        <button type="submit">Send Message</button>
      </form>
    </div>
  </section>
  
  <section id="faq">
    <div class="container">
        <h3>FAQ</h3>
        <div class="faq-list">
            <div class="faq-item">
                <h4>Comment créer un projet ?</h4>
                <p>Vous pouvez créer un projet en cliquant sur "Nouveau Projet" dans le tableau de bord.</p>
            </div>
            <div class="faq-item">
                <h4>Quels sont les modes de paiement acceptés ?</h4>
                <p>Nous acceptons les cartes de crédit et PayPal.</p>
            </div>
        </div>
    </div>
  </section>
  
  
  <footer class="footer">
    <div class="footer-content">
      <div class="footer-logo">
        <img src="./assets/logo.png" alt="Logo">
      </div>
      <nav class="footer-links">
        <a href="#features">Fonctionnalités</a>
        <a href="#how-it-works">Comment ça marche</a>
        <a href="#testimonials">Témoignages</a>
        <a href="#pricing">Tarifs</a>
        <a href="#faq">FAQ</a>
        <a href="#contact">Contact</a>
      </nav>
      <div class="footer-social">
        <a href="#"><i class="fab fa-facebook"></i></a>
        <a href="#"><i class="fab fa-twitter"></i></a>
        <a href="#"><i class="fab fa-instagram"></i></a>
      </div>
    </div>
    <p class="footer-text">&copy; 2024 AgileApp. Tous droits réservés.</p>
  </footer>
  
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  </body>
</html>
