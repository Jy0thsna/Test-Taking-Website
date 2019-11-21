<!DOCTYPE html>
<html>
<head>
	<title>PrepSkill: Profile</title>
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
		session_name('login');
		session_start();
		if(isset($_SESSION['user'])) {
			include 'assets/verify_error.php';
			include 'nav_login.php'; 
		}
		else {
			include 'navigation.php';
		}
	?>

	<h1 id="main-head">Personal Details</h1>

	<div class="container">
		<div class="row">
			<div class="col-sm-4 col-md-6 col-lg-4">
				<div class="card" id="mar-top">
					<div class="card-header">
						<center><h6><b id="card-head">
							<?php 
								$db = new mysqli('localhost','root','','prepskill');

								if($db->connect_error) {
									die('connection failed');
								}
								else {
									$user = $_SESSION['user'];
									$sql = "SELECT * FROM user WHERE USERNAME='$user';";
									$result = $db->query($sql);
									$usr = $result->fetch_assoc();
									$name = $usr['NAME'];
									$email = $usr['USERNAME'];
									$mobile = $usr['MOBILE'];
									$dob = $usr['DOB'];
									$addr = $usr['ADDR'];
									$about = $usr['ABOUT'];
									$resume = $usr['RESUME'];
									$dp = $usr['DP'];
									echo $name;
								}
							?>
						</b></h6></center>
					</div>
					<div class="card-body">
						<center><img src="<?php echo $dp; ?>" width="250px" height="250px" style="border: 1px solid gray;"></center>
						<form action="dp_upload.php" method="POST" enctype="multipart/form-data">
				            <div class = "file-field input-field">
				                <input type = "file" class="btn btn-danger" id="dp" name="dp" />
				                  
				                <div class = "file-path-wrapper">
				                    <input class = "file-path validate black-txt" type = "text" placeholder = "Upload Profile Picture" />
				                </div>
				            </div>    
						    <center><input class="btn btn-danger" type="submit" value="Upload"></center>
						 </form>
						<hr class="card-hr">

						<h6 style="display: inline-block;"><b id="card-head">About Me</b></h6>
						<p id="card-info"><?php echo $about; ?></p>
					</div>
				</div>
			</div>

			<div class="col-sm-8 col-md-6 col-lg-8">
				<div class="card" id="mar-top">
					<div class="card-header">
						<h6 style="display: inline-block;"><b id="card-head">General/Contact Information</b></h6>
						<span style="float: right;"><a href="#" data-toggle="modal" data-target="#myModal">Edit &nbsp<i class="fa fa-pencil" style="color: blue;"></i></a></span>

						<div class="modal fade" id="myModal" role="dialog">
						    <div class="modal-dialog modal-dialog-centered modal-md" role="document">
						      	<div class="modal-content">
						        	<div class="modal-header">
						          		<h4 class="modal-title black-txt" id="login">EDIT PERSONAL DETAILS</h4>
						          		<button type="button" class="close" data-dismiss="modal" aria-label="Close">&times;</button>
						        	</div>

							        <div class="modal-body">
							        	<form action="update_profile.php" method="POST" id="update_profile">
							        	<div class="input-field">
											<i class="material-icons prefix black-txt">person</i>
											<input type="text" name="name" id="name" class="black-txt" value="<?php echo $name; ?>" />
											<label for="name">Name</label>
										</div>
										<div class="input-field">
											<i class="material-icons prefix black-txt">phone</i>
											<input type="text" name="mobile" id="mobile" class="black-txt" value="<?php echo $mobile; ?>"/>
											<label for="mobile">Mobile Number</label>
										</div>
										<div class="input-field">
											<i class="material-icons prefix black-txt">event</i>
											<input type="text" name="dob" id="dob" class="black-txt" value="<?php echo $dob; ?>"/>
											<label for="dob">Date of Birth (DD/MM/YYYY)</label>
										</div>
										<div class="input-field">
											<i class="material-icons prefix black-txt" >home</i>
											<input type="text" name="addr" id="addr" class="black-txt" value="<?php echo $addr; ?>"/>
											<label for="addr">Address</label>
										</div>
										<div class="input-field col s12">
								          <textarea id="about" name="about" class="materialize-textarea black-txt"><?php echo $about; ?></textarea>
								          <label for="about">About Me : (140 characters)</label>
								        </div>
								    	</form>
							        </div>

							        <div class="modal-footer">
							        	<input type="button" class="btn btn-basic" data-dismiss="modal" value="Close">&nbsp &nbsp
							        	<input type="submit" name="submit" class="btn btn-danger" value="Update" form="update_profile">
							        </div>
							        
						     	</div>
							</div>
						</div>

					</div>
					<div class="card-body">
						<div class="row">
							<div class="col">
								<b id="card-info">Name: </b><br><span id="card-info" class="mar-left20"><?php echo $name; ?></span><br><br><br>
								<b id="card-info">Email: </b><br><span id="card-info" class="mar-left20"><?php echo $email; ?></span><br><br><br>
								<b id="card-info">Mobile Number: </b><br><span id="card-info" class="mar-left20"><?php echo $mobile; ?></span><br><br><br>
								<b id="card-info">Date of Birth: </b><br><span id="card-info" class="mar-left20"><?php echo $dob; ?></span><br><br><br>
								<b id="card-info">Address: </b><br><span id="card-info" class="mar-left20"><?php echo $addr; ?></span><br><br><br>
							</div>
							<div class="col">
								<embed src="<?php echo $resume; ?>" width="300px" height="475px" allowfullscreen="true" />
								<form action="resume_upload.php" method="POST" enctype="multipart/form-data">
						            <div class = "file-field input-field">
						                <input type = "file" id="resume" name="resume" class="btn btn-danger" />
						                  
						                <div class = "file-path-wrapper">
						                    <input class = "file-path validate black-txt" type = "text" id="resume" name="resume" placeholder = "Upload Resume" />
						                </div>
						            </div>    
								    <center><input class="btn btn-danger" type="submit" value="Upload"></center>
								 </form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<br><br><br>
	</div>
</body>
</html>