<?php
session_start();
require 'login.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Sci-High</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 </head>
 
 <body data-spy="scroll" data-target=".navbar" data-offset="50">
	<!--NAVIGATION BAR-->
	<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container-fluid">
    <div class="navbar-header">
     <a href="#"><img src="logo.jpg" width="100" height="60"></a>
      <a class="navbar-brand" href="#">Sci-High</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="#home">Home</a></li>
      <li><a href="#">MOVIES</a></li>
      <li><a href="#">TRAILERS & VIDEOS </a></li>
	  <li><a href="#">ABOUT US</a></li>
      <li><a href="#">CONTACT </a></li>
    <ul>
	<ul class="nav navbar-nav navbar-right">
      <li class="dropdown">
		<a class="dropdown-toggle" data-toggle="dropdown" href="#">
			<span class="caret"></span> Hello, <?php echo $user_data['fname'] ?>!</a>
		<ul class="dropdown-menu">
          <li><a href="#">YOUR COURSES</a></li>
		  <li><a href="#">LOGOUT</a></li>
		</ul>	
	  </li>
      
	</ul>
	</div>
	</nav>
<br><br><br><br><br>
	<div class="jumbotron">
        <img src="study.png" alt=" " width="350" height="220" class="pull-right"/>
        <h1>Take the world's best courses,<br>online</h1>
    </div>
	
	<!--First subject list-->
	<section class="get-inspired people_grow">
    <div class="container">
	<center>
        <h2 class="h2_style-book">Top Specializations</h2>
	</center>	<br><br><br><br>
            <ul class="col-md-12">
                <li class="col-md-3 list-group-item">
                    <div class="descrip_inspired_outer">
                        <div class="descrip_inspired">
                            <center> <img src="python.png" width="200" height="200"> </center>
                            <h3 class="heading-label">Python</h3>
                            <p class="meta-text">The joy of coding Python should be in seeing short, concise, readable classes that express a lot of action in a small amount of clear code<br><br></p>
							<br><a href="python.html">View more</a>
						</div>
                    </div>
                </li>
                <li class="col-md-3 list-group-item">
                    <div class="descrip_inspired_outer">
                        <div class="descrip_inspired">
							<center> <img src="datascience.png" width="200" height="200"> </center>
                            <h3 class="heading-label">Data Science</h3>
                            <p class="meta-text">Every second of every day, our senses bring in way too much data than we can possibly process in our brains.&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<br><br></p>
							<br><a href="datascience.html">View more</a>
						</div>
                    </div>
                </li>
                <li class="col-md-3 list-group-item">
                    <div class="descrip_inspired_outer">
                        <div class="descrip_inspired">
                            <center> <img src="bigdata.png" width="200" height="200"> </center>
                            <h3 class="heading-label">Big Data</h3>
                            <p class="meta-text">Big Data is at the foundation of all the megatrends that are happening today, from social to mobile to cloud to gaming.<br><br></p>
							<br><a href="bigdata.html">View more</a>
						</div>
                    </div>
                </li>
				<li class="col-md-3 list-group-item">
                    <div class="descrip_inspired_outer">
                        <div class="descrip_inspired">
                            <center> <img src="machinelearning.png" width="200" height="200"> </center>
                            <h3 class="heading-label">Machine Learning</h3>
                            <p class="meta-text">Signature-based malware detection is dead. Machine learning based Artificial Intelligence is the most potent defence the next gen adversary and the mutating hash.</p>
							<br><a href="machinelearning.html">View more</a>
						</div>
                    </div>
                </li>
            </ul>
    </div>
    </section>
	
	<br><br><br><br>
	
	<!--Second subject list-->
	<section class="get-inspired people_grow">
    <div class="container">
	<center>
        <h2 class="h2_style-book">Computer Science</h2>
	</center>	<br><br><br><br>
            <ul class="col-md-12">
                <li class="col-md-3 list-group-item">
                    <div class="descrip_inspired_outer">
                        <div class="descrip_inspired">
                            <center> <img src="algorithm.jpg" width="200" height="200"> </center>
                            <h3 class="heading-label">Algorithms</h3>
                            <p class="meta-text">Word used by programmers when they do not want to explain what they did.<br><br><br><br></p>
							<br><a href="algorithm.html">View more</a>
						</div>
                    </div>
                </li>
                <li class="col-md-3 list-group-item">
                    <div class="descrip_inspired_outer">
                        <div class="descrip_inspired">
							<center> <img src="java.png" width="200" height="200"> </center>
                            <h3 class="heading-label">Java programming</h3>
                            <p class="meta-text">If debugging is the process of removing software bugs, then programming must be the process of putting them in. <br><br><br></p>
							<br><a href="java.html">View more</a>
						</div>
                    </div>
                </li>
                <li class="col-md-3 list-group-item">
                    <div class="descrip_inspired_outer">
                        <div class="descrip_inspired">
                            <center> <img src="android.jpg" width="200" height="200"> </center>
                            <h3 class="heading-label">Android</h3>
                            <p class="meta-text"> A mobile operating system that is based on a modified version of Linux. <br><br><br><br></p>
							<br><a href="android.html">View more</a>
						</div>
                    </div>
                </li>
				<li class="col-md-3 list-group-item">
                    <div class="descrip_inspired_outer">
                        <div class="descrip_inspired">
                            <center> <img src="agile.jpg" width="200" height="200"> </center>
                            <h3 class="heading-label">Agile Development</h3>
                            <p class="meta-text">n agile as in life there will be hiccups, but the iterative nature of agile makes it easy to do a retrospective and learn from our mistakes then move on to the next sprint and do better.</p>
							<br><a href="agile.html">View more</a>
						</div>
                    </div>
                </li>
            </ul>
    </div>
    </section>
	
	<!--FOOTER-->
<footer class="container-fluid bg-2 text-center" id="contact">
  <div>
  <b>
  <h4><p>&copy Sci-High</p>
  <p>Email Id:scihigh@gmail.com</p>
  <p>Mob No:97028 85311</p></h4>
  <p><h1><a href="https://www.facebook.com/"<i class="fa fa-facebook logo-1"></a></i>
  &nbsp <a href="https://www.linkedin.com/"<i class="fa fa-linkedin logo-1"></a></i>
  &nbsp <a href="https://twitter.com/"<i class="fa fa-twitter logo-1"></a></i></h1>
  </p>
  </b>
</div>  
</footer>


	
 </body>
 <html>