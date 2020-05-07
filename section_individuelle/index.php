<?php session_start(); ?>
<?php  include '../src/connexion.php'; ?>
<?php  include '../src/config/config_section_individuelle.php'; ?>
<?php include '../src/config/config_ribbons.php'; ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../resources/css/styles.css">
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.2.0/anime.js"></script>
    <title>Section individuelle</title>
</head>
<body>
    <!--Loading pharse-->
    <div id="msg" style="font-size:15px">
      <?php include '../resources/svg/fp.html'; ?>
      <div class="scan"></div>
      <div class="chargement">
        <p class="chargement-text">Chargement... </p>
        <p class="text"></p>
      </div>
    </div>
<script>
$(document).ready(function(){
    var count = 0;
    var counting = setInterval(function(){
        if(count < 101) {
            $('.text').text(count + '%');
            count++
        } else {
            clearInterval(counting)
        }
    }, 50);
});
</script>
<!--Loading body-->
<div id="body" style="display:none;">
    <div class="header">
        <?php include '../components/navigation/nav_beginning.html'; ?>
              <a href="../section_individuelle"><h4 id="pseudo"><?php echo $_SESSION['short_rank_name'] . " " . $_SESSION['pseudo'];?></h4></a>
          <?php include '../components/navigation/nav_mid.html'; ?>
              <h5>Section individuelle</h5>
          <?php include '../components/navigation/nav_end.html'; ?>
    <div class="body">
        <div class="container-grid">
            <!-- Legatus -->
            <div class="legatus">
                <!-- Name Section -->
                <svg height="60" width="300" xmlns:xlink="http://www.w3.org/1999/xlink" style="position: absolute; left:0">
                    <filter id="shadowLegatus" x="0" y="0" width="300" height="175" filterUnits="userSpaceOnUse">
                        <feOffset dx="5" dy="5" input="SourceAlpha"/>
                        <feGaussianBlur stdDeviation="0.5" result="blur"/>
                        <feFlood flood-color="#fff" flood-opacity="0.2"/>
                        <feComposite operator="in" in2="blur"/>
                        <feComposite in="SourceGraphic"/>
                    </filter>
                    <g transform="matrix(1, 0, 0, 1, 0, 0)" filter="url(#shadowLegatus)">
                        <text x="50" y="40" fill="#fff" style="font-size:25px">Legatus Squadron</text>
                    </g>
                </svg>
                <!-- Groupe -->
                <div class="groupe">
                    <img src="../resources/img/groupe/<?php
                    switch($_SESSION['id_groupe_principal'])
                    {
                      case 0 :
                      echo 'academie';
                      break;
                  
                      case 1 :
                      echo 'eagle';
                      break;
                  
                      case 2 :
                      echo 'rogue';
                      break;
                  
                      case 3 :
                      echo 'seals';
                      break;
                  
                      case 4 :
                      echo 'papaBear';
                      break;
                  
                      case 5 :
                      echo 'cerberus';
                      break;
                    }
                    ?>.png" alt="">
                </div>
                <!-- Logo groupe -->
                <div class="logo-groupe">
                    <img src="../resources/img/logo/<?php
                    switch($_SESSION['id_groupe_principal'])
                    {
                      case 0 :
                      echo 'academie';
                      break;

                      case 1 :
                      echo 'eagle';
                      break;

                      case 2 :
                      echo 'rogue';
                      break;

                      case 3 :
                      echo 'seals';
                      break;

                      case 4 :
                      echo 'biere';
                      break;

                      case 5 :
                      echo 'logo-w';
                      break;
                    }
                    ?>.png" width="80px" alt="">
                </div>
                <!-- Holograme ship -->
                <div class="holo clear" id="containerHolo" style="position: relative;">
                    <p style="position: absolute; top: 0px;left: 10px ;opacity: .8" ><?php
                        switch($_SESSION['id_groupe_principal'])
                        {
                          case 0 :
                          echo 'Endeavor';
                          break;
                      
                          case 1 :
                          echo 'Sabre';
                          break;
                      
                          case 2 :
                          echo 'Octobre rouge';
                          break;
                      
                          case 3 :
                          echo 'Nova tank';
                          break;
                      
                          case 4 :
                          echo 'Hercules';
                          break;
                      
                          case 5 :
                          echo 'Octobre rouge';
                          break;
                        }
                    ?></p>
                    <p style="position: absolute; top: 20px;left: 10px; opacity: .8; font-size: 12px;"><?php
                        switch($_SESSION['id_groupe_principal'])
                        {
                          case 0 :
                          echo '';
                          break;

                          case 1 :
                          echo '4 T3';
                          break;

                          case 2 :
                          echo '6 Tourelles';
                          break;

                          case 3 :
                          echo '24 missiles T3';
                          break;

                          case 4 :
                          echo '';
                          break;

                          case 5 :
                          echo '6 Tourelles';
                          break;
                        }
                    ?></p>
                </div>
                <!-- List membre du groupe -->
                <div class="list-membre">
                    <svg class="list-membre-svg" xmlns="http://www.w3.org/2000/svg" width="130" height="170">
                      <defs>
                          <filter id="shadowLdM" x="0" y="0" width="130" height="175" filterUnits="userSpaceOnUse">
                            <feOffset dx="6" dy="6" input="SourceAlpha"/>
                            <feGaussianBlur stdDeviation="0.5" result="blur"/>
                            <feFlood flood-color="#fff" flood-opacity="0.3"/>
                            <feComposite operator="in" in2="blur"/>
                            <feComposite in="SourceGraphic"/>
                          </filter>
                        </defs>
                      <g transform="matrix(1, 0, 0, 1, 0, 0)" filter="url(#shadowLdM)">
                        <polyline points="5,5 100,5 125,35 125,165 5,165 5,5" stroke="#fff" stroke-width="2" fill="rgba(255,255,255,.04)"/>
                        </g>
                    </svg>
                    <div class="membres">
                        <p class="center">
                        <?php
                            foreach($members as $cle => $element)
                            {
                              echo $element['pseudo'] . '<br/>';
                            }
                        ?></p>
                    </div>
                </div>
            </div>

            <!--Missions-->
            <div class="mission">
                <!-- Name Section -->
                <svg  height="60" width="300" xmlns:xlink="http://www.w3.org/1999/xlink" style="position: absolute; left:0">
                  <filter id="shadowLegatus" x="0" y="0" width="300" height="175" filterUnits="userSpaceOnUse">
                      <feOffset dx="5" dy="5" input="SourceAlpha"/>
                      <feGaussianBlur stdDeviation="0.5" result="blur"/>
                      <feFlood flood-color="#fff" flood-opacity="0.2"/>
                      <feComposite operator="in" in2="blur"/>
                      <feComposite in="SourceGraphic"/>
                    </filter>
                    <g transform="matrix(1, 0, 0, 1, 0, 0)" filter="url(#shadowLegatus)">
                        <text x="88" y="25" fill="#fff" style="font-size:25px">Missions</text>
                      </g>
                </svg> 
                <!--Pourcentages -->  
                <div class="pourcentage">  
                    <h4>Combat</h4>    
                    <div class="containerBar">
                        <div class="back skillbar clearfix"  data-percent="<?php echo intval($box_missions); ?>%">
                             <div class="skill skillbar-bar" id="combat" style="height:15px;width:0%;"><?php echo intval($box_missions);?>%</p></div>
                        </div>
                    </div>
                    <h4>Sauvetage</h4>   
                    <div class="containerBar">
                        <div class="back skillbar clearfix"  data-percent="<?php echo intval($box_missions2); ?>%">
                             <div class="skill skillbar-bar" id="sauvetage" style="height:15px;width:0%;"><?php echo intval($box_missions2);?>%</p></div>
                        </div>
                    </div>
                    <h4>Logistique</h4>  
                    <div class="containerBar">
                        <div class="back skillbar clearfix" data-percent="<?php echo intval($box_missions3); ?>%">
                             <div class="skill skillbar-bar" id="logistique" style="height:15px;width:0%;"><?php echo intval($box_missions3);?>%</p></div>
                        </div>
                    </div>
                    <h4>Exploration</h4> 
                    <div class="containerBar">
                        <div class="back skillbar clearfix" data-percent="<?php echo intval($box_missions4); ?>%">
                             <div class="skill skillbar-bar" id="exploration" style="height:15px;width:0%;"><?php echo intval($box_missions4);?>%</p></div>
                        </div>
                    </div>
                </div>
                <!--Roles -->
                <div class="role">
                    <h3 style="text-align:center; color:#d4e8ff"> Role en mission : </h3>
                    <canvas id="graph_role" ></canvas>
                </div>
                <!--Graph missions -->
                <div class="graph_mission" >  
                    <h3 style="text-align:center; color:#d4e8ff"> Missions effectuées : </h3>
                    <canvas  id="graph_mission"></canvas>
                </div>
            </div>

            <!--Cercle -->
            <div class="cercle"></div>

            <!--Historique -->
            <div class="historique" style="position: relative;">
              <p style="position: absolute; top: -7vh; left:-2%;writing-mode: vertical-rl;text-orientation: upright;">Historique</p>
                <div class="historique-container">
                <?php
                      $i = 0;
                      if($casesVides!=0)
                      {
                        for($i=1;$i<$casesVides;$i++) {
                          echo '<div  id="' . $i . ' myBtn2" class="mission-histo" style="border: solid 1px grey" ></div>';
                          // code couleur de la case (mission effectuée, mais pas de rapport de mission encodé)
                        }
                        echo '<div  id="' . $i . 'myBtn2" class="missionHisto" style="border: solid 1px grey"></div>';
                      }
                      if($historiqueMissions!=0)
                      {
                        foreach($historiqueMissions as $cle => $element)
                        {
                          $i++;
                          ?><form action="../documents/voir_document.php" method="post">
                          <input name="hidden_mission" type="hidden" value="<?php echo $element['id_mission'];?>">
                          <button style="background:none;"><div id="<?php echo $i;?> myBtn2" <?php
                          switch($element['id_type_mission'])
                          {
                            case 1 :
                            echo 'style="border: solid 1px #3385b7"';
                            break;

                            case 2 :
                            echo 'style="border: solid 1px #6e0a0a""';
                            break;

                            case 3 :
                            echo 'style="border: solid 1px #425d00"';
                            break;

                            case 4 :
                            echo 'style="border: solid 1px #d69200"';
                            break;

                        }
                        ?> class="mission-histo" ><?php echo $element['date_mission'] ?></div></button>
                          </form><?php
                          // code de l'affichage de la fiche de mission
                          // code couleur de la case (en fonction des stats de la mission)
                        }
                      }
                      if($_SESSION['rang']!=18)
                      {
                        while($i<$gradeSuivant['missions_total'])
                        {
                          $i++;
                          echo '<div id="' . $i . ' myBtn2" class="mission-histo" style="border: solid 1px black"></div>';
                        // code couleur de la case (case vide)
                        }
                      }
                      ?>
                </div>
            </div>

            <!--Medailles -->
            <div class="medaille">
                <svg  height="40" width="450" xmlns:xlink="http://www.w3.org/1999/xlink" >
                        <filter id="shadowLegatus" x="0" y="0" width="300" height="175" filterUnits="userSpaceOnUse">
                            <feOffset dx="5" dy="5" input="SourceAlpha"/>
                            <feGaussianBlur stdDeviation="0.5" result="blur"/>
                            <feFlood flood-color="#fff" flood-opacity="0.2"/>
                            <feComposite operator="in" in2="blur"/>
                            <feComposite in="SourceGraphic"/>
                          </filter>
                          <g transform="matrix(1, 0, 0, 1, 0, 0)" filter="url(#shadowLegatus)">
                        <text x="100" y="35" fill="#fff" style="font-size:25px">Vos medailles</text>
                      </g>
                  </svg>
                  <div class="medaille-container">
                    <?php 
                  foreach ($listdesmedailles as $cle => $element) {
                     if ($element == 1 ){
                        echo '<img src="../resources/img/recompenses/' . $cle . '.png" alt="" >';
                      }
                  }?>
                  </div>
            </div>

            <!--Carte-->
            <div class="carte">
                <h2><?php echo $_SESSION['pseudo'];?></h2>
                <div class="carte-img">
                <img src="../resources/img/Carte.png" alt="" >
                <div class="carte-text">
                    <p><?php echo $_SESSION['rank_name'] ;?></p>
                    <p><?php echo $_SESSION['pseudo'];?></p>
                    <p>Groupe principal : <?php
                    switch($_SESSION['id_groupe_principal'])
                    {
                        case 0:
                            echo 'Académie';
                            break;

                        case 1:
                            echo 'Eagle';
                            break;

                        case 2:
                            echo 'Rogue';
                            break;

                        case 3:
                            echo 'Seals';
                            break;

                        case 4:
                            echo 'Papa Bear';
                            break;

                        case 5:
                            echo 'Cerberus';
                            break;
                    }
                    ?></p>
                    <p><?php echo 'Spécialité : ' .  $_SESSION['specialisation'];?></p>
                    <p><?php echo 'Missions effectuées : ' . $_SESSION['missions_total'];?></p>
                </div>
                </div>
            </div>
            
            <!--Oxy -->
            <div class="oxy">
                <div class="oxy-container">
                    <div class="kia-container">
                        <svg class="vie" xmlns="http://www.w3.org/2000/svg" width="41.261" height="94.236" viewBox="0 0 41.261 94.236">
                            <defs>
                                <filter id="shadowVie" x="0" y="0" width="130" height="175" filterUnits="userSpaceOnUse">
                                    <feOffset dx="5" dy="5" input="SourceAlpha"/>
                                    <feGaussianBlur stdDeviation="0.5" result="blur"/>
                                    <feFlood flood-color="#fff" flood-opacity="0.2"/>
                                    <feComposite operator="in" in2="blur"/>
                                    <feComposite in="SourceGraphic"/>
                                </filter>
                            </defs>
                            <g transform="matrix(1, 0, 0, 1, 0, 0)" filter="url(#shadowVie)">
                                <path id="path2180" d="M-8.617-530.739a1.661,1.661,0,0,1-.577-.536,1.983,1.983,0,0,1-.172-.43,3.517,3.517,0,0,0-.194-.516,7.353,7.353,0,0,1-.344-2.128,3.386,3.386,0,0,0-.2-1.182c-.084-.248-.18-.567-.213-.709s-.079-.335-.1-.43a4.97,4.97,0,0,1-.072-.58,2.589,2.589,0,0,0-.183-.817,3.581,3.581,0,0,1-.183-.688,2.209,2.209,0,0,0-.183-.617,1.4,1.4,0,0,1-.092-1.188,7.313,7.313,0,0,0-.048-3.116c-.12-.76-.457-2.633-.585-3.245a19.448,19.448,0,0,0-.679-2.478c-.379-1.209-.4-1.463-.556-5.839l-.037-1.074-.225-.58c-.124-.319-.294-.715-.377-.881a9.3,9.3,0,0,1-.652-1.958,5.854,5.854,0,0,1-.09-1.092c0-.332-.019-.777-.042-.99s-.062-.725-.088-1.139-.084-1.013-.129-1.332c-.1-.74-.577-3.026-.9-4.362-.154-.634-.288-1.319-.348-1.776a5.239,5.239,0,0,0-.144-.8c-.037-.049-.1-.026-.338.129a1.071,1.071,0,0,1-.559.217,1.022,1.022,0,0,1-.386-.018c-.091-.035-.124-.033-.135.007s-.067.44-.13.913-.18,1.159-.261,1.526a29.167,29.167,0,0,0-.492,3.105c-.023.313-.071.763-.106,1-.066.446-.155,2.476-.155,3.524a5.424,5.424,0,0,1-.273,2c-.1.319-.271.774-.37,1.01a9.057,9.057,0,0,0-.3.871c-.176.624-.174.748.049,3.731.025.333.045.894.045,1.246a12.917,12.917,0,0,1-.6,3.521c-.091.378-.2.862-.238,1.074s-.11.571-.157.8-.1.524-.122.666-.075.471-.123.731a17.071,17.071,0,0,0-.22,2.486,3.314,3.314,0,0,0,.108.993,2.158,2.158,0,0,1,.064,1.292,7.365,7.365,0,0,0-.429,2.385,3.774,3.774,0,0,1-.151,1.2,4.835,4.835,0,0,1-.214.559,3.43,3.43,0,0,0-.2,1.453,4.529,4.529,0,0,1-.036.752c-.023.076-.093.339-.155.585a4.107,4.107,0,0,1-.2.619,2.669,2.669,0,0,0-.151.391,1.912,1.912,0,0,1-.216.444.545.545,0,0,1-.37.29.844.844,0,0,1-1-.214,1.189,1.189,0,0,1,.062-.871c.074-.144.08-.183.032-.183a1.719,1.719,0,0,0-.409.709,1.121,1.121,0,0,1-.079.22.723.723,0,0,1-.432.189.55.55,0,0,1-.458-.334c-.032-.109-.064-.139-.152-.139a.425.425,0,0,1-.369-.279.236.236,0,0,0-.181-.164c-.145-.029-.225-.176-.225-.413a.3.3,0,0,0-.071-.224,1.262,1.262,0,0,1-.272-.74,6.573,6.573,0,0,1,.331-1.49,1.783,1.783,0,0,1,.166-.215,2.741,2.741,0,0,0,.272-.451,4.659,4.659,0,0,1,.474-.709,6.662,6.662,0,0,0,.679-.946,1.475,1.475,0,0,0,.219-.545,3.3,3.3,0,0,1,.324-.817,1.665,1.665,0,0,0,.268-1.261c-.034-.284-.017-.37.254-1.374a5.3,5.3,0,0,0-.106-2.043c-.093-.686-.21-1.662-.26-2.171s-.128-1.253-.173-1.655-.1-.933-.129-1.182-.116-.944-.2-1.547a11.5,11.5,0,0,1-.159-2.106,16.542,16.542,0,0,1,.193-2.729c.058-.5.14-.995.3-1.848a3.951,3.951,0,0,0,.1-1.4c-.021-.39-.037-1.28-.037-1.977a4.139,4.139,0,0,0-.286-2.127,18.768,18.768,0,0,1-.512-2.848c-.048-.372-.135-.96-.193-1.306s-.106-.695-.106-.775a6.677,6.677,0,0,0-.105-.7c-.058-.307-.145-.848-.194-1.2s-.118-.838-.153-1.075c-.263-1.744-.628-5.368-.561-5.573.01-.032.029-.7.042-1.476a15.088,15.088,0,0,1,.5-4.624,8.3,8.3,0,0,0,.362-2.984,8.906,8.906,0,0,1,.371-2.686,12.546,12.546,0,0,0,.314-3.31,15.85,15.85,0,0,0-.2-2.751c-.138-.863-.162-.875-.272-.139-.066.439-.448,2.021-.74,3.061a3.6,3.6,0,0,0-.123,1.2,7.53,7.53,0,0,1-.056.989c-.068.275-.472,1.45-.569,1.655-.14.3-.415.974-.549,1.354-.6,1.686-1.157,3.1-1.609,4.062a30.462,30.462,0,0,0-1.449,3.632c-.366,1.061-.631,1.811-.691,1.956a1.39,1.39,0,0,0-.058.279c-.012.106-.045.338-.072.516a2.94,2.94,0,0,0-.02.645,5.315,5.315,0,0,1-.215,2.213,4.26,4.26,0,0,0,.11,2.407,6.873,6.873,0,0,1,.094.917c.012.487.012.487-.109.591a.444.444,0,0,1-.244.1c-.211,0-.279-.144-.384-.811-.052-.33-.131-.731-.177-.891s-.115-.461-.153-.668c-.084-.455-.155-.541-.3-.361a.687.687,0,0,0-.122.257c-.013.073-.035.674-.05,1.336-.037,1.679-.066,1.979-.2,2.115a.439.439,0,0,1-.528.038c-.123-.081-.128-.151-.061-.82a4.29,4.29,0,0,0-.03-1.067,3.154,3.154,0,0,1-.022-.967c.059-.389.064-.652.013-.652-.02,0-.048.121-.062.269s-.046.452-.072.677-.054.917-.064,1.539a3.929,3.929,0,0,1-.083,1.232.461.461,0,0,1-.66.009c-.077-.084-.09-.185-.123-.933a15.434,15.434,0,0,1-.006-2.077q.033-.25-.011-.223a.215.215,0,0,0-.044.151.216.216,0,0,1-.043.151,4.959,4.959,0,0,0-.043.971c0,1-.03,1.186-.208,1.282a.42.42,0,0,1-.489-.079l-.14-.125-.026-.96c-.015-.528-.009-1.1.012-1.282l.129-1.1a8.426,8.426,0,0,0,.1-1.655,8.14,8.14,0,0,0-.767.659,1.613,1.613,0,0,1-1.2.414c-.353,0-.5-.083-.5-.275,0-.089.034-.126.161-.181.433-.185.527-.233.527-.274a4.113,4.113,0,0,1,.459-.505,8.586,8.586,0,0,0,.648-.72c.334-.456.366-.495.422-.495.03,0,.1-.052.146-.115A1.613,1.613,0,0,1-34.86-575a6.885,6.885,0,0,0,1.254-1.131,1.538,1.538,0,0,0,.276-.643,8.4,8.4,0,0,1,.3-1.238l.169-.621c.048-.176.117-.489.152-.7a5.592,5.592,0,0,1,.212-.78,17.844,17.844,0,0,0,.691-3.362c.231-1.466.356-2.18.471-2.708.057-.26.164-.821.238-1.246a15.354,15.354,0,0,1,.565-2.214c.047-.13.16-.449.25-.709s.222-.6.293-.752a7.469,7.469,0,0,0,.652-2.686c.05-.473.138-1.246.2-1.719a22.037,22.037,0,0,0,.288-4.1,17.026,17.026,0,0,1,.4-4.728,6.9,6.9,0,0,1,.574-1.762,2.706,2.706,0,0,1,1.337-1.025,5.068,5.068,0,0,0,.9-.458,5.035,5.035,0,0,1,.659-.3,32.875,32.875,0,0,0,3.962-1.9,2.036,2.036,0,0,0,.777-.766,6.124,6.124,0,0,0,.212-1.506,1.37,1.37,0,0,0-.1-.828,7.767,7.767,0,0,1-.541-1.912c-.072-.412-.088-.458-.167-.458a.717.717,0,0,1-.218-.113,2.425,2.425,0,0,1-.6-1.3,1.971,1.971,0,0,1-.049-1.109.688.688,0,0,1,.273-.464c.086-.07.1-.105.07-.258a1.113,1.113,0,0,0-.067-.249,3.888,3.888,0,0,1-.085-.623,3.733,3.733,0,0,0-.092-.646,1.22,1.22,0,0,1,0-.516c.031-.269.033-.426.006-.435-.053-.018-.054-.166,0-.2a.5.5,0,0,0,.067-.228,1.086,1.086,0,0,1,.067-.278.472.472,0,0,0,.041-.189.9.9,0,0,1,.136-.334c.075-.121.2-.329.275-.463a9.267,9.267,0,0,1,.875-1.131,2.273,2.273,0,0,1,.681-.523c.053-.014.1-.043.1-.065s.024-.036.054-.03a.65.65,0,0,0,.189-.022c.1-.025.13-.05.114-.112s.012-.085.187-.111a1.819,1.819,0,0,0,.35-.091.308.308,0,0,1,.185-.033.1.1,0,0,0,.1-.023.6.6,0,0,1,.267-.056.456.456,0,0,0,.237-.05c.02-.029.1-.018.242.031.249.088.379.1.4.022.013-.039.045-.035.124.017a.478.478,0,0,0,.424,0,.843.843,0,0,1,.193-.037c.071-.006.195-.024.275-.04.1-.021.137-.016.117.016s.054.046.226.045a.711.711,0,0,1,.6.234.734.734,0,0,0,.29.158.8.8,0,0,1,.291.151,1.569,1.569,0,0,0,.312.206,4.351,4.351,0,0,1,1.325,1.406,1.769,1.769,0,0,1,.2.344,2.557,2.557,0,0,0,.118.268,2.824,2.824,0,0,1,.175.978,7.161,7.161,0,0,1-.028,1.182,6.376,6.376,0,0,1-.2,1.524l-.073.207.115.136a1.9,1.9,0,0,1,.289.827,7.054,7.054,0,0,1-.355,1.447,1.6,1.6,0,0,1-.286.505.428.428,0,0,1-.41.165l-.127,0-.122.6a10.714,10.714,0,0,1-.236,1.075,6.857,6.857,0,0,0,.011,1.366,4.164,4.164,0,0,0,.3,1.339,2.52,2.52,0,0,0,.909.792,42.24,42.24,0,0,0,4.209,2.068,5.806,5.806,0,0,1,1.44.722,5.7,5.7,0,0,1,1.31,1.083,7.025,7.025,0,0,1,.886,2.924,17.947,17.947,0,0,1,.106,2.944,38.537,38.537,0,0,0,.189,4.459,30.777,30.777,0,0,0,.526,3.729,6.012,6.012,0,0,0,.426,1.161,26.8,26.8,0,0,1,.941,2.794c.049.2.147.762.219,1.246s.206,1.345.3,1.913c.169,1.034.3,1.936.389,2.579a14.24,14.24,0,0,0,.261,1.521c.1.372.531,1.747.757,2.391.083.236.214.652.292.924a2.824,2.824,0,0,0,.64,1.409c.144.154.549.531.9.837a5.03,5.03,0,0,1,.752.752,6.064,6.064,0,0,0,.7.895,2.228,2.228,0,0,1,.293.4,1.48,1.48,0,0,0,.584.614c.209.127.237.16.237.284,0,.214-.144.289-.5.26a2.054,2.054,0,0,1-1.3-.717l-.4-.39v.264a7.532,7.532,0,0,0,.2,1.413,8.067,8.067,0,0,1,.19,2.011c0,1.008-.027,1.132-.28,1.238a.277.277,0,0,1-.313-.012c-.211-.1-.249-.236-.307-1.072a4.777,4.777,0,0,0-.242-1.6,1.608,1.608,0,0,1-.1-.419c0-.08-.019-.145-.043-.145-.064,0-.052.275.025.571a6.075,6.075,0,0,1,.029,1.716,9.343,9.343,0,0,0-.054.971c0,.525-.005.56-.1.665a.473.473,0,0,1-.538.105c-.207-.123-.219-.2-.2-1.213a13.794,13.794,0,0,0-.1-2.147c-.075-.634-.137-.556-.1.13a2.915,2.915,0,0,1-.019.751,7.379,7.379,0,0,0-.15,1.519c-.013.572-.018.6-.118.682a.482.482,0,0,1-.571-.063c-.075-.09-.078-.193-.055-1.92.024-1.774.015-1.939-.1-1.939a1.145,1.145,0,0,0-.038.372,3.23,3.23,0,0,1-.077.634,2.65,2.65,0,0,0-.079.477,7.779,7.779,0,0,1-.112,1.06.309.309,0,0,1-.569.069,2.643,2.643,0,0,1-.066-1.365,7.35,7.35,0,0,0,0-1.837c-.032-.124-.07-.218-.086-.208s-.032-.078-.037-.193A2.1,2.1,0,0,0-2.511-573a7.2,7.2,0,0,1-.205-1.993c.009-.789,0-.841-.087-1.012a.85.85,0,0,1-.1-.246c0-.063-.3-.788-.96-2.287-.177-.405-.428-1.014-.558-1.354s-.452-1.13-.717-1.756c-.6-1.422-.714-1.716-1.227-3.181a17.461,17.461,0,0,0-.786-2.02,18.723,18.723,0,0,1-.651-1.784,6.141,6.141,0,0,1-.066-1.01,3.657,3.657,0,0,0-.123-1.2c-.239-.857-.505-1.979-.627-2.642-.1-.571-.26-1.757-.26-1.984,0-.032-.017-.059-.038-.059a1.71,1.71,0,0,0-.11.484c-.04.266-.137.832-.216,1.257a11.737,11.737,0,0,0-.145,4.921,18.507,18.507,0,0,1,.511,3.933c.023.638.06,1.238.083,1.332a1.834,1.834,0,0,1,.043.353c0,.132.023.193.081.224a.352.352,0,0,1,.126.163,7.558,7.558,0,0,1,.2.979,2.162,2.162,0,0,0,.078.333.493.493,0,0,1,.042.2c-.012,0,0,.026.025.057a.333.333,0,0,1,.044.183,1.761,1.761,0,0,0,.047.341,10.418,10.418,0,0,1,.3,1.655c.054.614.113,1.108.194,1.633.031.2.091.674.132,1.052a6.358,6.358,0,0,1,.023,1.461c-.076,1.138-.291,3.4-.415,4.364-.059.461-.145,1.38-.191,2.042-.1,1.411-.441,4.721-.538,5.182-.037.176-.1.436-.147.578a14.073,14.073,0,0,0-.265,4.083,7.438,7.438,0,0,0,.4,2.278,23.508,23.508,0,0,1,.564,2.858,23.384,23.384,0,0,1-.085,4.384c-.065.652-.136,1.989-.172,3.266-.012.414-.041,1.023-.065,1.354a13.634,13.634,0,0,0-.066,3.193.422.422,0,0,1,.04.2c-.012.012.012.072.052.134a2.894,2.894,0,0,1,.262,1.356l.024.666.2.258a7.318,7.318,0,0,1,.737,1.375,1.733,1.733,0,0,0,.159.326.238.238,0,0,1,.058.108,1.338,1.338,0,0,0,.2.276,9.652,9.652,0,0,1,.884,1.315,1.565,1.565,0,0,0,.182.305,1.867,1.867,0,0,1,.368,1.3,1.191,1.191,0,0,1-.118.688.722.722,0,0,1-.224.288c-.118.057-.159.18-.167.5-.006.25-.126.4-.288.358-.1-.025-.1-.015-.1.159,0,.26-.092.376-.3.376-.149,0-.168.012-.18.117-.032.273-.614.43-.832.225l-.094-.088-.025.126C-7.649-530.775-8.3-530.594-8.617-530.739Z" transform="translate(37.5 624.923)" fill="#3e9cff"/>
                            </g>
                        </svg>
                        <svg class="vie-bar" height="100" width="100">
                            <defs>
                                <filter id="shadowVieBar" x="0" y="0" width="50" height="50" filterUnits="userSpaceOnUse">
                                    <feOffset dx="5" dy="5" input="SourceAlpha"/>
                                    <feGaussianBlur stdDeviation="0.5" result="blur"/>
                                    <feFlood flood-color="#fff" flood-opacity="0.2"/>
                                    <feComposite operator="in" in2="blur"/>
                                    <feComposite in="SourceGraphic"/>
                                </filter>
                            </defs>
                            <g transform="matrix(1, 0, 0, 1, 0, 0)" filter="url(#shadowVie)">
                                <polyline points="0,20 10,10 30,10" fill="none" stroke="#fff">
                            </g>
                        </svg>
                        <p class="vie-text"><?php
                            $vie = (int) ($_SESSION['vie']*100);
                            echo $vie . "%";
                            ?></p>
                    </div>
                    <div class="oxy-box">
                        <div class="btm" style="position: absolute;" >
                            <svg  mlns="http://www.w3.org/2000/svg" height="165" width="500"  >
                                <filter id="shadowBtm" x="0" y="0" width="500" height="175" filterUnits="userSpaceOnUse">
                                    <feOffset dx="4" dy="4" input="SourceAlpha"/>
                                    <feGaussianBlur stdDeviation="0.5" result="blur"/>
                                    <feFlood flood-color="#fff" flood-opacity="0.3"/>
                                    <feComposite operator="in" in2="blur"/>
                                    <feComposite in="SourceGraphic"/>
                                </filter>
                                <defs>
                                <linearGradient id="stroke-btm" >
                                    <stop offset="5%" style="stop-color:rgba(255, 255, 255, 0)"/>
                                    <stop offset="30%" style="stop-color:rgb(255, 255, 255)"/>
                                    <stop offset="60%" style="stop-color:rgb(255, 255, 255)"/>
                                    <stop offset="92%" style="stop-color:rgba(255, 255, 255, 0)"/>
                                </linearGradient>
                                </defs>
                                <g transform="matrix(1, 0, 0, 1, 0, 0)" filter="url(#shadowBtm)">
                                    <polyline class="pathBtm" points="100,50 150,50 155,60 160,20 165,52 170,50 200,50 205,60, 210,20 215,52 220,50 250,50 255,60 260,22 265,51 270,50 300,50 305,60 310,20 315,52 320,50 350,50 355,60 360,20 365,55 370,50 400,50 405,60 410,20 415,52 420,50 450,50"
                                          style="fill:none;stroke:url(#stroke-btm);stroke-width:1.5" />
                                    <text x="370" y="85" fill="#fff">120 btm</text>
                                </g>
                            </svg>
                        </div>
                        <svg mlns="http://www.w3.org/2000/svg" height="165" width="500" style="position: absolute;" >
                            <defs>
                                <linearGradient id="FirstGradient" >
                                    <stop offset="0%" style="stop-color:rgb(14, 54, 87)"/>
                                    <stop offset="90%" style="stop-color:rgba(8, 185, 255, 0.0)"/>
                                </linearGradient>
                            </defs>
                            <polyline points="40,120 360,120 370,130 370,145 40,145 40,120 "
                            style="fill:url(#FirstGradient);stroke:#fff;stroke-width:1.5" />
                        </svg>
                        <svg mlns="http://www.w3.org/2000/svg" height="165" width="500" style="position: absolute;" >
                            <defs>
                                <linearGradient id="FirstGradient" >
                                    <stop offset="0%" style="stop-color:rgb(14, 54, 87)"/>
                                    <stop offset="90%" style="stop-color:rgba(8, 185, 255, 0.0)"/>
                                </linearGradient>
                            </defs>
                            <polyline points="400,110 470,110 470,145 400,145 400,110"
                                        style="fill:none;stroke:#fff;stroke-width:1.5" />
                        </svg>
                        <svg mlns="http://www.w3.org/2000/svg" height="165" width="500" style="position: absolute;" >
                            <filter id="shadowO2Box" x="0" y="0" width="500" height="175" filterUnits="userSpaceOnUse">
                                <feOffset dx="5" dy="5" input="SourceAlpha"/>
                                <feGaussianBlur stdDeviation="0.5" result="blur"/>
                                <feFlood flood-color="#fff" flood-opacity="0.2"/>
                                <feComposite operator="in" in2="blur"/>
                                <feComposite in="SourceGraphic"/>
                            </filter>
                            <g transform="matrix(1, 0, 0, 1, 0, 0)" filter="url(#shadowO2Box)">
                                <polyline points="130,100 470,100 485,115 485,155 20,155 20,120"
                                style="fill:none;stroke:#fff;stroke-width:1.5" />
                            </g>
                        </svg>
                        <svg  height="60" width="300" xmlns:xlink="http://www.w3.org/1999/xlink" style="position: absolute; top:90px">
                            <filter id="shadowO2" x="0" y="0" width="300" height="175" filterUnits="userSpaceOnUse">
                                <feOffset dx="5" dy="5" input="SourceAlpha"/>
                                <feGaussianBlur stdDeviation="0.5" result="blur"/>
                                <feFlood flood-color="#fff" flood-opacity="0.2"/>
                                <feComposite operator="in" in2="blur"/>
                                <feComposite in="SourceGraphic"/>
                            </filter>
                            <g transform="matrix(1, 0, 0, 1, 0, 0)" filter="url(#shadowO2)">
                                <text x="15" y="15" fill="#fff" style="font-size:15px">Oxygene (02)</text>
                            </g>
                        </svg>
                        <div style="position: absolute; top: 105px; left:410px; font-size:13px; line-height: 2px; text-align:center; color: rgb(51, 163, 255);">
                            <p id="oxy"></p>
                            <p>oxypen</p>
                        </div>
                    </div>
                </div>
            </div>
            <!--Commentaire -->
            <div class="commentaire">
                <div  id="commentaireMission" class="commentaire-container"></div>
            </div>

            <!--Kia -->
            <div class="kia"></div>
        </div>
        <?php include '../resources/svg/structure.html'; ?> <!-- Strcuture SVG -->
    </div>
