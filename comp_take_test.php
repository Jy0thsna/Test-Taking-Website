<?php 
	
	$db = new mysqli('localhost','root','','prepskill');

	if($db->connect_error) {
		die('connection failed');
	}
	else {
		session_name('login');
		session_start();

		$company = $_GET['company'];
		$_SESSION['company'] = $company;

		$test = $_GET['test'];
		$_SESSION['test'] = $test;
		if(isset($_SESSION['user']))
		{	$username = $_SESSION['user'];
			$verified = "SELECT * FROM user WHERE USERNAME='$username' AND VERIFY='yes';";
			$verify = $db->query($verified);
			if($verify-> num_rows>0)
			{
				$sql = "SELECT * FROM company WHERE TEST_NAME='$test' AND COMPANY='$company' ORDER BY RAND() LIMIT 15;";
				$result = $db->query($sql);

				if($result-> num_rows> 0) {
					while($row = $result->fetch_assoc())
					{
						$datas[] = $row;
					}
				}
			} 
			else echo "<script>alert('You must be verified to take this test.');
				window.open('first_login.html', '_self');</script>";
					
		}
		else {

			echo "<script>alert('You must be logged in to take this test.');
				window.open('home.php','_self');</script>";
		}

	}
?>

<html>
	<head>
		<title>PrepSkill: Test Taker</title>
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

		<link rel="stylesheet" type="text/css" href="test_style.css">
	</head>
	<body>
		<center><h1 id="main-head">Test</h1></center>
		<div id="time" style="position: sticky;top: 0px;"><p id="timer" align="center"></p></div>
		<div class="container">
			<div id="quiz"></div>
			<center><input type="submit" class="btn btn-danger" id="submit" value="Get Results >>"/></center>
			<center><div id="results"></div></center>
		</div>
		<br><br><br><br>
	</body>
	<script type="text/javascript">
		var questions = <?php echo json_encode($datas); ?>;
		
		console.log(JSON.stringify(questions));

		var quizContainer = document.getElementById('quiz');
		var resultsContainer = document.getElementById('results');
		var submitButton = document.getElementById('submit');
		var times = document.getElementById('time');

		function nextPage(numCorrect){
			window.location.href="comp_results.php?score="+numCorrect;
		}

		generateQuiz(questions, quizContainer, resultsContainer, submitButton);

		function generateQuiz(questions, quizContainer, resultsContainer, submitButton){

			var t = 1200;
			var time = setInterval(decTimer, 1000);
			var timer = document.getElementById("timer");
			timer.innerHTML = parseInt(t/60)+":"+t%60;
			function decTimer() {
				t-=1;
				timer.innerHTML = parseInt(t/60)+":"+t%60;
				if(t==0)
				{
					alert("Time out.");
					clearInterval(time);
					window.close();
					window.open('aptitude.php');
				}
			}

		    function showQuestions(questions, quizContainer){
		        // we'll need a place to store the output and the answer choices
		        var output = [];
		 		var answers;

		        // for each question...
		        for(var i=0; i<questions.length; i++){
		            
		            // first reset the list of answers
		            answers = [];

		            // for each available answer...
		            for(letter in questions[i]){

		            	if(letter== "A" || letter ==  "B" || letter == "C" || letter == "D")
			            	{	
			                // ...add an html radio button
			                answers.push(
			                    '<label>'
			                        + '<br><input class="with-gap" type="radio" name="question'+i+'" value="'+letter+'">'
			                        + '<span style="color: black;">'+letter + ': '
			                        + questions[i][letter]
			                    + '<span></label><br>'
			                );
			            }
			        }

		            // add this question and its answers to the output
		            output.push(
		                '<div class="quest_ans'+i+'"><div class="question">' + questions[i].Q + '</div>'
		                + '<div class="answers">' + answers.join('') + '</div></div><p class = "correct'+i+'"></p><br>'
		            );

		        }

		        // finally combine our output list into one string of html and put it on the page
		        quizContainer.innerHTML = output.join('');
		    }


		    function showResults(questions, quizContainer, resultsContainer){
		        
		        // gather answer containers from our quiz
		        var answerContainers = quizContainer.querySelectorAll('.answers');
		        
		        // keep track of user's answers
		        var userAnswer = '';
		        var numCorrect = 0;
		        
		        
		        // for each question...
		        for(var i=0; i<questions.length; i++){

		            // find selected answer
		            userAnswer = (answerContainers[i].querySelector('input[name=question'+i+']:checked')||{}).value;
		            
		            // if answer is correct
		            if(userAnswer===questions[i].ANSWER){
		                // add to the number of correct answers
		                numCorrect++;
		                
		                var quest_ans = quizContainer.querySelector('.quest_ans'+i+'');
		                quest_ans.setAttribute("style", "background-color: rgb(128, 255, 170); padding: 10px; border-radius: 5px;border: 1px solid green;");
		            }
		            // if answer is wrong or blank
		            else{
		                var an='';
		                an = "Correct Answer: "+questions[i].ANSWER+"";
		              	var ans = quizContainer.querySelector('.correct'+i+'');
		              	ans.innerHTML = an;
		              	ans.setAttribute("style", "font-weight: 900; font-size: 18px;")
		                var quest_ans = quizContainer.querySelector('.quest_ans'+i+'');
		                quest_ans.setAttribute("style", "background-color: rgb(255, 153, 153); padding: 10px; border-radius: 5px;border: 1px solid red;");
		            }
		        }
		        

		        // show number of correct answers out of total
		        submitButton.style.display="none";
		        resultsContainer.innerHTML = 'TEST RESULTS : <br>Score : ' + numCorrect + ' / ' + questions.length+'<br><br><button id ="go" class="btn btn-danger" onclick="nextPage('+numCorrect+')">Finish Review</button><br>';
		        resultsContainer.setAttribute("style", "font-size: 25px; font-weight: 500;padding: 15px;margin-top: 20px;border: 1px solid gray; border-radius: 5px;max-width: 400px;");
		       	 
		    }

		    // show questions right away
		    showQuestions(questions, quizContainer);
		    
		    // on submit, show results
		    submitButton.onclick = function(){
		    	
		    	times.parentNode.removeChild(times);
		    	clearInterval(time);
		        showResults(questions, quizContainer, resultsContainer);
		    }

		}
	</script>
</html>
