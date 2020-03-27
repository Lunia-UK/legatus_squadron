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
              <a href="../section_individuelle"><h4 id="pseudo"><?php //echo $_SESSION['short_rank_name'] . " " . $_SESSION['pseudo'];?></h4></a>
          <?php include '../components/navigation/nav_mid.html'; ?>
              <h5>Section individuelle</h5>
          <?php include '../components/navigation/nav_end.html'; ?>
    </div>
    <div class="body">

    </div>
</div>
<script>
   setTimeout(function(){ 
     document.querySelector('#body').style.display ="block" 
     document.querySelector('#msg').style.display ="none" ;}, 3000);
</script>
</body>
</html>