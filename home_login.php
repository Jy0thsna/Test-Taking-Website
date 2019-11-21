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

	<script type="text/javascript" >
	   	function preventBack(){window.history.forward();}
	    setTimeout("preventBack()", 0);
	    window.onunload=function(){null};
	</script>

	<script type="text/javascript">
		function validate() {
			var error = document.getElementById('error');
			error.innerHTML = "";
		}
	</script>
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
		?>
		<div class="container">
			<div class="row">
				<div class="col-sm-8 col-md-6 col-lg-8">
					<p id="pad-top">
						<h1 id="logo-name">PREPSKILL</h1><br>
						<h3>We are India’s largest assessment and recruitment company.</h3><br>
						<ul>
							<li>Enables companies to hire talent which performs on the job.</li>
							<li>65% of candidates who found jobs through us had an existing offer.</li>
							<li>All companies serviced since Dec 2009 have reported high satisfaction level.</li>
							<li>Customers include - start-ups to Fortune 100 R&D to services companies.</li>
							<li>Our superior service offering is enabled by a combination of deep business insights, superior assessment (pH Test) and unparalleled reach amongst quality candidates.</li>
						</ul><br>
						Our superior service offering is enabled by a combination of deep business insights, superior assessment (pH Test) and unparalleled reach amongst quality candidates.<br><br>

						The market-leading technical skill assessment platform to identify and test the right skills.<br><br>
						From supporting developers who shape technology to helping enterprises innovate at scale and hire tech talent, PrepSkill bridges the gap between tomorrow's tech powered growth and today's workforce.

					</p>
				</div>
				<div class="col-sm-4 col-md-6 col-lg-4">
					<div id="mar-top">
						<?php include 'upcoming_tests.php'; ?>
					</div>
				</div>
			</div>

		</div>
		<br><br><br><br><br>
	</div>

</body>
</html>