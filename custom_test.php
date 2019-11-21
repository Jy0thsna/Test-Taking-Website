<!DOCTYPE html>
<html>
<head>
	<title>PrepSkill: Custom Test</title>
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
		if(isset($_SESSION['user'])) {
			include 'assets/verify_error.php';
			include 'nav_login.php'; 
		}
		else {
			include 'navigation.php';
		}
	?>

	<h1  id="main-head">Custom Test</h1>

	<div class="container">
		<div class="col">
			Here, the candidate can choose the topics/lessons they are tested on. The concepts chosen will be graded through generation of random questions. This test will last the same amount of time as the others.<br><br>
			<ul>
				<li>Number of Questions: 20<br></li>
				<li>Total Marks: 20<br></li>
				<li>Total time: 30mins<br></li>
			</ul>
			<br><br>
			<form action="take_test.php" method="POST">
				<h4 id="head">Choose Topics:</h4><br>
				<div class="row">
					<div class="col">
						<b id="head">Aptitude and Reasoning:</b><br><br>
							<ul>
								<li><b>Quantitative Aptitude</b><br>
									<p id="mar-left">
										<label><input type="checkbox" value="TimeAndWork" name="topics[]"><span>Time and Work</span></label><br>
	    								<label><input type="checkbox" value="Ages" name="topics[]"><span>Ages</span></label><br>
	    								<label><input type="checkbox" value="Average" name="topics[]"><span>Average</span></label><br>
    								</p>
								</li>
								<li><b>Logical Reason</b><br>
									<p id="mar-left">
										<label><input type="checkbox" value="NumberSeries" name="topics[]"><span>Number Series</span></label><br>
	    								<label><input type="checkbox" value="Analogies" name="topics[]"><span>Analogies</span></label><br>
	    								<label><input type="checkbox" value="Essential" name="topics[]"><span>Essential Part</span></label><br>
    								</p>
    							</li>
								<li><b>Verbal Ability</b><br>
									<p id="mar-left">
										<label><input type="checkbox" value="Ordering" name="topics[]"><span>Ordering of Words</span></label><br>
	    								<label><input type="checkbox" value="Synonyms" name="topics[]"><span>Synonymns</span></label><br>
	    								<label><input type="checkbox" value="ChangeOfSpeech" name="topics[]"><span>Change of Speech</span></label><br>
	    							</p>
								</li>
							</ul>
					</div>
					<div class="col">
						<b id="head">Technical Programming:</b><br><br>
							<ul>
								<li><b>C Programming</b><br>
									<p id="mar-left">
										<label><input type="checkbox" id="Bitwise" name="topics"><span>Bitwise Operators</span></label><br>
	    								<label><input type="checkbox" id="CommandLine" name="topics"><span>Command Line Arguments</span></label><br>
	    								<label><input type="checkbox" id="Pointers" name="topics"><span>Pointers</span></label><br>
	    							</p>
    							</li>
								<li><b>C++ Programming</b><br>
									<p id="mar-left">
										<label><input type="checkbox" id="OOPS" name="topics"><span>OOPS Concepts</span></label><br>
	    								<label><input type="checkbox" id="Constructors" name="topics"><span>Constructors and Destructors</span></label><br>
	    								<label><input type="checkbox" id="Objects" name="topics"><span>Objects and Classes</span></label><br>
    								</p>
								</li>
								<li><b>Java Programming</b><br>
									<p id="mar-left">
										<label><input type="checkbox" id="Garbage" name="topics"><span>Garbage Collections</span></label><br>
	    								<label><input type="checkbox" id="Threads" name="topics"><span>Threads</span></label><br>
	    							</p>
    							</li>
							</ul>

					</div>
				</div><br><br>
				<center><input type="submit" name="" value="Generate Test >>" class="btn btn-danger"><center>
				<br><br><br>
			</form>
		</div>
	</div>
	</div>
</body>
</html>