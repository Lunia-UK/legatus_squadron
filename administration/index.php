<?php session_start(); ?>
<?php include '../src/connexion.php'; ?>
<?php // include '../src/config/config_admin_dashboard.php'; ?>
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
            <article class="block-large cut">
                <div class="graph-mission-admin">
                    <canvas  id="graph-mission-admin" width="1600" height="325"></canvas>
                </div>
                <div class="graph-mission-admin-tablette">
                    <canvas  id="graph-mission-admin-tTablette" width="820" height="350"></canvas>
                </div>
                <div class="graph-mission-admin-small-tablette">
                    <canvas  id="graph-mission-admin-small-tablette" width="650" height="350"></canvas>
                </div>
                <div class="graph-mission-admin-mobile">
                    <canvas  id="graph-mission-admin-mobile" width="600" height="400"></canvas>
                </div>
            </article>
            <article class="block-mid cut">
            </article>
            <article class="block-mid cut">
            </article>
        </section>
    <div>
    <script src="../resources/js/nav_administration.js"></script>
</body>
</html>