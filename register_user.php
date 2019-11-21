<?php 
	$db = new mysqli('localhost','root','','prepskill');

	if($db->connect_error) {
		die('connection failed');
	}
	else {
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
				$header = "From: artisticgirls19@gmail.com";
				mail($user, $subject, $message, $header);
				mkdir('assets/users/'.$user);
				echo "<script>
				window.open('home.php', '_self');
				</script>";
			}
		}
	}	
?>