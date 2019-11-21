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
				session_name('login');
				session_start();
				$user = $_SESSION['user'];
				if(isset($_SESSION['user'])) {

					include 'comp_nav_login.php'; 
				}
			?>

			<h1 id="main-head">Host Tests</h1>

			<div class="container">
			<form action="host.php" method="POST">
				<div style="border: 1px solid gray; padding: 35px; margin: 15px;border-radius: 5px;background-color: white;max-width: 70%;margin: auto;">
					<input type="text" name="start" class="black-txt" placeholder="Start Time (YYYY-MM-DD HH:MM:SS)" required><br>
	                <input type="text" name="end" class="black-txt" placeholder="End Time (YYYY-MM-DD HH:MM:SS)" required><br>
	                <input type="text" name="test_name" class="black-txt" placeholder="Test Name" required><br>
	                <br></div><br><br>
				<div id="host"></div>
				<center><input type="submit" id="submit" class="btn btn-danger" value="Add Test >>"></center>
			</form>
			</div>
			<br><br>
		</div>
	</body>
	<script type="text/javascript">
		var hostContainer = document.getElementById('host');
		var submitButton = document.getElementById('submit');

		generateTest(hostContainer, submitButton);

		function generateTest(hostContainer, submitButton){

		    function showForms(hostContainer){
		        // we'll need a place to store the output and the answer choices
		        var output = [];
		        // for each question...
		        var forms = [];
		        for(var i=0; i<15; i++){
	                forms.push(
	                    '<div style="border: 1px solid gray; padding: 35px; margin: 15px;border-radius: 5px;background-color: white;max-width: 70%;margin: auto;">'+
	                    '<input type="text" name="question'+i+'" class="black-txt" placeholder="Question '+(i+1)+'" required><br>'+
	                    '<input type="text" name="A'+i+'" class="black-txt" placeholder="Option A" required><br>'+
	                    '<input type="text" name="B'+i+'" class="black-txt" placeholder="Option B" required><br>'+
	                    '<input type="text" name="C'+i+'" class="black-txt" placeholder="Option C" required><br>'+
	                    '<input type="text" name="D'+i+'" class="black-txt" placeholder="Option D" required><br>'+
	                   	'<input type="text" name="ans'+i+'" class="black-txt" placeholder="Answer" required><br></div><br><br>');
			    }

		            // add this question and its answers to the output
		            output.push(forms.join(''));

		        // finally combine our output list into one string of html and put it on the page
		        hostContainer.innerHTML = output.join('');
		    }   
		    // show questions right away
		    showForms(hostContainer);

		}
	</script>
</html>