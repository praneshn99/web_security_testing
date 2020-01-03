<?php
include 'lock.php';
$money = $_SESSION['net_amount'];
$id = $_SESSION['cust_id'];
$connection = mysqli_connect("localhost","root","","studyportal");

if($connection->connect_error){
  echo "Connection Error:" .$connection->connect_error."<br/> <a href=books.php>Go Back </a> and retry!";
}
?>
<html>
<head>
<title>Wait...</title>
<style>
</style>
</head>
<body>
<form method="post" action="">
<h1>Payment Confirmation</h1>
<br/>
Amount to be paid: <?php echo $money;?><br/>
<input type="hidden" name="cc_debit" value=<?php echo ($money);?>/>
<!-- Below code line will secure payment --> 
<!--<input type="hidden" name="cc_debit" value=<?php echo md5($money);?>/>-->
<input type="submit" name="complete" value="PAY NOW!"/>
</form>
<h2>OR</h2><br/>
<a href="cancel.php">Cancel Order</a>
</body>
</html>
<?php
if(isset($_POST['complete'])){
   
$actual_amt = $_POST['cc_debit'];
  $get = "SELECT * from orders order by order_date desc limit 1";
  
  $result = $connection->query($get);
  
  if ($result->num_rows > 0) {
      // output data of each row
      while($row = $result->fetch_assoc()) {
        $id = $row['order_id'];
  } }
  else {
      echo "0 results";
  }
  $sql = "INSERT into payment(order_id,total_amount,customer) values ('$id','$actual_amt','$login_session')";
  
  if($connection->query($sql)=== TRUE){
    header("Location:thank.php");
  }
  else{
    echo "ERROR!<a href=books.php>Click here</a> to go back and retry!";
  }
  }

?>