<?php
	session_name('login');
	session_start();
	$db = new mysqli('localhost','root','','prepskill');

	if($db->connect_error) {
		die('connection failed');
	}
	else {
		$user = $_SESSION['user'];
		$name = $_POST['name'];
		$mobile = $_POST['mobile'];
		$dob = $_POST['dob'];
		$addr = $_POST['addr'];
		$about = $_POST['about'];
		$sql = "UPDATE user SET NAME='$name', MOBILE='$mobile', DOB='$dob', ADDR='$addr', ABOUT='$about' WHERE USERNAME='$user';";
		$result = $db->query($sql);
		echo "<script>
				window.location.href='profile.php';
				</script>";
	}
?>