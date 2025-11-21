<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Portfolio - Header Exemple</title>
  <style>
    /* ===============================
       HEADER & NAVIGATION
       =============================== */

    /* Reset de base */
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: "Poppins", sans-serif;
    }

    body {
      background-color: #f4f6f8;
      color: #333;
      line-height: 1.6;
    }

    /* HEADER */
    header {
      background-color: #0a192f;
      color: #fff;
      text-align: center;
      padding: 2rem 1rem;
    }

    header h1 {
      font-size: 2.2rem;
      margin-bottom: 0.3rem;
    }

    header p {
      font-size: 1rem;
      color: #64ffda;
    }

    /* NAVIGATION */
    nav {
      background-color: #112240;
      display: flex;
      justify-content: center;
      gap: 2rem;
      padding: 1rem 0;
    }

    nav a {
      color: #64ffda;
      text-decoration: none;
      font-weight: bold;
      transition: color 0.3s;
    }

    nav a:hover,
    nav a.active {
      color: #fff;
    }
  </style>
</head>
<body>

<header>
  <h1>BOURAIMA Imdad</h1>
  <p>Développeur Web en recherche d’alternance DTA</p>
</header>

<nav>
  <a href="index.php" class="active">Accueil</a>
  <a href="about.php">À propos</a>
  <a href="competences.php">Compétences</a>
  <a href="projets.php">Projets</a>
  <a href="veille.php">Veille</a>
  <a href="contact.php">Contact</a>
</nav>

<!-- Le reste du contenu de la page -->
<section>
  
  
</section>

</body>
</html>
