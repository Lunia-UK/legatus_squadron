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
    <div class="header">
      <?php include '../components/navigation/nav_beginning.html'; ?>
            <a href="../section_individuelle"><h4 id="pseudo"><?php echo $_SESSION['short_rank_name'] . " " . $_SESSION['pseudo'];?></h4></a>
        <?php include '../components/navigation/nav_mid.html'; ?>
            <h5>Documents</h5>
        <?php include '../components/navigation/nav_end.html'; ?>
    </div>
    <div class="body">
    <section class="filters-content article-container">
      <div class="filter-content" id="legatus">
          <h2 class="categorie-title">Legatus</h2>
          <div class="article-liste">
              <?php $i = 1; foreach ($listeDesDocs as $cle => $element){
                  echo 
                  '<article>
                  <a>
                    <form action="voir_document.php" method="post">
                    <input name="hidden_documents" type="hidden" value=" '.  $element['id'] . '">
                      <button class="btn_article">
                      <svg  xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="100%" height="100%" viewBox="0 0     315.372 177">
                        <defs>
                          <pattern id="doc' . $i . '" preserveAspectRatio="xMidYMid slice" width="100%" height="100%">
                           <image xlink:href="../reources/img/documents/' . $element['image_1'] . '" width="100%"/>
                         </pattern>
                        </defs>
                          <path  id="_2019-12-28" data-name="' . $element['image_1'] . '" d="M2391.04,1949.175l23.781-23.78h291.59v158.73l-26.826,24.981H2391.04Z"     transform="translate(-2391.04 -1925.395)" fill="url(#doc' . $i . ')"/>
                      </svg>
                    <div  class="etiquette">
                        <svg  xmlns="http://www.w3.org/2000/svg" width="430.399" height="70.656" >
                            <path id="Path_30" data-name="Path 30" d="M2211,2917.659h407.073l23.326,22.136v48.52l-430.4-1.491Z" transform="translate    (-2211 -2917.659)" fill="#fff" opacity="0.5"/>
                        </svg>
                        <div class="articleText">
                            <h2>' . $element["titre"] . '</h2>
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
      <div class="filter-content active" id="mission">
          <h2 class="categorie-title">Rapports de missions</h2>
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
                            <h2>' . $element["date_mission"] . '</h2>
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
      <div class="filter-content" id="sl">
          <h2 class="categorie-title">Squad Lead</h2>
          <div class="article-liste">Bientot ...</div>
      </div>
      <div class="filter-content" id="calendrier"> 
          <h2 class="categorie-title">Calendrier</h2>
          <div class="article-liste">Bientot ...</div> 
          <div class="article-liste">              
              <article>
                <svg  xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="100%" height="100%" viewBox="0 0     315.372 177">
                  <defs>
                    <pattern id="calendrierImg" preserveAspectRatio="xMidYMid slice" width="100%" height="100%">
                     <image xlink:href="../reources/img/calendrier.png" width="100%"/>
                   </pattern>
                  </defs>
                    <path  id="calendrierImg" data-name="calendrierImg" d="M2391.04,1949.175l23.781-23.78h291.59v158.73l-26.826,24.981H2391.04Z"     transform="translate(-2391.04 -1925.395)" fill="url(#calendrierImg)"/>
                  </svg>
                  <div  class="etiquette">
                  <svg  xmlns="http://www.w3.org/2000/svg" width="430.399" height="70.656" >
                      <path id="Path_30" data-name="Path 30" d="M2211,2917.659h407.073l23.326,22.136v48.52l-430.4-1.491Z" transform="translate    (-2211 -2917.659)" fill="#fff" opacity="0.5"/>
                  </svg>
                  <div class="articleText">
                      <h2>Calendrier</h2>
                      <p class="textCut">Bientot ...</p>
                  </div>
                  </div>
              </article>
          </div>
      </div>
      <div class="filter-content" id="recompenses">
          <h2 class="categorie-title">Recompenses a gagnées</h2>
          <div class="article-liste">
              <?php  $i = 1; foreach ($listeDesRecompenses as $cle => $element){
                  if($element['COLUMN_NAME'] != 'id'){
                  echo
                  '<article>
                      <svg  xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="100%" height="100%" viewBox="0 0     315.372 177">
                          <defs>
                              <pattern id="recompenses' . $i . '" preserveAspectRatio="xMidYMid slice" width="100%" height="100%">
                                  <image xlink:href="../assets/img/recompenses/' . $element['COLUMN_NAME'] . '.png" width="100%"/>
                              </pattern>
                          </defs>
                              <path  id="_2019-12-28" data-name="' . $cle . '" d="M2391.04,1949.175l23.781-23.78h291.59v158.73l-26.826,24.981H2391.04Z"     transform="translate(-2391.04 -1925.395)" fill="url(#recompenses' . $i . ')"/>
                      </svg>
                  </article>';};
                  $i++ ;} ?>
          </div>
        </div>
    </section>
    <aside class="aside-large-screen">
       <div class="search-bar-container ">
             <input onkeyup="search()" type="text" class="search-bar" placeholder="Chercher un membre..." title="Type in a name">
       </div>
       <ul class="filters filterContainer">
         <li class="filter"><a href="#legatus" title="Legatus"><img src="../resources/img/logo/logo-w.png" alt="Legatus Icone" width="40px"></a></li>
         <li class="filter active" ><a href="#mission" title="Missions"><img src="../resources/svg/rapport.svg" alt="Rapports de missions" width="20px"></a></li>
         <li class="filter"><a href="#sl" title="Squad Lead">SL</a></li>
         <li class="filter"><a href="#calendrier" title="Calendrier"><img src="../resources/svg/calendrier.svg" alt="Calendrier" width="30px"></a></li>
         <li class="filter"><a href="#recompenses" title="Recompenses"><img src="../resources/svg/recompense.svg" alt="Recompenses" width="40px"></a></li>
       </ul>
    </aside>
    <aside class="aside-small-screen">
       <div class="search-bar-container">
             <input onkeyup="search()" type="text" class="search-bar" placeholder="Chercher un membre..." title="Type in a name">
       </div>
       <div class="filter-container-mobile">
           <a href="#"><button id="btn-filter">
                   <svg xmlns="http://www.w3.org/2000/svg" width="32.884" height="28" viewBox="0 0 32.884 28">
                     <g id="filter" transform="translate(-310.914 -101)">
                       <path id="Path_8" data-name="Path 8" d="M0,0H32.884" transform="translate(310.914 103.925)" fill="none" stroke="#67d9f7" stroke-width="1"/>
                       <line id="Line_6" data-name="Line 6" x2="32.884" transform="translate(310.914 114.886)" fill="none" stroke="#67d9f7" stroke-width="1"/>
                       <line id="Line_7" data-name="Line 7" x2="32.884" transform="translate(310.914 125.848)" fill="none" stroke="#67d9f7" stroke-width="1"/>
                       <circle id="Ellipse_18" data-name="Ellipse 18" cx="3" cy="3" r="3" transform="translate(314 112)" fill="#67d9f7"/>
                       <circle id="Ellipse_19" data-name="Ellipse 19" cx="3" cy="3" r="3" transform="translate(329 101)" fill="#67d9f7"/>
                       <circle id="Ellipse_20" data-name="Ellipse 20" cx="3" cy="3" r="3" transform="translate(324 123)" fill="#67d9f7"/>
                     </g>
                   </svg>
               </button></a>
           <ul class="filters filtre-mobile" id="myBtnContainer">
             <li ><a class="btn" href="#legatus">Legatus</a></li>
             <li class="active"><a class="btn" href="#mission">Rapports</a></li>
             <li><a class="btn" href="#sl">SL</a></li>
             <li><a class="btn" href="#calendrier">Calendrier</a></li>
             <li><a class="btn" href="#recompenses">Recompenses</a></li>
           </ul>
       </div>
    </aside>
  </div>
    <script src="../resources/js/navigation.js"></script>
    <script src="../resources/js/filter_documents_mobile.js"></script>
    <script src="../resources/js/search.js"></script>
    <script src="../resources/js/filter_documents.js"></script>
</body>
</html>