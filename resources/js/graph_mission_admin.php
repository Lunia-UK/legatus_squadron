<script>
ctx = document.getElementById('graph_mission_admin').getContext('2d');
  Chart.defaults.global.defaultFontFamily = 'zektonrg';

  var chart = new Chart(ctx, {
      // The type of chart we want to create
      type: 'line',

      // The data for our dataset
      data: {
          labels: [
          '<?php echo $pastMonths[0]['txtFr'];?>',
          '<?php echo $pastMonths[1]['txtFr'];?>',
          '<?php echo $pastMonths[2]['txtFr'];?>',
          '<?php echo $pastMonths[3]['txtFr'];?>',
          '<?php echo $pastMonths[4]['txtFr'];?>',
          '<?php echo $pastMonths[5]['txtFr'];?>',
          '<?php echo $pastMonths[6]['txtFr'];?>',
          '<?php echo $pastMonths[7]['txtFr'];?>',
          '<?php echo $pastMonths[8]['txtFr'];?>',
          '<?php echo $pastMonths[9]['txtFr'];?>',
          '<?php echo $pastMonths[10]['txtFr'];?>',
          '<?php echo $pastMonths[11]['txtFr'];?>'],
          datasets: [{
            label: 'Sauvetage',
              borderColor: '#50D2B7',
              data: [<?php echo $pastMonths[0]['sauvetage'];?>,<?php echo $pastMonths[1]['sauvetage'];?>,<?php echo $pastMonths[2]['sauvetage'];?>,<?php echo $pastMonths[3]['sauvetage'];?>,<?php echo $pastMonths[4]['sauvetage'];?>,<?php echo $pastMonths[5]['sauvetage'];?>,<?php echo $pastMonths[6]['sauvetage'];?>,<?php echo $pastMonths[7]['sauvetage'];?>,<?php echo $pastMonths[8]['sauvetage'];?>,<?php echo $pastMonths[9]['sauvetage'];?>,<?php echo $pastMonths[10]['sauvetage'];?>,<?php echo $pastMonths[11]['sauvetage'];?>]
          },{
              label: 'Combat',
              borderColor: '#d4e8ff',
              data: [<?php echo $pastMonths[0]['combat'];?>,<?php echo $pastMonths[1]['combat'];?>,<?php echo $pastMonths[2]['combat'];?>,<?php echo $pastMonths[3]['combat'];?>,<?php echo $pastMonths[4]['combat'];?>,<?php echo $pastMonths[5]['combat'];?>,<?php echo $pastMonths[6]['combat'];?>,<?php echo $pastMonths[7]['combat'];?>,<?php echo $pastMonths[8]['combat'];?>,<?php echo $pastMonths[9]['combat'];?>,<?php echo $pastMonths[10]['combat'];?>,<?php echo $pastMonths[11]['combat'];?>]
          },{
              label: 'Exploration',
              borderColor: 'rgb(48, 57, 184)',
              data: [<?php echo $pastMonths[0]['exploration'];?>,<?php echo $pastMonths[1]['exploration'];?>,<?php echo $pastMonths[2]['exploration'];?>,<?php echo $pastMonths[3]['exploration'];?>,<?php echo $pastMonths[4]['exploration'];?>,<?php echo $pastMonths[5]['exploration'];?>,<?php echo $pastMonths[6]['exploration'];?>,<?php echo $pastMonths[7]['exploration'];?>,<?php echo $pastMonths[8]['exploration'];?>,<?php echo $pastMonths[9]['exploration'];?>,<?php echo $pastMonths[10]['exploration'];?>,<?php echo $pastMonths[11]['exploration'];?>]
          },{
              label: 'Logistique',
              borderColor: 'rgb(48, 157, 184)',
              data: [<?php echo $pastMonths[0]['logistique'];?>,<?php echo $pastMonths[1]['logistique'];?>,<?php echo $pastMonths[2]['logistique'];?>,<?php echo $pastMonths[3]['logistique'];?>,<?php echo $pastMonths[4]['logistique'];?>,<?php echo $pastMonths[5]['logistique'];?>,<?php echo $pastMonths[6]['logistique'];?>,<?php echo $pastMonths[7]['logistique'];?>,<?php echo $pastMonths[8]['logistique'];?>,<?php echo $pastMonths[9]['logistique'];?>,<?php echo $pastMonths[10]['logistique'];?>,<?php echo $pastMonths[11]['logistique'];?>]
          },{
            label: 'Total',
              borderColor: 'rgb(48, 57, 100)',
              data: [<?php echo $pastMonths[0]['total'];?>,<?php echo $pastMonths[1]['total'];?>,<?php echo $pastMonths[2]['total'];?>,<?php echo $pastMonths[3]['total'];?>,<?php echo $pastMonths[4]['total'];?>,<?php echo $pastMonths[5]['total'];?>,<?php echo $pastMonths[6]['total'];?>,<?php echo $pastMonths[7]['total'];?>,<?php echo $pastMonths[8]['total'];?>,<?php echo $pastMonths[9]['total'];?>,<?php echo $pastMonths[10]['total'];?>,<?php echo $pastMonths[11]['total'];?>]
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
            display: fa 
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


<script>
ctx = document.getElementById('graph_mission_admin_tablette').getContext('2d');
  Chart.defaults.global.defaultFontFamily = 'zektonrg';

  var chart = new Chart(ctx, {
      // The type of chart we want to create
      type: 'line',

      // The data for our dataset
      data: {
          labels: [
          '<?php echo $pastMonths[6]['txtFr'];?>',
          '<?php echo $pastMonths[7]['txtFr'];?>',
          '<?php echo $pastMonths[8]['txtFr'];?>',
          '<?php echo $pastMonths[9]['txtFr'];?>',
          '<?php echo $pastMonths[10]['txtFr'];?>',
          '<?php echo $pastMonths[11]['txtFr'];?>',],
          datasets: [{
            label: 'Sauvetage',
                borderColor: '#50D2B7',
                data: [<?php echo $pastMonths[6]['sauvetage'];?>,<?php echo $pastMonths[7]['sauvetage'];?>,<?php echo $pastMonths[8]['sauvetage'];?>,<?php echo $pastMonths[9]['sauvetage'];?>,<?php echo $pastMonths[10]['sauvetage'];?>,<?php echo $pastMonths[11]['sauvetage'];?>]
            },{
                label: 'Combat',
                borderColor: '#d4e8ff',
                data: [<?php echo $pastMonths[6]['combat'];?>,<?php echo $pastMonths[7]['combat'];?>,<?php echo $pastMonths[8]['combat'];?>,<?php echo $pastMonths[9]['combat'];?>,<?php echo $pastMonths[10]['combat'];?>,<?php echo $pastMonths[11]['combat'];?>]
            },{
                label: 'Exploration',
                borderColor: 'rgb(48, 57, 184)',
                data: [<?php echo $pastMonths[6]['exploration'];?>,<?php echo $pastMonths[7]['exploration'];?>,<?php echo $pastMonths[8]['exploration'];?>,<?php echo $pastMonths[9]['exploration'];?>,<?php echo $pastMonths[10]['exploration'];?>,<?php echo $pastMonths[11]['exploration'];?>]
            },{
                label: 'Logistique',
                borderColor: 'rgb(48, 157, 184)',
                data: [<?php echo $pastMonths[6]['logistique'];?>,<?php echo $pastMonths[7]['logistique'];?>,<?php echo $pastMonths[8]['logistique'];?>,<?php echo $pastMonths[9]['logistique'];?>,<?php echo $pastMonths[10]['logistique'];?>,<?php echo $pastMonths[11]['logistique'];?>]
            },{
              label: 'Total',
                borderColor: 'rgb(48, 57, 100)',
                data: [<?php echo $pastMonths[6]['total'];?>,<?php echo $pastMonths[7]['total'];?>,<?php echo $pastMonths[8]['total'];?>,<?php echo $pastMonths[9]['total'];?>,<?php echo $pastMonths[10]['total'];?>,<?php echo $pastMonths[11]['total'];?>]
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


<script>
ctx = document.getElementById('graph_mission_admin_small_tablette').getContext('2d');
Chart.defaults.global.defaultFontFamily = 'zektonrg';

var chart = new Chart(ctx, {
    // The type of chart we want to create
    type: 'line',

    // The data for our dataset
    data: {
        labels: [
        '<?php echo $pastMonths[9]['txtFr'];?>',
        '<?php echo $pastMonths[10]['txtFr'];?>',
        '<?php echo $pastMonths[11]['txtFr'];?>',],
        datasets: [{
          label: 'Sauvetage',
              borderColor: '#50D2B7',
              data: [<?php echo $pastMonths[9]['sauvetage'];?>,<?php echo $pastMonths[10]['sauvetage'];?>,<?php echo $pastMonths[11]['sauvetage'];?>]
          },{
              label: 'Combat',
              borderColor: '#d4e8ff',
              data: [<?php echo $pastMonths[9]['combat'];?>,<?php echo $pastMonths[10]['combat'];?>,<?php echo $pastMonths[11]['combat'];?>]
          },{
              label: 'Exploration',
              borderColor: 'rgb(48, 57, 184)',
              data: [<?php echo $pastMonths[9]['exploration'];?>,<?php echo $pastMonths[10]['exploration'];?>,<?php echo $pastMonths[11]['exploration'];?>]
          },{
              label: 'Logistique',
              borderColor: 'rgb(48, 157, 184)',
              data: [<?php echo $pastMonths[9]['logistique'];?>,<?php echo $pastMonths[10]['logistique'];?>,<?php echo $pastMonths[11]['logistique'];?>]
          },{
            label: 'Total',
              borderColor: 'rgb(48, 57, 100)',
              data: [<?php echo $pastMonths[9]['total'];?>,<?php echo $pastMonths[10]['total'];?>,<?php echo $pastMonths[11]['total'];?>]
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

<script>
ctx = document.getElementById('graph_mission_admin_mobile').getContext('2d');
Chart.defaults.global.defaultFontFamily = 'zektonrg';

var chart = new Chart(ctx, {
    // The type of chart we want to create
    type: 'line',

    // The data for our dataset
    data: {
        labels: [
        '<?php echo $pastMonths[10]['txtFr'];?>',
        '<?php echo $pastMonths[11]['txtFr'];?>',],
        datasets: [{
          label: 'Sauvetage',
              borderColor: '#50D2B7',
              data: [<?php echo $pastMonths[10]['sauvetage'];?>,<?php echo $pastMonths[11]['sauvetage'];?>]
          },{
              label: 'Combat',
              borderColor: '#d4e8ff',
              data: [<?php echo $pastMonths[10]['combat'];?>,<?php echo $pastMonths[11]['combat'];?>]
          },{
              label: 'Exploration',
              borderColor: 'rgb(48, 57, 184)',
              data: [<?php echo $pastMonths[10]['exploration'];?>,<?php echo $pastMonths[11]['exploration'];?>]
          },{
              label: 'Logistique',
              borderColor: 'rgb(48, 157, 184)',
              data: [<?php echo $pastMonths[10]['logistique'];?>,<?php echo $pastMonths[11]['logistique'];?>]
          },{
            label: 'Total',
              borderColor: 'rgb(48, 57, 100)',
              data: [<?php echo $pastMonths[9]['total'];?>,<?php echo $pastMonths[10]['total'];?>,<?php echo $pastMonths[11]['total'];?>]
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