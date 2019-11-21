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
  <div class="card" style="max-height: 600px;overflow: auto;" >
    <div class="card-header">
      <h6><b id="card-head">Upcoming Tests</b></h6>
    </div>
    <div class="card-body">
    	<?php
    	$db = new mysqli('localhost','root','','prepskill');

	  	if($db->connect_error) {
	    	die('connection failed');
	  	}
	  	else {
			date_default_timezone_set('Asia/Kolkata'); 
			$current = date("Y-m-d H:i:s");
			$sql = "SELECT DISTINCT COMPANY, TEST_NAME, STARTTIME, ENDTIME FROM company;";
			$result = $db->query($sql);
			if($result->num_rows > 0)
			{
				while($row = $result->fetch_assoc())
					$datas[] = $row;
			}
			for($i=0;$i<count($datas);$i++)
			{
				$test = $datas[$i]['TEST_NAME'];
				$company = $datas[$i]['COMPANY'];
				$user = $_SESSION['user'];

				if($current > $datas[$i]['ENDTIME']) {
					$status = "<span style='color: red;'>This test has expired.</span>";
					$disable = 'style="font-weight: 900;color: black;"';
				}
				else if($current < $datas[$i]['STARTTIME']) {
					$disable = 'style="font-weight: 900;color: black;"';
					$status = "<span style='color: gray;'>This test is not Available yet.</span>";
				}
				else {
					$status = "<span style='color: green;'>This test is available.</span>";
					//$disable = 'style="font-weight: 900;" href="comp_take_test.php?company='.$datas[$i]["COMPANY"].'&test='.$datas[$i]['TEST_NAME'].'" ';
				}

				$sql = "SELECT * FROM res WHERE CATEGORY='$company' AND RTEST_NAME='$test' AND RUSER='$user';";
				$result = $db->query($sql);

				if($result->num_rows > 0) {
					if(!isset($disable)) 
						$disable = 'style="font-weight: 900;color: black;"';
				}
				else{
					if(!isset($disable))
						$disable = 'style="font-weight: 900;" href="comp_take_test.php?company='.$datas[$i]["COMPANY"].'&test='.$datas[$i]['TEST_NAME'].'" ';
				}

				echo '<span class="black-txt">Test : </span><a '.$disable.'>'.$datas[$i]['TEST_NAME'].'</a>';
				echo "<p id='card-info' >Company : <span style='font-weight: 900;' class='black-txt'>".$datas[$i]['COMPANY']."</span</p>
							<p id='card-info'><b class='black-txt'>Test Starts on </b>".$datas[$i]['STARTTIME']."<p id='card-info'><b class='black-txt'>Test Ends on </b>".$datas[$i]['ENDTIME']."</p>
							<p id='card-info'><b class='black-txt'>Status: </b>".$status."</p><br><br>";
			}
		}
		?>
	</div>
</div>
</body>
</html>