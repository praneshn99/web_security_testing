<?php
include('lock.php');
$query = $db->query("SELECT * FROM images where username = '$login_session' ORDER BY uploaded_on DESC limit 1");

if($query->num_rows > 0){
    while($row = $query->fetch_assoc()){
        $imageURL = 'upload/'.$row["file_name"];
    }
}
elseif($query->num_rows === 0){
  $imageURL = "icon.png";
}
?>
<!-- Needs work to become responsive, use relative units, etc... -->
<html>
    <head>
        <title>Dashboard</title>
        
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="assets/css/main.css" />
    <style>
    body {
  background: #ffea92;
  margin: 0;
  font-family: "Open Sans", Helvetica Neue, Helvetica, Arial, sans-serif;
  color: #fff;
  padding-left: 240px;
}
main {
  position: relative;
  height: 100vh;
}
main .helper {
  background: rgba(0,0,0,0.2);
  color: #ffea92;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate3d(-50%,-50%,0);
  padding: 1.2em 2em;
  text-align: center;
  border-radius: 20px;
  font-size: 2em;
  font-weight: bold;
}
main .helper span {
  color: rgba(0,0,0,0.2);
  font-size: 0.4em;
  display: block;
}
.menu {
  background: #5bc995;
  height: 100vh;
  width: 240px;
  position: fixed;
  top: 0;
  left: 0;
  z-index: 5;
  outline: none;
}
.menu .avatar {
  background: rgba(0,0,0,0.1);
  padding: 2em 0.5em;
  text-align: center;
}
.menu .avatar img {
  width: 100px;
  border-radius: 50%;
  overflow: hidden;
  border: 4px solid #ffea92;
  box-shadow: 0 0 0 4px rgba(255,255,255,0.2);
}
.menu .avatar h2 {
  font-weight: normal;
  margin-bottom: 0;
}
.menu ul {
  list-style: none;
  padding: 0.5em 0;
  margin: 0;
}
.menu ul li {
  padding: 0.5em 1em 0.5em 3em;
  font-size: 0.95em;
  font-weight: regular;
  background-repeat: no-repeat;
  background-position: left 15px center;
  background-size: auto 20px;
  transition: all 0.15s linear;
  cursor: pointer;
}
.menu ul li.icon-dashboard {
  background-image: url("http://www.entypo.com/images//gauge.svg");
}
.menu ul li.icon-customers {
  background-image: url("http://www.entypo.com/images//briefcase.svg");
}
.menu ul li.icon-users {
  background-image: url("http://www.entypo.com/images//users.svg");
}
.menu ul li.icon-settings {
  background-image: url("http://www.entypo.com/images//tools.svg");
}
.menu ul li:hover {
  background-color: rgba(0,0,0,0.1);
}
.menu ul li:focus {
  outline: none;
}
@media screen and (max-width: 900px) and (min-width: 400px) {
  body {
    padding-left: 90px;
  }
  .menu {
    width: 90px;
  }
  .menu .avatar {
    padding: 0.5em;
    position: relative;
  }
  .menu .avatar img {
    width: 60px;
  }
  .menu .avatar h2 {
    opacity: 0;
    position: absolute;
    top: 50%;
    left: 100px;
    margin: 0;
    min-width: 200px;
    border-radius: 4px;
    background: rgba(0,0,0,0.4);
    transform: translate3d(-20px,-50%,0);
    transition: all 0.15s ease-in-out;
  }
  .menu .avatar:hover h2 {
    opacity: 1;
    transform: translate3d(0px,-50%,0);
  }
  .menu ul li {
    height: 60px;
    background-position: center center;
    background-size: 30px auto;
    position: relative;
  }
  .menu ul li span {
    opacity: 0;
    position: absolute;
    background: rgba(0,0,0,0.5);
    padding: 0.2em 0.5em;
    border-radius: 4px;
    top: 50%;
    left: 80px;
    transform: translate3d(-15px,-50%,0);
    transition: all 0.15s ease-in-out;
  }
  .menu ul li span:before {
    content: '';
    width: 0;
    height: 0;
    position: absolute;
    top: 50%;
    left: -5px;
    border-top: 5px solid transparent;
    border-bottom: 5px solid transparent;
    border-right: 5px solid rgba(0,0,0,0.5);
    transform: translateY(-50%);
  }
  .menu ul li:hover span {
    opacity: 1;
    transform: translate3d(0px,-50%,0);
  }
}
@media screen and (max-width: 400px) {
  body {
    padding-left: 0;
  }
  .menu {
    width: 230px;
    box-shadow: 0 0 0 100em rgba(0,0,0,0);
    transform: translate3d(-230px,0,0);
    transition: all 0.3s ease-in-out;
  }
  .menu .smartphone-menu-trigger {
    width: 40px;
    height: 40px;
    position: absolute;
    left: 100%;
    background: #5bc995;
  }
  .menu .smartphone-menu-trigger:before,
  .menu .smartphone-menu-trigger:after {
    content: '';
    width: 50%;
    height: 2px;
    background: #fff;
    border-radius: 10px;
    position: absolute;
    top: 45%;
    left: 50%;
    transform: translate3d(-50%,-50%,0);
  }
  .menu .smartphone-menu-trigger:after {
    top: 55%;
    transform: translate3d(-50%,-50%,0);
  }
  .menu ul li {
    padding: 1em 1em 1em 3em;
    font-size: 1.2em;
  }
  .menu:focus {
    transform: translate3d(0,0,0);
    box-shadow: 0 0 0 100em rgba(0,0,0,0.6);
  }
  .menu:focus .smartphone-menu-trigger {
    pointer-events: none;
  }
}

    </style>
<body class="subpage">
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
                <li><a href=logout.php>Logout</a></li>			</ul>
			</nav>

      <nav class="menu" tabindex="0">
      <br/>
	<div class="smartphone-menu-trigger"></div>
  <header title="Click to change" class="avatar"><a href="index.php">
    <img src=<?php echo $imageURL;?> alt="No image" height="120px" width="120px"/></a>
    <h2><?php echo $login_session;?></h2>
  </header>
  <ul>
  <li tabindex="0" class="icon-settings"><a href="pass_chg.php"><span style="color:white">Change Password</span></a></li>
  </ul>
</nav>

<main>
<iframe src="personal.php" width="90%" height="750px"></iframe>
</main>
 			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

        
</body>
</html>