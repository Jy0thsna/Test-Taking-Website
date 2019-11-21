<html>
<head>
	<title>PrepSkill: Host Tests</title>
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

	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div id="back">
		<?php
		date_default_timezone_set('Asia/Kolkata'); 
		$current = date("Y-m-d H:i:s");
		$db = new mysqli('localhost','root','','prepskill');

		  	if($db->connect_error) {
		    	die('connection failed');
		  	}
		  	else {
		  		session_name('login');
				session_start();

				$datas = [];
				$user = $_SESSION['user'];
				if(isset($_SESSION['user'])) {
					include 'comp_nav_login.php';

					$sql = "SELECT COMPANY FROM user WHERE USERNAME='$user';";
					$result = $db->query($sql);
					$row = $result->fetch_assoc();
					$company = $row['COMPANY'];

					$sql = "SELECT DISTINCT TEST_NAME, STARTTIME, ENDTIME FROM company WHERE COMPANY='$company';";
					$result = $db->query($sql);
					while($row = $result->fetch_assoc()) {
						$datas[] = $row;
					}
				}
			}
		?>
		<center><h1 id="main-head"><?php echo $company; ?></h1></center>

		<div class="container">
			<div class="card">
				<div class="card-header"><h4 id="card-head">ALL TESTS HOSTED</h4></div>
				<div class="card-body">
					<center><table style="margin: 20px;">
					<tr>
						<th class="black-txt">Test Name</th>
						<th class="black-txt">Start Time</th>
						<th class="black-txt">End Time</th>
						<th class="black-txt">Status</th>
					</tr>
					<?php 
						for($i=0;$i<count($datas);$i++) {
							if($datas[$i]['ENDTIME'] < $current)
								$status = "<span style='color: red;'>Expired</span>";
							else if($datas[$i]['STARTTIME'] > $current)
								$status = "<span style='color: gray;'>Not Available</span>";
							else
								$status = "<span style='color: green;'>Available</span>";
							echo '<tr>
								<td class="black-txt">'.$datas[$i]['TEST_NAME'].'</td>
								<td class="black-txt">'.$datas[$i]['STARTTIME'].'</td>
								<td class="black-txt">'.$datas[$i]['ENDTIME'].'</td>
								<td >'.$status.'</td>
							</tr>';
					} ?>	
				</table></center>
				</div>
			</div><br><br>
			<a href="del_test.php" class="btn btn-danger">Delete Test</a><a href="host_test.php" class="btn btn-danger" style="float: right;">Add Test >></a>
		</div>
		<br><br><br><br><br><br><br><br><br><br>
	</div>
</body>
</html>