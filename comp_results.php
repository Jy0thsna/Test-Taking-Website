<?php 
$score = $_GET['score'];
date_default_timezone_set('Asia/Kolkata'); 
$date = date("Y-m-d H:i:s");


$db = new mysqli('localhost','root','','prepskill');

	if($db->connect_error) {
		die('connection failed');
	}
	else {
		session_name('login');
		session_start();
		$test = $_SESSION['test'];

		$company = $_SESSION['company'];

		if(isset($_SESSION['user']))
		{
			$button = "Dashboard";
			$href = "user_dashboard.php";
			$username = $_SESSION['user'];
			

			$newsql = "INSERT INTO res(RUSER, RTEST_NAME, CATEGORY, MARKS, TAKEN) VALUES ('$username', '$test', '$company', '$score', '$date');";

			$result = $db->query($newsql); 
		}
		else {

			$button = "Home";
			$href = "home.php";
		}
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>PrepSkill: Test Results</title>
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
	<link rel="stylesheet" type="text/css" href="test_style.css">
</head>
<body>
	<div class="container">
	<div class="card" style="width: 50%; margin: auto; margin-top: 100px;">
		<div class="card-header">
			<center><h4 id="card-head">TEST RESULTS</h4></center>
		</div>
		<div class="card-body">
			<p class="black-txt" style="padding: 10px;">
				Test Category : <?php echo $test; ?><br>
				Score : <?php echo $score; ?><br>
				Percentage : <?php echo ($score/15)*100; ?> %
			</p><br>
			<center><a href="<?php echo $href; ?>" class="btn btn-danger"><?php echo $button; ?></a></center>
		</div>
	</div>
	</div>
</body>