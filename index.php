<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="resources/css/styles.css">
    <title>Legatus Squadron</title>
</head>
<body>
    <section>
        <!-- Lines -->
        <svg class="line"  viewbox="0, 0, 1900, 750" stroke="url(#gradient)" xmlns="http://www.w3.org/2000/svg"  >
            <defs>
              <filter id="shadowLdM" x="0" y="0" width="130" height="175" filterUnits="userSpaceOnUse">
                <feOffset dx="6" dy="6" input="SourceAlpha"/>
                <feGaussianBlur stdDeviation="0.5" result="blur"/>
                <feFlood flood-color="#fff" flood-opacity="0.3"/>
                <feComposite operator="in" in2="blur"/>
                <feComposite in="SourceGraphic"/>
              </filter>
                <linearGradient id="gradient" x1="0%" y1="0%" x2="100%" y2="0%">
                    <stop offset="0%" stop-color="rgb(255,255,255)" />
                    <stop offset="100%" stop-color="rgba(255,255,255,0.1)" />
                </linearGradient>
            </defs>
              <path class="path"  d="M0 250 l250 0 l50 -50 l200 0" />
              <path class="path"  d="M0 250 l550 0 l80 -80 l500 0"/>
        </svg>
        <svg class="line" viewBox="0 0 1900, 950" stroke="url(#gradient2)" xmlns="http://www.w3.org/2000/svg" >
            <defs>
                <linearGradient id="gradient2" x1="0%" y1="0%" x2="100%" y2="0%">
                    <stop offset="0%" stop-color="rgb(255,255,255)" />
                    <stop offset="100%" stop-color="rgba(255,255,255,0.1)" />
                </linearGradient>
            </defs>
            <path class="path"  d="M0 800 l800 0 l50 50 l300 0"/>
            <path class="path" d="M0 800 l1200 0 l80 80 l500 0"/>
        </svg>
    </section>
    <!--Logo Legatus-->
    <div class="logo"> 
        <img src="resources/img/logo/logo-w.png" width="300"/>
    </div>
    <!--Section login-->
    <section class="section-login">
        <div class="description">
            <div class="bloc-text">
                <h1 class=font-h3 >U.E.E Navy</h1>
                <h1 class=font-h3>Restrited Area</h1>
                <p id="pharse">There are some places in the verse you don’t go alone...</p>
            </div>
        </div>
        <div class="login"> <!--Carte login-->
            <h2 id="h3-acces"></h2>
            <?php if(isset($_COOKIE['pseudo']) AND isset($_COOKIE['pass']))
                {
                    $pseudo = $_COOKIE['pseudo'];
                    $pass = $_COOKIE['pass'];
                }
                else if(isset($_SESSION['pseudo']))
                {
                    $pseudo  = $_SESSION['pseudo'];
                    $pass = '';
                }
                else
                {
                    $pseudo = '';
                    $pass = '';
                } ?>
            <form class="formLogin" action="src/authentification/validation-login.php" method="post">
                <input class="inputLogin" type="text" placeholder="Matricule" name="pseudo" value=<?php echo $pseudo; ?>>
                <input class="inputLogin" type="password" placeholder="Mot de passe" name="pass"  value= <?php echo $pass; ?>>
                    
                <!-- Svg Figer print -->
                  <button type="submit">
                        <svg id="fp" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 570.52 570.52">
                            <defs><style>.cls-1{fill:none;stroke-linecap:round;stroke-miterlimit:10;stroke-width:10px;}</style></defs>
                            <title>Login</title>
                            <g id="Layer_2" data-name="Layer 2">
                                <path class="cls-1" d="M186.07,86.05a220.72,220.72,0,0,1,41.16-16.39c50.89-14.52,95.72-7.34,121.55-.77" transform="translate(-2.23 -1.65)"/>
                                <path class="cls-1" d="M404.39,92.37a93.49,93.49,0,0,0-27.1-14.32" transform="translate(-2.23 -1.65)"/>
                                <path class="cls-1" d="M442.2,159.34a199.25,199.25,0,0,0-38.84-32.78c-8.4-5.4-54.56-34.18-119.61-31.87A210.87,210.87,0,0,0,241,100.63" transform="translate(-2.23 -1.65)"/>
                                <path class="cls-1" d="M214.46,108.89a206.92,206.92,0,0,0-88.13,65.93" transform="translate(-2.23 -1.65)"/>
                                <path class="cls-1" d="M114.84,294.82a178.74,178.74,0,0,1,7.74-44.39,180.58,180.58,0,0,1,26.07-52.12,174.47,174.47,0,0,1,36.64-37.68c19.78-14.55,37.78-20.69,48.52-24.26a187.87,187.87,0,0,1,72.52-9.29c4.94.37,9,.88,11.87,1.29" transform="translate(-2.23 -1.65)"/>
                                <path class="cls-1" d="M345,134.56a120.55,120.55,0,0,1,52.9,26.84" transform="translate(-2.23 -1.65)"/>
                                <path class="cls-1" d="M420.13,182.82a185.13,185.13,0,0,1,40,63.74" transform="translate(-2.23 -1.65)"/>
                                <path class="cls-1" d="M434.58,334.82a163.54,163.54,0,0,0-2.32-60.39c-2.89-12.59-11.27-47.07-40.77-75.61-41.62-40.26-95.44-39.84-107.1-39.48" transform="translate(-2.23 -1.65)"/>
                                <path class="cls-1" d="M254.46,163a119.78,119.78,0,0,0-45.68,21.42" transform="translate(-2.23 -1.65)"/>
                                <path class="cls-1" d="M187.1,202.69A158,158,0,0,0,147.62,284c-1.75,11.43-4,35.78-1.55,48.78a17.52,17.52,0,0,1,.26,5.42c-.91,8.39-7.74,14.56-13.68,18.58" transform="translate(-2.23 -1.65)"/>
                                <path class="cls-1" d="M179.1,303.34A103.5,103.5,0,0,1,183.49,269c8.88-29.1,28.26-45.69,35.35-51.61A117.41,117.41,0,0,1,271,192.63" transform="translate(-2.23 -1.65)"/>
                                <path class="cls-1" d="M305.55,191.34A99.92,99.92,0,0,1,323.36,195a101.25,101.25,0,0,1,16.77,6.71" transform="translate(-2.23 -1.65)"/>
                                <path class="cls-1" d="M363.88,219a88,88,0,0,1,26.06,27.61c7.15,12.12,10.14,24.28,12.13,44.39a366.52,366.52,0,0,1-1.29,81.55" transform="translate(-2.23 -1.65)"/>
                                <path class="cls-1" d="M394.84,404.24a151.63,151.63,0,0,1-5.93,19.61,153.44,153.44,0,0,1-6.71,15.23" transform="translate(-2.23 -1.65)"/>
                                <path class="cls-1" d="M144.52,391.08c3.41-4,8.79-10.2,15.74-17.55,7.34-7.76,9.78-9.81,12.39-13.93,3.26-5.16,6.78-13.59,6.19-27.1" transform="translate(-2.23 -1.65)"/>
                                <path class="cls-1" d="M165.68,416.11c21.2-15.77,30.38-32.37,36.65-43.61,8.77-15.74,6.63-24,8.25-69.16,1.07-29.67,7.77-36.45,11.36-42.33,11.86-19.41,30-28,35.87-30.7,6.69-3.07,23.24-10.4,44.39-7.49,32.12,4.43,50.48,29.15,55.22,36.13,14,20.53,14.41,40.95,15,66.58.33,15-.48,44.34-12.39,81.29-15.09,46.85-40.1,81.41-60.38,104" transform="translate(-2.23 -1.65)"/>
                                <path class="cls-1" d="M255.23,512.63a291.85,291.85,0,0,0,44.13-53.16,282.79,282.79,0,0,0,30.71-63.23c1-2.87,18.15-56,8.51-103.48-1.33-6.58-3.66-15.46-10.83-23.23-12.07-13.08-29.46-14-33.81-14.19-4.87-.25-20.22-1-33.55,9.55a47,47,0,0,0-14.71,21.16c-2.7,7.33-2.21,11.2-2.58,34.84-.27,17.72-.43,26.68-1.29,31.74a109.68,109.68,0,0,1-11.61,33c-7.35,14.24-15.51,23.49-25.29,34.58-7,8-13.33,14.15-17.81,18.32" transform="translate(-2.23 -1.65)"/>
                                <path class="cls-1" d="M202.33,470.82c5.62-5.47,13.71-13.62,23-24,15-16.82,22.5-25.23,29.68-37.93,10.86-19.2,15.2-36.27,16.52-45.42,2.95-20.53,1.68-30.46,2.19-41,.21-4.22-1.14-12.32,1.68-21.16,1.14-3.58,3.1-9.72,9-12.64A16.76,16.76,0,0,1,303,291.72c2.79,2.85,3.74,6.4,4.39,13.68a180,180,0,0,1,0,29.42c-1.22,20.87-.36,17.52-3.1,32.26a215.57,215.57,0,0,1-10.58,38.45c-1.45,3.61-7.14,17.44-20.13,36.65a278.65,278.65,0,0,1-46.71,52.9" transform="translate(-2.23 -1.65)"/>
                            </g>
                            <g id="Layer_3" data-name="Layer 3">
                                <circle class="cls-1" cx="285.26" cy="285.26" r="280.26"/>
                            </g>
                        </svg>
                        <svg id="fp2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 570.52 570.52">
                            <defs><style>.cls-1{fill:none;stroke-linecap:round;stroke-miterlimit:10;stroke-width:10px;}</style></defs>
                            <title>Connexion</title>
                            <g id="Layer_2" data-name="Layer 2">
                                <path class="cls-1" d="M186.07,86.05a220.72,220.72,0,0,1,41.16-16.39c50.89-14.52,95.72-7.34,121.55-.77" transform="translate(-2.23 -1.65)"/>
                                <path class="cls-1" d="M404.39,92.37a93.49,93.49,0,0,0-27.1-14.32" transform="translate(-2.23 -1.65)"/>
                                <path class="cls-1" d="M442.2,159.34a199.25,199.25,0,0,0-38.84-32.78c-8.4-5.4-54.56-34.18-119.61-31.87A210.87,210.87,0,0,0,241,100.63" transform="translate(-2.23 -1.65)"/><path class="cls-1" d="M214.46,108.89a206.92,206.92,0,0,0-88.13,65.93" transform="translate(-2.23 -1.65)"/>
                                <path class="cls-1" d="M114.84,294.82a178.74,178.74,0,0,1,7.74-44.39,180.58,180.58,0,0,1,26.07-52.12,174.47,174.47,0,0,1,36.64-37.68c19.78-14.55,37.78-20.69,48.52-24.26a187.87,187.87,0,0,1,72.52-9.29c4.94.37,9,.88,11.87,1.29" transform="translate(-2.23 -1.65)"/>
                                <path class="cls-1" d="M345,134.56a120.55,120.55,0,0,1,52.9,26.84" transform="translate(-2.23 -1.65)"/>
                                <path class="cls-1" d="M420.13,182.82a185.13,185.13,0,0,1,40,63.74" transform="translate(-2.23 -1.65)"/>
                                <path class="cls-1" d="M434.58,334.82a163.54,163.54,0,0,0-2.32-60.39c-2.89-12.59-11.27-47.07-40.77-75.61-41.62-40.26-95.44-39.84-107.1-39.48" transform="translate(-2.23 -1.65)"/><path class="cls-1" d="M254.46,163a119.78,119.78,0,0,0-45.68,21.42" transform="translate(-2.23 -1.65)"/>
                                <path class="cls-1" d="M187.1,202.69A158,158,0,0,0,147.62,284c-1.75,11.43-4,35.78-1.55,48.78a17.52,17.52,0,0,1,.26,5.42c-.91,8.39-7.74,14.56-13.68,18.58" transform="translate(-2.23 -1.65)"/>
                                <path class="cls-1" d="M179.1,303.34A103.5,103.5,0,0,1,183.49,269c8.88-29.1,28.26-45.69,35.35-51.61A117.41,117.41,0,0,1,271,192.63" transform="translate(-2.23 -1.65)"/>
                                <path class="cls-1" d="M305.55,191.34A99.92,99.92,0,0,1,323.36,195a101.25,101.25,0,0,1,16.77,6.71" transform="translate(-2.23 -1.65)"/><path class="cls-1" d="M363.88,219a88,88,0,0,1,26.06,27.61c7.15,12.12,10.14,24.28,12.13,44.39a366.52,366.52,0,0,1-1.29,81.55" transform="translate(-2.23 -1.65)"/>
                                <path class="cls-1" d="M394.84,404.24a151.63,151.63,0,0,1-5.93,19.61,153.44,153.44,0,0,1-6.71,15.23" transform="translate(-2.23 -1.65)"/>
                                <path class="cls-1" d="M144.52,391.08c3.41-4,8.79-10.2,15.74-17.55,7.34-7.76,9.78-9.81,12.39-13.93,3.26-5.16,6.78-13.59,6.19-27.1" transform="translate(-2.23 -1.65)"/>
                                <path class="cls-1" d="M165.68,416.11c21.2-15.77,30.38-32.37,36.65-43.61,8.77-15.74,6.63-24,8.25-69.16,1.07-29.67,7.77-36.45,11.36-42.33,11.86-19.41,30-28,35.87-30.7,6.69-3.07,23.24-10.4,44.39-7.49,32.12,4.43,50.48,29.15,55.22,36.13,14,20.53,14.41,40.95,15,66.58.33,15-.48,44.34-12.39,81.29-15.09,46.85-40.1,81.41-60.38,104" transform="translate(-2.23 -1.65)"/>
                                <path class="cls-1" d="M255.23,512.63a291.85,291.85,0,0,0,44.13-53.16,282.79,282.79,0,0,0,30.71-63.23c1-2.87,18.15-56,8.51-103.48-1.33-6.58-3.66-15.46-10.83-23.23-12.07-13.08-29.46-14-33.81-14.19-4.87-.25-20.22-1-33.55,9.55a47,47,0,0,0-14.71,21.16c-2.7,7.33-2.21,11.2-2.58,34.84-.27,17.72-.43,26.68-1.29,31.74a109.68,109.68,0,0,1-11.61,33c-7.35,14.24-15.51,23.49-25.29,34.58-7,8-13.33,14.15-17.81,18.32" transform="translate(-2.23 -1.65)"/>
                                <path class="cls-1" d="M202.33,470.82c5.62-5.47,13.71-13.62,23-24,15-16.82,22.5-25.23,29.68-37.93,10.86-19.2,15.2-36.27,16.52-45.42,2.95-20.53,1.68-30.46,2.19-41,.21-4.22-1.14-12.32,1.68-21.16,1.14-3.58,3.1-9.72,9-12.64A16.76,16.76,0,0,1,303,291.72c2.79,2.85,3.74,6.4,4.39,13.68a180,180,0,0,1,0,29.42c-1.22,20.87-.36,17.52-3.1,32.26a215.57,215.57,0,0,1-10.58,38.45c-1.45,3.61-7.14,17.44-20.13,36.65a278.65,278.65,0,0,1-46.71,52.9" transform="translate(-2.23 -1.65)"/>
                            </g>
                            <g id="Layer_3" data-name="Layer 3">
                                <circle class="cls-1" cx="285.26" cy="285.26" r="280.26"/>
                            </g>
                        </svg>
                    </button>
                <div class="loginNav">
                    <label class="checkboxContainer">Se souvenir de moi
                        <input type="checkbox" name="remember_me" value="true">
                        <span class="checkmark"></span>
                    </label>
                    <a href="inscription.php" class="loginNav-button">Inscription  /  </a>
                    <a class="loginNav-button">Mot de passe perdu ?</a>
                </div>
            </form>
        </div>
    </section>
</body>
</html>