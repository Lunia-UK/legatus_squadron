 <script> 
  ctx = document.getElementById('graph_mission').getContext('2d');
  Chart.defaults.global.defaultFontFamily = 'zektonrg';
  var chart = new Chart(ctx, {
    // The type of chart we want to create
    type: 'line',
      // The data for our dataset
    data: {
    labels: ['<?php echo $pastMonths[0]['txtFr'];?>',
    '<?php echo $pastMonths[1]['txtFr'];?>',
    '<?php echo $pastMonths[2]['txtFr'];?>',
    '<?php echo $pastMonths[3]['txtFr'];?>',
    '<?php echo $pastMonths[4]['txtFr'];?>',
    '<?php echo $pastMonths[5]['txtFr'];?>',
    '<?php echo $pastMonths[6]['txtFr'];?>'],
    datasets: [{
      label: 'Personnel',
      borderColor: '#d4e8ff',
      data: [<?php echo $pastMonths[0]['personnal'];?>,<?php echo $pastMonths[1]['personnal'];?>,<?php echo $pastMonths[2]['personnal'];?>,<?php echo $pastMonths[3]['personnal'];?>,<?php echo $pastMonths[4]['personnal'];?>,<?php echo $pastMonths[5]['personnal'];?>,<?php echo $pastMonths[6]['personnal'];?>]
      },{
      label: 'Legatus',
      borderColor: '#6c090e',
      data: [<?php echo $pastMonths[0]['legatus'];?>,<?php echo $pastMonths[1]['legatus'];?>,<?php echo $pastMonths[2]['legatus'];?>,<?php echo $pastMonths[3]['legatus'];?>,<?php echo $pastMonths[4]['legatus'];?>,<?php echo $pastMonths[5]['legatus'];?>,<?php echo $pastMonths[6]['legatus'];?>]
      }]
    },
    options: {
      legend: {
      labels: {
      fontColor: '#f3f3f3',
      fontSize: 15,
    }},
    scales: {
      xAxes: [{
        gridLines: {
          display: false,
        },
      }],
      yAxes: [{
        gridLines: {
        color: "#132344" ,
        },
      }],
    },
    animation: {
        duration: 2000, // general animation time
        easing:'easeInExpo'
    },
    elements: {
        line: {
            tension: 0 ,// disables bezier curves
            borderWidth: 1,
        },
        point:{
            borderWidth: 1,
            radius: 1
    }
    }}
                    
  });
</script>   