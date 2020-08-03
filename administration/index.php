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
    <title>Administration</title>
</head>
<body>
    <div class="body body_admin">
        <div class="block-nav cut">
            <?php include '../components/navigation/nav_administration.html'; ?>
        </div>
        <section class="container-adm">
            <article class="block-large">
                <div class="graph-mission-admin">
                    <canvas  id="graph_mission_admin" width="1600" height="325"></canvas>
                </div>
                <div class="graph-mission-admin-tablette">
                    <canvas  id="graph_mission_admin_tablette" width="820" height="350"></canvas>
                </div>
                <div class="graph-mission-admin-small-tablette">
                    <canvas  id="graph_mission_admin_small_tablette" width="650" height="350"></canvas>
                </div>
                <div class="graph-mission-admin-mobile">
                    <canvas  id="graph_mission_admin_mobile" width="600" height="400"></canvas>
                </div>
            </article>
            <article class="block-mid">
            </article>
            <article class="block-mid">
            </article>
        </section>
    <div>
    <nav id="nav" class="nav">
        <ul>
            <li>
                <a href="../"><img src="../resources/img/logo/logo-w.png" alt="" width="50px"></a>
            </li>
            <li>
                <a href="../section_individuelle"><img src="../resources/svg/individual.svg" alt="" width="50px"></a>
            </li>
            <li>
                <a href="../documents"><img src="../resources/svg/archives.svg" alt="" width="30px"></a>
            </li>
            <li>
                <a href="../organigrame"><img src="../resources/svg/organigrame.svg" alt="" width="40px"></a>
            </li>
        </ul>
    </nav> 
    <?php include '../resources/js/nav_administration.php'; ?>
    <?php include '../resources/js/graph_mission_admin.php'; ?>
</body>
</html>