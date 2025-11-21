<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Accueil - Portfolio Imdad BOURAIMA</title>
  <link rel="stylesheet" href="style.css">
</head>

<body>

  <?php require_once 'header.php'; ?>

  <section class="hero">
    <div class="hero-container">
      <!-- Image de profil -->
      <img src="images/photo_profil.jpg" alt="Imdad BOURAIMA" class="hero-photo">

      <!-- Texte d'accueil -->
      <div class="hero-text">
        <h2>Bienvenue sur mon portfolio</h2>
        <p>
          Étudiant en <strong>BTS SIO SLAM 2</strong> à l'IRIS Paris, passionné par le développement web et la data.
          Découvrez mes projets, mes compétences et mon parcours professionnel.
        </p>
        <a href="projets.html" class="btn">Voir mes projets</a>
      </div>
    </div>
  </section>

  <?php require_once('footer.php'); ?>

</body>
</html>
