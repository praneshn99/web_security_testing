<?php
include('lock.php');
?>

<!DOCTYPE HTML>

<html>
	<head>
		<title>Courses</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<style>
		
.bg {
  animation:slide 3s ease-in-out infinite alternate;
  background-image: linear-gradient(-60deg, #6c3 50%, #09f 50%);
  bottom:0;
  left:-50%;
  opacity:.5;
  position:fixed;
  right:-50%;
  top:0;
  z-index:-1;
}

.bg2 {
  animation-direction:alternate-reverse;
  animation-duration:4s;
}

.bg3 {
  animation-duration:5s;
}

.content {
  background-color:rgba(255,255,255,.8);
  border-radius:.25em;
  box-shadow:0 0 .25em rgba(0,0,0,.25);
  box-sizing:border-box;
  left:50%;
  padding:10vmin;
  position:fixed;
  text-align:center;
  top:50%;
  transform:translate(-50%, -50%);
}

h1 {
  font-family:monospace;
}

@keyframes slide {
  0% {
    transform:translateX(-25%);
  }
  100% {
    transform:translateX(25%);
  }
}

.conatiner {
	width: 100%;
	height: 500px;
}
.wrap {
	display: -webkit-box;
	display: -ms-flexbox;
	display: flex;
	-ms-flex-wrap: wrap;
	    flex-wrap: wrap;
	-webkit-box-pack: center;
	    -ms-flex-pack: center;
	        justify-content: center;
	-webkit-box-align: center;
	    -ms-flex-align: center;
	        align-items: center;
	-webkit-box-orient: horizontal;
	-webkit-box-direction: normal;
	    -ms-flex-direction: row;
	        flex-direction: row;
}

.box {
	margin: 10px;
	width: 300px;
	height: 490px;
	text-align: center;
	border-radius: 3px;
	-webkit-transition: 200ms ease-in-out;
	-o-transition: 200ms ease-in-out;
	transition: 200ms ease-in-out;
	-webkit-box-shadow: 0 0 15px rgba(0,0,0,0.3);
	        box-shadow: 0 0 15px rgba(0,0,0,0.3);
}
.box:hover {
	margin-bottom: -10px;
	-webkit-box-shadow: 0 0 5px rgba(0,0,0,0.7);
	        box-shadow: 0 0 5px rgba(0,0,0,0.7);
}
.box h1 {
	color: #fff;
	padding: 30px;
	margin-top: 100px;
	text-align: center;
	font-weight: 100;
	font-size: 25px;
	background: rgba(0,0,0,0.8);
	-webkit-box-shadow: 0 0 30px rgba(0,0,0,0.7);
	        box-shadow: 0 0 30px rgba(0,0,0,0.8);
}

.date h4 {
	color: #fff;
	font-weight: 300;
	text-align: center;
	letter-spacing: 3px;
	text-shadow: 0 0 3px rgba(0,0,0,0.9);
}
.poster {
	width: 130px;
	height:130px;
	margin: 120px auto;
	position: relative;
	border-radius: 100px;
}
.poster h4 {
	top: 16px;
	color: #fff;
	position: relative;
	font-size: 80px;
	text-align: center;
	font-weight: 100;
}
.one {
	background:yellow;
	background-repeat: no-repeat;
	background-size: cover;
	background-position: center;
}

.two {
	background: yellow;
	background-repeat: no-repeat;
	background-size: cover;
	background-position: center;
}
.three {
	background: yellow;
	background-repeat: no-repeat;
	background-size: cover;
	background-position: center;
}

.five {
	background: yellow;
	background-repeat: no-repeat;
	background-size: cover;
	background-position: center;
}
.six {
	background: yellow;
	background-repeat: no-repeat;
	background-size: cover;
	background-position: center;
}

/* POSTER*/
.p1 {
	background: #2b5876;  /* fallback for old browsers */
	background: -webkit-linear-gradient(to right, #4e4376, #2b5876);  /* Chrome 10-25, Safari 5.1-6 */
	background: -webkit-gradient(linear, left top, right top, from(#4e4376), to(#2b5876));
	background: -webkit-linear-gradient(left, #4e4376, #2b5876);
	background: -o-linear-gradient(left, #4e4376, #2b5876);
	background: linear-gradient(to right, #4e4376, #2b5876); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
	-webkit-box-shadow: 0 0 20px darkblue;
	        box-shadow: 0 0 20px darkblue;
}

.p2 {
	background: #f857a6;  /* fallback for old browsers */
	background: -webkit-linear-gradient(to right, #ff5858, #f857a6);  /* Chrome 10-25, Safari 5.1-6 */
	background: -webkit-gradient(linear, left top, right top, from(#ff5858), to(#f857a6));
	background: -webkit-linear-gradient(left, #ff5858, #f857a6);
	background: -o-linear-gradient(left, #ff5858, #f857a6);
	background: linear-gradient(to right, #ff5858, #f857a6); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
	-webkit-box-shadow: 0 0 20px #fa3380;
	        box-shadow: 0 0 20px #fa3380;
}

.p3 {
	background: #4776E6;  /* fallback for old browsers */
	background: -webkit-linear-gradient(to right, #8E54E9, #4776E6);  /* Chrome 10-25, Safari 5.1-6 */
	background: -webkit-gradient(linear, left top, right top, from(#8E54E9), to(#4776E6));
	background: -webkit-linear-gradient(left, #8E54E9, #4776E6);
	background: -o-linear-gradient(left, #8E54E9, #4776E6);
	background: linear-gradient(to right, #8E54E9, #4776E6); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
	-webkit-box-shadow: 0 0 20px lightblue;
	        box-shadow: 0 0 20px lightblue;
}

.p4 {
	background: #1FA2FF;  /* fallback for old browsers */
	background: -webkit-linear-gradient(to right, #A6FFCB, #12D8FA, #1FA2FF);  /* Chrome 10-25, Safari 5.1-6 */
	background: -webkit-gradient(linear, left top, right top, from(#A6FFCB), color-stop(#12D8FA), to(#1FA2FF));
	background: -webkit-linear-gradient(left, #A6FFCB, #12D8FA, #1FA2FF);
	background: -o-linear-gradient(left, #A6FFCB, #12D8FA, #1FA2FF);
	background: linear-gradient(to right, #A6FFCB, #12D8FA, #1FA2FF); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
	-webkit-box-shadow: 0 0 20px skyblue;
	        box-shadow: 0 0 20px skyblue;
}


.p5 {
	background: #AA076B;  /* fallback for old browsers */
	background: -webkit-linear-gradient(to right, #61045F, #AA076B);  /* Chrome 10-25, Safari 5.1-6 */
	background: -webkit-gradient(linear, left top, right top, from(#61045F), to(#AA076B));
	background: -webkit-linear-gradient(left, #61045F, #AA076B);
	background: -o-linear-gradient(left, #61045F, #AA076B);
	background: linear-gradient(to right, #61045F, #AA076B); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
	-webkit-box-shadow: 0 0 20px purple;
	        box-shadow: 0 0 20px purple;
}

		</style>
	</head>
	<body class="subpage">

			<div class="bg"></div>
			<div class="bg bg2"></div>
			<div class="bg bg3"></div>
			
				  
		<!-- Header -->
			<header id="header">
				<div class="logo"><a href="website.php">Knowledge<span>HUB</span></a></div>
				<a href="#menu">Menu</a>
			</header>

		<!-- Nav -->
			<nav id="menu">
				<ul class="links">
					<li><a href="website.php">Home</a></li>
					<li><a href="courses.php">Courses</a></li>
					<li><a href="faculty.php">Faculty</a></li>
                    <li><a href="books.php">Study Material</a></li>
					<li><a href="dashboard.php"><?php echo $login_session;?></a></li>
					<li><a href="contact.php">Contact Us</a></li>
				<li><a href="logout.php">Logout</a></li>			</ul>
			</nav>

		<!-- Main -->
			<div id="main">

				<!-- Section -->
					<section class="wrapper">
						<div class="inner">
							<header class="align-center">
								<h1>Courses</h1>
							</header>
							<div class="flex flex-2">
								<div class="conatiner">
									<div class="wrap">
										<div class="box one">
											<h1><a href="course1.php">Course 1</a></h1>
											<div class="poster p1">
												<h4>C1</h4>
											</div>
										</div>
										<div class="box two">
											<H1><a href = "course2.php">Course 2</a></H1>
											<div class="poster p2">
												<h4>C2</h4>
											</div>
										</div>
										
										<div class="box three">
											<h1><a href = "course3.php">Course 3</a></h1>
											<div class="poster p3">
												<h4>C3</h4>
											</div>
										</div>
										
										<div class="box five">
											<h1><a href="course4.php">Course 4</a></h1>
											<div class="poster p4">
												<h4>C4</h4>
											</div>
										</div><br/>
										
										<div class="box six">
											<h1><a href="course5.php">Course 5</a></h1>
											<div class="poster p5">
												<h4>C5</h4>
											</div>
										</div><br/>
									</div>
									</div>
									
								</div>
							</div>
						</div>
					</section>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>