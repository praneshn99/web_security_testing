<?php
// Include the database configuration file
include 'lock.php';

// Get images from the database
$query = $db->query("SELECT * FROM images ORDER BY uploaded_on DESC limit 1");

if($query->num_rows > 0){
    while($row = $query->fetch_assoc()){
        $imageURL = 'upload/'.$row["file_name"];
    }
}
?>