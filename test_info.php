<!DOCTYPE html>
<html>
<head>
	<title>PrepSkill: Test Instructions</title>
	<link rel="icon" href="assets/images/logo.jpg">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	
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
			session_name('login');
			session_start();
			if(isset($_SESSION['user'])) {
				$_SESSION['test'] = $_GET['test'];
				include 'assets/verify_error.php';
				include 'nav_login.php'; 
			}
			else {
				$_SESSION['test'] = $_GET['test'];
				include 'navigation.php';
			}
		?>
		<h1 id="main-head">Instructions:</h1>
		<div class="container">
			<ul>
			<li id="head">This is a FREE online test. DO NOT pay money to anyone to attend this test.</li>
			<li>Total number of questions : 15.</li>
			<li>Time alloted : 20 minutes.</li>
			<li>Each question carry 1 mark, no negative marks.</li>
			<li>DO NOT refresh the page.</li>
			</ul>
			<br><br>
			<span id="profile-icon">&nbsp &nbsp &nbsp ALL THE BEST !!!!!</span>
			<br><br>
			<center><a class="btn btn-danger" href="take_test.php">Take Test >></a><center>
			<br><br><br><br><br><br><br><br><br><br>
		</div>
	</div>
</body>
</html>

