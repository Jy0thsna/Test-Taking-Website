<!DOCTYPE html>
<html>
<head>
	<title>PrepSkill: Test Page</title>
	<link rel="icon" href="assets/images/logo.jpg">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="style.css">

</head>
<body id="no-back">
	<h1 id="main-head"><span id="black-txt"><script type="text/javascript">
		window.onload = document.write(localStorage.getItem('test'));
	</script></span></h1>
	<?php 
		session_name('login');
		session_start();
		if(isset($_SESSION['user'])) {

			include 'assets/js/timer.php';
		}
		else {
			include 'assets/js/timer.php';
		}
	?>
</body>