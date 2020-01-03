<?php
include('lock.php');
?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>Faculty</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<style>
/*PEN STYLES*/
* {
  box-sizing: border-box;
}
.blog-card {
  display: flex;
  flex-direction: column;
  margin: 1rem auto;
  box-shadow: 0 3px 7px -1px rgba(0, 0, 0, .1);
  margin-bottom: 1.6%;
  background: #fff;
  line-height: 1.4;
  font-family: sans-serif;
  border-radius: 5px;
  overflow: hidden;
  z-index: 0;
}
.blog-card a {
  color: inherit;
}
.blog-card a:hover {
  color: #5ad67d;
}
.blog-card:hover .photo {
  transform: scale(1.3) rotate(3deg);
}
.blog-card .meta {
  position: relative;
  z-index: 0;
  height: 200px;
}
.blog-card .photo {
  position: absolute;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
  background-size: cover;
  background-position: center;
  transition: transform 0.2s;
}
.blog-card .details, .blog-card .details ul {
  margin: auto;
  padding: 0;
  list-style: none;
}
.blog-card .details {
  position: absolute;
  top: 0;
  bottom: 0;
  left: -100%;
  margin: auto;
  transition: left 0.2s;
  background: rgba(0, 0, 0, .6);
  color: #fff;
  padding: 10px;
  width: 100%;
  font-size: 0.9rem;
}
.blog-card .details a {
  text-decoration: dotted underline;
}
.blog-card .details ul li {
  display: inline-block;
}
.blog-card .details .author:before {
  font-family: FontAwesome;
  margin-right: 10px;
  content: "\f007";
}
.blog-card .details .date:before {
  font-family: FontAwesome;
  margin-right: 10px;
  content: "\f133";
}
.blog-card .details .tags ul:before {
  font-family: FontAwesome;
  content: "\f02b";
  margin-right: 10px;
}
.blog-card .details .tags li {
  margin-right: 2px;
}
.blog-card .details .tags li:first-child {
  margin-left: -4px;
}
.blog-card .description {
  padding: 1rem;
  background: #fff;
  position: relative;
  z-index: 1;
}
.blog-card .description h1, .blog-card .description h2 {
  font-family: Poppins, sans-serif;
}
.blog-card .description h1 {
  line-height: 1;
  margin: 0;
  font-size: 1.7rem;
}
.blog-card .description h2 {
  font-size: 1rem;
  font-weight: 300;
  text-transform: uppercase;
  color: #a2a2a2;
  margin-top: 5px;
}
.blog-card .description .read-more {
  text-align: right;
}
.blog-card .description .read-more a {
  color: #5ad67d;
  display: inline-block;
  position: relative;
}
.blog-card .description .read-more a:after {
  content: "\f061";
  font-family: FontAwesome;
  margin-left: -10px;
  opacity: 0;
  vertical-align: middle;
  transition: margin 0.3s, opacity 0.3s;
}
.blog-card .description .read-more a:hover:after {
  margin-left: 5px;
  opacity: 1;
}
.blog-card p {
  position: relative;
  margin: 1rem 0 0;
}
.blog-card p:first-of-type {
  margin-top: 1.25rem;
}
.blog-card p:first-of-type:before {
  content: "";
  position: absolute;
  height: 5px;
  background: #5ad67d;
  width: 35px;
  top: -0.75rem;
  border-radius: 3px;
}
.blog-card:hover .details {
  left: 0%;
}
@media (min-width: 640px) {
  .blog-card {
    flex-direction: row;
    max-width: 700px;
  }
  .blog-card .meta {
    flex-basis: 40%;
    height: auto;
  }
  .blog-card .description {
    flex-basis: 60%;
  }
  .blog-card .description:before {
    transform: skewX(-3deg);
    content: "";
    background: #fff;
    width: 30px;
    position: absolute;
    left: -10px;
    top: 0;
    bottom: 0;
    z-index: -1;
  }
  .blog-card.alt {
    flex-direction: row-reverse;
  }
  .blog-card.alt .description:before {
    left: inherit;
    right: -10px;
    transform: skew(3deg);
  }
  .blog-card.alt .details {
    padding-left: 25px;
  }
}
.text {
  display: flex;
  justify-content: center;
  margin-top: 5vh;
  transform: translateY(-50%);
  text-align: center;
  transition: transform 0.3s ease-in-out;
  font-size: 500%
}
.text:hover {
  transform: rotateX(35deg), translateY(-50%);
}
.text:hover span {
  color: #ccc;
}
.text:hover span:nth-child(odd) {
  transform: skewY(15deg);
}
.text:hover span:nth-child(even) {
  transform: skewY(-15deg);
  background-color: black;
  color:white;
  font-weight: bold;
}

