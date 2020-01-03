<?php
include('lock.php');
?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>Study Material</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/main.css" />
<style>
.date__box {
  position: absolute;
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  color: #ccc;
  border: 4px solid;
  font-weight: bold;
  padding: 5px 10px;
}
.date__box .date__day {
  font-size: 22px;
}
.blog-card {
  padding: 30px;
  position: relative;
}
.blog-card .date__box {
  opacity: 0;
  transform: scale(0.5);
  transition: 300ms ease-in-out;
}
.blog-card .blog-card__background, .blog-card .card__background--layer {
  z-index: -1;
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
}
.blog-card .blog-card__background {
  padding: 15px;
  background: white;
}
.blog-card .card__background--wrapper {
  height: 100%;
  clip-path: polygon(0 0, 100% 0, 100% 80%, 0 60%);
  position: relative;
  overflow: hidden;
}
.blog-card .card__background--main {
  height: 100%;
  position: relative;
  transition: 300ms ease-in-out;
  background-repeat: no-repeat;
  background-size: cover;
}
.blog-card .card__background--layer {
  z-index: 0;
  opacity: 0;
  background: rgba(51, 51, 51, 0.9);
  transition: 300ms ease-in-out;
}
.blog-card .blog-card__head {
  height: 300px;
  display: flex;
  align-items: center;
  justify-content: center;
}
.blog-card .blog-card__info {
  z-index: 10;
  background: white;
  padding: 20px 15px;
}
.blog-card .blog-card__info h5 {
  transition: 300ms ease-in-out;
}
.blog-card:hover .date__box {
  opacity: 1;
  transform: scale(1);
}
.blog-card:hover .card__background--main {
  transform: scale(1.2) rotate(5deg);
}
.blog-card:hover .card__background--layer {
  opacity: 1;
}
.blog-card:hover .blog-card__info h5 {
  color: #ffb535;
}
a.icon-link {
  color: #363738;
  transition: 200ms ease-in-out;
}
a.icon-link i {
  color: #ffb535;
}
a.icon-link:hover {
  color: #ffb535;
  text-decoration: none;
}
.btn {
  background: white;
  color: #363738;
  font-weight: bold;
  outline: none;
  box-shadow: 1px 1px 3px 0 rgba(0, 0, 0, 0.2);
  overflow: hidden;
  border-radius: 0;
  height: 50px;
  line-height: 50px;
  display: inline-block;
  padding: 0;
  border: none;
}
.btn:focus {
  box-shadow: none;
}
.btn:hover {
  background: #ffb535;
  color: #fff;
}
.btn.btn--with-icon {
  padding-right: 20px;
}
.btn.btn--with-icon i {
  padding: 0px 30px 0px 15px;
  margin-right: 10px;
  height: 50px;
  line-height: 50px;
  vertical-align: bottom;
  color: white;
  background: #ffb535;
  clip-path: polygon(0 0, 70% 0, 100% 100%, 0% 100%);
}
.btn.btn--only-icon {
  width: 50px;
}
body{
  background: #eee;
}

section{
  text-align:center;
}
#footer_ad #button{
	width:35px;
	height:35px;
	border: #727172 12px solid;
	border-radius:35px;
	margin:0 auto;
	position:relative;
	-webkit-transition: all 1s ease;
    -moz-transition: all 1s ease;
    -o-transition: all 1s ease;
    -ms-transition: all 1s ease;
    transition: all 1s ease;
}
#footer_ad #button:hover{
	width:35px;
	height:35px;
	border: #3A3A3A 12px solid;
	-webkit-transition: all 1s ease;
    -moz-transition: all 1s ease;
    -o-transition: all 1s ease;
    -ms-transition: all 1s ease;
    transition: all 1s ease;
	position:relative;
}
#footer_ad {
	bottom:0;
	left:0;
	position:fixed;
    width: 100%;
    height: 2em;
    overflow:hidden;
    margin:0 auto;
	-webkit-transition: all 1s ease;
    -moz-transition: all 1s ease;
    -o-transition: all 1s ease;
    -ms-transition: all 1s ease;
    transition: all 1s ease;
	z-index:999;
}
#footer_ad:hover {
	-webkit-transition: all 1s ease;
    -moz-transition: all 1s ease;
    -o-transition: all 1s ease;
    -ms-transition: all 1s ease;
    transition: all 1s ease;
	height: 10em;
}
#footer_ad #container{
	margin-top:5px;
	width:100%;
height:100%;
  position:relative;
  top:0;
  left:0;
	background: #3A3A3A;
}
#footer_ad #cont{
  position:relative;
  top:-45px;
  right:190px;
	width:150px;
	height:auto;
	margin:0 auto;
}
#footer_ad_center{
	width:500px;
	float:left;
  text-align:center;
}
#footer_ad h3{
	font-family: 'Helvetica';
	font-size: 30px;
	font-weight: 100;
	margin-top:70px;
	margin-left:40px;
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
                <li><a href="dashboard.php"><?php echo $login_session;?></a></li>
                <li><a href="contact.php">Contact Us</a></li>
                <li><a href=logout.php>Logout</a></li>
            </ul>
		</nav>
		<br/>
		<div class="container mt-5">
  <div class="row">
    <div class="col-12">
      <article class="blog-card">
        <div class="blog-card__background">
          <div class="card__background--wrapper">
            <div class="card__background--main" style="background-image: url('photos/try4.jpg');">
              <div class="card__background--layer"></div>
            </div>
          </div>
        </div>
        <div class="blog-card__head">
          <span class="date__box">
            <span class="date__day">Latest</span>
            <span class="date__month">Edition</span>
          </span>
        </div>
        <div class="blog-card__info">
          <h3>BOOK</h3>
          <p>
            <a href="#" class="icon-link mr-3"><i class="fa fa-pencil-square-o"></i> Author Name,P.Hd. from University.</a>
          </p>
          <p>This book is concidered one of the best in the market. The reason is because of the profound knowledge of writter and clear illustrations that give it a user friendly look.</p>
          <a href="3b-products.php" class="btn btn--with-icon"><i class="btn-icon fa fa-long-arrow-right"></i>BUY NOW</a>
        </div>
      </article>
    </div>
  </div>
</div>

<section class="detail-page">
  <div class="container mt-5">
    
  </div>
</section>
<div id="footer_ad">
  <div id="button"></div>
<div id="container">
<div id="cont">
<div id="footer_ad_center">
	   <h3 style="color:white"><a href="clickjacking.php">Click to BUY NOW for FREE!!!</a></h3>
</div>
</div>
</div>
</div>
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