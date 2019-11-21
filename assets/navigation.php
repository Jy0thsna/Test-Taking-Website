<!DOCTYPE html>
<html>
<head>
  <title></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">

  
  <style type="text/css">
  * {
    font-family: 'Poppins', sans-serif;
    font-size: 15px;
  }
  #back {
    height: 1100px;
    width: 1500px;
    opacity: 0.5;
    filter: alpha(opacity=50);
    background-image: url('images/back.jpg');
    background-size: 100% 100%;
    background-color: rgb(102, 102, 102);
  }
</style>
</head>
<body>
  <div id="back">
	<div class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top" style="margin-top: 5px;">
  		<a class="navbar-brand" style="letter-spacing: 5px; font-weight: 1000;" href="#">T3ZT</a>
  		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    		<span class="navbar-toggler-icon"></span>
  		</button>

	  	<div class="collapse navbar-collapse" id="navbarSupportedContent">
	    	<ul class="navbar-nav mr-auto mt-2 mt-lg-0">
	      		<li class="nav-item dropdown">
        			<a class="nav-link dropdown-toggle" href="#" id="quantitative" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="button">Quantitative</a>
        			<div class="dropdown-menu bg-dark" aria-labelledby="quantitative">
          				<a class="dropdown-item nav-link bg-dark" href="#">Time and Work</a>
          				<a class="dropdown-item nav-link bg-dark" href="#">Directions</a>
          				<a class="dropdown-item nav-link bg-dark" href="#">Age</a>
          				<a class="dropdown-item nav-link bg-dark" href="#">SI and CI</a>
          				<a class="dropdown-item nav-link bg-dark" href="#">Profit and Loss</a>
          				<a class="dropdown-item nav-link bg-dark" href="#">Upstream and Downstream</a>
        			</div>
      			</li>

	      		<li class="nav-item dropdown">
        			<a class="nav-link dropdown-toggle" href="#" id="logical" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="button">Logical</a>
        			<div class="dropdown-menu bg-dark" aria-labelledby="logical">
          				<a class="dropdown-item nav-link bg-dark" href="#">Number Series</a>
          				<a class="dropdown-item nav-link bg-dark" href="#">Cause and Effect</a>
          				<a class="dropdown-item nav-link bg-dark" href="#">Letter and Symbol Series</a>
        			</div>
      			</li>

      			<li class="nav-item dropdown">
        			<a class="nav-link dropdown-toggle" href="#" id="technical" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="button">Technical</a>
        			<div class="dropdown-menu bg-dark" aria-labelledby="technical">
          				<a class="dropdown-item nav-link bg-dark" href="#">C</a>
          				<a class="dropdown-item nav-link bg-dark" href="#">C++</a>
          				<a class="dropdown-item nav-link bg-dark" href="#">Java</a>
          				<a class="dropdown-item nav-link bg-dark" href="#">Python</a>
        			</div>
      			</li>

      			<li class="nav-item dropdown">
        			<a class="nav-link dropdown-toggle" href="#" id="verbal" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="button">Verbal</a>
        			<div class="dropdown-menu bg-dark" aria-labelledby="verbal">
          				<a class="dropdown-item nav-link bg-dark" href="#">Ordering of words</a>
          				<a class="dropdown-item nav-link bg-dark" href="#">Synonyms</a>
          				<a class="dropdown-item nav-link bg-dark" href="#">Change of Speech</a>
        			</div>
      			</li>
	      		<li class="nav-item dropdown">
	      			<a class="nav-link" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Discussion Forum</a>
	      		</li>

	    	</ul>

	    	<form action="/action_page.php">
    			<div class="input-group">
      				<input type="text" class="form-control" placeholder="Search" name="search">
      				<div class="input-group-btn">
        				<button class="btn btn-default bg-light" type="submit"><i class="fa fa-search"></i></button>
      				</div>
    			</div>
  			</form>
			<button class="btn btn-outline-success my-2 my-sm-0" type="submit" style="margin: 15px;">Register</button>
	  	</div>
	</div>
  </div>
</body>
</html>