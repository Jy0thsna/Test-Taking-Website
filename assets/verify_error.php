<html>
<head>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
	<?php
		$db = new mysqli('localhost','root','','prepskill');

		if($db->connect_error) {
			die('connection failed');
		}
		else {
			if(isset($_SESSION['user'])) {
				$user = $_SESSION['user'];
				$sql = "SELECT VERIFY FROM user WHERE USERNAME='$user'";
				$result = $db->query($sql);
				$row = $result->fetch_assoc();
				if($row['VERIFY']==='no')
					echo "<div id='verify-error' style='background-color: rgb(255, 153, 153); padding: 10px; border-radius: 5px;border: 1px solid red;color:black;'>Please verify your Email !!! <a href='first_login.html'>Click Here</a> to verify.<a style='color: black;' href='#' onclick='remove_div();'><i class='fa fa-close' style='float: right;color:black;'></i></a></div>";
			}
		}
	?>

	<script type="text/javascript">
		function remove_div() {
			verify_error = document.getElementById('verify-error');
			verify_error.parentNode.removeChild(verify_error);
		}
	</script>
</body>
</html>