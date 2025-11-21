<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <title>À propos - Portfolio Imdad BOURAIMA</title>
 <link rel="stylesheet" href="style/style_about.css">
</head>

<body>
    
    <?php require_once 'header.php'; ?>

  

  <section id="about" class="section">
    <h2>À propos de moi</h2>

    <div class="about-container">
      <img src="images/photo_profil.jpg" alt="Photo de Imdad BOURAIMA" class="profile-photo">

      <div class="about-text">
        <p>
          Je m'appelle <strong>Imdad BOURAIMA</strong>, étudiant en <strong>BTS SIO option SLAM</strong> à l’IRIS Paris.
          Passionné par le développement web, j’aime transformer des idées en projets concrets et fonctionnels.
          Durant mon stage chez <strong>Divrsitee</strong> à Paris, j’ai développé une plateforme web complète
          de gestion de joueurs et d’administrateurs, en utilisant <strong>PHP, MySQL, HTML et CSS</strong>.
        </p>

        <p>
          Actuellement, je poursuis mes études tout en cherchant une <strong>alternance en développement web</strong> 
          pour continuer à progresser techniquement et professionnellement.
        </p>

        <form action="cv_imdad_bouraima.pdf" method="get" target="_blank">
  <button type="submit" class="btn">📄 Voir mon CV</button>
</form>

      </div>
    </div>
  </section>

  <?php require_once('footer.php'); ?>

</body>
</html>
