<?php
// Include the database configuration file
include 'lock.php';
$statusMsg = '';

// File upload path
$targetDir = "upload/";
$fileName = basename($_FILES["file"]["name"]);
$targetFilePath = $targetDir . $fileName;
$fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);

if(isset($_POST["submit"]) && !empty($_FILES["file"]["name"])){
    // Allow certain file formats. php is intentionally inserted in the array for uploading the shell
    $allowTypes = array('jpg','png','jpeg','gif','pdf','php');
    if(in_array($fileType, $allowTypes)){
        // Upload file to server
        if(move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath)){
            // Insert image file name into database
            $insert = $db->query("INSERT into images (file_name, uploaded_on,username) VALUES ('".$fileName."', NOW(),'$login_session')");
            if($insert){
                $statusMsg = "The file ".$fileName. " has been uploaded successfully.<br/><a href=dashboard.php>Click Here</a> to  go back to Dashboard";
            }else{
                $statusMsg = "File upload failed, please try again<br/><a href=dashboard.php>Click Here</a> to  go back to Dashboard.";
            } 
        }else{
            $statusMsg = "Sorry, there was an error uploading your file.<br/><a href=dashboard.php>Click Here</a> to  go back to Dashboard";
        }
    }else{
        $statusMsg = 'Invalid file format.<br/><a href=dashboard.php>Click Here</a> to  go back to Dashboard';
    }
}else{
    $statusMsg = 'Please select a file to upload.<br/><a href=dashboard.php>Click Here</a> to  go back to Dashboard';
}

// Display status message
echo $statusMsg;
?>