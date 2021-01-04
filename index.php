<!DOCTYPE html>
<html>
<head>
	<title>Dashboard</title>
	<meta charset="utf-8" name="viewport" content="width=device-width,intial-scale=1">
	<link rel="stylesheet" type="text/css" href="admin/bootstrap-4.4.1/css/bootstrap.min.css">
  	<script type="text/javascript" src="admin/bootstrap-4.4.1/js/juqery_latest.js"></script>
      <script type="text/javascript" src="admin/bootstrap-4.4.1/js/bootstrap.min.js"></script>
	  <link rel="stylesheet" href="user/css/app.css">
	  <style type="text/css">
  		#side_bar{
  			background-color: whitesmoke;
  			padding: 50px;
  			width: 300px;
  			height: 600px;
  		}
	  </style>
	  
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
		<div class="container">
			<div class="navbar-header">
				<a class="navbar-brand" href="index.php">Library Management System(LMS)</a>
			</div>
			<ul class="nav navbar-nav navbar-right">
				<li class="nav-item">
					<a class="nav-link btn btn-outline-primary"style="margin:5px; color:white;" href="admin/index.php">ADMIN</a>
				</li>
				<li class="nav-item">
					<a class="nav-link btn btn-outline-success"style="margin:5px;color:white;"href="user/index.php">USER</a>
				</li>
			</ul>
		</div>
	</nav><br>
	<span><marquee>This is library Management System. Library opens at 8:00 AM and close at 8:00 PM</marquee></span><br><br>
	<div class="row">
		<div class="col-md-4" id="side_bar">
			<h5>Library Timing</h5>
			<ul>
				<li>Opening Timing: 8:00 AM</li>
				<li>Closing Timing: 8:00 PM</li>
				<li>(Sunday off)</li>
			</ul>
			<h5>What we provide ?</h5>
			<ul>
				<li>Full furniture</li>
				<li>Free Wi-fi</li>
				<li>News Papers</li>
				<li>Discussion Room</li>
				<li>RO Water</li>
				<li>Peacefull Environment</li>
			</ul>
		</div>		
		<div class="col-md-8" id="main_content">
		<img src = "image/library.jpg"alt="image" width="1000" height="600">
		</div>
	</div><br><br>
	<footer style=" background-color: whitesmoke;padding:20px;">
        <div class="container-fluid" id="footer">
            <div class="row">
			<div class="col-md-2 col-sm-3 col-xs-3">
			<!-- <img src = "image/library.jpg"alt="image" height="200" width="230"> -->
			</div>
                <div class="col-md-3 col-sm-3 col-xs-3">
                    <a href="#about"><span class="glyphicon glyphicon-user"></span>About</p></a>
                    <a href="#skill"><span class="glyphicon glyphicon-briefcase"></span>Skill</p></a>
                    <a href="#education"><span class="glyphicon glyphicon-chevron-left"></span>Education</p></a>
                    <a href="#certification"><span class="glyphicon glyphicon-certificate"></span>Certification</p></a>
                    <a href="#footer"><span class="glyphicon glyphicon-user"></span>Contact</p></a>
                </div>
                <div class="col-md-4 col-sm-3 col-xs-3"> 
                    <a href="https://github.com/ajaykumar776"><span class="glyphicon glyphicon-briefcase"></span>Github</p></a>
                </div>
                <div class="col-md-3 col-sm-3 col-xs-3">
                    <a href="#"><span class="glyphicon glyphicon-user"></span>Ajay-kumar</p></a>
                    <a href="#"><span class="glyphicon glyphicon-briefcase"></span>Developer</p></a>
                    <a href="#"><span class="glyphicon glyphicon-chevron-left"></span>7781031768</p></a>
                    <a href="#"><span class="glyphicon glyphicon-envelope"></span>Ajaykrdtg5@gmail.com</p></a>
                    <a href="#"><span class="glyphicon glyphicon-map-marker"></span> Bangalore,India</p></a>
                </div>

            </div>
        </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    </footer>
</body>
</html>