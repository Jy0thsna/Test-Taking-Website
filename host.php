<?php
	$db = new mysqli('localhost','root','','prepskill');

	if($db->connect_error) {
		die('connection failed');
	}

	else {
		session_name('login');
		session_start();

		$user = $_SESSION['user'];
		$sql = "SELECT COMPANY FROM user WHERE USERNAME='$user';";
		$result = $db->query($sql);
		$company = $result->fetch_assoc()['COMPANY'];
		if(isset($user)) {
			$start = $_POST['start'];
			$end = $_POST['end'];
			$test_name = $_POST['test_name'];

			for($i=0;$i<15;$i++) {
				$q = $_POST['question'.$i];
				$a = $_POST['A'.$i];
				$b = $_POST['B'.$i];
				$c = $_POST['C'.$i];
				$d = $_POST['D'.$i];
				$ans = $_POST['ans'.$i];

				$sql = "INSERT INTO company(TEST_NAME, Q, A, B, C, D, ANSWER, COMPANY, STARTTIME, ENDTIME) VALUES('$test_name', '$q', '$a', '$b', '$c', '$d', '$ans', '$company', '$start', '$end');";
				$result = $db->query($sql);
				if($result === TRUE) {
					echo "<script>alert(Test Added!!!);</script>";
					echo "<script>window.open('comp_dashboard.php', '_self');</script>";
				}

			}
		}
	}
?>