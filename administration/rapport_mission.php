<?php session_start(); ?>
<?php include '../src/connexion.php'; ?>
<?php include '../src/config/config_admin_dashboard.php'; ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../resources/css/styles.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <title>Rapport de mission</title>
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
        <div class="block_Xl cut">
                <form action="">
                    <div class="formulaireContainer">
                        <div class="column1">
                            <label>Date de la mission:</label>
                            <input type="text" name="date" value=<?php echo $today; ?>>
                        </div>
                        <div class="column1">
                            <label>Type de la mission:</label>
                            <select name="type_mission">
                              <option value="1">Sauvetage</option>
                              <option value="2">Combat</option>
                              <option value="3">Exploration</option>
                              <option value="4">Logistique</option>
                            </select>
                        </div>
                        <div class="column1">
                            <label>Image:</label>
                            <!--<input type="hidden" name="MAX_FILE_SIZE" value="30000" />-->
                            <input name='fileToUpload' type='file' id="imgInp"  />
                            <!--<img id="blah" src="#" alt="" />-->
                        </div>
                        <div class="column1">
                            <label>Video:</label>
                            <input type="text" name="video" placeholder="ID de la video">
                        </div>
                        <div class="column2">
                            <label>Objectif:</label>
                            <textarea class="textareaColumn2" name="objectif"  placeholder="Veuillez décrire l'objectif initial de la mission" rows="4" required></textarea>
                        </div>
                        <div class="column2">
                            <label>Description:</label>
                            <textarea class="textareaColumn2" name="description" rows="4"  placeholder="Veuillez décrire les évènements majeurs de la mission"></textarea>
                        </div>
                            <div class="column3">
                            <table id="myTable">
                                <thead>
                                    <th>Rôle</th>
                                    <th>Nom participant</th> 
                                    <th>VIE</th>
                                    <th>Commentaire</th>
                                    <th></th>
                                </thead>
                                <tbody>
                                    <!--Ligne 1-->
                                    <tr id="1">
                                        <td data-label="Rôle">
                                            <select name="role[1]">
                                                <option value="4">Commandant (25+)</option>
                                                <option value="3">Commandant (15+)</option>
                                                <option value="2">Squad Leader (8)</option>
                                                <option value="1">Squad Leader (4)</option>
                                                <option value="0">Officier</option>
                                            </select>
                                        </td>
                                        <td data-label="Nom participant">
                                            <input class="nomParticipant" placeholder="pseudo..." list="participants" name="pseudo[1]" id="myInput1">
                                            <datalist id="participants">
                                            <?php
                                            foreach($listeDesMembres as $cle => $element)
                                            {
                                            echo '<option value=' . $element['pseudo'] . '></option>';
                                            }
                                            ?>
                                            </datalist> 
                                        </td>
                                        <td data-label="VIE">
                                        <div class="tooltip"><input type="checkbox" name="vie[1]" value=1 checked><span class="tooltiptext">Rester en vie</span></div>
                                        </td>
                                        <td data-label="Commentaire">
                                        <textarea class="commentaire" name="commentaire[1]" rows="1" cols="30" placeholder="..."></textarea>
                                        </td>
                                        <td><input type="button" class='closeBtn' value="&times;" onclick="deleteRow(this)"></td>
                                    </tr>
                                    <!--Ligne 2-->
                                    <tr id="2">
                                        <td data-label="Rôle">
                                            <select name="role[1]">
                                                <option value="4">Commandant (25+)</option>
                                                <option value="3">Commandant (15+)</option>
                                                <option value="2">Squad Leader (8)</option>
                                                <option value="1">Squad Leader (4)</option>
                                                <option value="0">Officier</option>
                                            </select>
                                        </td>
                                        <td data-label="Nom participant">
                                            <input class="nomParticipant" placeholder="pseudo..." list="participants" name="pseudo[1]" id="myInput1">
                                            <datalist id="participants">
                                            <?php
                                            foreach($listeDesMembres as $cle => $element)
                                            {
                                            echo '<option value=' . $element['pseudo'] . '></option>';
                                            }
                                            ?>
                                            </datalist> 
                                        </td>
                                        <td data-label="VIE">
                                        <div class="tooltip"><input type="checkbox" name="vie[1]" value=1 checked><span class="tooltiptext">Rester en vie</span></div>
                                        </td>
                                        <td data-label="Commentaire">
                                        <textarea class="commentaire" name="commentaire[1]" rows="1" cols="30" placeholder="..."></textarea>
                                        </td>
                                        <td><input type="button" class='closeBtn' value="&times;" onclick="deleteRow(this)"></td>
                                    </tr>
                                    <!--Ligne 3-->
                                    <tr id="3">
                                        <td data-label="Rôle">
                                            <select name="role[1]">
                                                <option value="4">Commandant (25+)</option>
                                                <option value="3">Commandant (15+)</option>
                                                <option value="2">Squad Leader (8)</option>
                                                <option value="1">Squad Leader (4)</option>
                                                <option value="0">Officier</option>
                                            </select>
                                        </td>
                                        <td data-label="Nom participant">
                                            <input class="nomParticipant" placeholder="pseudo..." list="participants" name="pseudo[1]" id="myInput1">
                                            <datalist id="participants">
                                            <?php
                                            foreach($listeDesMembres as $cle => $element)
                                            {
                                            echo '<option value=' . $element['pseudo'] . '></option>';
                                            }
                                            ?>
                                            </datalist> 
                                        </td>
                                        <td data-label="VIE">
                                        <div class="tooltip"><input type="checkbox" name="vie[1]" value=1 checked><span class="tooltiptext">Rester en vie</span></div>
                                        </td>
                                        <td data-label="Commentaire">
                                        <textarea class="commentaire" name="commentaire[1]" rows="1" cols="30" placeholder="..."></textarea>
                                        <td><input type="button" class='closeBtn' value="&times;" onclick="deleteRow(this)"></td>
                                        </td>
                                    </tr>
                                    <!--Ligne 4-->
                                    <tr id="4">
                                        <td data-label="Rôle">
                                            <select name="role[1]">
                                                <option value="4">Commandant (25+)</option>
                                                <option value="3">Commandant (15+)</option>
                                                <option value="2">Squad Leader (8)</option>
                                                <option value="1">Squad Leader (4)</option>
                                                <option value="0">Officier</option>
                                            </select>
                                        </td>
                                        <td data-label="Nom participant">
                                            <input class="nomParticipant" placeholder="pseudo..." list="participants" name="pseudo[1]" id="myInput1">
                                            <datalist id="participants">
                                            <?php
                                            foreach($listeDesMembres as $cle => $element)
                                            {
                                            echo '<option value=' . $element['pseudo'] . '></option>';
                                            }
                                            ?>
                                            </datalist> 
                                        </td>
                                        <td data-label="VIE">
                                        <div class="tooltip"><input type="checkbox" name="vie[1]" value=1 checked><span class="tooltiptext">Rester en vie</span></div>
                                        </td>
                                        <td data-label="Commentaire">
                                        <textarea class="commentaire" name="commentaire[1]" rows="1" cols="30" placeholder="..."></textarea>
                                        </td>
                                        <td><input type="button" class='closeBtn' value="&times;" onclick="deleteRow(this)"></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        
                    </div>
                    <button type="submit">Envoyer</button>
                </form>
                <div class="containerButton">    
                    <button onclick="nouvelleLigne()" class="buttonPlus" >
                        <svg xmlns="http://www.w3.org/2000/svg" width="59.091" height="43.016" viewBox="0 0 59.091 43.016">
                            <g id="Group_39" data-name="Group 39" transform="translate(0.5 0.5)">
                                <path id="Path_370" data-name="Path 370" d="M-15577.247,4218.688h43.675l14.416,14.416v27.6h-43.717l-14.374-14.374Z" transform="translate(15577.247 -4218.688)" fill="none" stroke="#fff" stroke-width="1"/>
                                <path id="Path_371" data-name="Path 371" d="M-15548.2,4226.428v24.325" transform="translate(15577.247 -4218.688)" fill="none" stroke="#3e9cff" stroke-width="1"/>
                                <path id="Path_372" data-name="Path 372" d="M0,0V24.325" transform="translate(41.208 19.902) rotate(90)" fill="none" stroke="#3e9cff" stroke-width="1"/>
                            </g>
                        </svg>
                    </button>
                    
                </div>
            </div>
        </section>
    <div>
    <?php include '../resources/js/nav_administration.php'; ?>
</body>
</html>