<!DOCTYPE html>
<html>
<head>
	<title>PrepSkill: Aptitude</title>
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
		$_SESSION['category']='Aptitude';
		if(isset($_SESSION['user'])) {
			include 'assets/verify_error.php';
			include 'nav_login.php'; 
		}
		else {
			include 'navigation.php';
		}
	?>

	<h1 id="main-head">Aptitude and Reasoning</h1>

	<div class="container">
		<div class="row">
			<div class="col-sm-8 col-md-6 col-lg-8">
				<p>An aptitude test is a structured assessment that aims to evaluate job candidates’ talent and/or skill in completing certain tasks without any prior knowledge or training. Aptitude tests are an accurate way of predicting the potential contribution of a candidate and the likelihood of them achieving success within the organization. There are lots of different types of aptitude test which can assess a series of core skills such as technical knowledge and comprehension.</p><br>
				<ul id="no-list-style">
					<li><i class="fa fa-arrow-right"></i><a href="custom_test.php"><p id="test-link">Custom Test</p></a></li>
					<li><i class="fa fa-arrow-right"></i><a href="test_info.php?test=Random"><p id="test-link">Random Aptitude Test</p></a></li>
				</ul>
				<hr>

				<h3 id="head">Quantitative Aptitude</h3>
				<p id="mar-left20">
					A quantitative aptitude test is used for various professions to check the numerical ability and problem solving ability of the test taker. Concepts such as time & work, directions, ages, etc. will be tested.<br>
				<ul id="no-list-style">
					<li><i class="fa fa-arrow-right"></i><a href="test_info.php?test='TimeAndWork'"><p id="test-link">Time and Work</p></a></li>
					<li><i class="fa fa-arrow-right"></i><a href="test_info.php?test='Average'"><p id="test-link">Average</p></a></li>
					<li><i class="fa fa-arrow-right"></i><a href="test_info.php?test='Ages'"><p id="test-link">Ages</p></a></li>
				</ul>
				<hr>

				<h3 id="head">Logical Aptitude</h3>
				<p id="mar-left20">
					A quantitative aptitude test is used for various professions to check the numerical ability and problem solving ability of the test taker. Concepts such as time & work, directions, ages, etc. will be tested.<br></p>
				<ul id="no-list-style">
					<li><i class="fa fa-arrow-right"></i><a href="test_info.php?test='NumberSeries'"><p id="test-link">Number Series</p></a></li>
					<li><i class="fa fa-arrow-right"></i><a href="test_info.php?test='Analogies'"><p id="test-link">Analogies</p></a></li>
					<li><i class="fa fa-arrow-right"></i><a href="test_info.php?test='EssentialPart'"><p id="test-link">Essential Part</p></a></li>
				</ul>
				<hr>

				<h3 id="head">Verbal Ability</h3>
				<p id="mar-left20">
					A quantitative aptitude test is used for various professions to check the numerical ability and problem solving ability of the test taker. Concepts such as time & work, directions, ages, etc. will be tested.<br></p>
				<ul id="no-list-style">
					<li><i class="fa fa-arrow-right"></i><a href="test_info.php?test='Ordering'"><p id="test-link">Ordering of Words</p></a></li>
					<li><i class="fa fa-arrow-right"></i><a href="test_info.php?test='Synonyms'"><p id="test-link">Synonyms</p></a></li>
					<li><i class="fa fa-arrow-right"></i><a href="test_info.php?test='ChangeOfSpeech'"><p id="test-link">Change of Speech</p></a></li>
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