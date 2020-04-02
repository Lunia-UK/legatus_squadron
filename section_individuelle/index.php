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
            </div>
        </div>
        <?php include '../resources/svg/structure.html'; ?> <!-- Strcuture SVG -->
    </div>
</div>
</div>
<script>
   setTimeout(function(){ 
     document.querySelector('#body').style.display ="block" 
     document.querySelector('#msg').style.display ="none" ;}, 3000);
</script>
<script src="../resources/js/skill_bar.js"></script>
<?php include '../resources/js/graph_role.php';?>
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