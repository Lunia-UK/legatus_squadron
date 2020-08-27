<?php session_start(); ?>
<?php  include '../src/connexion.php'; ?>
<?php  include '../src/config/config_documents.php'; ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../resources/css/styles.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <title>Documents</title>
</head>
<body>
    <div class="body">
    <h1 class="categorie-title">Archives</h1>
    <section class="filters-content article-container">
      <div class="filter-content active" id="mission">
          <div class="article-liste">
              <?php $i = 1; foreach ($listeDesMissions as $cle => $element){
                  echo 
                  '<article>
                  <a>
                    <form action="voir_document.php" method="post">
                    <input name="hidden_mission" type="hidden" value=" '.  $element['id'] . '">
                      <button class="btn_article">
                      <svg  xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="100%" height="100%" viewBox="0 0     315.372 177">
                        <defs>
                          <pattern id="pattern' . $i . '" preserveAspectRatio="xMidYMid slice" width="100%" height="100%">
                           <image xlink:href="../resources/img/mission/' . $element['photo'] . '" width="100%"/>
                         </pattern>
                        </defs>
                          <path  id="_2019-12-28" data-name="' . $element['photo'] . '" d="M2391.04,1949.175l23.781-23.78h291.59v158.73l-26.826,24.981H2391.04Z"     transform="translate(-2391.04 -1925.395)" fill="url(#pattern' . $i . ')"/>
                      </svg>
                    <div  class="etiquette">
                        <svg  xmlns="http://www.w3.org/2000/svg" width="430.399" height="70.656" >
                            <path id="Path_30" data-name="Path 30" d="M2211,2917.659h407.073l23.326,22.136v48.52l-430.4-1.491Z" transform="translate    (-2211 -2917.659)" fill="#fff" opacity="0.5"/>
                        </svg>
                        <div class="articleText">
                            <h2>' .  implode('-', array_reverse(explode('-', $element["date_mission"]))) . '</h2>
                            <p class="textCut">' . $element['objectif_mission'] . '</p>
                        </div>
                      </div>
                      </button>
                    </form>
                  </a>
                </article>';
                $i++;
              }?>
          </div>
      </div>
    </section>
    <nav id="nav" class="nav">
      <ul>
          <li>
              <a href="../"><p>Legatus</p><img src="../resources/img/logo/logo-w.png" alt="" width="50px"></a>
          </li>
          <li>
              <a href="../section_individuelle"><p>Section individuelle</p><img src="../resources/svg/individual.svg" alt="" width="50px"></a>
          </li>
          <li>
              <a href="../documents"><p>Archives</p><img src="../resources/svg/archives.svg" alt="" width="30px"></a>
          </li>
          <li>
              <a href="../organigrame"><p>Unitées</p><img src="../resources/svg/organigrame.svg" alt="" width="40px"></a>
          </li>
      </ul>
    </nav> 
  </div>
    <script src="../resources/js/nav.js"></script>
    <script src="../resources/js/navigation.js"></script>
    <script src="../resources/js/filter_documents_mobile.js"></script>
    <script src="../resources/js/search.js"></script>
    <script src="../resources/js/filter_documents.js"></script>
</body>
</html>