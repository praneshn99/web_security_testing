	
<?php
  define('SERVER', 'localhost');
  define('USERNAME', 'root');
  define('PASSWORD', '');
  define('DATABASE', 'studyportal');
  $db = mysqli_connect(SERVER,USERNAME,PASSWORD,DATABASE);
  if (!$db) {
    die("Connection failed: " . mysqli_connect_error());
}
  ?>