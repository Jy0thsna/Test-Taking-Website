<!DOCTYPE html>
<html>
<head>
	<title>PrepSkill: Home</title>
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

	<script type="text/javascript" >
	   	function preventBack(){window.history.forward();}
	    setTimeout("preventBack()", 0);
	    window.onunload=function(){null};
	</script>

	<script type="text/javascript">
		function validate() {
			var error = document.getElementById('error');
			error.innerHTML = "";
		}
	</script>
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

				$warn = "";
				if(isset($_POST['user'])) {
					$username = $_POST['user'];
					$password = $_POST['password'];
					$pwd = password_hash($password, PASSWORD_BCRYPT);
					
					$sql = "SELECT PWD,DEM FROM user WHERE USERNAME='$username'";
					
					$result = $db->query($sql);

					if($result-> num_rows> 0) {
						$row = $result->fetch_assoc();
						if($row['DEM'] === 'company') {
							include 'navigation.php';
							$warn = "* Login using Host Tests Link.";
						}
						else {
							$p = $row['PWD'];
							if(password_verify($password,$p))
							{
								$_SESSION['user'] = $username;
								echo "<script>window.open('home_login.php', '_self');</script>";
							}
							else {
								include 'navigation.php';
								$warn = "* Incorrect Password !!!";
							}
						}
					}
					else {
						include 'navigation.php';
						$warn = "* Invalid Username/Password !!!";
					}

				}
				else if(isset($_SESSION['user'])) {
					echo "<script>window.open('home_login.php', '_self');</script>";
				}
				else {
					$warn = "";
					include 'navigation.php';
				}
			}

		?>
		<div class="container">
			<div class="row">
				<div class="col-sm-8 col-md-6 col-lg-8">
					<p id="pad-top">
						<h1 id="logo-name">PREPSKILL</h1><br>
						<h3>We are India’s largest assessment and recruitment company.</h3><br>
						<ul>
							<li>Enables companies to hire talent which performs on the job.</li>
							<li>65% of candidates who found jobs through us had an existing offer.</li>
							<li>All companies serviced since Dec 2009 have reported high satisfaction level.</li>
							<li>Customers include - start-ups to Fortune 100 R&D to services companies.</li>
							<li>Our superior service offering is enabled by a combination of deep business insights, superior assessment (pH Test) and unparalleled reach amongst quality candidates.</li>
						</ul><br>
						Our superior service offering is enabled by a combination of deep business insights, superior assessment (pH Test) and unparalleled reach amongst quality candidates.<br><br>

						The market-leading technical skill assessment platform to identify and test the right skills.<br><br>
						From supporting developers who shape technology to helping enterprises innovate at scale and hire tech talent, PrepSkill bridges the gap between tomorrow's tech powered growth and today's workforce.

					</p>
				</div>
				<div class="col-sm-4 col-md-6 col-lg-4">
					<div class="card login_change" id="mar-top">
						<div class="card-body">
							<center><h4 id="card-head">SIGN IN</h4></center>
							<form action="home.php" method="POST">
								<div class="input-field">
									<i class="material-icons prefix" style="color: black;">person</i>
									<input type="text" name="user" id="user" style="color: black;" onclick="validate();"required />
									<label for="user">Email</label>
								</div>
								<div class="input-field">
									<i class="material-icons prefix" style="color: black;">lock</i>
									<input type="password" name="password" id="pass" style="color: black;" onclick="validate();" required />
									<label for="pass">Password</label>
								</div>
								<center><p style="color: red; font-size: 12px; font-weight: 500;" id="error"><?php echo $warn; ?></p></center>
								<center><input type="submit" class="btn btn-danger" id="mar10" value="Sign In" /></center>
							</form>

							<hr class="card-hr">

							<center><h4 id="card-head">HOST TESTS</h4></center>
							<p id="card-info">PrepSkill's secure, professional web-based Quiz maker is an easy-to-use, customizable online testing solution for business...</p>

							<center><button type="button" class="btn btn-danger" id="mar10" data-toggle="modal" data-target="#myModal">Host Tests Here >></button></center>
							
							<div class="modal fade" id="myModal" role="dialog">
							    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
							      	<div class="modal-content">
							      		<form action="company_login.php" method="POST">
							        	<div class="modal-header">
							          		<h4 class="modal-title" id="login" style="color: black;">COMPANY LOGIN</h4>
							          		<button type="button" class="close" data-dismiss="modal" aria-label="Close">&times;</button>
							        	</div>

								        <div class="modal-body">
							            	<div class="input-field">
												<i class="material-icons prefix" style="color: black;">person</i>
												<input type="text" name="user" id="email" style="color: black;" required />
												<label for="email">Email</label>
											</div>
											<div class="input-field">
												<i class="material-icons prefix" style="color: black;">lock</i>
												<input type="password" name="pwd" id="pwd" style="color: black;" required />
												<label for="pwd">Password</label>
											</div>
								        </div>

								        <div class="modal-footer">
								        	<input type="button" class="btn btn-default" data-dismiss="modal" value="Close">&nbsp &nbsp
								        	<input type="submit" class="btn btn-danger" value="Sign In">
								        </div>
								        </form>
							     	</div>
								</div>
							</div>

						</div>
					</div>
				</div>
			</div>

		</div>
		<br><br><br><br><br>
	</div>

</body>
</html>