.text:hover span:nth-child(odd) {
  background-color:white;
  color:black;
  font-weight: bold;
}
.text > span {
  display: block;
  background-color: #fff;
  width: 120px;
  height: 120px;
  line-height: 120px;
  transition: transform 0.3s ease-in-out, color 0.3s ease-in-out, background-color 0.3s ease-in-out;
  box-shadow: 0 40px 50px rgba(0, 0, 0, 0.1);
}
.text > span:first-child {
  border-radius: 5px 0 0 5px;
}
body {
	width: 100wh;
	height: 90vh;
	background: linear-gradient(-45deg, #EE7752, #E73C7E, #23A6D5, #23D5AB);
	background-size: 400% 400%;
	-webkit-animation: Gradient 15s ease infinite;
	-moz-animation: Gradient 15s ease infinite;
	animation: Gradient 15s ease infinite;
}

@-webkit-keyframes Gradient {
	0% {
		background-position: 0% 50%
	}
	50% {
		background-position: 100% 50%
	}
	100% {
		background-position: 0% 50%
	}
}

@-moz-keyframes Gradient {
	0% {
		background-position: 0% 50%
	}
	50% {
		background-position: 100% 50%
	}
	100% {
		background-position: 0% 50%
	}
}

@keyframes Gradient {
	0% {
		background-position: 0% 50%
	}
	50% {
		background-position: 100% 50%
	}
	100% {
		background-position: 0% 50%
	}
}

		</style>
		</head>	
	<body class="subpage">

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
        <li><a href="dashboard.php"><?php echo $login_session;?>
        <li><a href="contact.php">Contact Us</a></li>
        <li><a href="logout.php">Logout</a></li>
			</ul>
		</nav>

		<!-- Main -->
			<div id="main">

				<!-- Section -->
					<section class="wrapper">
						<div class="inner">
							<header class="align-center">
								<div class="text">
									<span>F</span>
									<span>A</span>
									<span>C</span>
									<span>U</span>
									<span>T</span>
									<span>Y</span>
								  </div>
							</header>		
							<div class="blog-card">
								<div class="meta">
								  <div class="photo" style="background-image: url(images/faculty.jpg)"></div>
								  <ul class="details">
									<li class="author">For Course 1 and Course 2</li>
								  </ul>
								</div>
								<div class="description">
								  <h1>Faculty 1</h1>
                  <p> Vast experience inthe field of education with high honors. One of the best in the country with great knowledge.</p>
                  <p class="read-more">
									<a href="faculty1.php">Read More</a>
								  </p>
								</div>
							  </div>
							  <div class="blog-card alt">
								<div class="meta">
								  <div class="photo" style="background-image: url(images/faculty1.jpg)"></div>
								  <ul class="details">
									<li class="author">For Course 3</li>
								  </ul>
								</div>
								<div class="description">
                  <h1>Faculty 2</h1>
                  <p> Vast experience inthe field of education with high honors. One of the best in the country with great knowledge.</p>
    
                  <p class="read-more">
									<a href="faculty2.php">Read More</a>
								  </p>
								</div>
							  </div>
							  <div class="blog-card">
								<div class="meta">
								  <div class="photo" style="background-image: url(images/faculty2.jpg)"></div>
								  <ul class="details">
									<li class="author">For Course 4 and Course 5</li>
								  </ul>
								</div>
								<div class="description">
								  <h1>Faculty 3</h1>
								  <p> Vast experience inthe field of education with high honors. One of the best in the country with great knowledge.</p>								  <p class="read-more">
									<a href="faculty3.php">Read More</a>
								  </p>
								</div>
							  </div>
						</div>
          </section>
          
          


				<!-- Section -->
					
		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>