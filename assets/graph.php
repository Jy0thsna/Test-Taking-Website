<?php
	
$db = new mysqli('localhost','root','','prepskill');

  if($db->connect_error) {
    die('connection failed');
  }
  else {
    $user = $_SESSION['user'];
    $scores = array();
    $sql = "SELECT MARKS FROM res WHERE RUSER='$user' ORDER BY TAKEN DESC;";
    $result = $db->query($sql);
    if($result->num_rows >0)
    {
      while($row = $result->fetch_assoc())
      {
        $scores[] = $row;
      }
    } 
  }
?>

<html>
<head>
  <p id="demo"></p>
  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['line']});
      google.charts.setOnLoadCallback(drawChart);
      var scores = <?php echo json_encode($scores); ?>;
      var graph_arr = [];
      if(scores.length==0) {
        graph_arr = [[0, 0],[0, 0],[0, 0]];
      }
      else {
        for(var i=0; i<scores.length; i++){
          for(j in scores[i]) {
            graph_arr.push([i+1, parseInt(scores[i][j])]);
          }
        }
      }

    function drawChart() {

      var data = new google.visualization.DataTable();
      data.addColumn('number', 'Attempts');
      data.addColumn('number', 'Test Scores');

      data.addRows(graph_arr);

      var options = {
        chart: {
          title: 'Progress Report',
          subtitle: ''
        },
        width: 900,
        height: 500,
        axes: {
          x: {
            0: {side: 'top'}
          }
        }
      };

      var chart = new google.charts.Line(document.getElementById('line_top_x'));

      chart.draw(data, google.charts.Line.convertOptions(options));
    }
  </script>
</head>
<body>
  <center><div id="line_top_x"></div></center>
</body>
</html>