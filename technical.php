<!DOCTYPE html>
<html>
<head>
	<title>PrepSkill: Technical</title>
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
		session_name('login');
		session_start();
		$_SESSION['category']='Technical';
		if(isset($_SESSION['user'])) {
			include 'assets/verify_error.php';
			include 'nav_login.php'; 
		}
		else {
			include 'navigation.php';
		}
	?>

	<h1  id="main-head">Technical Programming</h1>

	<div class="container">
		<div class="row">
			<div class="col-sm-8 col-md-6 col-lg-8">
				<p>Technical rounds in recruitment process is of greater difficulty and importance as it tests the specific knowledge of the programmer in various languages that will be used each day on the job.<br><br>
				The many programming languages tested here are C, Python, Java, C++. The tests will vouch for a candidate’s fundamental aptitude and verify their prowess.
				</p><br>

				<ul id="no-list-style">
					<li><i class="fa fa-arrow-right"></i><a href="custom_test.php"><p id="test-link">Custom Test</p></a></li>
					<li><i class="fa fa-arrow-right"></i><a href="test_info.php?test=Random"><p id="test-link">Random Technical Test</p></a></li>
				</ul>
				<hr>

				<h3 id="head">C Programming</h3>
				<ul id="no-list-style">
					<li><i class="fa fa-arrow-right"></i><a href="test_info.php?test='CommandLine'"><p id="test-link">Command Line Arguments</p></a></li>
					<li><i class="fa fa-arrow-right"></i><a href="test_info.php?test='Bitwise'"><p id="test-link">Bitwise Operators</p></a></li>
					<li><i class="fa fa-arrow-right"></i><a href="test_info.php?test='Pointers'"><p id="test-link">Pointers</p></a></li>
				</ul>
				<hr>

				<h3 id="head">C++ Programming</h3>
				<ul id="no-list-style">
					<li><i class="fa fa-arrow-right"></i><a href="test_info.php?test='OOPS'"><p id="test-link">OOPS Concepts</p></a></li>
					<li><i class="fa fa-arrow-right"></i><a href="test_info.php?test='Constructors'"><p id="test-link">Constructors and Destructors</p></a></li>
					<li><i class="fa fa-arrow-right"></i><a href="test_info.php?test='Objects'"><p id="test-link">Objects and Classes</p></a></li>
				</ul>
				<hr>

				<h3 id="head">Java Programming</h3>
				<ul id="no-list-style">
					<li><i class="fa fa-arrow-right"></i><a href="test_info.php?test='Garbage'"><p id="test-link">Garbage Collections</p></a></li>
					<li><i class="fa fa-arrow-right"></i><a href="test_info.php?test='Threads'"><p id="test-link">Threads</p></a></li>
					
				</ul>
				<hr>
			</div>
			<div class="col-sm-4 col-md-6 col-lg-4">
				<div class="card">
		  			<div class="card-header">
		    			<h6><b id="card-head">Important Formulae</b></h6>
		  			</div>
		  			<div class="card-body">
		    			<p class="card-text" id="card-info">
		    				Not sure on what you need to know before taking up the test? Download our cumulative formulae worksheet. 
		    			</p>
		    			<center><a href="assets/formulae.txt" download class="btn btn-danger"><i class="fa fa-download"></i> Download</a></center>
		  			</div>
				</div>
				<?php
					if(isset($_SESSION['user'])) {
						include 'leaderboard.php';
					}
				?>
    		</div>
  		</div>
	</div><br><br>
	</div>
</body>
</html>