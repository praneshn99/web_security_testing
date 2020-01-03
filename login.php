<?php
include('config.php');
session_start();
if(isset($_POST['submit'])){
    $user = $_POST['user'];
    $pass = $_POST['password'];
    //To avoid majority of sql injections, we can simply add mysqli_real_escape_string which automatically strips down any inappropriate entry
    /*
    $user = mysqli_real_escape_string($db,$_POST['user']);
    $pass = mysqli_real_escape_string($db,$_POST['password']);*/
    //This program below allows sql injection as the fetch query only works as a boolean
    $link = mysqli_query($db,"SELECT * from register where username = '$user'") ;
    $row = mysqli_fetch_array($link);

    if(($user = $row['username'])){
        header("Location:website.php");
        $_SESSION['login_user'] = $user;
        }
    else{
        echo "<a href=login.html>Go back</a> and retry!";
    }
}
//The below code is secured from sql injection as it counts and tags its entries, overcoming the boolean disadvantage
/*

    $sql = "SELECT * from register where username = '$user'" ;
    $result=mysqli_query($db,$sql);
    $row=mysqli_fetch_array($result,MYSQLI_ASSOC);
    $active=$row['active'];
    if(!$active){
        echo "Invalid Entry";
    }

    $count=mysqli_num_rows($result);

    if(($count === 1)){
        header("Location:website.php");
        $_SESSION['login_user'] = $user;
        }
    else{
        echo "<a href=login.html>Go back</a> and retry!";
    }
}
*/
?>