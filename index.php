<?php
include('connection.php');
session_start();
 ?>
<html>
	<head>
		<title>NoticeMate</title>
		<link rel="stylesheet" href="css/bootstrap.css"/>
		<script src="js/jquery_library.js"></script>
<script src="js/bootstrap.min.js"></script>
	</head>
	<body>
			<nav class="navbar navbar-default navbar-fixed-top" style="background:#000">
  <div class="container">

  <ul class="nav navbar-nav navbar-left">
    <li><a href="index.php"style="color: white;"><strong>NoticeMate</strong></a></li>


	  <li><a href="index.php?option=about" style="color: white;"><span class="glyphicon glyphicon-user"></span> About</a></li>



	<li><a href="index.php?option=contact"style="color: white;"><span class="glyphicon glyphicon-phone"></span>Contact</a></li>

	</ul>


<ul class="nav navbar-nav navbar-right">
      <li><a href="index.php?option=New_user"style="color: white;"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
      <li><a href="index.php?option=login" style="color: white;"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
    </ul>



</div>
</nav>

<div class="container-fluid">
	<!-- slider -->
	 
<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">

  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
  </ol>

  <!-- Wrapper for slides -->
 <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="images/notice.jpg" alt="...">
      <div class="carousel-caption">
        ...
      </div>
    </div>

	 <div class="item">
      <img src="images/notice2.jpg" alt="...">
      <div class="carousel-caption">
        ...
      </div>
    </div>
    ...
  </div>

<!--Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>


<!--slider end-->
</div>     


<div class="container">
	<div class="row">
	<!-- container -->
		<div class="col-sm-8">
		<?php
		@$opt=$_GET['option'];

		if($opt!="")
		{
			if($opt=="about")
			{
			include('about.php');
			}
			else if($opt=="contact")
			{
			include('contact.php');
			}

			else if($opt=="New_user")
			{
			include('registration.php');
			}


			else if($opt=="login")
			{
			include('login.php');
			}
		}
		else
		{
		echo "<h2><b>Welcome to NoticeMate</b></h2>
		<i> <b> Your Notices, Anytime, Anywhere!!! </b></i>";
		}
		?>



		</div>
	<!-- container -->

		<div class="col-sm-4">
			<div class="panel panel-default">
  <div class="panel-heading"><b>LATEST NEWS</b></div>
  <div class="panel-body">
  Missed a notice? Don't worry!<br><br>
We're excited to introduce NoticeMate — our brand-new digital notice board platform!<br>
Stay updated with all college announcements — faster, smarter, and greener.<br>
No more missing important updates — access notices anytime, anywhere!<br>
  </div>
</div>

		</div>
	</div>

</div>



<br/>
<br/>
<br/>
<br/>

<!-- footer-->

			<nav class="navbar navbar-default navbar-bottom" style="background:black">
  <div class="container">

  <ul class="nav navbar-nav navbar-left">
    <li>&copy; 2020 ONBS</li>

	</ul>




</div>
</nav>
<!-- footer-->

	</body>
</html>
