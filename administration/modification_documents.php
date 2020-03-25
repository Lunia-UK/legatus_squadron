<?php session_start(); ?>
<?php include '../src/connexion.php'; ?>
<?php include '../src/config/config_admin_dashboard.php'; ?>
<?php include '../src/config/config_modification_document.php'; ?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../resources/css/styles.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <title>modification documents</title>
</head>
<body>
    <div class="header">
      <?php include '../components/navigation/nav_beginning.html'; ?>
            <a href="../section_individuelle"><h4 id="pseudo"><?php //echo $_SESSION['short_rank_name'] . " " . $_SESSION['pseudo'];?></h4></a>
        <?php include '../components/navigation/nav_mid.html'; ?>
            <h5>Administration</h5>
        <?php include '../components/navigation/nav_end.html'; ?>
    </div>
    <div class="body">
        <div class="block-nav cut">
            <?php include '../components/navigation/nav_administration.html'; ?>
        </div>
        <section class="container-adm">
        <ul id="article_documents">
        <?php
        foreach ($listeDesDocs as $cle => $element){
          echo

          '<li class=" filterDiv ' . $element["filtre_1"] . '">
              <a>
                  <div class="bloc blocModif ">
                      <form action="voir-document.php" method="post">
                          <input name="hidden" type="hidden" value=" '.  $element['id'] . '">
                          <button class="btnDoc">
                               <div class="etiquette"> ' . $element["titre"] . '</div>
                          </button>
                      </form>
                      <form action="modification-documents2.php" method="post">
                          <input name="hidden" type="hidden" value=" '.  $element['id'] . '">
                          <button class="btnDoc btnModif ">
                              modifié
                          </button>
                      </form>
                  </div>
              </a>
          </li>';
        }
        ?>
            </ul>
        </section>
    <div>
    <?php include '../resources/js/nav_administration.php'; ?>
</body>
</html>