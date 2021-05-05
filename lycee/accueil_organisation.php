<?php
$datas = [
  "article1" => [
    "titre" => "Bienvenue sur le site de la cité scolaire Triboulet",
    "text" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.",
    "link" => "#",
  ],
  "article2" => [
    "titre" => "Qui est Albert Triboulet?",
    "text" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.",
    "link" => "#",
  ],
  "article3" => [
    "titre" => "Origines de l'établissement",
    "text" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.",
    "link" => "#",
  ],
  "article4" => [
    "titre" => "Pour vous rendre au lycée Albert Triboulet",
    "text" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.",
    "link" => "#",
  ],
  "article5" => [
    "titre" => "Quelques perspectives du lycée depuis sa rénovation",
    "text" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.",
    "link" => "#",
  ],
  "article6" => [
    "titre" => "Quelques photos de 2010-2011",
    "text" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.",
    "link" => "#",
   ],
];
 ?>

<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="../css/accueil.css">
  <link rel="stylesheet" href="../css/all.min.css">
  <link rel="stylesheet" href="../css/organisation.css">
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
<div class="infos">
  <h1 class="info generale">Infos générales: le lycée en bref</h1>
</div>

<div class="choix">

<?php
foreach ($datas as $data) {?>
  <div class="cartes articles">
  <div class="contenu">
    <h3>
      <?php echo $data["titre"]  ?>
    </h3>
    <p><?php echo $data['text'] ?></p>
  </div>
    <a href="<?php echo $data["link"] ?>">
      <button type="button" name="button"><i class="fas fa-eye"></i> Voir plus</button>
    </a>
  </div>
<?php }  ?>

</div>
      </div>
    </div>
    <footer>
      <p></p>
    </footer>
  </div>
</body>
</html>
