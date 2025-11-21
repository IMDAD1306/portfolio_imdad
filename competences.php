<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <title>Compétences - Portfolio Imdad BOURAIMA</title>
<link rel="stylesheet" href="style/style_competences.css">
</head>

<body>
      <?php require_once 'header.php'; ?>

  

  <section id="competences" class="section">
    <h2>Mes compétences</h2>

    <div class="competences-container">

      <!-- Logiciels -->
      <div class="competence-block">
        <h3>💻 Logiciels</h3>
        <ul>
          <li>Visual Studio Code</li>
          <li>Trello</li>
          <li>Lucidchart</li>
          <li>Git / GitHub</li>
          <li>MySQL Workbench</li>
        </ul>
      </div>

      <!-- Langages -->
      <div class="competence-block">
        <h3>📝 Langages</h3>
        <ul>
          <li>HTML / CSS</li>
          <li>PHP</li>
          <li>SQL</li>
          <li>JavaScript (bases)</li>
        </ul>
      </div>

      <!-- Bouton Excel -->
      <div class="competence-block">
        <a href="competences.xlsx" class="btn" target="_blank">📊 Télécharger mon fichier compétences</a>
      </div>

    </div>
  </section>

  <?php require_once('footer.php'); ?>
</body>
</html>
