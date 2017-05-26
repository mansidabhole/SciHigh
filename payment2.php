
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Payment Mode</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body>
	<!--NAVIGATION BAR-->
	<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container-fluid">
    <div class="navbar-header">
     <a href="#"><img src="logo.jpg" width="100" height="60"></a>
      <a class="navbar-brand" href="#">Sci-High</a>
    </div>
	<ul class="nav navbar-nav navbar-right">
      <li class="dropdown">
		<a class="dropdown-toggle" data-toggle="dropdown" href="#">
			<span class="caret"></span> Hello,!</a>
		<ul class="dropdown-menu">
          <li><a href="#">YOUR COURSES</a></li>
		  <li><a href="#">LOGOUT</a></li>
		</ul>	
	  </li>
      
	</ul>
	</div>
	</nav>
	<br><br><br><br><br><br>
	<div class="col-md-6">
	<form role="form">
		<div class="form-group">
              <label for="usrname" align="left;">Name Of Credit Card Holder</label>
              <input type="text" class="form-control" id="usrname" placeholder="Name of credit card holder">
        </div>
		<div class="form-group">
              <label for="cardno">Credit Card No.</label>
              <input type="number"" class="form-control" id="usrname" placeholder="Credit Card No.">
        </div>
		<div class="form-group">
              <label for="doi">Date Of Issue</label>
              <input type="date" class="form-control" id="usrname" placeholder="Date of Issue in YYYY/MM//DD">
        </div>
		<div class="form-group">
              <label for="doe">Date Of Expiry</label>
              <input type="date" class="form-control" id="usrname" placeholder="Date of Expiry in YYYY/MM//DD">
        </div>
		<div class="form-group">
              <label for="ccvno">CCV No.</label>
              <input type="number"" class="form-control" id="usrname" placeholder="CCV No.">
        </div>
		<div class="form-group">
              <label for="psw">Password</label>
              <input type="password" class="form-control" id="psw" placeholder="Enter password">
        </div>
	</form>	
	</div>
	<div class="col-md-6">
	<button data-toggle="collapse" data-target="#demo" class="btn btn-primary">Proceed</button>
		<div id="demo" class="collapse">
			<p><h3>Remember the below given password and always login for this course using this code only.</h3>
			<div class="col-md-4">
			<h3><?php session_start(); echo $_SESSION['password1']; ?></h3>
			</div>
			
			<br><br><br><a href="student.php" type="button" class="btn btn-primary">Go Back to Home Page!</a>
		</div>
	</div>
</body>
</html>
