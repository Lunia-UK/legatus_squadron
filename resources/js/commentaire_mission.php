<script>
  setInterval(function(commentaireMission) {
    var values = [<?php foreach($comments as $cle => $element){
    if($element['comment']!="")
      {
       echo '"' . $element['date_mission'] . ' <br> <br> ' . $element['comment'] . '",';
      }}?>];
      valueToUse = values[Math.floor(Math.random() * values.length)];
  // do something with the selected value
    document.getElementById("commentaireMission").innerHTML = valueToUse;
    }, 10000);
</script>