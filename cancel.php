<?php
include 'lock.php';
$connect = mysqli_connect('localhost','root','','studyportal');
if($connect->connect_error){
    echo "Connection Error:" .$connect->connect_error."<br/> <a href=books.php>Go Back </a> and retry!";
  }
$getinfo = "SELECT * from orders order by order_id desc limit 1";
$result = $connect->query($getinfo);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
      $id = $row['order_id'];
} }
else {
    echo "0 results";
}

$delete_1 = "DELETE from orders where order_id = '$id'";
$delete_2 = "DELETE from orders_items where order_id = '$id'";

if(($connect->query($delete_1) and $connect->query($delete_2)) === TRUE ){
    echo "Transaction cancelled successfully!<br/><a href=website.php>Click here</a> to go back!";
}

?>
