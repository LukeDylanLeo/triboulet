<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="../css/all.min.css">
  <link rel="stylesheet" href="../css/accueil.css">
  <link rel="stylesheet" href="../css/menu_item.css">
  <title>Cité scolaire - Lycée Triboulet</title>
</head>
<body>
  <div class="all">
    <?php include 'head.html'; ?>
    <div class="content">
      <div class="left">
        <?php include 'menu.html'; ?>
      </div>
      <div class="right">
        <div class="choix">
          <div class="ligne1">
            <div class="matieres sciences">
              <h3>Sciences</h3>
              <img src="../img/science.svg" alt="Sciences">
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
              <?php include '../button.php' ?>
            </div>
            <div class="matieres scienceshumaines">
              <h3>Sciences humaines</h3>
              <img src="../img/social.svg" alt="Sciences humaines">
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
              <?php include '../button.php' ?>
            </div>
            <div class="matieres litterature">
              <h3>Littérature</h3>
              <img src="../img/literature.svg" alt="Littérature">
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
              <?php include '../button.php' ?>
            </div>
            <div class="matieres langues">
              <h3>Langues</h3>
              <img src="../img/langues.svg" alt="Langues">
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
              <?php include '../button.php' ?>
            </div>
          </div>
          <div class="ligne2">
            <div class="matieres eps">
              <h3>Education physique & sportive</h3>
              <img src="../img/sport.svg" alt="EPS">
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
              <?php include '../button.php' ?>
            </div>
            <div class="matieres Europeinternational">
              <h3>Europe & international</h3>
              <img src="../img/international.svg" alt="International">
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
              <?php include '../button.php' ?>
            </div>
            <div class="matieres actinterdisciplinaires">
              <h3>Activités interdisciplinaires</h3>
              <img src="../img/other.svg" alt="Autre">
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
              <?php include '../button.php' ?>
            </div>
          </div>
        </div>
      </div>
    </div>
    <footer>
    </footer>
  </div>
</body>
</html>
