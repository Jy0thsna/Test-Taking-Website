<?php
	$db = new mysqli('localhost','root','','prepskill');

  	if($db->connect_error) {
    	die('connection failed');
  	}
  	else {
      $apti = [];
      $tech = [];
  		$sql = "SELECT DISTINCT RUSER FROM res WHERE CATEGORY='Aptitude' ORDER BY MARKS DESC;";
  		$result = $db->query($sql);
  		if($result) {
  			while($row = $result->fetch_assoc())
        {
          $apti[] = $row;
        }
  		}
      $sql = "SELECT DISTINCT RUSER FROM res WHERE CATEGORY='Technical' ORDER BY MARKS DESC;";
      $result = $db->query($sql);
      if($result) {
        while($row = $result->fetch_assoc())
        {
          $tech[] = $row;
        }
      }
  	}
?>

<!DOCTYPE html>
<html>
<head>
  <title>PrepSkill: Host Tests</title>
    <link rel="icon" href="assets/images/logo.jpg">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <div class="card" style="height: 250px;overflow: auto;">
    <div class="card-header">
      <h6><b id="card-head">Aptitude Leaderboard</b></h6>
    </div>
    <div class="card-body">
      <?php 
        for($i=0;$i<count($apti);$i++)
        {
          echo "<span id='card-info' style='font-size: 15px;'>".($i+1)."&nbsp &nbsp &nbsp".$apti[$i]['RUSER']."</span><br>";
        }
       ?>
    </div>
  </div>

  <div class="card" style="height: 250px;overflow: auto;">
    <div class="card-header">
      <h6><b id="card-head">Technical Leaderboard</b></h6>
    </div>
    <div class="card-body">
      <?php 
        for($i=0;$i<count($tech);$i++)
        {
          echo "<span id='card-info' style='font-size: 15px;'>".($i+1)."&nbsp &nbsp &nbsp".$tech[$i]['RUSER']."</span><br>";
        }
       ?>
    </div>
  </div>
</body>
</html>