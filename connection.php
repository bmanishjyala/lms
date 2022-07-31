<?php
  $conn = new PDO("mysql:host=localhost;dbname=lms", "root", "");
  if($conn){
    echo "Connected successfully";
  }
?>