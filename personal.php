<?php
include('lock.php');
$query = $db->query("SELECT * FROM register where username = '$login_session'");

if($query->num_rows > 0){
    while($row = $query->fetch_assoc()){
        $name = $row['name'];
        $birth = $row['dob'];
        $gender = $row['gender'];
        $home = $row['address'];
        $contact = $row['contact'];
        $mail = $row['email'];
        $password = $row['password']; 
    }
}
?>
<html>
<head>
<style>
body {
  background: #252827;
  font-size: 16px;
}
p {
  font-weight: 300;
}
a {
  color: #6c6d6d;
  text-decoration: none;
  text-transform: uppercase;
  display: block;
  letter-spacing: .3em;
  font-size: .6em;
  font-weight: 400;
  background: #252727;
  padding: .3rem 1rem;
  margin: 1.9rem 0 0 0;
  float: right;
}
a:hover {
  color: white;
  background: #004ffc;
  border-bottom: .35em solid black;
}
strong {
  font-weight: 600;
}
h1 {
  font-family: 'Saira', sans-serif;
  letter-spacing: 1.5px;
  color: white;
  font-weight: 400;
  font-size: 2.4em;
}
#content {
  margin-top: 50px;
  text-align: center;
}
.timeline {
  border-left: 4px solid #004ffc;
  border-bottom-right-radius: 4px;
  border-top-right-radius: 4px;
  background: rgba(255,255,255,0.03);
  color: rgba(255,255,255,0.8);
  font-family: 'Chivo', sans-serif;
  margin: 50px auto;
  letter-spacing: 0.5px;
  position: relative;
  line-height: 1.4em;
  font-size: 1.03em;
  padding: 50px;
  list-style: none;
  text-align: left;
  font-weight: 100;
  max-width: 30%;
}
.timeline h1 {
  font-family: 'Saira', sans-serif;
  letter-spacing: 1.5px;
  font-weight: 100;
  font-size: 1.4em;
}
.timeline h2,
.timeline h3 {
  font-family: 'Saira', sans-serif;
  letter-spacing: 1.5px;
  font-weight: 400;
  font-size: 1.4em;
}
.timeline .field {
  border-bottom: 1px dashed rgba(255,255,255,0.1);
  padding-bottom: 25px;
  margin-bottom: 50px;
  position: relative;
}
.timeline .field:last-of-type {
  padding-bottom: 0;
  margin-bottom: 0;
  border: none;
}
.timeline .field:before,
.timeline .field:after {
  position: absolute;
  display: block;
  top: 0;
}
.timeline .field:before {
  left: -217.5px;
  color: rgba(255,255,255,0.4);
  content: attr(data);
  text-align: right;
  font-weight: 100;
  font-size: 0.9em;
  min-width: 120px;
  font-family: 'Saira', sans-serif;
}
.timeline .field:after {
  box-shadow: 0 0 0 4px #004ffc;
  left: -57.85px;
  background: #313534;
  border-radius: 50%;
  height: 11px;
  width: 11px;
  content: "";
  top: 5px;
}

</style>
</head>
<body>
<div id="content">
  <h1>Personal Information</h1>

  <ul class="timeline">
    <li class="field" data="Full Name">
      <h3><?php echo $name;?></h3>
    </li>
    <li class="field" data="Date of Birth">
      <h3><?php echo $birth;?></h3>    
    </li>
    <li class="field" data="Gender">
      <h3><?php echo $gender;?></h3>
      
    </li>
    <li class="field" data="Address">
      <h3><?php echo $home;?></h3>
    </li>
    <li class="field" data="Mobile">
      <h3><?php echo $contact;?></h3>
    </li>
    <li class="field" data="Email">
      <h3><?php echo $mail;?></h3>
    </li>
  </ul>
</div>
</body>
</html>