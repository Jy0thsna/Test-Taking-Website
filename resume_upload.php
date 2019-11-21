<?php
	session_name('login');
	session_start();
	$user = $_SESSION['user'];

	$db = new mysqli('localhost','root','','prepskill');

	if($db->connect_error) {
		die('connection failed');
	}
	else {
		$target_dir = "C:/xampp/htdocs/WT_mini_project2/assets/users/".$user."/";
		$dir = "assets/users/".$user."/";
		$target_file = $target_dir . basename($_FILES["resume"]["name"]);
		$file = $dir.basename($_FILES["resume"]["name"]);
		$uploadOk = 1;
		$fileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

		// Allow certain file formats
		if($fileType != "pdf") {
		    echo "<script>alert('Upload only PDF file');</script>";
		    $uploadOk = 0;
		    echo "<script>
					window.location.href='profile.php';
					</script>";
		}
		// Check if $uploadOk is set to 0 by an error
		if ($uploadOk == 0) {
		    echo "<script>alert('Sorry, your file was not uploaded.');</script>";
		    echo "<script>
					window.location.href='profile.php';
					</script>";
		// if everything is ok, try to upload file
		} else {
		    if (move_uploaded_file($_FILES["resume"]["tmp_name"], $target_file)) {
		    	$sql = "UPDATE user SET RESUME='$file' WHERE USERNAME='$user';";
		    	$result = $db->query($sql);
		        echo "<script>
					window.location.href='profile.php';
					</script>";
		    } else {
		        echo "<script>alert('Sorry, there was an error uploading your file.');</script>";
		        echo "<script>
					window.location.href='profile.php';
					</script>";
		    }
		}
	}
?>