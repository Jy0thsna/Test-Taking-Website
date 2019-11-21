<?php 
  
  $db = new mysqli('localhost','root','','prepskill');

  if($db->connect_error) {
    die('connection failed');
  }
  else {
    $user = $_SESSION['user'];
    $sql = "SELECT DP FROM user WHERE USERNAME='$user';";
    $result = $db->query($sql);
    if($result->num_rows > 0) {
      $row = $result->fetch_assoc();
      $dp = $row['DP'];
    }
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
	<link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top" id="mar-top5">
      <a class="navbar-brand" id="brand" href="home.php">PREPSKILL</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
            <li class="nav-item ">
              <a class="nav-link" href="home.php" id="white-txt">&nbsp Home &nbsp &nbsp</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="aptitude.php" id="white-txt">&nbsp Aptitude &nbsp</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="technical.php" id="white-txt">&nbsp Technical &nbsp</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="company_tests.php" id="white-txt">&nbsp Company Tests &nbsp</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contactus.php" id="white-txt">&nbsp Contact Us &nbsp</a>
            </li>
        </ul>

        <span class="nav-item dropdown" >
        <a class="nav-link dropdown-toggle" href="#" id="user" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="button"><img src="<?php echo $dp; ?>" width="30px" height="30px;" style="border-radius: 50%;"></a>
        <div class="dropdown-menu bg-dark" aria-labelledby="user" id="dropdown-right">
            <a class="dropdown-item nav-link bg-dark" href="user_dashboard.php">Dashboard</a>
            <a class="dropdown-item nav-link bg-dark" href="profile.php">Profile</a>
            <a class="dropdown-item nav-link bg-dark" href="logout.php">Logout</a>
        </div>
        </span>

      </div>
  </nav>
</body>
</html>