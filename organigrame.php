<?php session_start(); ?>
<?php  include 'src/connexion.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="resources/css/styles.css">
    <title>Organigrame</title>
    <style>
    </style>
</head>
<body>
    <div class="header">
        <?php include 'components/navigation/nav_beginning.html'; ?>
              <a href="section_individuelle"><h4 id="pseudo"><?php echo $_SESSION['short_rank_name'] . " " . $_SESSION['pseudo'];?></h4></a>
          <?php include 'components/navigation/nav_mid.html'; ?>
              <h5>Organigrame</h5>
          <?php include 'components/navigation/nav_end.html'; ?>
    </div>
    <div class="body">
        <svg class="oragnigrame" width="600" height="600" viewBox="-110 -110 750 750" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path id="box1" class="box" d="M0.0290527 247.972H108.963C109.215 235.441 111.105 223.034 114.579 211.097C117.952 199.507 122.815 188.364 129.033 177.977C141.313 157.463 158.709 140.221 179.342 128.114L124.58 33.3997C106.137 44.0915 89.0889 57.1353 73.9106 72.1689C58.7362 87.1973 45.5368 104.11 34.6795 122.434C31.9585 127.026 29.3535 131.764 26.9373 136.518C24.508 141.297 22.2061 146.216 20.0954 151.136C17.9715 156.088 15.9849 161.173 14.191 166.25C12.3846 171.363 10.726 176.603 9.26107 181.825C7.78459 187.087 6.46628 192.469 5.34285 197.821C4.20943 203.219 3.24401 208.73 2.47336 214.202C1.69545 219.725 1.09537 225.353 0.689715 230.931C0.280062 236.564 0.0577188 242.298 0.0290527 247.972Z" />
            <path id="box2" class="box" d="M74.3324 427.16C89.6009 442.213 106.746 455.255 125.29 465.924L178.651 373.634C157.796 361.238 140.329 343.61 128.138 322.66C121.96 312.042 117.189 300.669 113.957 288.853C110.624 276.668 108.934 264.024 108.934 251.271C108.934 251.106 108.934 250.974 108.935 250.852H0.0290527C0.0561523 256.546 0.278157 262.298 0.688935 267.953C1.09572 273.55 1.69812 279.2 2.47952 284.742C3.25372 290.232 4.22406 295.762 5.36345 301.177C6.49295 306.548 7.81839 311.948 9.30311 317.228C10.7762 322.466 12.4443 327.724 14.2611 332.852C16.0654 337.946 18.0635 343.046 20.1999 348.013C22.3232 352.949 24.6388 357.881 27.0821 362.674C29.5123 367.439 32.1326 372.19 34.8702 376.797C45.793 395.17 59.0701 412.114 74.3324 427.16Z" />
            <path id="box3" class="box" d="M233.76 499.351C239.23 499.708 244.793 499.889 250.296 499.889C255.966 499.889 261.699 499.697 267.332 499.318C272.91 498.944 278.537 498.375 284.06 497.63C289.533 496.891 295.046 495.958 300.449 494.861C305.802 493.771 311.187 492.486 316.453 491.047C321.678 489.618 326.924 487.994 332.042 486.225C337.125 484.467 342.218 482.519 347.176 480.434C352.105 478.361 357.033 476.099 361.822 473.709C366.583 471.332 371.333 468.768 375.938 466.087L323.397 375.212C312.766 381.38 301.378 386.142 289.548 389.367C277.349 392.694 264.689 394.38 251.92 394.38C239.321 394.38 226.824 392.737 214.774 389.496C203.087 386.356 191.821 381.712 181.289 375.701L127.942 467.967C132.453 470.504 137.102 472.929 141.758 475.176C146.44 477.433 151.253 479.571 156.064 481.529C160.905 483.499 165.872 485.34 170.826 486.999C175.815 488.67 180.923 490.201 186.01 491.551C191.137 492.91 196.376 494.12 201.583 495.148C206.836 496.186 212.195 497.063 217.511 497.76C222.877 498.463 228.344 498.999 233.76 499.351Z"/>
            <path id="box4" class="box" d="M325.497 374.053L378.04 464.932C396.107 454.167 412.798 441.127 427.646 426.171C442.496 411.213 455.409 394.429 466.033 376.288C468.696 371.737 471.244 367.049 473.609 362.346C475.985 357.617 478.241 352.754 480.306 347.887C482.386 342.991 484.333 337.962 486.089 332.946C487.857 327.895 489.483 322.717 490.919 317.561C492.368 312.363 493.662 307.048 494.766 301.765C495.88 296.434 496.83 290.994 497.589 285.594C498.355 280.145 498.95 274.59 499.355 269.084C499.765 263.53 499.989 257.873 500.029 252.273H394.373C394.366 264.931 392.693 277.485 389.4 289.587C386.205 301.323 381.495 312.63 375.395 323.191C363.362 344.021 346.106 361.608 325.497 374.053Z" />
            <path id="box5" class="box" d="M394.325 249.383H500.003C499.985 243.781 499.781 238.118 499.391 232.553C499.006 227.043 498.432 221.481 497.685 216.024C496.943 210.618 496.014 205.17 494.917 199.833C493.831 194.54 492.557 189.218 491.125 184.014C489.707 178.85 488.101 173.665 486.347 168.604C484.606 163.578 482.677 158.544 480.614 153.638C478.564 148.764 476.326 143.89 473.965 139.153C471.615 134.44 469.08 129.739 466.432 125.183C455.87 107.005 443.009 90.1769 428.204 75.1656C413.407 60.1631 396.758 47.0672 378.723 36.2419L324.786 129.529C334.993 135.614 344.427 142.974 352.833 151.405C361.241 159.838 368.57 169.295 374.617 179.516C380.762 189.899 385.555 201.029 388.867 212.596C392.282 224.511 394.118 236.888 394.325 249.383Z" />
            <path id="box-eagle" class="box" d="M288.449 113.659C300.164 116.817 311.452 121.481 322.003 127.524L375.947 34.2219C371.324 31.5088 366.553 28.9135 361.767 26.5074C356.956 24.089 352.002 21.7987 347.049 19.7003C342.064 17.5887 336.943 15.6161 331.832 13.8371C326.686 12.0457 321.411 10.4033 316.156 8.95577C310.858 7.49685 305.442 6.19749 300.054 5.09388C294.621 3.98056 289.073 3.03689 283.568 2.28905C278.01 1.53402 272.347 0.958524 266.735 0.578513C261.065 0.194639 255.297 0 249.589 0C244.049 0 238.449 0.183398 232.944 0.545073C227.493 0.903195 221.992 1.44566 216.591 2.15741C211.241 2.86249 205.849 3.75246 200.564 4.80263C195.325 5.84393 190.054 7.06996 184.897 8.44667C179.782 9.81271 174.643 11.3632 169.626 13.0552C164.644 14.7351 159.65 16.5985 154.782 18.5939C149.945 20.5772 145.107 22.742 140.403 25.0283C135.725 27.3024 131.054 29.7571 126.521 32.3247L181.281 127.036C191.73 121.148 202.895 116.603 214.465 113.529C226.391 110.359 238.755 108.752 251.213 108.752C263.845 108.752 276.372 110.403 288.449 113.659Z"/>
            <circle class="box" cx="252" cy="252" r="127" stroke="none"/>
        </svg>
        <h2 class="orga-eagle-title">Eagle</h2>
        <div class="orga-eagle">
        <svg xmlns="http://www.w3.org/2000/svg" width="288.854" height="316.444" viewBox="0 0 288.854 316.444">
            <g id="Group_108" data-name="Group 108" transform="translate(-1545.112 -339.643)">
                <path id="Path_540" data-name="Path 540" d="M9000.612-251.857h143.866l16.145,16.145H9278.88l9.587,9.587V57.262l-6.324,6.324H9015.757l-15.145-15.145Z" transform="translate(-7455 592)" fill="rgba(255,255,255,0.07)" stroke="#fff" stroke-width="1"/>
                <path id="Path_541" data-name="Path 541" d="M9144.539-251.857h119.2l24.76,25.832" transform="translate(-7455 592)" fill="none" stroke="#fff" stroke-width="1"/>
                <path id="Path_542" data-name="Path 542" d="M9150.944-249.7l11.662,11.662h5.626l-3.259-3.258-8.4-8.4Z" transform="translate(-7454 592)" fill="#50d2b7" stroke="#50d2b7" stroke-width="1"/>
                <path id="Path_543" data-name="Path 543" d="M9150.944-249.7l11.662,11.662h5.626l-3.259-3.258-8.4-8.4Z" transform="translate(-7442 592)" fill="#50d2b7" stroke="#50d2b7" stroke-width="1"/>
                <path id="Path_544" data-name="Path 544" d="M9150.944-249.7l11.662,11.662h5.626l-3.259-3.258-8.4-8.4Z" transform="translate(-7431 592)" fill="#50d2b7" stroke="#50d2b7" stroke-width="1"/>
                <path id="Path_545" data-name="Path 545" d="M9150.944-249.7l11.662,11.662h5.626l-3.259-3.258-8.4-8.4Z" transform="translate(-7420 592)" fill="#50d2b7" stroke="#50d2b7" stroke-width="1"/>
            </g>
        </svg>
        <h2>Eagle</h2>
            <p>Pour c’eux qui aiment le dogfight et sont à l’aise avec le pilotage. L’escadrille de chasseurs fighters autonomes est constituée de pilotes expérimentés placés souvent en première ligne.</p>
            <h3>Squad Leader : Mimi</h3>
            <h3>Officiers :</h3>
            <div class="officiers-list">
                <p>Lorem</p>
                <p>Lorem</p>
                <p>Lorem</p>
                <p>Lorem</p>
                <p>Lorem</p>
                <p>Lorem</p>
                <p>Lorem</p>
                <p>Lorem</p>
                <p>Lorem</p>
                <p>Lorem</p>
                <p>Lorem</p>
                <p>Lorem</p>
                <p>Lorem</p>
                <p>Lorem</p>
                <p>Lorem</p>
                <p>Lorem</p>
            </div>
        </div>
        <div class="orga-seals">
            <svg xmlns="http://www.w3.org/2000/svg" width="414.479" height="237.444" viewBox="0 0 414.479 237.444">
                <g id="Group_109" data-name="Group 109" transform="translate(-1419.487 -418.643)">
                    <path id="Path_540" data-name="Path 540" d="M8874.987-172.857h269.491l16.145,16.145H9278.88l9.587,9.587V57.262l-6.324,6.324H8890.132l-15.145-15.145Z" transform="translate(-7455 592)" fill="rgba(255,255,255,0.07)" stroke="#fff" stroke-width="1"/>
                    <path id="Path_541" data-name="Path 541" d="M9144.539-251.857h119.2l24.76,25.832" transform="translate(-7455 671)" fill="none" stroke="#fff" stroke-width="1"/>
                    <path id="Path_542" data-name="Path 542" d="M9150.944-249.7l11.662,11.662h5.626l-3.259-3.258-8.4-8.4Z" transform="translate(-7454 671)" fill="#3e9cff" stroke="#3e9cff" stroke-width="1"/>
                    <path id="Path_543" data-name="Path 543" d="M9150.944-249.7l11.662,11.662h5.626l-3.259-3.258-8.4-8.4Z" transform="translate(-7442 671)" fill="#3e9cff" stroke="#3e9cff" stroke-width="1"/>
                    <path id="Path_544" data-name="Path 544" d="M9150.944-249.7l11.662,11.662h5.626l-3.259-3.258-8.4-8.4Z" transform="translate(-7431 671)" fill="#3e9cff" stroke="#3e9cff" stroke-width="1"/>
                    <path id="Path_545" data-name="Path 545" d="M9150.944-249.7l11.662,11.662h5.626l-3.259-3.258-8.4-8.4Z" transform="translate(-7420 671)" fill="#3e9cff" stroke="#3e9cff" stroke-width="1"/>
                </g>
            </svg>
            <h2>Seals</h2>
            <p>Pour c’eux qui n’ont pas peur de se salir les bottes ! Au plus près du combat , les Navy seals du legatus : pour commencer ou terminer le travail au sol…</p>
            
            <h3>Squad Leader : Cobra</h3>
            <h3>Officiers :</h3>
            <div class="officiers-list">
                <p>Lorem</p>
                <p>Lorem</p>
                <p>Lorem</p>
                <p>Lorem</p>
                <p>Lorem</p>
                <p>Lorem</p>
                <p>Lorem</p>
                <p>Lorem</p>
                <p>Lorem</p>
                <p>Lorem</p>
                <p>Lorem</p>
                <p>Lorem</p>
                <p>Lorem</p>
                <p>Lorem</p>
                <p>Lorem</p>
                <p>Lorem</p>
            </div>
        </div>
        <div class="orga-academie">
        <svg xmlns="http://www.w3.org/2000/svg" width="226.479" height="332.837" viewBox="0 0 226.479 332.837">
            <g id="Group_110" data-name="Group 110" transform="translate(-1419.487 -418.25)">
                <path id="Path_540" data-name="Path 540" d="M8874.987-173.249l183.491.392,16.145,16.145h16.257l9.587,9.587V152.262l-6.324,6.324H8890.132l-15.145-15.145Z" transform="translate(-7455 592)" fill="rgba(255,255,255,0.07)" stroke="#fff" stroke-width="1"/>
                <path id="Path_541" data-name="Path 541" d="M9144.539-251.857h19.2l24.76,25.832" transform="translate(-7543 671)" fill="none" stroke="#fff" stroke-width="1"/>
                <path id="Path_545" data-name="Path 545" d="M9150.944-249.7l11.662,11.662h5.626l-3.259-3.258-8.4-8.4Z" transform="translate(-7540 671)" fill="#b1475e" stroke="#b1475e" stroke-width="1"/>
            </g>
        </svg>

        <h2>Academie</h2>
            <h3>Recrues :</h3>
            <div class="officiers-list">
                <p>Lorem</p>
                <p>Lorem</p>
                <p>Lorem</p>
                <p>Lorem</p>
                <p>Lorem</p>
                <p>Lorem</p>
                <p>Lorem</p>
                <p>Lorem</p>
                <p>Lorem</p>
                <p>Lorem</p>
                <p>Lorem</p>
                <p>Lorem</p>
                <p>Lorem</p>
                <p>Lorem</p>
                <p>Lorem</p>
                <p>Lorem</p>
            </div>
        </div>
        <div class="orga-legatusFleet">
            <svg xmlns="http://www.w3.org/2000/svg" width="381.706" height="346.323" viewBox="0 0 381.706 346.323">
                <g id="Group_111" data-name="Group 111" transform="translate(-1474.236 -339.643)">
                <path id="Path_540" data-name="Path 540" d="M8930.281-251.857h214.2l16.145,16.145,140.232-.443,9.587,9.587L9309.9,86.7l-6.324,6.324-358.692.443-15.145-15.145Z" transform="translate(-7455 592)" fill="rgba(255,255,255,0.07)" stroke="#fff" stroke-width="1"/>
                <path id="Path_541" data-name="Path 541" d="M9144.539-251.857h141.2l24.76,25.832" transform="translate(-7455 592)" fill="none" stroke="#fff" stroke-width="1"/>
                <path id="Path_542" data-name="Path 542" d="M9150.944-249.7l11.662,11.662h5.626l-3.259-3.258-8.4-8.4Z" transform="translate(-7454 592)" fill="#215497" stroke="#215497" stroke-width="1"/>
                <path id="Path_543" data-name="Path 543" d="M9150.944-249.7l11.662,11.662h5.626l-3.259-3.258-8.4-8.4Z" transform="translate(-7442 592)" fill="#215497" stroke="#215497" stroke-width="1"/>
                <path id="Path_544" data-name="Path 544" d="M9150.944-249.7l11.662,11.662h5.626l-3.259-3.258-8.4-8.4Z" transform="translate(-7431 592)" fill="#215497" stroke="#215497" stroke-width="1"/>
                <path id="Path_545" data-name="Path 545" d="M9150.944-249.7l11.662,11.662h5.626l-3.259-3.258-8.4-8.4Z" transform="translate(-7420 592)" fill="#215497" stroke="#215497" stroke-width="1"/>
                </g>
            </svg>

        <h2>Legatus Fleet</h2>
            <p>Embarquez dans l’une de nos bases opérationnelles flottantes. Les vaisseaux capitaux regroupent toutes les compétences en une machine de guerre autonome prête à affronter les plus redoutables adversaires. Ils abritent les unités logistiques, médicales, scientifiques, d’intelligences, ingénieries…etc.</p>
            
            <h3>Squad Leader : Shakkawan</h3>
            <h3>Officiers :</h3>
            <div class="officiers-list">
                <p>Lorem</p>
                <p>Lorem</p>
                <p>Lorem</p>
                <p>Lorem</p>
                <p>Lorem</p>
                <p>Lorem</p>
                <p>Lorem</p>
                <p>Lorem</p>
                <p>Lorem</p>
                <p>Lorem</p>
                <p>Lorem</p>
                <p>Lorem</p>
                <p>Lorem</p>
                <p>Lorem</p>
                <p>Lorem</p>
                <p>Lorem</p>
            </div>
        </div>
        <div class="orga-delta">
            <svg xmlns="http://www.w3.org/2000/svg" width="709.479" height="237.444" viewBox="0 0 709.479 237.444">
                <g id="Group_109" data-name="Group 109" transform="translate(-1124.487 -418.643)">
                  <path id="Path_540" data-name="Path 540" d="M8579.987-172.857h564.491l16.145,16.145H9278.88l9.587,9.587V57.262l-6.324,6.324H8595.132l-15.145-15.145Z" transform="translate(-7455 592)" fill="rgba(255,255,255,0.07)" stroke="#fff" stroke-width="1"/>
                  <path id="Path_541" data-name="Path 541" d="M9144.539-251.857h119.2l24.76,25.832" transform="translate(-7455 671)" fill="none" stroke="#fff" stroke-width="1"/>
                  <path id="Path_542" data-name="Path 542" d="M9150.944-249.7l11.662,11.662h5.626l-3.259-3.258-8.4-8.4Z" transform="translate(-7454 671)" fill="#e59b29" stroke="#e59b29" stroke-width="1"/>
                  <path id="Path_543" data-name="Path 543" d="M9150.944-249.7l11.662,11.662h5.626l-3.259-3.258-8.4-8.4Z" transform="translate(-7442 671)" fill="#e59b29" stroke="#e59b29" stroke-width="1"/>
                  <path id="Path_544" data-name="Path 544" d="M9150.944-249.7l11.662,11.662h5.626l-3.259-3.258-8.4-8.4Z" transform="translate(-7431 671)" fill="#e59b29" stroke="#e59b29" stroke-width="1"/>
                  <path id="Path_545" data-name="Path 545" d="M9150.944-249.7l11.662,11.662h5.626l-3.259-3.258-8.4-8.4Z" transform="translate(-7420 671)" fill="#e59b29" stroke="#e59b29" stroke-width="1"/>
                </g>
            </svg>
            <h2>Delta</h2>            
            <h3>Squad Leader : Siegfried</h3>
            <h3>Officiers :</h3>
            <div class="officiers-list">
                <p>Lorem</p>
                <p>Lorem</p>
                <p>Lorem</p>
                <p>Lorem</p>
                <p>Lorem</p>
                <p>Lorem</p>
                <p>Lorem</p>
                <p>Lorem</p>
                <p>Lorem</p>
                <p>Lorem</p>
                <p>Lorem</p>
                <p>Lorem</p>
                <p>Lorem</p>
                <p>Lorem</p>
                <p>Lorem</p>
                <p>Lorem</p>
            </div>
        </div>
        <div class="orga-rogue">
        <svg xmlns="http://www.w3.org/2000/svg" width="313.139" height="463.564" viewBox="0 0 313.139 463.564">
            <g id="Group_112" data-name="Group 112" transform="translate(-1496.719 -339.643)">
                <path id="Path_540" data-name="Path 540" d="M8952.219-251.857h153.26l16.145,16.145,132.232-.443,9.587,9.587-3.263,430.508-6.324,6.324-286.492.443-15.145-15.145Z" transform="translate(-7455 592)" fill="rgba(255,255,255,0.07)" stroke="#fff" stroke-width="1"/>
                <path id="Path_541" data-name="Path 541" d="M9144.539-251.857h141.2l24.76,25.832" transform="translate(-7501 592)" fill="none" stroke="#fff" stroke-width="1"/>
                <path id="Path_542" data-name="Path 542" d="M9150.944-249.7l11.662,11.662h5.626l-3.259-3.258-8.4-8.4Z" transform="translate(-7492 592)" fill="#d2b57c" stroke="#d2b57c" stroke-width="1"/>
                <path id="Path_543" data-name="Path 543" d="M9150.944-249.7l11.662,11.662h5.626l-3.259-3.258-8.4-8.4Z" transform="translate(-7480 592)" fill="#d2b57c" stroke="#d2b57c" stroke-width="1"/>
                <path id="Path_544" data-name="Path 544" d="M9150.944-249.7l11.662,11.662h5.626l-3.259-3.258-8.4-8.4Z" transform="translate(-7469 592)" fill="#d2b57c" stroke="#d2b57c" stroke-width="1"/>
                <path id="Path_545" data-name="Path 545" d="M9150.944-249.7l11.662,11.662h5.626l-3.259-3.258-8.4-8.4Z" transform="translate(-7458 592)" fill="#d2b57c" stroke="#d2b57c" stroke-width="1"/>
            </g>
        </svg>

        <h2>Rogue</h2>            
            <h3>Squad Leader : Guyome</h3>
            <h3>Officiers :</h3>
            <div class="officiers-list">
                <p>Lorem</p>
                <p>Lorem</p>
                <p>Lorem</p>
                <p>Lorem</p>
                <p>Lorem</p>
                <p>Lorem</p>
                <p>Lorem</p>
                <p>Lorem</p>
                <p>Lorem</p>
                <p>Lorem</p>
                <p>Lorem</p>
                <p>Lorem</p>
                <p>Lorem</p>
                <p>Lorem</p>
                <p>Lorem</p>
                <p>Lorem</p>
            </div>
        </div>
    </div>

    

<script>
		var elements = document.querySelectorAll(".box");
		function resetChevrons() {
			for(i=0;i<elements.length;i++) {
				if(elements[i].classList.toString().indexOf("toggle")!=-1)
					elements[i].classList.toggle('toggle');
			}
		}
		function moveChevron(key) {
			resetChevrons();
			key.classList.toggle('toggle');
		}
		for(i=0;i<elements.length;i++) {
			elements[i].addEventListener('click', function(){
				moveChevron(this);
			})
		}
	</script>
</body>
</html>