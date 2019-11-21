<?php 
	$db = new mysqli('localhost','root','','prepskill');

	if($db->connect_error) {
		die('connection failed');
	}
	else {
		session_name('login');
		session_start();
		$user = $_SESSION['user'];
		if(isset($_SESSION['user']) && isset($_POST['test_name'])) {
			$test_name = $_POST['test_name'];

			$sql = "SELECT COMPANY FROM user WHERE USERNAME='$user';";
			$result = $db->query($sql);
			$row = $result->fetch_assoc();
			$company = $row['COMPANY'];

			$sql = "DELETE FROM company WHERE company='$company' AND TEST_NAME='$test_name';";
			$result = $db->query($sql);
			if($result === TRUE) {
				echo "<script>Test Successfully Deleted!!!</script>";
				echo "<script>window.open('add_del_test.php', '_self');</script>";
			}
		}
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Activate Account</title>
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
<body id="no-back">
	<div class="container">
	<div class="card" style="width: 50%; margin: auto; margin-top: 100px;padding: 10px;">
		<div class="card-body">
			<center><h4 id="card-head">DELETE TEST</h4></center>
			<form action="del_test.php" method="POST">
				<div class="input-field">
					<i class="material-icons prefix" style="color: black;">assignment</i>
					<input type="text" name="test_name" id="test_name" class="black-txt"/>
					<label for="test_name">Test Name</label>
				</div>
				<p class="black-txt"> * Once you delete the test, you cannot access the contents of the test. You wont have access to the students results of the test as well. The deleted test will no longer be visible to the students. <br><br>If you are sure, you want to delete the test, click the Delete button.</p>
				<center><a href="add_del_test.php" class="btn btn-default"><< Back</a>&nbsp &nbsp &nbsp<input type="submit" class="btn btn-danger" id="mar10" value="Delete" /></center>
			</form>
		</div>
	</div>
	</div>
</body>
</html>

