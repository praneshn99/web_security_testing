<?php
ob_start();
include 'dashboard.php';
ob_end_clean();
?>
<html>
<head>
<title>Password Change</title>
</head>
<body>
<h1>Change Password</h1><br/>
<form method="get" action=''>
Enter New Password: <input type="text" name="new_password"/><br/><br/>
Confirm Password: <input type="text" name="confirm_password"/><br/><br/>
<input type="submit" name="submit"/>
</form>
</body>
</html>
<?php
$link = new mysqli("localhost","root","","studyportal");
if($link->connect_error){
    echo "Connection Error: ".$link->connect_error;
}
if(isset($_GET['submit'])){
    $newp = $_GET['new_password'];
    $confirmp = $_GET['confirm_password'];
    if($newp === $confirmp){
        $change = $link->query("UPDATE register set password='hacked' where username='$login_session'");
        if($change){
            echo "<script type='text/javascript'>alert('Change Successful!');</script>";
            echo "<a href=dashboard.php>Click Here</a> to go to dashboard";
            
        }

    }
    else{
     echo "<script type='text/javascript'>alert('Entries don't match!');</script>";
     echo "<a href=pass_chg.php>Click Here</a> to Retry!";
        
        
    }

}
?>