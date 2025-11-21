<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contact - Portfolio Imdad BOURAIMA</title>
  <link rel="stylesheet" href="style/style_contact.css">
</head>
<body>

  <?php require_once 'header.php'; ?>

  <section id="contact" class="section">
    <h2>Contactez-moi</h2>

    <div class="contact-container">
      <p>📧 Email : <a href="mailto:bouraimasamory@gmail.com">bouraimasamory@gmail.com</a></p>
      <p>💼 LinkedIn : <a href="#" target="_blank">Votre profil LinkedIn</a></p>
      <p>💻 GitHub : <a href="#" target="_blank">Votre profil GitHub</a></p>

      <form action="traitement_contact.php" method="post" class="contact-form">
        <label for="nom">Nom :</label>
        <input type="text" id="nom" name="nom" required>

        <label for="email">Email :</label>
        <input type="email" id="email" name="email" required>

        <label for="message">Message :</label>
        <textarea id="message" name="message" rows="5" required></textarea>

        <button type="submit" class="btn">Envoyer</button>
      </form>
    </div>
  </section>

  <?php require_once 'footer.php'; ?>

</body>
</html>
