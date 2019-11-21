<?php 
	$db = new mysqli('localhost','root','','prepskill');

	if($db->connect_error) {
		die('connection failed');
	}
	else {
		session_name('login');
		session_start();
		if(isset($_POST['user'])) {
			$username = $_POST['user'];
			$password = $_POST['password'];
			$otp = $_POST['otp'];
			
			$sql = "SELECT PWD,DEM FROM user WHERE USERNAME='$username' AND OTP='$otp'";

			
			$result = $db->query($sql);

			if($result-> num_rows> 0) {
				$row = $result->fetch_assoc();
				$papa = $row["PWD"];
				$dem = $row["DEM"];
				if(password_verify($password,$papa))
				{
					$_SESSION['user'] = $username;
					$update = "UPDATE user SET VERIFY = 'yes' WHERE USERNAME = '$username'";
					if($db->query($update)===true)
					{	
						if($dem == "company") {
							echo "<script>
							window.location.href='company_home.php';
							</script>";
						}
						else {
							echo "<script>
							window.location.href='home.php';
							</script>";
						}
					}
					else echo "not updated";
				}
			}

			echo "<script> alert('Invalid activation code or password or username'); window.location.href='first_login.html';</script>";

			}
		}
	

?>