</div>
</div>
<script>
   setTimeout(function(){ 
     document.querySelector('#body').style.display ="block" ;}, 3000);
</script>
<script src="../resources/js/skill_bar.js"></script>
<?php include '../resources/js/graph_role.php';?>
<?php include '../resources/js/graph_mission.php';?>
<?php include '../resources/js/commentaire_mission.php';?>
<script src="../resources/js/three.min.js"></script>
<script src="../resources/js/gltfloader.js"></script>
<script src="../resources/js/orbitcontrols.js"></script>
<script>
let scene, camera, renderer;
function init() {
  var container = document.getElementById("containerHolo");
  var WIDTH = 300,
  HEIGHT = 150;
  scene = new THREE.Scene();
  camera = new THREE.PerspectiveCamera(<?php
    switch($_SESSION['id_groupe_principal'])
    {
        case 0:
            echo '15';
            break;
        case 1:
            echo '60';
            break;
        case 2:
            echo '3.5';
            break;
        case 3:
            echo '60';
            break;
        case 4:
            echo '20';
            break;
        case 5:
            echo '3.5';
            break;
    }
    ?>,window.innerWidth/window.innerHeight,1,5000);
  camera.rotation.y = 45/180*Math.PI;
  camera.position.x = 1100;
  camera.position.y = 100;
  camera.position.z = 0;
  controls = new THREE.OrbitControls(camera);
  controls.addEventListener('change', renderer);
  controls.enabled = false;
  hlight = new THREE.AmbientLight (0x404040,50);
  scene.add(hlight);
  directionalLight = new THREE.DirectionalLight(0x404040,1);
  directionalLight.position.set(0,1,0);
  directionalLight.castShadow = true;
  scene.add(directionalLight);
  light = new THREE.PointLight(0xc4c4c4,1);
  light.position.set(0,300,500);
  scene.add(light);
  light2 = new THREE.PointLight(0xc4c4c4,1);
  light2.position.set(500,100,0);
  scene.add(light2);
  light3 = new THREE.PointLight(0xc4c4c4,1);
  light3.position.set(0,100,-500);
  scene.add(light3);
  light4 = new THREE.PointLight(0xc4c4c4,1);
  light4.position.set(-500,300,500);
  scene.add(light4);
  renderer = new THREE.WebGLRenderer({antialias:true, alpha: true}); // Transparence
  renderer.setClearColor(0x000000, 0);// Transparence
  renderer.autoClear = true;// Transparence
  renderer.setSize(WIDTH, HEIGHT);
  container.appendChild(renderer.domElement);
  let loader = new THREE.GLTFLoader();
  loader.load('<?php
    switch($_SESSION['id_groupe_principal'])
    {
        case 0:
            echo '../resources/obj/ende.gltf';
            break;
        case 1:
            echo '../resources/obj/sabre.gltf';
            break;
        case 2:
            echo '../resources/obj/hh.gltf';
            break;
        case 3:
            echo '../resources/obj/tank.gltf';
            break;
        case 4:
            echo '../resources/obj/hercules.gltf';
            break;
        case 5:
            echo '../resources/obj/hh.gltf';
            break;
    }
        ?>', function(gltf){
        car = gltf.scene.children[0];
        car.scale.set(0.5,0.5,0.5);
        scene.rotation.x += 0.01;
        scene.add(gltf.scene);
        animate();
        });
    }
    function animate() {
      scene.rotation.y += 0.0015;
      renderer.render(scene,camera);
      requestAnimationFrame(animate);
    }
    init();
</script>
</body>
</html>