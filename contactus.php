<?php
	$db = new mysqli('localhost','root','','prepskill');

	if($db->connect_error) {
		die('connection failed');
	}
	else {
		$error = "";
		if(isset($_POST['name'])) {
			$name = $_POST['name'];
			$user = "example@gmail.com";
			$em = $_POST['user'];


				
					$message = " ".$name." Would like to contact you. Get back to them immediately. Email: ".$em." ";
					$subject = "Contact email";

					ini_set('smtp_port', '587');
					$header = "From: example@gmail.com";
					mail($user, $subject, $message, $header);
					echo "<script>
					window.open('home.php', '_self');
					</script>";
		}
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>PrepSkill: Contact Us</title>
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
		$_SESSION['category']='Technical';
		if(isset($_SESSION['user'])) {
			include 'assets/verify_error.php';
			include 'nav_login.php'; 
		}
		else {
			include 'navigation.php';
		}
	?>
	<div class="container">
		<div class="row">
			<div class="col">
				<p id="pad-top">
					<h1 id="logo-name">PREPSKILL</h1><br>
					Give us your details and we will get back to you ASAP.
					<br>Mobile: +91 12345679
					<br>Address: #111 abc avenue, Bangalore. 
					
				</p>
				<br><br><br><br><br><br>
			</div>
			<div class="col" id="mar-left50">
				<div class="card" id="mar-top">
					<div class="card-body">
						<center><h4 id="card-head">CONTACT US</h4></center>
						<p id="card-info"></p>
						<form action="testinggg.php" method="POST">
							<div class="input-field">
								<i class="material-icons prefix" style="color: black;">person</i>
								<input type="text" name="name" id="name" style="color: black;" onclick="validate();" required />
								<label for="name">Name</label>
							</div>
							<div class="input-field">
								<i class="material-icons prefix" style="color: black;">email</i>
								<input type="text" name="user" id="email" style="color: black;" onclick="validate();" required />
								<label for="email">Email</label>
							</div>
							
							<div class="input-field">
								 <textarea id="about" name="about" class="materialize-textarea black-txt"></textarea>
								 <label for="about">Query : (140 characters)</label>
							</div>
							

							<center><p style="color: red; font-size: 12px; font-weight: 500;" id="error"><?php echo $error; ?></p></center>
							<center>&nbsp &nbsp &nbsp<input type="submit" class="btn btn-danger" id="mar10" value="Contact Us" /></center>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	<br><br><br><br><br><br><br><br><br><br><br><br>
	</div>
</body>
</html>