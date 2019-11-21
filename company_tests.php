<!DOCTYPE html>
<html>
<head>
	<title>PrepSkill: Home</title>
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
	<link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div id="back">
		<?php
			$db = new mysqli('localhost','root','','prepskill');

			if($db->connect_error) {
				die('connection failed');
			}
			else {
				session_name('login');
				session_start();

				if(isset($_SESSION['user'])) {
					$user = $_SESSION['user'];
					include 'assets/verify_error.php';
					include 'nav_login.php';
				}
				else 
					include 'navigation.php';
			}
		?>
		<h1 id="main-head">Company Tests</h1>
		<div class="container">
			<?php
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

					if($current > $datas[$i]['ENDTIME']) {
						$status = "<span style='color: red;'>This test has expired.</span>";
						$disable = "disabled";
					}
					else if($current < $datas[$i]['STARTTIME']) {
						$status = "<span style='color: gray;'>This test is not Available yet.</span>";
						$disable = "disabled";
					}
					else {
						$status = "<span style='color: green;'>This test is available.</span>";
						$disable = "";
					}

					if(isset($user)) {
						$sql = "SELECT DISTINCT RTEST_NAME FROM res WHERE CATEGORY='$company' AND RTEST_NAME='$test' AND RUSER='$user';";
						$result = $db->query($sql);
						if($result->num_rows > 0) { 
								$disable = "disabled";
						}
						else{
							if(!isset($disable))
							$disable = "";
						}
					}
					echo "<div class='card'>
							<div class='card-header'>
								<h4 id='card-head' style='display: inline-block;'>".$datas[$i]['TEST_NAME']."</h4>";
					echo '<a '.$disable.' href="comp_take_test.php?company='.$datas[$i]["COMPANY"].'&test='.$datas[$i]['TEST_NAME'].'" class="btn btn-danger" style="float: right;margin-top: 5px;">Take Test</a></div>';
					echo "<div class='card-body'>
								<center><p id='card-info' style='font-weight: 900;font-size: 22px;'>Company : ".$datas[$i]['COMPANY']."</p>
								<p style='max-width: 70%;margin: auto;'><span id='card-info'><b class='black-txt'>Test Starts on </b>".$datas[$i]['STARTTIME']."</span><span id='card-info' style='float: right;'><b class='black-txt'>Test Ends on </b>".$datas[$i]['ENDTIME']."</span></p><br>
								<p id='card-info'><b class='black-txt'>Status: </b>".$status."</p></center>
							</div>
						</div><br>";
				}
			?>
		</div>

	</div>
</body>
</html>