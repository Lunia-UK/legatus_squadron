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
                <!-- Name -->
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
            </div>
        </div>
        <?php include '../resources/svg/structure.html'; ?>
    </div>
</div>
</div>
<script>
   setTimeout(function(){ 
     document.querySelector('#body').style.display ="block" 
     document.querySelector('#msg').style.display ="none" ;}, 3000);
</script>
</body>
</html>