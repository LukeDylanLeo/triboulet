<?php
$datas = [
  "sciences" => [
    "titre" => "Sciences",
    "icone" => "science.svg",
    "text" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.",
    "link" => "#",
  ],
  "social" => [
    "titre" => "Sciences humaines",
    "icone" => "social.svg",
    "text" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.",
    "link" => "#",
  ],
  "litterature" => [
    "titre" => "Littérature",
    "icone" => "literature.svg",
    "text" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.",
    "link" => "#",
  ],
  "langues" => [
    "titre" => "Langues",
    "icone" => "langues.svg",
    "text" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.",
    "link" => "#",
  ],
  "eps" => [
    "titre" => "Education physique & sportive",
    "icone" => "sport.svg",
    "text" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.",
    "link" => "#",
  ],
  "international" => [
    "titre" => "Europe & International",
    "icone" => "international.svg",
    "text" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.",
    "link" => "#",
  ],
  "interdisciplinaire" => [
    "titre" => "Activités interdisciplinaires",
    "icone" => "other.svg",
    "text" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.",
    "link" => "#",
  ],
];
?>

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

          <?php
          foreach ($datas as $data) {?>
            <div class="matieres">
              <h3>
                <?php echo $data["titre"]  ?>
              </h3>
              <img src="../img/<?php echo $data['icone'] ?>" alt="Image">
              <p><?php echo $data['text'] ?></p>
              <a href="<?php echo $data["link"] ?>">
                <button type="button" name="button"><i class="fas fa-eye"></i> Voir plus</button>
              </a>
            </div>
          <?php }  ?>

        </div>
      </div>
    </div>
    <footer>
    </footer>
  </div>
</body>
</html>
