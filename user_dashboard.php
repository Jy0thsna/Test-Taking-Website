<!DOCTYPE html>
<html>
<head>
	<title>PrepSkill: Dashboard</title>
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
	<div id="back">
		<?php 
			session_name('login');
			session_start();
			$user = $_SESSION['user'];
			if(isset($_SESSION['user'])) {
				include 'assets/verify_error.php';
				include 'nav_login.php'; 
			}
			else {
				include 'navigation.php';
			}

			$db = new mysqli('localhost','root','','prepskill');

		  	if($db->connect_error) {
		    	die('connection failed');
		  	}
		  	else {
		  		$sql = "SELECT COUNT(RUSER) FROM res WHERE RUSER='$user';";
		  		$result = $db->query($sql);
		  		if($result) {
		  			$row = $result->fetch_assoc();
					$total_tests = $row['COUNT(RUSER)'];
		  		}
		  		
		  		$sql = "SELECT COUNT(RUSER) FROM res WHERE RUSER='$user' AND CATEGORY='Aptitude';";
		  		$result = $db->query($sql);
		  		if($result) {
		  			$row = $result->fetch_assoc();
					$aptitude_tests = $row['COUNT(RUSER)'];
		  		}
		  		
		  		$sql = "SELECT COUNT(RUSER) FROM res WHERE RUSER='$user' AND CATEGORY='Technical';";
		  		$result = $db->query($sql);
		  		if($result) {
		  			$row = $result->fetch_assoc();
					$technical_tests = $row['COUNT(RUSER)'];
		  		}
		  		
		  		$sql = "SELECT MAX(MARKS) FROM res WHERE RUSER='$user';";
		  		$result = $db->query($sql);
		  		if($result) {
		  			$row = $result->fetch_assoc();
					$overall_max = $row['MAX(MARKS)'];
		  		}
		  		
		  		$sql = "SELECT MAX(MARKS) FROM res WHERE RUSER='$user' AND CATEGORY='Aptitude';";
		  		$result = $db->query($sql);
		  		if($result) {
		  			$row = $result->fetch_assoc();
					$aptitude_max = $row['MAX(MARKS)'];
		  		}
		  		
		  		$sql = "SELECT MAX(MARKS) FROM res WHERE RUSER='$user' AND CATEGORY='Technical';";
		  		$result = $db->query($sql);
		  		if($result) {
		  			$row = $result->fetch_assoc();
					$technical_max = $row['MAX(MARKS)'];
		  		}

		  	}
		?>

		<h1 id="main-head">Dashboard</h1>

		<div class="container">
			<div id="green-block">
				<div class="row">
					<div class="col">
						<div id="white-circle">
							<center><p id="dash-num"><?php echo $total_tests; ?></p></center>
						</div><br>
						<center><p id="dash-txt">Total Tests</p></center>
					</div>
					<div class="col">
						<div id="white-circle">
							<center><p id="dash-num"><?php echo $aptitude_tests; ?></p></center>
						</div><br>
						<center><p id="dash-txt">Total Aptitude Tests</p></center>
					</div>
					<div class="col">
						<div id="white-circle">
							<center><p id="dash-num"><?php echo $technical_tests; ?></p></center>
						</div><br>
						<center><p id="dash-txt">Total Technical Tests</p></center>
					</div>
				</div>
			</div>
			<div id="red-block">
				<div class="row">
					<div class="col">
						<div id="white-circle">
							<center><p id="dash-num"><?php echo $overall_max; ?></p></center>
						</div><br>
						<center><p id="dash-txt">Maximum Marks</p></center>
					</div>
					<div class="col">
						<div id="white-circle">
							<center><p id="dash-num"><?php echo $aptitude_max; ?></p></center>
						</div><br>
						<center><p id="dash-txt">Aptitude Maximum Marks</p></center>
					</div>
					<div class="col">
						<div id="white-circle">
							<center><p id="dash-num"><?php echo $technical_max; ?></p></center>
						</div><br>
						<center><p id="dash-txt">Technical Maximum Marks</p></center>
					</div>
				</div>
			</div>

			<div class="card" style="max-width: 100%; height: 600px;">
				<center style="padding-top: 20px;"><?php include 'assets/graph.php'; ?></center>
			</div>
		</div>
		<div>
			
		</div>
		<br><br>
	</div>
</body>
</html>