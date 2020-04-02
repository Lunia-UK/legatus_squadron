<?php session_start(); ?>
<?php  include '../src/connexion.php'; ?>
<?php  include '../src/config/config_voir_documents.php'; ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../resources/css/styles.css">
    <title>Document du <?php echo $rapport_mission['date_mission']; ?></title>
</head>
<body>
<div class="header">
      <?php include '../components/navigation/nav_beginning.html'; ?>
            <a href="../section_individuelle"><h4 id="pseudo"><?php echo $_SESSION['short_rank_name'] . " " . $_SESSION['pseudo'];?></h4></a>
        <?php include '../components/navigation/nav_mid.html'; ?>
            <h5>Document du <?php echo $rapport_mission['date_mission']; ?></h5>
        <?php include '../components/navigation/nav_end.html'; ?>
    </div>
    <div class="voir-doc-documents" id="format1">
        <!-- <img src="../assets/img/documents/<?php //echo $document['image_1']; ?>" alt=""> -->
    </div>
    <div class="voir-doc-mission" id="format3">
        <div class="largeScreen">
            <div class="doubleCut date">
                <h3>Date : </h3>
                <p class="para"><?php echo $rapport_mission['date_mission']; ?></p>
            </div>
            <div class="doubleCut type">
                <h3>Type : </h3>
                <p class="para"><?php echo $typemission; ?></p>
            </div>
            <div class="doubleCut lead">
                <h3>Lead : </h3>
                <p class="para"><?php echo nl2br($members[$rapport_mission['id_report_sender']]); ?></p>
            </div>
            <div class="doubleCut obj">
                <h3>Objectif : </h3>
                <div class="paraContainer">
                    <p class="para"><?php echo nl2br($rapport_mission['objectif_mission']); ?></p>
                </div>
            </div>
            <div class="doubleCut desc">
                <h3>Description :</h3>
                <div class="paraContainer">
                <p><?php echo nl2br($rapport_mission['descriptif_mission']); ?></p>
                </div>
            </div>
            <div class="doubleCut part">
                <h3>Participants : </h3>
                <p class="para"><?php 
                    foreach ($participants as $cle => $element) {
                        echo  $members[$element['id_member']] . ', ';
                    }
                    ?></p>

            </div>
            <div class="doubleCut img">
                <img class="photo" src="../resources/img/mission/<?php echo $rapport_mission['photo']; ?>" width="100%"/>
            </div>
            <div class="doubleCut video">
                <?php if ($rapport_mission['video'] != null){
                   echo '<div id="player" style="width:350px; height: 200px;"></div>';
                    }else {
                    echo '<img src="../resources/img/mission/frame.png">';
                 }
                ?>
            </div>
            <div class="doubleCut coms">
                <div id="commentaireMission"></div>
            </div>
        </div>
        <div class="smallScreen ">
            <div class="body fixe">           
                <div class="image">
                    <img src="../resources/img/mission/2019-12-28.jpg" alt="">
                    <div class="etiquette">
                        <svg xmlns="http://www.w3.org/2000/svg" width="87.125" height="22.418" viewBox="0 0 87.125 22.418">
                            <path id="Path_26" data-name="Path 26" d="M2211,2917.659h82.4l4.722,7.023v15.395L2211,2939.6Z" transform="translate(-2211 -2917.659)" fill="#fff" opacity="0.5"/>
                        </svg>
                        <div class="articleText">
                            <h2>2019-12-28</h2>
                        </div>
                    </div>
                </div>
                <div class="objectif">
                    <h3>Objectif:</h3>
                    <p>Découvrir microTech plus en détail et procéder à quelques prélèvements. </p>
                </div>

                <div class="navigation-bar">
                    <a href="#description">Description :</a>
                    <a href="#participants">Participants :</a>
                    <a href="#commentaires">Commentaires :</a>
                </div>
                </div>
             
            <main>
                <section id="description" data-spy>Vol en formation au-dessus de microTech. Intervention sur le 890j détourné par des pirates. </section>
                <section id="participants" data-spy>Mimi8325<br>Guyome<br>Cobrajere<br>SiegfriedVH<br>Lenkane</section>
                <section id="commentaires" data-spy>Guyome: Un Eagle au taux de médichlorien faramineux</section>
            </main>
            </div>
    </div>
    <script src="../resources/js/navigation.js"></script>
    <script src="../resources/js/youtube_api.php"></script>
</body>
</html>