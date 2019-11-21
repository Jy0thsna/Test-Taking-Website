<!DOCTYPE html>
<html>
<head>
	<title>PrepSkill: Dashboard</title>
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
<body>
	<div id="back">
		<?php
			$db = new mysqli('localhost','root','','prepskill');

		  	if($db->connect_error) {
		    	die('connection failed');
		  	}
		  	else {
		  		session_name('login');
				session_start();

				if(isset($_SESSION['user'])) {
					$datas = [];
					$tests = [];
					$user = $_SESSION['user'];

					$sql = "SELECT COMPANY FROM user WHERE USERNAME='$user';";
					$result = $db->query($sql);
					$row = $result->fetch_assoc();
					$company = $row['COMPANY'];

					$sql = "SELECT COUNT(DISTINCT TEST_NAME) FROM company WHERE COMPANY='$company';";
					$result = $db->query($sql);
					$tot_tests = $result->fetch_assoc()['COUNT(DISTINCT TEST_NAME)'];

					$sql = "SELECT COUNT(DISTINCT RUSER) FROM res WHERE CATEGORY='$company';";
					$result = $db->query($sql);
					$tot_students = $result->fetch_assoc()['COUNT(DISTINCT RUSER)'];

					$sql = "SELECT DISTINCT TEST_NAME FROM company WHERE COMPANY='$company';";
					$result = $db->query($sql);
					if($result->num_rows > 0)
		  			{
		  				while ($row = $result->fetch_assoc()) {
		  					$tests[] = $row;
		  				}
		  			}
					$user = $_SESSION['user'];
					include 'comp_nav_login.php';
		  		}
		  	}
		?>
		<center><h1 id="main-head"><?php echo $company; ?></h1></center>

		<div class="container">
			<div id="green-block">
				<div class="row">
					<div class="col">
						<div id="white-circle">
							<center><p id="dash-num"><?php echo $tot_tests; ?></p></center>
						</div><br>
						<center><p id="dash-txt">Total Tests</p></center>
					</div>
					<div class="col">
						<div id="white-circle">
							<center><p id="dash-num"><?php echo $tot_students; ?></p></center>
						</div><br>
						<center><p id="dash-txt">Total Students taken Test</p></center>
					</div>
				</div>
			</div>

			<?php for ($i=0;$i<count($tests);$i++) { 
			echo '<div class="card" style="overflow: auto;">
				<div class="card-header">						

						<center><h4 id="card-head">STUDENTS RESULTS FOR '.$tests[$i]['TEST_NAME'].'</h4></center>
						</div>
						<table style="margin: 20px;">
							<tr>
								<th class="black-txt">Name</th>
								<th class="black-txt">Email</th>
								<th class="black-txt">Gender</th>
								<th class="black-txt">Mobile</th>
								<th class="black-txt">DOB</th>
								<th class="black-txt">Address</th>
								<th class="black-txt">Resume</th>
								<th class="black-txt">Marks</th>
							</tr>';
							$test = $tests[$i]['TEST_NAME'];
							$sql = "SELECT p.USERNAME, p.NAME, c.MARKS, p.GENDER, p.DOB, p.MOBILE, p.ADDR, p.RESUME FROM user p LEFT JOIN res c ON p.USERNAME = c.RUSER WHERE c.CATEGORY='$company' AND c.RTEST_NAME='$test';";
				  			$result = $db->query($sql);
				  			if($result->num_rows > 0)
				  			{
				  				while ($row = $result->fetch_assoc()) {
				  					$datas[] = $row;
				  				}
								for($j=0;$j<count($datas);$j++) {
									echo '<tr>
										<td class="black-txt">'.$datas[$j]['NAME'].'</td>
										<td class="black-txt">'.$datas[$j]['USERNAME'].'</td>
										<td class="black-txt">'.$datas[$j]['GENDER'].'</td>
										<td class="black-txt">'.$datas[$j]['MOBILE'].'</td>
										<td class="black-txt">'.$datas[$j]['DOB'].'</th>
										<td class="black-txt">'.$datas[$j]['ADDR'].'</td>
										<td class="black-txt"><a href="'.$datas[$j]['RESUME'].'" download>Resume</a></td>
										<td class="black-txt">'.$datas[$j]['MARKS'].'</td>
									</tr>';
								} 
							}
						echo '</table></div>'; 
					}	?>
		<br><br><br><br><br><br>
	</div>
</div>
</body>
</html>