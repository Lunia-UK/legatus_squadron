<script> 
    ctx = document.getElementById('graph_role').getContext('2d');
    Chart.defaults.global.defaultFontFamily = 'zektonrg';

    var chart = new Chart(ctx, {
    // The type of chart we want to create
    type: 'pie',

    // The data for our dataset
    data: {
    labels: ["Officier", "Chef d'escouade-4", "Chef d'escouade-8", "Commandement -15", "Commandement 15+"],
    datasets: [
        {
        borderColor:	['#3E9CFF', '#4cc2aa', '#d9dadb','#3E9C0F','#3E0CFF'],
        data: [<?php echo $_SESSION['mission_count_off'] ?>,<?php echo $_SESSION['mission_count_sl4'] ?>,<?php echo $_SESSION['mission_count_sl8'] ?>,<?php echo $_SESSION['mission_count_cdt1'] ?>, <?php echo $_SESSION['mission_count_cdt2'] ?>]
        }]
    },

    options: {
        animation: {
        duration: 1500, // general animation time
        easing:'easeInExpo'
        }, }

    });
</script>
