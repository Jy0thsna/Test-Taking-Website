<?php
	$db = new mysqli('localhost','root','','prepskill');

	if($db->connect_error) {
		die('connection failed');
	}
	else {
		$error = "";
		if(isset($_POST['user'])) {
			$name = $_POST['name'];
			$user = $_POST['user'];
			$gender = $_POST['gender'];
			$dem = $_POST['dem'];
			$password = $_POST['pwd'];
			$pwd = password_hash($password, PASSWORD_BCRYPT);
			$otp = substr(uniqid(),7,5);

			if($_POST['pwd'] == $_POST['confirm_pwd']) {

				$sql = "INSERT INTO user(NAME, USERNAME, GENDER, DEM, PWD, VERIFY, OTP)"."VALUES('$name', '$user', '$gender', '$dem', '$pwd', 'no', '$otp')";

				if ($db->query($sql)===true) {
					$message = "Hi ".$name.",\n"."Welcome to PrepSkill!!! \nWe are glad you chose us to prepare for your placements. There is just one more step for you to become a permanent member. Click the link given below to verify your Email and enter the OTP: ".$otp." .\n"."http://localhost/WT_mini_project/first_login.html";
					$subject = "Welcome to PrepSkill! Please verify your email.";

					ini_set('smtp_port', '587');
					$header = "From: example@gmail.com";
					mail($user, $subject, $message, $header);
					mkdir('assets/users/'.$user);
					echo "<script>
					window.open('home.php', '_self');
					</script>";
				}
				else {
					$error = "* Username/Email already exists.";
				}
			}
			else {
				$error = "* Password and Confirm Password did not match.";
			}
		}
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>PrepSkill: Register</title>
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

	<div class="container">
		<div class="row">
			<div class="col">
				<p id="pad-top">
					<h1 id="logo-name">PREPSKILL</h1><br>

					PrepSkill's secure, professional web-based Quiz maker is an easy-to-use, customizable online testing solution for business, training & educational assessment with Tests & Quizzes graded instantly saving you hours of paperwork!<br><br>

					You can follow a few easy steps and launch your own test on our website for free! We have an assorted number of topics to host the test under: We specialise in testing both Technical and Quantitative Aptitude, as well as Verbal, logical and reasoning. <br><br>

					Create your own test & Enjoy our features: <br><br>

					<ul>
						<li>Secure & Private</li>
						<li>Easy to define test settings</li>
						<li>No software installations required </li>
						<li>Results are automatically graded & viewable in real time </li>
						<li>Available on PCs, Macs, iPad, iPhone, Android, ChromeBook & more</li>
					</ul>
				</p>
				<br><br><br><br>
			</div>
			<div class="col" id="mar-left50">
				<div class="card" id="mar-top">
					<div class="card-body">
						<center><h4 id="card-head">REGISTER</h4></center>
						<p id="card-info">New to PrepSkill? Register now and gain insight on your performance and take part in the many discussions held with other users. </p>
						<form action="register.php" method="POST">
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
							<p id="ip-box" style="display: inline;">Gender: </p>
							<label><input class="with-gap" name="gender" type="radio" value="M" checked/><span style="color: black;" >Male &nbsp&nbsp</span></label>
							<label><input class="with-gap" name="gender" type="radio" value="F" /><span style="color: black;" >Female &nbsp&nbsp</span></label>
							<label><input class="with-gap" name="gender" type="radio" value="O" /><span style="color: black;" >Other &nbsp&nbsp</span></label><br>
							<label>Student/Organization:</label>
							<select class="browser-default" name="dem" style="color: black;" onclick="validate();" required>
							    <option value="" disabled selected>Choose your option</option>
							    <option value="student">Student</option>
							    <option value="company">Company</option>
							</select>

							<div class="input-field">
								<i class="material-icons prefix" style="color: black;">lock</i>
								<input type="password" name="pwd" id="pass" style="color: black;" onclick="validate();" required />
								<label for="pass">Password</label>
							</div>

							<div class="input-field">
								<i class="material-icons prefix" style="color: black;">lock</i>
								<input type="password" name="confirm_pwd" id="cpass" style="color: black;" onclick="validate();" required />
								<label for="cpass"> Confirm Password</label>
							</div>
							<center><p style="color: red; font-size: 12px; font-weight: 500;" id="error"><?php echo $error; ?></p></center>
							<center><a href="home.php" class="btn btn-default">Home</a>&nbsp &nbsp &nbsp<input type="submit" class="btn btn-danger" id="mar10" value="Register" /></center>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	<br><br><br><br>
	</div>
</body>
</html>