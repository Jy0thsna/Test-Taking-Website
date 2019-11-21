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
			$password = $_POST['pwd'];
			$pwd = password_hash($password, PASSWORD_BCRYPT);
			
			$sql = "SELECT PWD FROM user WHERE USERNAME='$username' AND DEM='company';";
			
			$result = $db->query($sql);

			if($result-> num_rows> 0) {
				$row = $result->fetch_assoc();
				$p = $row['PWD'];
				if(password_verify($password,$p))
				{
					$_SESSION['user'] = $username;
					echo "<script>window.open('comp_dashboard.php','_self');</script>";
				}
				else {
					echo "<script>window.open('home.php','_self');</script>";
				}
			}
			else
				echo "<script>window.open('home.php','_self');</script>";
		}
		else if(isset($_SESSION['user'])) {
			echo "<script>window.open('comp_dashboard.php','_self');</script>";
			include 'comp_nav_login.php';
		}
		else {
			echo "<script>window.open('home.php','_self');</script>";
		}
	}

?>